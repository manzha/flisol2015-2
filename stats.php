<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>FLISoL 2014 Ciudad Madero, Tamaulipas, México</title>
    </head>
    <body>
        <?php
        require_once '../connect/dbconfig.php';
        $query = sprintf("SELECT count(*) FROM flisol_asistentes WHERE fecha = 2014");
        $result = mysql_query($query);
        $row = mysql_fetch_array($result);
        $asistentes = $row[0];

        echo "Asistentes registrados: " . $asistentes;
        $query = sprintf("SELECT count(*) FROM flisol_asistentes WHERE fecha = 2014 && genero='masculino'");
        $result = mysql_query($query);
        $row = mysql_fetch_array($result);
        $hombres = $row[0];
        $mujeres = $asistentes - $hombres;
        echo "<br>De los cuales:<br>";
        echo "Hombres: " . $hombres . "<br>";
        echo "Mujeres: " . $mujeres . "<br>";

        echo "<br>ESCUELAS<br>";
        $query = sprintf("SELECT count(*),escuela FROM `flisol_asistentes` WHERE fecha= 2014 GROUP BY escuela ORDER BY count(*) DESC");
        $result = mysql_query($query);
        while ($row = mysql_fetch_array($result)) {
            echo $row[0] . " " . $row[1] . "<br>";
        }
        echo "<br>Ocupación<br>";
        $query = sprintf("SELECT count(*),ocupacion FROM `flisol_asistentes` WHERE fecha=2014 GROUP BY ocupacion ORDER BY count(*) DESC");
        $result = mysql_query($query);
        while ($row = mysql_fetch_array($result)) {
            echo $row[0] . " " . $row[1] . "<br>";
        }

        echo "<br>Comentarios<br>";
        $query = sprintf("SELECT comentarios FROM `flisol_asistentes` WHERE fecha=2014 AND comentarios!=''");
        $result = mysql_query($query);
        while ($row = mysql_fetch_array($result)) {
            echo $row[0] . "<br><br>";
        }

        mysql_close();
        ?>
    </body>
</html>