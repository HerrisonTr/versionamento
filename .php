<?php


   $conn = mysqli_connect('localhost', 'root', '', 'comercio') ;

$email = $_POST['email'];
$senha = $_POST['senha'];
$sql = "select * from usuario where email='$email' and senha='$senha'";
    
 $result= mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0 ){
        echo "<span style='color:red'>Login já utilizado</span>";
    }else{
        echo "<span style='color:green'>Login disponível!</span>";
    }