<?php
	session_start();

   $conn = mysqli_connect('localhost', 'root', '', 'comercio') ;

$email = $_POST['email'];
$senha = $_POST['senha'];
$senhacrip = md5($senha);
$sql = "select * from usuario where email='$email' and senha='$senhacrip'";

$resultado = mysqli_query($conn, $sql);
$total     = mysqli_num_rows($resultado);

if ( $total>0 ) {
	$dados = mysqli_fetch_array($resultado);
	
	        header("location: formulariodliente.php");
	     
} else {
	echo "<script>
	        alert('Usuário não encontrado');
	     
	      </script>";
}
mysqli_close($conn);
?>
