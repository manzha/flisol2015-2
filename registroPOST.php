<?php
require_once '../connect/dbconfig.php';

function validarInstituto($insti) {
    if ($insti == "Instituto Tecnológico de Ciudad Madero" ||
            $insti == "Ninguna" ||
            $insti == "Otro" ||
            $insti == "Instituto Tecnológico de Estudios Superiores de Monterrey" ||
            $insti == "Instituto Tecnológico Superior de Álamo Temapache" ||
            $insti == "Universidad Autónoma de Tamaulipas" ||
            $insti == "Universidad del Noreste" ||
            $insti == "Universidad del Valle de México" ||
            $insti == "Universidad Politécnica de Altamira" ||
            $insti == "Instituto de Estudios Superiores de Tamaulipas" ||
            $insti == "Instituto Tecnológico Superior de Tantoyuca" ||
            $insti == "Universidad Autónoma de San Luis Potosí") {
        return true;
    } else {
        return false;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>FLISoL 2015 Ciudad Madero, Tamaulipas, México</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/bootstrap-responsive.js"></script>
        <style type="text/css">
            body {
                /*                padding-top: 60px;
                                padding-bottom: 40px;*/
                min-width: 900px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
            .affix{
                position: fixed;
                width: inherit;

            }
            @media (max-width: 980px) {
                /* Enable use of floated navbar text */
                .navbar-text.pull-right {
                    float: none;
                    padding-left: 5px;
                    padding-right: 5px;
                }

            }
        </style>
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="assets/js/html5shiv.js"></script>
        <![endif]-->

    </head>
    <body>
        <header class="hero-unit header container-fluid">
            <div class="row-fluid">
                <div class="span7">
                    <h1><a href="index.php">FLISoL 2015, Ciudad Madero.</a></h1>
                    <p>El ITCM celebrará por 6ta ocasión el Festival Lationamericano de Instalación de Software Libre el día 24 de Abril del 2015</p>
                </div>
                <div class="span5">
                    <img src="img/logo_flisol.png"/>
                </div>
            </div>
        </header>
        <div class="container-fluid full-width">
            <div class="row-fluid">
                <?php
                if (isset($_POST['registrar'])) {
                    $strNombre = $_POST['txtNombre'];
                    $strCorreo = $_POST['txtCorreo'];
                    $strGenero = $_POST['rbtnGenero'];
                    $strDiploma = $_POST['rbtnDiploma'];
                    $strOcupacion = $_POST['selOcupacion'];
                    $strEscuela = $_POST['selEscuela'];
                    $strEscuelaOtra = $_POST['txtEscuela'];
                    $strComentarios = $_POST['txtComentarios'];
//                    $arrTalleres = $_POST['chkTalleres'];
                    //Campos obligatorios
                    if (empty($strNombre) || empty($strCorreo) || empty($strGenero) || empty($strOcupacion) || empty($strEscuela)) {
                        echo "<p>Faltan campos por llenar</p>";
                        echo "<br>Para regresar por favor de <a href='registro.php'>clic aqui</a>";
                    } else {
                        //Validacion emails
                        if (filter_var($strCorreo, FILTER_VALIDATE_EMAIL)) {
                            $query = sprintf("SELECT correo FROM flisol_asistentes WHERE correo = '$strCorreo' AND fecha='2015'");
                            $result = mysql_query($query);
                            if (mysql_num_rows($result) == 0) { //CORREO REPETIDO
//Validar universidad
                                if (validarInstituto($strEscuela)) {
                                    $strNombre = mysql_real_escape_string($strNombre);
                                    $strCorreo = mysql_real_escape_string($strCorreo);
                                    $strGenero = mysql_real_escape_string($strGenero);
                                    $strOcupacion = mysql_real_escape_string($strOcupacion);
                                    $strEscuelaOtra = mysql_real_escape_string($strEscuelaOtra);
                                    $strComentarios = mysql_real_escape_string($strComentarios);
                                    if ($strEscuela == "Otro" && !empty($strEscuelaOtra)) {
                                        $strEscuela = $strEscuelaOtra;
                                    }
                                    //FECHA ES EL AÑO COMO INT, 2013.
                                    $query = sprintf("INSERT INTO flisol_asistentes (nombre, correo, genero, ocupacion, escuela, comentarios,fecha,diploma)
VALUES ('$strNombre','$strCorreo','$strGenero','$strOcupacion','$strEscuela','$strComentarios',2015,'$strDiploma')");
                                    $result = mysql_query($query);
//                                    $N = count($arrTalleres);
//                                    if ($strGenero == "Masculino") {
//                                        for ($i = 0; $i < $N; $i++) {
//                                            $query = sprintf("SELECT masculino FROM flisol_talleresPreferencia WHERE id= '$arrTalleres[$i]'");
//                                            $result = mysql_query($query);
//                                            $row = mysql_fetch_array($result);
//                                            $intMasculino = $row[0];
//                                            $intMasculino +=1;
//                                            $query = sprintf("UPDATE flisol_talleresPreferencia SET masculino = $intMasculino
//                                WHERE id = '$arrTalleres[$i]'");
//                                            $result = mysql_query($query);
//                                        }
//                                    } else {
//                                        for ($i = 0; $i < $N; $i++) {
//                                            $query = sprintf("SELECT femenino FROM flisol_talleresPreferencia WHERE id= '$arrTalleres[$i]'");
//                                            $result = mysql_query($query);
//                                            $row = mysql_fetch_array($result);
//                                            $intFem = $row[0];
//                                            $intFem +=1;
//                                            $query = sprintf("UPDATE flisol_talleresPreferencia SET femenino = $intFem
//                                WHERE id = '$arrTalleres[$i]'");
//                                            $result = mysql_query($query);
//                                        }
//                                    }

                                    $query = sprintf("SELECT id FROM flisol_asistentes WHERE correo = '$strCorreo' AND fecha='2015'");
                                    $result = mysql_query($query);
                                    $row = mysql_fetch_array($result);
                                    $id = $row['id'];
//Enviamos emial de que ya quedo todo listo.
                                    $para = $strCorreo;
                                    $titulo = 'Registro al FLISoL exitoso';
                                    $mensaje = "El registro al FLISoL Madero 2015 se ha realizado de manera exitosa.\n"
                                            . 'Tú número de ID es: '.$id."\n"
                                            . 'Te estaremos notificando por este medio de cualquier cambio significante en el evento.';
                                    $cabeceras = 'From: ACM ITCM <chapter@itcm.acm.org>' . "\r\n" .
                                            'Reply-To: chapter@itcm.acm.org' . "\r\n" .
                                            'X-Mailer: PHP/' . phpversion();

                                    mail($para, $titulo, $mensaje, $cabeceras);

                                    $para = 'president@itcm.acm.org';
                                    $titulo = 'Se ha registrado un asistente';
                                    $mensaje = 'Un asistente se ha registrado al FLISoL Madero 2015. 
    Nombre del asistente: ' . $strNombre . "\r\n
        Y dejó como comentario: \r\n" . $strComentarios;
                                    $cabeceras = 'From: ACM ITCM <chapter@itcm.acm.org>' . "\r\n" .
                                            'Reply-To: chapter@itcm.acm.org' . "\r\n" .
                                            'X-Mailer: PHP/' . phpversion();

                                    mail($para, $titulo, $mensaje, $cabeceras);
                                    echo "<p class='lead'>El registro se ha realizado exitosamente. Pronto recibirá un correo de confirmación (revise su correo no deseado). Recuerde este registro no confirma su asistencia a ningún taller, para ello es necesario llegar a la hora especificada en la agenda para realizar dicho registro</p>
                                    <p>Su número de ID: ".$id.". Tambíen lo recibirá en el correo.</p>        
                                    <p><a href='index.php'>Pulse aquí para regresar a la página principal.</a></p>";
//                    header("Location: index.php?registrado=yes");
                                    //redirect
                                } //Instituto validado
                                else {
                                    echo "<p>Instituto no valido. Por favor intenta de nuevo</p>";
                                    echo "<br><p>Para regresar por favor de <a href='index.php'>clic aqui</a></p>";
//                    header("Location: index.php?registrado=no");
                                }
                            } else {
                                echo '<p>Email repetido, ya te registraste anteriormente. </p>';
                                echo "<br><p>Para regresar por favor de <a href='index.php'>clic aqui</a></p>";
//            header("Location: index.php?registrado=no");
                            }
                        } else {//IF EMAIL VALIDO
                            echo '<p>Email no valido. Por favor intenta registrarte de nuevo.</p>';
                            echo "<br><p>Para regresar por favor de <a href='index.php'>clic aqui</a></p>";
//            header("Location: index.php?registrado=no");
                        }
                    } //Si no estan vacios ELSE
//Si no se pulso el boton registrar
                } else {
                    echo "<p>Favor ve a la pagina pricipal y registrate</p>";
                    echo "<br><p>Para regresar por favor de <a href='index.php'>clic aqui</a></p>";
//    header("Location: index.php?registrado=no");
                }
                ?>
            </div> 
        </div>
    </body>
</html>
