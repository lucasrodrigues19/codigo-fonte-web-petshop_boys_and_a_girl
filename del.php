<?php
session_start();
if(isset($_GET['d']) || !isset($_POST['id'])){
    session_destroy();
    header('Location: index.php');
}else{
$urlu= "https://testesistemasmoveis.000webhostapp.com/query_deleteid.php"; //guardar a url
error_reporting(0);

$idd= ($_POST['id']); //verificar e pegar os dados via post para as variaveis

$curld = curl_init(); //iniciar a curl

curl_setopt_array($curld,[
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $urlu,//criar url
    CURLOPT_POST =>1,  //definindo que o metodo vai ser post
    CURLOPT_POSTFIELDS =>[ 
    id => $idd, //constandte com os parametros
 
        ]
    ]);
 
$pegard = curl_exec($curld); //pegar o response.

if($pegard == 'dados deletados com sucesso!'){ //verificar a resposta  
      echo "$pegard, volte agora";
       echo"<br><a href='del.php?d'>voltar</a>";
       
}else{
    echo "$pegard";
    echo"<br><a href='editar.php'>voltar</a>";
}
}