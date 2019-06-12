<!DOCTYPE html>

<html>
    <head>
        <title>PETSHOP BOY'S AND A GIRL - CADASTRAR</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="estilo.css">
       <style> 
        .formcad{
         display: block;
         position: relative;
         top: -263px;
         width: 300px;
         float: right;
         margin:auto;
         right:150px;
        }
        @media(max-width: 500px){
            div#topo{
                width: 96%;
                min-height: 400px;
            }
            header#menu h1{
                text-align:center;
            font-size:22pt;
            }
           ul li{
               display: inline-block;
               margin:5px;
           }
           .formcad{
               position:relative;
               text-align:center;
                 width: 96%;
                  top: 150px;
                  display:block;
           }
            header#menu img {
            max-width:50%;
            position:center;
                   }
        }
        
         @media(max-width: 320px){
            div#topo{
                width: 96%;
                min-height: 400px;
            }
            header#menu h1{
                margin-top:5px;
                text-align:center;
                font-size:16pt;
            }
           header#menu img {
            max-width:50%;
                   }
           ul li{
               display:block;
               margin:5px;
           }
           .formcad{
               position:relative;
               text-align:center;
                 width: 96%;
                 top: 150px;
                 display:block;
           }
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
                 margin-top:25px;
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
           .formcad{
               position:relative;
               text-align:center;
                 width: 90%;
                  top: 150px;
                  display:block;
                 left:-235px;
                  margin:auto;
           }
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
                <li><a href="index.php">HOME</a></li>
            </ul>
    <div class="formcad">
  <form action="cadastrar.php" method="post" id="cad">

              <h2 class="formulario">CADASTRE-SE</h2>
              <fieldset>
                  
               <p><input type="text" id="inome" name="nome" placeholder="digite seu nome"/></p>

               <p> <input type="text" id="iend" name="endereco" placeholder="digite seu endereço"/></p>

               <p> <input type="text" id="iusu" name="usuario" placeholder="usuario(maximo 8 caracteres)"></p>

               <p>  <input type="number" id="itelefone" name="telefone" placeholder="telefone"/></p>


                    <h2 class="formulario">DADOS DO ANIMAL</h2>
          
                <p> <input type="text" id="inomeanimal" name="nome_animal" placeholder="nome do animal"/></p>

                <p> <input type="text" id="iespecie" name="especie" placeholder="especie"/></p>

                <p> <input type="text" id="iraca" name="raca" placeholder="raca"/></p>

                
                <p><input type="submit" value="cadastrar" id="ibtcad"></p>
              </fieldset>
        </form>
      </div>
  
        </div>
  
    </body>
</html>

