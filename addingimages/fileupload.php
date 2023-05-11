<?php 
include('../connection/db.php');
// error_reporting(0);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST" enctype="multipart/form-data">
        <input type="file" name="uploadfile"><br>
        <input type="submit" name="submit" value="uploadfile">
    </form>

    
</body>
</html>

<?php
// print_r($_FILES['uploadfile']);
$_filename = $_FILES['uploadfile']['name'];
$tempname  = $_FILES['uploadfile']['tmp_name'];
$folder = "images/".$_filename;
// echo $folder;
move_uploaded_file($tempname,$folder);


?>
<!-- <img src="images/Screenshot (58).png" height="100px" width="100px"> -->
<br>

<img src="<?php echo $folder;?>" height="200px" width="400px">

<?php
if(isset($_POST['submit']))
 $query = "INSERT INTO std_img (img_source) VALUES('$folder')";

 $data = mysqli_query($conn,$query);
 if($data){
    echo "data inserted success fully ";
 }
 else {
    echo "img insertion failed ";
 }



?>