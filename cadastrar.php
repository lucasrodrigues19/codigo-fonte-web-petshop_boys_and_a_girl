<?php
$urlu= "https://testesistemasmoveis.000webhostapp.com/insert.php"; //guardar a url
error_reporting(0);


$nomec = ($_POST['nome']);//verificar e pegar os dados via post para as variaveis
$usuarioc = ($_POST['usuario']); //verificar e pegar os dados via post para as variaveis
$telefonec = ($_POST['telefone']); //verificar e pegar os dados via post para as variaveis
$enderecoc = ($_POST['endereco']); //verificar e pegar os dados via post para as variaveis
$nomeanimalc = ($_POST['nome_animal']); //verificar e pegar os dados via post para as 
$especiec= ($_POST['especie']); //verificar e pegar os dados via post para as variaveis
$racac = ($_POST['raca']); //verificar e pegar os dados via post para as variaveis

session_start();
if($usuarioc == "" || empty($usuarioc) || $telefonec == "" || empty($telefonec)){
    session_destroy();
    header('Location: index.php');
}
$curlc = curl_init(); //iniciar a curl

curl_setopt_array($curlc,[
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $urlu,//criar url
    CURLOPT_POST =>1,  //definindo que o metodo vai ser post
    CURLOPT_POSTFIELDS =>[ 
   nome => $nomec, //constandte com os parametros
  usuario => $usuarioc, //constante com os parametros
  telefone => $telefonec, //constandte com os parametros
  endereco => $enderecoc, //constandte com os parametros
  nome_animal => $nomeanimalc, //constandte com os parametros
  especie => $especiec, //constandte com os parametros
  raca => $racac //constandte com os parametros
        ]
    ]);
 
$pegarc = curl_exec($curlc); //pegar o response.

if($pegarc == 'dados enviados com sucesso'){ //verificar a resposta  
    
      echo "$pegarc";
       echo"<br><a href='cad.php'>voltar</a>";
}else{
    echo "$pegarc";
    echo"<br><a href='cad.php'>voltar</a>";
}
