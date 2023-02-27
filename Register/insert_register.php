<?php
include 'conndb.php';
//รับค่าตัวเเปรมาจากไฟล์ register
$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password'];

//เข้ารหัส password ด้วย sha512
$password=hash('sha512',$password);

//คำสั่งเพิ่มข้อมูลลงตาราง member
$sql ="INSERT INTO member(name,lastname,telephone,username,password)
Values('$name','$lastname','$phone','$username','$password') ";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script> alert('บันทึกข้อมูลเรียบร้อย'); </script> ";
    echo "<script> window.location='register.php'; </script> ";
}else{
    echo "Error:" . $sql . "<br>" . mysqli_error($conn);
    echo "<script> alert('บันทึกข้อมูลไม่ได้'); </script> ";
}
mysqli_close($conn);

?>