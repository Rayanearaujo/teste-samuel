<?php

$nome = $_POST['nome'];
$dataNascimento = $_POST['dataNascimento'];
$Cpf = $_POST['Cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$interesses = $_POST['interesse'];
$modalidades = '';

 foreach ($interesses as $interesse)
  {
	$modalidades = $modalidades.$interesse;
  }

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Falha na conexao: " . mysqli_connect_error());
}

$sql = "INSERT INTO Clientes (Nome, DataDeNascimento, Cpf, Telefone, Email, Interesse)
VALUES ('$nome', '$dataNascimento', '$Cpf', '$telefone', '$email', '$modalidades')";

if (mysqli_query($conn, $sql)) {

    echo "Registro Inserido com sucesso.";
} else {

    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>