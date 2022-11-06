<?php
include('connect.php');
if (isset($_POST['submit'])){
$firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
$lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$dropdown = mysqli_real_escape_string($conn, $_POST['role']);
$mostLike = mysqli_real_escape_string($conn, $_POST['mostLike']);
$userRecommend = mysqli_real_escape_string($conn, $_POST['user-recommend']);
$comment = mysqli_real_escape_string($conn, $_POST['comment']);

$query = "INSERT INTO phpForm(FirstName, LastName, Email,Gender,Cargo,Style,Avaliacao,Comentario)
VALUES ('{$firstName}','{$lastName}','{$email}','{$gender}','{$dropdown}','{$mostLike}','{$userRecommend}','{$comment}') ";
mysqli_query($conn,$query);
mysqli_close($conn);
header('Location: obrigado.html');
exit();
}
?>

