<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>14_TareaPHP</title>    
        <!--Bootstrap-->
        <link rel="stylesheet" href="css/estilo_php.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Homemade+Apple&display=swap" rel="stylesheet">
    </head>
    <body>
        <section>
            <section class="row">
                <section class="col-sm-11 bg-dark">
                    <h1>Cecilia González Nieves</h1>
                </section>
                <section class="col-sm-1 bg-warning">
                    <a href="index.php"><h3>Inicio</h3></a>
                </section>
            </section>
        </section>
        <center>
        <h3>Array y print_r</h3>
        <?php
            //Se crea el array con los siguientes valores
            $valores=array('Juan', 'María', 33, 1);
            
            //Se imprime con print ya que funciona similar a echo, pero este muestra el array y sus valores
            print_r($valores);
            
        ?>
        </center>
    </body>
</html>