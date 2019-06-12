<?Php
$del = isset($_POST['idd'])?$_POST['idd']:"";
if(isset($_GET['delet'])){
session_start();
$del = NULL;
unset($del);
session_destroy();
header('Location: index.php');
}else if($del==null||empty($del)|| !isset($del)){
    session_destroy();
header('Location: index.php');
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PETSHOP BOY'S AND A GIRL -DELETAR</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <style>
            .dele{
                color: blue;
                font-weight: bold;
                font-size:20px;
                margin-right:10px;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
        <div id="topo">
            <header id="menu">
                <img src="https://orrucontabil.com.br/wp-content/uploads/2018/09/pets.png">     
                <h1>PETSHOP BOY'S AND GIRL'S</h1>
            </header>
            <ul id="list">
                
                
              
                <li><a href="deletar.php?delet">SAIR</a></li>
                

            </ul>
         <div class="del">
                <form action="del.php" method="post">
                    <p class="formulario">DELETE SEU REGISTRO</p>
                    <?php echo"<span class='dele'>id: $del</span> <input type='hidden'name='id' value='$del' size='20'>";?>
                    <input type="submit" value="deletar">
                </form>
        </div>
        
        </body>
        </html>