<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$motherName = $_POST['motherName'];
$fatherName = $_POST['fatherName'];
$address = $_POST['address'];
$gender  = $_POST['gender'];
$DOB = $_POST['DOB'];
$pincode = $_POST['pincode'];
$course  = $_POST[''];

$email = $_POST['email'];

$conn = mysqli_connect('localhost' , 'root','','connectbase');
echo "Connection Was sucessfull"
// if($conn->connect_error){  
//     die('Connection Failed :' .$conn->connect_error );
// }else{
//     $stmt = $conn->prepare("Insert into registration(firstName,lastName,motherName,fatherName,address,gender,DOB,pincode,course,email)
//     values(?,?,?,?,?,?,?,?,?,?)");
//     $stmt->bind_param("ssssssiiss" ,$firstName,$lastName,$motherName,$fatherName,$address,$gender,$DOB,$pincode,$course,$email);
//     $stmt->execute();
//     echo "Registration Successfully....";
//     $stmt ->close();
//     $conn ->close();
    
// }

?>


   

 
