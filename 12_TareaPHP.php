<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>12_TareaPHP</title>    
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
        <!--Los titulos van fuera del foreach ya que si se ponen dentro el mismo se va a repetir antes de cada salto-->
        <h3>Valores de array asociativo</h3>
        
        <?php
        //se crea el array asociativo, el primer valor es la palabra clave y el segundo lo que almacena
        $v=array(1=>90, 30=>7, 'e'=>99, 'hola'=>43);
        
        //Se toma de $v los valores de clave y valor y se imprimen con un foreach
        foreach($v as $clave => $valor){
            echo $clave. ' = '.$valor.'<br>';
        }
        //Se concatena con punto
        ?>
        </center>
    </body>
</html>