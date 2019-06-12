<?php
session_start();
if(isset($_GET['u']) || !isset($_POST['id'])){
    session_destroy();
    header('Location: index.php');
}
$urlu= "https://testesistemasmoveis.000webhostapp.com/query_update.php"; //guardar a url
error_reporting(0);

$idu= ($_POST['id']); //verificar e pegar os dados via post para as variaveis
$nomeu = ($_POST['nome']); //verificar e pegar os dados via post para as variaveis
$usuariou = ($_POST['usuario']); //verificar e pegar os dados via post para as variaveis
$telefoneu = ($_POST['telefone']); //verificar e pegar os dados via post para as variaveis
$enderecou = ($_POST['endereco']); //verificar e pegar os dados via post para as variaveis
$nomeanimalu = ($_POST['nome_animal']); //verificar e pegar os dados via post para as variaveis
$especieu= ($_POST['especie']); //verificar e pegar os dados via post para as variaveis
$racau = ($_POST['raca']); //verificar e pegar os dados via post para as variaveis


$curlu = curl_init(); //iniciar a curl

curl_setopt_array($curlu,[
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $urlu,//criar url
    CURLOPT_POST =>1,  //definindo que o metodo vai ser post
    CURLOPT_POSTFIELDS =>[ 
    id => $idu, //constandte com os parametros
   nome => $nomeu, //constandte com os parametros
  usuario => $usuariou, //constante com os parametros
  telefone => $telefoneu, //constandte com os parametros
  endereco => $enderecou, //constandte com os parametros
  nome_animal => $nomeanimalu, //constandte com os parametros
  especie => $especieu, //constandte com os parametros
  raca => $racau //constandte com os parametros
        ]
    ]);
 
$pegar = curl_exec($curlu); //pegar o response.

if($pegar == 'dados alterados com sucesso'){ //verificar a resposta  
    
      echo "$pegar";
       echo"<br><a href='update.php?u'>voltar</a>";
}else{
    echo "$pegar";
    echo"<br><a href='editar.php'>voltar</a>";
}
