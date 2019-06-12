<?php
session_start();
$parametro = isset($_POST['parametro'])?$_POST['parametro'] : "";
 if ($parametro == ''||empty($parametro)|| !isset($parametro)) {
 $parametro = NULL;
 session_destroy();
 header('Location: index.php');
 exit();
}else if(isset($GET_['editar'])){
$parametro = NULL;
session_destroy();
header('Location: index.php');
exit();
}

?>
<html>
    <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PETSHOP BOY'S AND A GIRL - EDITAR</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <style>
          
           @media(max-width: 480px){
             div#topo{
                width:96%;
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
           form#consultar{
               position:relative;
               text-align:center;
                 width: 96%;
                  top: -60px;
                  display:block;
                 left: 5px;
                  margin:auto;
           }
           form#fdel{
                top: 316px;
                position:relative;
                left:150px;
               display:block;
               margin:auto;
               text-align:center;
        
          }
        }
        
        
        
          
        </style>
       
    </head>
    <body>
    <body>
        <div id="topo">
            <header id="menu">
                <img src="https://orrucontabil.com.br/wp-content/uploads/2018/09/pets.png">     
                <h1>PETSHOP BOY'S AND GIRL'S</h1>
                
            </header>
            <ul id="list">
                
               
                <li><a href="editar.php?editar">SAIR</a></li>

            </ul>

  </div>
<?php
       
            $url = "https://testesistemasmoveis.000webhostapp.com/query_usuario.php?usuario=" . $parametro;
            error_reporting(0);
            /**
             * Recupera o valor retornado pelo servidor Java
             */
            $json = file_get_contents($url);

            /**
             * Realiza a decodificação, transformando os dados em um array associativo
             */
            if ($json == "") {
                echo "<p class='erro'>verifique seu nome de usuario</p>";
            } else {
             echo "<style>@media(max-width: 480px){ .ed{ font-size:10pt;  }  }  </style>"; 
                $clientes = json_decode($json, TRUE);
                $listando = array($clientes);
                foreach ($listando as $listaClientes) {
                    foreach ($listaClientes as $client) {
                        $id = $client['id'];
                        $nome = $client['nome'];
                        $usuario = $client['usuario'];
                        $telefone = $client['telefone'];
                        $endereco = $client['endereco'];
                        $nome_animal = $client['nome_animal'];
                        $especie = $client['especie'];
                        $raca = $client['raca'];
               
                    
                        echo "<form id='consultar'method='POST' action='update.php'>";
                        echo "<p class='formulario'> edite ou delete seu registro</p> ";
               
                        echo "<span class='ed'>id:</span> $id<input class='editar' name='id' type='hidden' value='$id'>";
                        echo"<br>";
                        echo "<span class='ed'>nome: </span>" . "<input class='editar' name='nome' type='text' value='$nome'><br>";
                        echo "<span class='ed'>usuario</span>:" . "<input class='editar' name='usuario' type='text' value='$usuario'><br>";
                        echo "<span class='ed'>telefone: </span>" . "<input class='editar'name='telefone' type='text' value='$telefone'><br>";
                        echo "<span class='ed'>endereco: </span>" . "<input class='editar' name='endereco' type='text'value='$endereco'><br>";
                        echo "<span class='ed'>nome_animal: </span>" . "<input class='editar'  name='nome_animal' type='text' value='$nome_animal'><br>";
                        echo "<span class='ed'>especie: </span>" . " <input class='editar' name='especie' type='text' value='$especie'><br>";
                        echo "<span class='ed'>raça:</span> " . "<input class='editar'name='raca' type='text' value='$raca'><br>";
                        
                        echo "<input type='submit' value='ATUALIZAR'>";
                       
                        echo "</form>";
                        
                        
                        echo"<form id='fdel' action='deletar.php' method='POST'>";
                         echo "<input class='editar' name='idd' type='hidden' value=$id>";
                        echo "<input  type='submit' value='DELETAR'>";
                        echo"</from>";
                        echo "<br><br>";
           

                        
                    }
                }
            }

?>


    </body>
</html>
