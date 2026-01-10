<?php
$conn = new mysqli("localhost","root","","sss_form");

if($conn->connect_error){
    die("DB Error");
}

$first = $_POST['first_name'];
$middle = $_POST['middle_name'];
$last = $_POST['last_name'];
$dob = $_POST['dob'];
$sex = $_POST['sex'];
$civil = $_POST['civil_status'];
$nat = $_POST['nationality'];
$pob = $_POST['place_of_birth'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

if(isset($_POST['home_address'])){
    $home = $_POST['home_address'];
}else{
    $home = $pob; // same as place of birth
}

$sql = "INSERT INTO sss_members 
(first_name,middle_name,last_name,dob,sex,civil_status,nationality,place_of_birth,home_address,mobile,email)
VALUES
('$first','$middle','$last','$dob','$sex','$civil','$nat','$pob','$home','$mobile','$email')";

$conn->query($sql);

echo "Saved Successfully!";
?>
