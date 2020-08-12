<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>13_TareaPHP</title>    
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
        <h3>Películas que se han visto en cada mes</h3>
        <?php
            //Escogi un array asociativo para que los datos aparezcan en forma de lista, con su respectivo dato
            $meses=array('Enero'=>6, 'Febrero'=>20, 'Marzo'=>2, 'Abril'=>4, 'Mayo'=>9, 'Junio'=>7, 'Julio'=>65, 'Agosto'=>19, 'Septiembre'=>5, 'Octubre'=>32, 'Noviembre'=>8, 'Diciembre'=>77);
            
            //Se toma de la variable meses los datos de mes y peliculas
            foreach($meses as $mes => $peliculas){
                echo $mes. ' se vieron '.$peliculas.' películas'.'<br>';
            }
        ?>
        </center>
    </body>
</html>