<?php
////////////////////////////////////////////////////////////////////////////////
//
//  University of New Mexico - School Year 2014 - 2015
//  Senior Design Project - Solar Image Collaboration
//
//  CARINA - Collaborative Solar Imaging Annotation
//
//  Sponsor - Professor Pattichis
//
//  Team - Patrick Lopez PM, Conner Dolan, Edward Sadzewicz, 
//         Cody Shell, Jaclynn Wakley
//
////////////////////////////////////////////////////////////////////////////////
//
//  Module:  tools/dbInterface.php
//
//  Purpose: Database Interface - Store and Retrieve Data
//
////////////////////////////////////////////////////////////////////////////////

//  sesssion_start();  Includes global variables for user information
session_start();
include('../config/config.php');
include_once('../config/lang_config.php');
include_once('../translations/' . $lang_file);
require_once 'jsonString2Obj.php';

// CARINA Database tbl_solar_image_data
$User_ID = $_SESSION['user_id'];

// OLD hard coded for development & testing
//$Image_Location = "images/testing/20111215_002729_512_0335.jpg";

// Establish connection to database
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die(mysql_error());

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (isset($_POST['HOLE_ID'])) {
  $ImageFileName = $_POST['IMAGE_FILE_NAME'];
  $HoleNumberID = $_POST['HOLE_ID'];
  $annots_x_NORM = jsonString2Obj($_POST['ANNOTS_X_NORM']);
  $annots_y_NORM = jsonString2Obj($_POST['ANNOTS_Y_NORM']);
  $annots_x_PIXEL = jsonString2Obj($_POST['ANNOTS_X_PIXEL']);
  $annots_y_PIXEL = jsonString2Obj($_POST['ANNOTS_Y_PIXEL']);
  $PixelsX = $_POST['PIXELS_X'];
  $PixelsY = $_POST['PIXELS_Y'];
  $sql = "INSERT INTO tbl_solar_image_data (sid_UserKeyID,sid_SrcImgSize, "
        . "sid_SrcImgPixelsX, sid_SrcImgPixelsY, sid_SrcImgLocation )"
        . " VALUES ($User_ID, '999', $PixelsX, $PixelsY, '$ImageFileName');";

  $sql .= "INSERT INTO tbl_coronal_hole_annotations ( cha_SolarImageDataKeyID, cha_ImageLocation, cha_CoronalHoleNumber, cha_PointID,"
       . "cha_XCoordinate_NORM, cha_YCoordinate_NORM, cha_XCoordinate_PIXEL, cha_YCoordinate_PIXEL ) VALUES ";

  $PointID = 1;

  foreach( $annots_x_NORM as $index => $x) {
    $sql .= "(last_insert_id(),'$ImageFileName','".$HoleNumberID."','".$PointID."','".$x."','".$annots_y_NORM[$index]."',"
            . "'".$annots_x_PIXEL[$index]."','".$annots_y_PIXEL[$index]."'),";
    $PointID += 1;
  }
  $sql_trim = substr($sql, 0, -1);
  $result = mysqli_multi_query($con,$sql_trim);
  
}

if (isset($_GET['IMAGE_FILE_NAME'])) {
  $ImageFileName = ($_GET['IMAGE_FILE_NAME']);
  $NumberOfPoints = 0;
  $ANNOTS_X_PIXEL = [];
  $ANNOTS_Y_PIXEL = [];
  
    
  $sql = "SELECT cha_XCoordinate_PIXEL,
                  cha_YCoordinate_PIXEL
           FROM   tbl_coronal_hole_annotations 
           WHERE cha_ImageLocation ='$ImageFileName'"; 
  $result = mysqli_query($con,$sql); 
  if (!$result) {
    die('Invalid query: ' . mysql_error());
  }

  while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
     
    $ANNOTS_X_PIXEL[] = $row[0];
    $ANNOTS_Y_PIXEL[] = $row[1];
    $NumberOfPoints ++;
  }
  $data0['NumberOfPoints'] = $NumberOfPoints;
  $data['NumberOfPoints'] = $NumberOfPoints;
  $data['x_pixels'] = $ANNOTS_X_PIXEL;
  $data['y_pixels'] = $ANNOTS_Y_PIXEL;
    echo json_encode($data, JSON_FORCE_OBJECT);//, JSON_FORCE_OBJECT);

}                         

mysqli_close($con);
