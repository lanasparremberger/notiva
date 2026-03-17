<?php
$conexao = mysqli_connect("localhost", "root", "", "notiva");
if (!$conexao) {
 die("Falha na conexão com o banco: " . mysqli_connect_error());
}
?>