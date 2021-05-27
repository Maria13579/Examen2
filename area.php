<html>
    <head>
        <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">     
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
      </head>
    <body> 
     <div class="card-panel teal lighten-2 "><h1 class="center-align">Area de un cubo</h1> </div>
        <br/><br/>
            <div align = "center">
                <form action="area.php" method="post">
                    <input class ="left" type="text" name="Lado" placeholder="Ingrese la medida de un lado del cubo ">   
                    <br/><br/>
                    <input class="waves-effect waves-light btn " type= "submit" value="calcular">
                </form>
                <?php
                    $la=$_POST['Lado'];
                    $a=$la*6*$la;
                  echo "El area del cubo es". $a
                ?>
                
         </div>

         <script type="text/javascript" src ="https://code.jquery.com/jquery-2.1.1.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    </body>
</html>



