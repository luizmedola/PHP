<?php 
$host = "127.0.0.1";
$usuario = "root";
$senha = "";
$bd = "teste";
$port = "3306";

mysqli_report(MYSQLI_REPORT_OFF);
$con = @new mysqli($host, $usuario, $senha, $bd, $port);
if ($con -> connect_errno){
    echo "Falha na conexão: (".$con -> connect_errno.")".$con -> connect_errno;
 }
 else{
        // echo "Conexão completa" . $con->host_info . "\n";
 


$query = "select * from user";
$result = mysqli_query(mysql: $con, query: $query);

if($result){
    while($retorno = mysqli_fetch_array($result)){
        echo "ID: " . $retorno["id"] . "<br>";

        echo "NOME: " . $retorno["nome"] . "<br>";

        echo "SENHA: " . $retorno["senha"] . "<br>";
    }

  }  else{
        "Erro na consulta: " . mysqli_error($conn);
    }
}

mysqli_close($conn);


?>