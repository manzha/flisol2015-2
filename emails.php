<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>FLISoL 2013 Ciudad Madero, Tamaulipas, México</title>
    </head>
    <body>
        <?php
        require_once '../connect/dbconfig.php';
        
        $query = sprintf("SELECT * FROM flisol_asistentes WHERE fecha = 2013");
        $result = mysql_query($query);
        while($row = mysql_fetch_array($result)){
            echo $row['correo'].", ";
        }
        
        mysql_close();
        ?>
    </body>
</html>