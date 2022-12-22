<?php
$Username= $_POST['Username'];
$Password= $_POST['Password'];
$Email= $_POST['Email'];


$conn=new mysqli('localhost','root','','maddy');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into root(Username, Password, Email)values(?, ?, ?)");
    $stmt->bind_param("sssssi",$Username, $Password, $Email);
    $stmt->execute();
    echo "registration Sucessfully....";
    $stmt->close();
    $conn->close();

}




?>