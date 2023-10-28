<?php
$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "student";

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
    exit;
}

$Name = $_POST['Name'];
$rollno = $_POST['rollno'];
$class = $_POST['class'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$phone = $_POST['phone'];


$sql = "INSERT INTO record (Name, rollno, class,dob,address,phone) VALUES ('$Name', '$rollno', '$class','$dob','$address',$phone)";


$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit;
}

echo ("Registration successful you are ready for Login ");
mysqli_close($conn);
?>
<script>
    alert("Registration successful ");
</script>