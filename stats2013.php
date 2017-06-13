<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>FLISoL 2013 Ciudad Madero, Tamaulipas, México</title>
    </head>
    <body>
        <?php
        require_once '../connect/dbconfig.php';
        $query = sprintf("SELECT count(*) FROM flisol_asistentes WHERE fecha = 2013");
        $result = mysql_query($query);
        $row = mysql_fetch_array($result);
        $asistentes = $row[0];

        echo "Asistentes registrados: " . $asistentes;
        $query = sprintf("SELECT count(*) FROM flisol_asistentes WHERE fecha = 2013 && genero='masculino'");
        $result = mysql_query($query);
        $row = mysql_fetch_array($result);
        $hombres = $row[0];
        $mujeres = $asistentes - $hombres;
        echo "<br>De los cuales:<br>";
        echo "Hombres: " . $hombres . "<br>";
        echo "Mujeres: " . $mujeres . "<br>";

        echo "<br>ESCUELAS<br>";
        $query = sprintf("SELECT count(*),escuela FROM `flisol_asistentes` GROUP BY escuela ORDER BY count(*) DESC");
        $result = mysql_query($query);
        while ($row = mysql_fetch_array($result)) {
            echo $row[0] . " " . $row[1] . "<br>";
        }
        echo "<br>Ocupación<br>";
        $query = sprintf("SELECT count(*),ocupacion FROM `flisol_asistentes` GROUP BY ocupacion ORDER BY count(*) DESC");
        $result = mysql_query($query);
        while ($row = mysql_fetch_array($result)) {
            echo $row[0] . " " . $row[1] . "<br>";
        }

        echo "<br>Comentarios<br>";
        $query = sprintf("SELECT comentarios FROM `flisol_asistentes` WHERE comentarios!=''");
        $result = mysql_query($query);
        while ($row = mysql_fetch_array($result)) {
            echo $row[0] . "<br><br>";
        }

        echo "<br>Preferencia de talleres<br>";
        $taller = array(
            1 => "Pilas: Crea tu primer vídeo juego",
            2 => "Edición de Imagenes en GIMP",
            3 => "Personaliza Ubuntu",
            4 => "Pencil",
            5 => "FirebirdSQL",
            6 => "Recuperación de archivos eliminados y ocultos en Microsoft mediante Ubuntu",
            7 => "Fundamentos de Programación en Python",
            8 => "Pitivi",
            9 => "Open Office",
            10 => "Conociendo Linux Mint",
            11 => "Misfit Modelador en 3D",
            12 => "Android en eclipse y Ubuntu.",
            13 => "Ruby on Rails sobre Ubuntu",
            14 => "Instalación de Máquinas Virtuales con arranque Doal Boot Windows y Linux",
            15 => "Instalación de Máquinas Virtuales con una distribución Linux",
        );
        $query = sprintf("SELECT * FROM `flisol_talleresPreferencia` ORDER BY (masculino+femenino)");
        $result = mysql_query($query);
        echo "Taller  = Hombres + Mujeres = Total<br>";
        while ($row = mysql_fetch_array($result)) {
            echo "<b>".$taller[$row[0]]."</b><br> ".$row[1]." + ".$row[2]." = ".($row[1]+$row[2])."<br><br>";
        }


        mysql_close();
        ?>
    </body>
</html>