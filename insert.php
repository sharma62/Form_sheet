<?php 
session_start();
$conn = mysqli_connect('localhost','root','','test');
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$massage = $_POST['massage'];
$address = $_POST['address'];
$captcha = $_POST['captcha'];

if($captcha == $_SESSION['CODE']){
    $SQL ="INSERT INTO `data_table`( `name`, `email`, `mobile`, `massage`, `address`)
                         VALUES ('$name','$email','$mobile','$massage','$address')";
    mysqli_query($conn,$SQL);

}else{
    echo "Please enter valid captcha";
}

?>