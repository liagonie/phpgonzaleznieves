<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>11_TareaPHP</title>    <!--Bootstrap-->
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
        <h3>Los primeros 10 números pares son:</h3>

        <?php
        //Se crea un array indexado
        $numerosPares=array(2,4,6,8,10,12,14,16,18,20);
        
        
        //Se imprime en pantalla con foreach, tomando cada valor y con un salto de linea para separar los numeros
        
        foreach($numerosPares as $nP){
            echo $nP.'<br>';
        }
        
        
        ?>
        </center>
    </body>
</html>