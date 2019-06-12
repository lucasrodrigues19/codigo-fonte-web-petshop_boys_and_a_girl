<?php
session_start();
if(isset($_GET["value"])){
$_SESSION["usua"] = NULL;
$_SESSION["senh"]= NULL;
unset($_SESSION["usua"]);
unset($_SESSION["senh"]);
session_destroy();
header('Location: index.php?SSID='. session_id());
exit();
}else{
if(!isset($_SESSION['usua']) || !isset($_SESSION['senh'])||empty($_SESSION['usua'])|| empty($_SESSION['senh'])||$_SESSION['usua']==NULL ||$_SESSION['senh']==NULL){
header('Location: index.php');
exit();
}else{
$u=isset($_GET['usuario'])?$_GET['usuario']:"";
}
}
?>
<html>
    <head>
        <title>PETSHOP BOY'S AND A GIRL - MENU</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <style>
            
            .editar{
              color: red;
              font-weight: bold;
              border: none;   
              padding: 5px;
              font-size: 20pt;
              text-transform: uppercase;
              font-weight: bold;
              border:1px solid #ddd;
              box-shadow: 2px 2px 2px black;
    
}
   @media(max-width: 480px){
            div#topo{
                width:90%;
                min-height: 400px;
                margin:auto;
            }
            header#menu h1{
                text-align:center;
                font-size:16pt;
                 margin-top:27px;
            }
             header#menu img {
            max-width:80%;
            max-height:50%;
                   }
           div#topo ul li{
               display:block;
               position:relative;
               margin:5px;
               left:400px;
            
           }
           form#fmenu{
               position:relative;
               text-align:center;
                 width: 90%;
                  top: -30px;
                  display:block;
                 left:-5px;
                  margin:auto;
           }
          }
        </style>
    </head>
    <body>
      
        <div id="topo">
            <header id="menu">
                <img src="https://orrucontabil.com.br/wp-content/uploads/2018/09/pets.png">     
               <h1>PETSHOP BOY'S AND A GIRL'S</h1>
            </header>
            <ul id="list">
                <li><a href="menu.php?value">SAIR</a></li>
                
            </ul>
                  <form action="https://testesistemasmoveis.000webhostapp.com/editar.php" method="post" id="fmenu">
                      <h2 class="formulario">PESQUISE POR SEU REGISTRO</h2>
                      <h2 class="formulario">Nome do usuario:</h2>
           <?php echo "<span class='editar'>$u</span><input type='hidden' size='15' name='parametro' value='$u' id='idi' >";?>
            <p><input type="submit" value="ver" id="ibotao"></p>

            
        </form>
        </div>
      
    </body>
</html>