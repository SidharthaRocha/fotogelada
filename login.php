<?php 

session_start();

if(empty ($_POST) or (empty($_POST["email"]) or (empty($_POST["senha"])))){
    print"<script>location.href='indexsemlogado.php'</script>";
}

include('config.php');

$email =$_POST["email"];
$senha = $_POST ["senha"];

$sql = "SELECT * FROM usuarios WHERE email = '{$email}' AND senha = '{$senha}'";

$res = $conn -> query($sql) or die ($conn->error);

$row = $res ->fetch_object();

$qtd = $res -> num_rows;

if($qtd > 0){
    $_SESSION["email"] = $email;
    $_SESSION["nome"] = $row ->nome;
    $_SESSION["nick_name"] = $row ->nick_name;
    print"<script>location.href='index.php'</script>";
 }else{
    print"<script> alert('E-mail e/ou senha incorreta(s)');</script>";
    print"<script>location.href='indexsemlogado.php';</script>";
 }