<!DOCTYPE html>
<html>
<body>

<?php
//Multi-D array
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
  
echo $cars[0][2];
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  for ($col = 0; $col < 3; $col++) {
    echo "  ".$cars[$row][$col];
  }
  
}
//Date & time
echo "Today is " . date("Y/m/d/l") . "<br>";//l-for-day(friday)

echo "The time is " . date("h:i:sa");

date_default_timezone_set("America/New_York");

$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);

$d=strtotime("10:30pm 15 June 2019");
echo "Created date is " . date("Y-m-d h:i:sa", $d);

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Sunday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+2 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d1=strtotime("20 jan");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 20 jan.";

//include & require

include 'sample.php';
//require 'sample1.php';
//echo "Testing require";

//File handling



$myfile = fopen("info.txt", "a+") or die("Unable to open file!");
$txt = "new line added";
//fwrite($myfile, $txt);
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);

//fileUpload


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


?>

</body>
</html>