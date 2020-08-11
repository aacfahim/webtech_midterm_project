<?php
$filedir = "Profile Picture/";
$filedir = $filedir . basename($_FILES["ProfilePicture"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($filedir,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["ProfilePicture"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($filedir)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["ProfilePicture"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  echo "Sorry, only JPG, JPEG & PNG are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {

  $newFileName = "Default.".$imageFileType;
  if (move_uploaded_file($_FILES["ProfilePicture"]["tmp_name"], "Profile Picture/".$newFileName)) {
    header("location: view_profile.php");
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>