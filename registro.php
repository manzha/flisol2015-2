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
            <div class="span7">
                <h1><a href="index.php">FLISoL 2015, Ciudad Madero.</a></h1>
            </div>
        </header>
        <div class="container-fluid full-width">
            <div class="row-fluid">
                <div class="span9">
                    <section id="registro">
                        <div class="page-header">
                            <h1>Registro al evento</h1>
                        </div>
                        <p>Este registro es para confirmar tu asistencia al evento FLISoL Madero 2015. </p>
                        <p>Los campos marcados con * son obligatorios, si tienes alguna duda puedes contactarnos enviandonos un <a href="mailto:chapter@itcm.acm.org">mail</a> ó por <a href="https://twitter.com/acm_itcm">twitter</a></p>
                        <form action="registroPOST.php" method="post" target="_self">
                            <label><strong><i class="icon-arrow-right"></i>Nombre: *</strong></label>
                            <input type="text" placeholder="Apellidos Nombre" name="txtNombre">
                            <span class="help-block">Ej. Muñoz Peréz José.</span>
                            <span class="help-block">El nombre que escribas es el que se usará para elaborar el diploma.</span>
                            <label><strong><i class="icon-arrow-right"></i>Correo: *</strong></label>
                            <input type="text" placeholder="miCorreo@example.com" name="txtCorreo">

                            <label><i class="icon-arrow-right"></i><strong>Género: *</strong></label>
                            <label class="radio">
                                <input type="radio" name="rbtnGenero" id="rbtnGenero1" value="Masculino" checked>
                                Masculino
                            </label>
                            <label class="radio">
                                <input type="radio" name="rbtnGenero" id="rbtnGenero2" value="Femenino">
                                Femenino
                            </label>
                            <label><strong><i class="icon-arrow-right"></i>Ocupación: *</strong></label>
                            <select name="selOcupacion">
                                <option value="Estudiante">Estudiante</option>
                                <option value="Docente">Docente</option>
                                <option value="Trabajador">Trabajador</option>
                                <option value="Otro">Otro</option>
                            </select>
                            <label><strong><i class="icon-arrow-right"></i>Escuela/Organización de procedencia: *</strong></label>
                            <select name="selEscuela">
                                <option value="Ninguna" selected>Ninguna</option>
                                <option value="Instituto de Estudios Superiores de Tamaulipas">Instituto de Estudios Superiores de Tamaulipas</option>
                                <option value="Instituto Tecnológico de Ciudad Madero">Instituto Tecnológico de Ciudad Madero</option>
                                <option value="Instituto Tecnológico de Estudios Superiores de Monterrey">Instituto Tecnológico de Estudios Superiores de Monterrey</option>
                                <option value="Instituto Tecnológico Superior de Álamo Temapache">Instituto Tecnológico Superior de Álamo Temapache</option>
                                <option value="Instituto Tecnológico Superior de Tantoyuca">Instituto Tecnológico Superior de Tantoyuca</option>
                                <option value="Universidad Autónoma de San Luis Potosí">Universidad Autónoma de San Luis Potosí</option>
                                <option value="Universidad Autónoma de Tamaulipas">Universidad Autónoma de Tamaulipas</option>
                                <option value="Universidad del Noreste">Universidad del Noreste</option>
                                <option value="Universidad del Valle de México">Universidad del Valle de México</option>
                                <option value="Universidad Politécnica de Altamira">Universidad Politécnica de Altamira</option>
                                
                                <option value="Otro">Otro</option>
                            </select>
                            <label><strong><i class="icon-arrow-right"></i>Escuela de procedencia (otra/opcional):</strong></label>
                            <input type="text" placeholder="Nombre de la escuela" name="txtEscuela">
                            <label><i class="icon-arrow-right"></i><strong>Diploma impreso: </strong></label>
                            <label class="radio">
                                <input type="radio" name="rbtnDiploma" id="rbtnDiploma1" value="Si">
                                Si
                            </label>
                            <label class="radio">
                                <input type="radio" name="rbtnDiploma" id="rbtnDiploma2" value="No" checked>
                                No
                            </label>
                            <span class="help-block">Recibir el diploma impreso requiere una aportación de $10.00 M.N.</span>
                            <label><strong><i class="icon-arrow-right"></i>Comentarios: (opcional)</strong></label>
                            <p>Cuentanos que esperas del evento, que conferencias te gustaría escuchar, que te gustaría incluyeramos en el proximo FLISoL</p>
                            <textarea rows="4" class="span8" name="txtComentarios"></textarea>
                            <br>
                            <input class="btn" name="registrar" type="submit" value="Registrar" />
                        </form>
                    </section>
                </div><!-- Span 9 -->
            </div> <!-- row fluid -->
        </div>
    </body>
</html>