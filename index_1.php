<?php
require_once '../connect/dbconfig.php';
$query = sprintf("SELECT count(*) FROM flisol_asistentes WHERE fecha = 2013");
$result = mysql_query($query);
$row = mysql_fetch_array($result);
$asistentes = $row[0];
mysql_close();
if (isset($_GET["registrado"])) {
    if ($_GET['registrado'] == "yes") {
        
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>FLISoL 2013 Ciudad Madero, Tamaulipas, México</title>
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
            /*            #patrocinadores img:hover {
                            -webkit-filter: grayscale(0%);
                            -webkit-transition: all 1s ease;
                            -moz-transition: all 1s ease;
                            -o-transition: all 1s ease;
                            -ms-transition: all 1s ease;
                            transition: all 1s ease;
                        }
            
                        #patrocinadores img {
                            -webkit-filter: grayscale(50%);
                        }*/
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
                    <h1>FLISoL 2013, Ciudad Madero.</h1>
                    <p>El ITCM celebrará por 4ta ocasión el Festival Lationamericano de Instalación de Software Libre el día 26 de Abril del 2013</p>
                    <h2><small>Ya hay</small> <?php echo $asistentes; ?> <small>asistentes registrados</small></h2>
                </div>
                <div class="span5">
                    <img src="img/logo_flisol.png"/>
                </div>
            </div>
        </header>
        <div class="container-fluid full-width">
            <div class="row-fluid">

                <div class="span3">
                    <ul class="nav nav-tabs nav-stacked" data-spy="affix" data-offset-top="500">
                        <li><a href="#quees"><i class="icon-chevron-right"></i>¿Qué es?</a></li>
                        <li><a href="#lugar"><i class="icon-chevron-right"></i>¿Donde es?</a></li>
                        <li><a href="#agenda"><i class="icon-chevron-right"></i>Horario</a></li>
                        <li><a href="#installfest"><i class="icon-chevron-right"></i>Festival de instalación</a></li>
                        <li><a href="#conferencias"><i class="icon-chevron-right"></i>Conferencias</a></li>
                        <li><a href="#talleres"><i class="icon-chevron-right"></i>Talleres</a></li>
                        <li><a href="#organizadores"><i class="icon-chevron-right"></i>Organizadores</a></li>
                        <li><a href="#patrocinadores"><i class="icon-chevron-right"></i>Patrocinadores</a></li>
                        <!--<li><a href="#estadisticas"><i class="icon-chevron-right"></i>Eventos pasados</a></li>-->
                        <li><a href="#registro"><i class="icon-chevron-right"></i>Registro</a></li>
                        <li><a href="#promociones"><i class="icon-chevron-right"></i>Promociones</a></li>
                        <li><a href="#certificacion"><i class="icon-chevron-right"></i>Certificaciones LINUX</a></li>
                    </ul>
                </div>

                <!--                <div class="span12">
                                    <ul class="nav nav-pills" data-spy="affix" data-offset-top="500">
                                        <li><a href="#quees"><i class="icon-chevron-right"></i>¿Qué es?</a></li>
                                        <li><a href="#lugar"><i class="icon-chevron-right"></i>¿Donde es?</a></li>
                                        <li><a href="#agenda"><i class="icon-chevron-right"></i>Horario</a></li>
                                        <li><a href="#installfest"><i class="icon-chevron-right"></i>Festival de instalación</a></li>
                                        <li><a href="#conferencias"><i class="icon-chevron-right"></i>Conferencias</a></li>
                                        <li><a href="#talleres"><i class="icon-chevron-right"></i>Talleres</a></li>
                                        <li><a href="#organizadores"><i class="icon-chevron-right"></i>Organizadores</a></li>
                                        <li><a href="#patrocinadores"><i class="icon-chevron-right"></i>Patrocinadores</a></li>
                                    </ul>
                                </div>-->
                <div class="span9">
                    <section id="quees">
                        <div class="page-header">
                            <h1>¿Qué es el FLISoL?</h1>
                        </div>
                        <p>El Festival Latinoamericano de Instalación de Software Libre (FLISoL), es el mayor evento de difusión del Software Libre que se realiza desde el año 2005 en diferentes países de toda latinoamerica de manera simultánea. En el año 2012 participaron más de 290 ciudades en 20 países de Latinoamérica.</p>
                        <p>Es una oportunidad para todas aquellas personas interesadas en conocer más acerca del software libre. Participando es posible entrar en contacto con el mundo de la tecnología, la cultura del Software Libre, conocer a otros usuarios, resolver dudas e interrogantes, intercambiar opiniones y experiencias; asistir a charlas y otras actividades programadas.</p>
                    </section>

                    <section id="lugar">
                        <div class="page-header">
                            <h1>¿Dónde es? <small>¿y cómo llego ahí?</small></h1>
                        </div>
                        <p>El evento se realizará en el Instituto Tecnológico de Ciudad Madero.</p>
                        <p>La dirección es:
                            <b>Av. 1o. de Mayo esq. Sor Juana Inés de la Cruz s/n Col. Los Mangos C.P.89440 Cd. Madero Tamaulipas, México</b>
                            <br>
                            Si no sabes como llegar, enfrente de la escuela pasan los autobuses y automóviles de ruta Aguila Madero, Madero Blanco Palmas y Madero Echeverría.
                        </p>
                        <p>Conmutador: 01 (833) 357-48-20 </p>

                        <p class="lead">El evento se realizará en el Gran Salón T2.</p>                        
                    </section>

                    <section id="agenda">
                        <div class="page-header">
                            <h1>Horario. <small>El evento se realizará el Viernes 26 de Abril.</small></h1>
                        </div>
                        <p><img src="img/agenda.png" alt="Agenda FLISOL Madero 2013"/></p>  
                        <p><img src="img/agenda2.png" alt="Agenda FLISOL Madero 2013"/></p>  
                    </section>

                    <section id="installfest">
                        <div class="page-header">
                            <h1>Festival de instalación. <small>¿Qué es y que debo llevar?</small></h1>
                        </div>
                        <p>Si deseas instalar un sistema operativo libre, puedes llevar tu computadora y/ó portatil, ¡nosotros te ayudamos a realizar la instalación! <b>El fin de semana estaremos publicando la información necesaria para poder participar en esta actividad</b></p>
                        <p>Los principales requisitos: </p>
                        <ul>
                            <li>Tener espacio libre en disco duro</li>
                            <li>Tener un respaldo de la información</li>
                            <li>Tener desfragmentado el disco</li>
                            <li>Desear conocer e instalar una distribución libre</li>
                        </ul>

                        <p>Como comentarios: </p>
                        <blockquote>
                            <p>Hay varias cosas que se deben tener en cuenta. Las recomendaciones más habituales son tenerla desfragmentada y tener un respaldo de información. Pero hay cosas que aun no dicen. Para los que no están muy familiarizados con el funcionamiento interno de su computadora, deben saber que un disco duro no puede tener más de 4 particiones primarias. Por lo general los discos duros de una computadora de escritorio solo tienen 1 o 2 (Disco C y D comúnmente). Las laptop son las que representan una "dificultad". Muchas veces las laptops tienen más de 2 particiones primarias (las HP tienen las cuatro, una llamada HPTools, uno de recuperación, otro del SO y la última no recuerdo). ¿Por qué menciono esto? Si su computadora ya tiene las 4 particiones lógicas ocupadas, no será posible instalar un SO libre el día del festival, una partición necesita ser borrada, y esto lleva a perder la información que esta contenga. 
                                ¿Cómo saber cuántas particiones tienen mis discos duros?
                                En W7 pueden darle clic a Inicio > Clic derecho en Equipo > Administrar. Ahí seleccionan Administración de discos. Abajo viene Disco 0. Y se ven algunas divisiones. Cada división representa una partición. 
                                En dado caso de que tengan más de 4, investiguen para que usan cada una. Y la que no sirva anotenla para que ustedes o algún miembro del staff la borre el día del Festival</p>
                        </blockquote>
                    </section>
                    <section id="conferencias">
                        <div class="page-header">
                            <h1>Conferencias. <small>Conoce a nuestros conferencistas</small></h1>
                        </div>
                        <p>Por favor revisa esta información posteriormente, pues estaremos añadiendo más información acerca de los conferencistas.</p>
                        <p>Puedes revisar la agenda para ver las conferencias que tendremos disponibles. Entre los conferencistas invitados se encuentran:</p>
                        <ul>
                            <li>Cinvestav Tamaulipas</li>
                            <li>Ing. Alfredo Brambila Hernández</li>
                            <li>Object Wave</li>
                            <li>Zacatecas (Trabajador del gobierno de Zacatecas)</li>
                        </ul>
                        <p class="lead">Durante la semana estaremos actualizando esta información, dando más detalles de los conferencistas invitados</p>
                    </section>
                    <section id="talleres">
                        <div class="page-header">
                            <h1>Talleres. <small>¿De qué tratarán?</small></h1>
                        </div>
                        <p><b>Para registrate a algún taller es necesario te presentes a la hora indicada en la agenda para registrarte.
                                La información aqui presentada esta sujeta a cambios.</b> Por favor revisa los horarios, así como el lugar donde se impartirá el taller unos días antes del evento para confirmar.</p>
                        <!--                        <h3>Día Jueves 25 de Abril, 2013.</h3>
                                                <p>Los talleres de este día se impartirán en la Sala B del Centro de información (Biblioteca) localizado en el Campus II del ITCM.</p>
                                                <p> Si tienes duda de como llegar no dudes en contactar a los <a href="#organizadores">organizadores</a></p>
                                                <p><img src="img/talleresJueves-1.png" alt="Talleres del Jueves en la Sala B"/></p>-->
                        <h3>Día Viernes 26 de Abril, 2013.</h3>
                        <p>
                            Los talleres de este día se impartirán en 5 diferentes localizaciones. Todas localizadas en el Campus II del ITCM.
                        </p>
                        <p>Si tienes duda de como llegar no dudes en contactar a los <a href="#organizadores">organizadores</a></p>
                        <h4>Laboratorio de computación</h4>
                        <p><img src="img/talleresViernes-1.png" alt="Talleres del Viernes en el LSI"/></p>
                        <p><img src="img/talleresViernes-2.png" alt="Talleres del Viernes en el LP"/></p>
                        <p><img src="img/talleresViernes-3.png" alt="Talleres del Viernes en el LCG"/></p>
                        <p><img src="img/talleresViernes-4.png" alt="Talleres del Viernes en el LTR"/></p>
<!--                        <p><img src="img/talleresViernes-5.png" alt="Talleres del Viernes en el LTR"/></p>-->
                    </section>
                    <section id="organizadores">
                        <div class="page-header">
                            <h1>Organizadores. <small>Conoce a los organizadores</small></h1>
                        </div>
                        <p>
                        <center>
                            <img src="img/acmitcmlogo.png" alt="Capitulo estudiantil ACM ITCM" width="200px"/> 
                            <img src="img/logoisc.png" alt="Departamento de Sistemas" width="200px"/>
                        </center>
                        </p>
                        <p>Si deseas contactar a los organizadores puedes hacerlo al siguiente correo:</p>
                        <ul>
                            <li><a href="mailto:chapter@itcm.acm.org">Capítulo estudiantil ACM ITCM</a> < chapter@itcm.acm.org ></li>
                        </ul>
                    </section>
                    <section id="patrocinadores">
                        <div class="page-header">
                            <h1>Patrocinadores. <small>Conoce quiénes están apoyando el evento</small></h1>
                        </div>
                        <p>
                        <center>
                            <div class="span12">
                                <div class="span6">
                                    <a href="http://portal.latinux.org"><img src="img/latinux-1.png" alt="LATINUX" width="350px"/> </a>
                                </div>
                                <div class="span6">
                                    <a href="http://www.radioxd.com.mx/"><img src="img/radioxd.png" alt="Radio XD: Xtreme Dissonance" width="300px"/></a>
                                </div>
                            </div>
                            <div class="span12">
                                <div class="span6">
                                    <a href="http://www.fsf.org"><img src="img/fsf.png" alt="Free Software Foundation" width="300px"/></a>
                                </div>
                                <div class="span6">
                                    <a href="https://www.facebook.com/postresOhLala"><img src="img/ohlala.png" alt="Oh! Lalá Postres" width="300px"/></a>
                                </div>
                            </div>
                            <div class="span12">
                                <div class="span6">
                                    <a href="http://www.facebook.com/lovelisbrowniescupcakes?group_id=0"><img src="img/lovelis.jpg" alt="Lovelis" width="300px"/></a>
                                </div>
                                <div class="span6">
                                    <a href="http://www.facebook.com/LinkyTam"><img src="img/linkyShop.jpg" alt="LinkyShop. Accesorios Vintage" width="290px"/></a>
                                </div>

                            </div>
                        </center>
                        </p>
                    </section>
<!--                    <section id="estadisticas">
                        <div class="page-header">
                            <h1>Eventos pasados. <small>Conoce las estadisticas de los festivales anteriores.</small></h1>
                        </div>
                    </section>-->
                    <section id="registro">
                        <div class="page-header">
                            <h1>Registro</h1>
                        </div>
                        <p>
                            Registro cerrado.
                        </p>
<!--                        <p class="lead">El registro actualmente se encuentra fuera de servicio y será habilitado el día 17 de Abril.</p>-->
                    </section>
                    <section id="promociones">
                        <div class="page-header">
                            <h1>Promociones</h1>
                        </div>
                        <ul>
                            <li><b>Examen de Diagnóstico</b> de Linux para todos los asistentes que quieran aplicarlo, solo que deben de registrarse en <a href="http://portal.latinux.org">http://portal.latinux.org</a>. Una vez registrados deberán enviarnos su ID al correo chapter@itcm.acm.org</li>
                            <li>Inscrpción gratuita a LATINUX Magazine, solo que deben de registrarse en <a href="http://www.latinuxmagazine.com">http://www.latinuxmagazine.com</a></li>
                        </ul>
                        <p>Además se seleccionarán a los 2 (dos) mejores resultados en el examen de diagnostico de linux y se les otorgará una cortesía para realizar  el examen de Certificación  como Operador Certificado LINUX. Dicho examen tiene un valor aproximado de 290.00 USD</p>
                        <p>Para más información de los examenes y certificaciones, estaremos publicando un poco más de información el día Sabado, 27 de Abril.</p>
                    </section>
                    <section id="certificaciones">
                        <div class="page-header">
                            <h1>Certificaciones</h1>
                        </div>
                        <p>
                            Habrá un examen de diagnóstico, el cual nos puede ayudar para medir nuestro nivel de conocimientos y despúes presentar un Examen de Certificación como Operador Certificado LINUX
                        </p>
                        <p>
                            Puede ver la sección de promociones para obtener más información de los examenes de diagnostico y certificación.
                        </p>
                        <p>
                            Si desea más información acerca de las certificaciones que ofrece LATINUX, puede contactarnos al siguiente correo: chapter@itcm.acm.org
                        </p>
                    </section>
                </div>
            </div> 
        </div>
    </body>
</html>
