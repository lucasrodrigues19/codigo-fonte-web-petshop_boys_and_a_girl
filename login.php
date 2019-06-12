<?php
session_start();
if(isset($_SESSION['usua'])&& isset($_SESSION['senh'])){
header("Location: http://testesistemasmoveis.000webhostapp.com/menu.php");
}else{
$url= "http://testesistemasmoveis.000webhostapp.com/query_login.php"; //guardar a url
 error_reporting(0); //definir os erros que serao exibidos, no caso sera 0
$usu = filter_input(INPUT_POST, "usua", FILTER_SANITIZE_STRING); //verificar e pegar os dados via post para as variaveis
$sen = filter_input(INPUT_POST, "senh", FILTER_SANITIZE_STRING); //verificar e pegar os dados via post para as variaveis
if(empty($usu) && empty($sen)){
    echo "erro no acesso";
      echo"<br><a href='index.php'>voltar</a>";
}else{
$curl = curl_init(); //iniciar a curl
curl_setopt_array($curl,[
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $url,//criar url
    CURLOPT_POST =>1,  //definindo que o metodo vai ser post
    CURLOPT_POSTFIELDS =>[ 
    usuario => $usu, //constandte com os parametros
    telefone => $sen //constandte com os parametros
        ]
    ]);
$pegar = curl_exec($curl); //pegar o response.
if($pegar == "login feito com sucesso"){ //verificar a resposta  
   $_SESSION["usua"]=$usu;
   $_SESSION["senh"]="$sen";
   header("Location: http://testesistemasmoveis.000webhostapp.com/menu.php?usuario=$usu");//caso o login seja efetuado ira iniciar essa pagina
   exit();
      echo "$pegar";
}else{
    echo "$pegar";
    echo"<br><a href='index.php'>voltar</a>";
}
}
}
    

 ?>
 