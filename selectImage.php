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
//  Module:  selectImage.php
//
//  Purpose: Script to display child folders under the Albums folder.
//           Builds url to send to annotate.php for annotation functions
//
////////////////////////////////////////////////////////////////////////////////
include_once 'config/lang_config.php';
include_once 'translations/' . $lang_file;
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html">
<title>CARINA - SELECT IMAGE</title>
<style type="text/css">
  
body {
    margin: 0 auto 20px;
    padding: 0;
    background: #acacac;
    text-align: center;
}
td {
    padding: 0 0 50px;
    text-align: center;
    font: 9px sans-serif;
}
table {
    width: 100%;
}
img {
    display: block;
    margin: 20px auto 10px;
    max-width: 400px;
    outline: none;
}
img:active {
    max-width: 100%;
}
a:focus {
    outline: none;
}
</style>
</head>
<body>
 
<?php
$dir = 'albums/*/';
$filetype = '*.{jpg,JPG,jpeg,JPEG,png,PNG,bmp,BMP}';
$files = glob($dir.$filetype, GLOB_BRACE);
$image_count = count($files);
$images = $files;
$count_each_column = ceil($image_count/4);
$count = 0;
echo '<table>';
foreach ($images as $image) {
  if($count % 4 == 0) {
    if ($count > 0) {
      echo '</tr>';
    }
    echo '<tr>';
  }
  echo '<td>';
  $tempArray = explode('/',$image);
  $dirArray = array_reverse($tempArray);
  $last = $dirArray[0];
  $second_last = $dirArray[1];
  
  $url = 'http://' . $_SERVER['HTTP_HOST'] . '/CARINA/annotate.php?folder=' . $second_last . '&image=' . $last;   
  echo '<img src='.$image.'>';
  echo '<a style="font-size:200%;font-family:courier';
  echo '<a style="font-size:140%" name="'.$count.'" href="'.$url.'"</a>'; echo $second_last."/".$last;  
  $count++;   
}
if($count>0) {
  if ($count % 4 > 0) {
  echo '<td colspan+"'.($count%4).'"></td>';
}
  echo '<tr>';
}
echo '</table'; 
?>
</body>
</html  
