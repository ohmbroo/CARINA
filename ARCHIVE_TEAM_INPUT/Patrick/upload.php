<?php
include('views/_header.php');
include_once 'config/lang_config.php';
include_once 'translations/' . $lang_file;
?>
<!DOCTYPE html>
<html lang="en">
<head>
           <style>
    #nav {
        line-height:30px;
        height:800px;
        width:100px;
        float:left;
        padding:30px;	      
    }   
    
</style><title>Carina | Upload a Photo</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Open_Sans_400.font.js" type="text/javascript"></script>
<script src="js/Open_Sans_Light_300.font.js" type="text/javascript"></script>
<script src="js/Open_Sans_Semibold_600.font.js" type="text/javascript"></script>
<script src="js/FF-cash.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
   <div id="nav" >
        <a href="upload.php?lang=en"><img src="translations/images/flag.en.jpg" />
        <?php echo $lang['LANGUAGE_FLAG_ENGLISH']?></a></a>
        <a href="upload.php?lang=el"><img src="translations/images/flag.el.jpg" />
        <?php echo $lang['LANGUAGE_FLAG_GREEK']?></a>
        <a href="upload.php?lang=it"><img src="translations/images/flag.it.jpg" />
        <?php echo $lang['LANGUAGE_FLAG_ITALIAN']?></a>
        <a href="upload.php?lang=es"><img src="translations/images/flag.es.jpg" />
        <?php echo $lang['LANGUAGE_FLAG_SPANISH']?></a>
        <a href="upload.php?lang=ca"><img src="translations/images/flag.ca.png" />
        <?php echo $lang['LANGUAGE_FLAG_CATALAN']?></a>      
        <a href="upload.php?lang=pt"><img src="translations/images/flag.pt.jpg" />
        <?php echo $lang['LANGUAGE_FLAG_PORTUGUESE']?></a>
        <a href="upload.php?lang=tl"><img src="translations/images/flag.tl.jpg" />
        <?php echo $lang['LANGUAGE_FLAG_TAGALOG']?></a>
    </div>
<body id="page5">
<!-- header -->
<div class="bg">
  <div class="main">
    <header>
      <div class="row-1">
        <h1> <a class="logo" href="index.php">Carina</a> <strong class="slog">Collaborative Solar Imaging Annotation</strong> </h1>
      </div>
      <div class="row-2">
       
        </nav>
      </div>
    </header>
    <!-- content -->
    <section id="content">
        <div class="padding">
            <div class="wrapper p4">
                <div class="col-3">
                    <div class="indent">
                        <h2>Upload an Image</h2>
                        
                        
                        
                        <?php
$target_dir = "./Gallery/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ". ";
        $uploadOk = 1;
    } else {
        echo "File is not an image. ";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists. ";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large. ";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "BMP" ) {
    echo "Sorry, only JPG, JPEG, PNG & BMP files are allowed. ";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded. ";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded. \r\n";
        echo "<img src=$target_file";
    } else {
        echo "Sorry, there was an error uploading your file. ";
    }
}
?>
                        

                                
                                
                                                                    
                        <div class="indent-bot2">
                        
                            
                           </div>
                     
                            </div>
                </div>
                <div class="col-4">
                    <div class="block-news">
                        <h3 class="color-4 p2">Requirements</h3>
                        <div class="wrapper indent-bot">
                            <ul class="list-2">
                                 <p class="color-4 p1"> Photo must be either in a JPG, JPEG, PNG, or BMP format</p>
                                 </p>
                                 <p class="color-4 p1">Maximum file size if 5MB</p>
                                 </p>
                                 <p class="color-4 p1">Photo must be at lease 640 x 480 pixels</p>
                                
                            </ul>
                        </div>
                </div>
            </div>
            <div class="wrapper">
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer>
     
    </footer>
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
</html>
