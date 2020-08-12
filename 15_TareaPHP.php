<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>15_TareaPHP</title>    
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
        <h3>Datos de una persona</h3>
        <?php
            //Se crea un array asociativo
            $datos=array('Nombre'=>'Pedro torres', 'Dirección'=>'Calle Ancha num. 3', 'Teléfono'=>1234567);

            //Se imprimen los datos con un foreach, pensaba hacerlo de uno por uno, mandando a llamar con su palabra clave pero era más código.
            foreach($datos as $dato => $info){
                echo $dato.': '.$info.'<br>';
                
            }
        ?>
        </center>
    </body>
</html>