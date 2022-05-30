<!doctype html>
<html lang="en">

<head>
    <title>Inicio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- jquery -->
    <script src="../js/jquery-3.6.0.min.js"></script>

    <!-- Imagen de logo en la pestaña de la página -->
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">

    <!-- css -->
    <link rel="stylesheet" href="../css/headers.css">
    <link rel="stylesheet" href="../css/footers.css">
    <link rel="stylesheet" href="../css/entrenador.css">
</head>

<body>
    <div class="container-fluid" style="background-image: url('../img/banner.jpg');background-repeat: no-repeat;background-size: cover; height: auto;">
        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
                <a href="index.html" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                    <img src="../img/logo.png" class="bi me-2" width="140">
                </a>

                <div class="col-md-3 text-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="bg-transparent border-transparent" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <img src="../img/jesus.jpg" alt="entrenador" width="70" class="rounded-circle">
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Usuario</h5>
                                </div>
                                <div class="modal-body text-center">
                                    <a href="#">Ver perfil</a><br>
                                    <a href="#">Configuración</a><br>
                                    <a href="../php/cerrarSesion.php">Cerrar sesión</a>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>
    <nav class="container-fluid bg-dark">
        <div class="container">
            <ul class="row">
                <li class="col-2">
                    <a href="index.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                      </svg> Inicio</a>
                </li>
                <li class="col-2">
                    <a href="entrenadores.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                  </svg> Entrenadores</a>
                </li>
                <li class="col-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-pulse-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.475 9C2.702 10.84 4.779 12.871 8 15c3.221-2.129 5.298-4.16 6.525-6H12a.5.5 0 0 1-.464-.314l-1.457-3.642-1.598 5.593a.5.5 0 0 1-.945.049L5.889 6.568l-1.473 2.21A.5.5 0 0 1 4 9H1.475ZM.879 8C-2.426 1.68 4.41-2 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C11.59-2 18.426 1.68 15.12 8h-2.783l-1.874-4.686a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8H.88Z"/>
                      </svg><a href="jugadores.html"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-pulse-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.475 9C2.702 10.84 4.779 12.871 8 15c3.221-2.129 5.298-4.16 6.525-6H12a.5.5 0 0 1-.464-.314l-1.457-3.642-1.598 5.593a.5.5 0 0 1-.945.049L5.889 6.568l-1.473 2.21A.5.5 0 0 1 4 9H1.475ZM.879 8C-2.426 1.68 4.41-2 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C11.59-2 18.426 1.68 15.12 8h-2.783l-1.874-4.686a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8H.88Z"/>
                  </svg>  Jugadores</a></li>
                <li class="col-2">
                    <a href="usuarios.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-postcard-fill" viewBox="0 0 16 16">
                    <path d="M11 8h2V6h-2v2Z"/>
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm8.5.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7ZM2 5.5a.5.5 0 0 0 .5.5H6a.5.5 0 0 0 0-1H2.5a.5.5 0 0 0-.5.5ZM2.5 7a.5.5 0 0 0 0 1H6a.5.5 0 0 0 0-1H2.5ZM2 9.5a.5.5 0 0 0 .5.5H6a.5.5 0 0 0 0-1H2.5a.5.5 0 0 0-.5.5Zm8-4v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5Z"/>
                  </svg>  Gestión de usuarios</a></li>
                <li class="col-2">
                    <a href="mensajes.html"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                  </svg>  Mensajes</a></li>
            </ul>
        </div>
    </nav>

<?php include_once "../php/databaseManagement.inc.php";

    if (count($_POST) > 0) {
        //Edad
        list($ano,$mes,$dia) = explode("-",$_POST["fecnac"]);
        $ano_diferencia  = date("Y") - $ano;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia   = date("d") - $dia;
        if ($dia_diferencia < 0 || $mes_diferencia < 0){
            $ano_diferencia--;
        }
        //Tipo de socio
        $tipo="";
        $socio=array_key_exists("socio",$_POST) ? $_POST["socio"] : "";
        $presidente=array_key_exists("presidente",$_POST) ? $_POST["presidente"] : "";
        $administrador=array_key_exists("administrador",$_POST) ? $_POST["administrador"] : "";
        if($socio!="" || $administrador=="" && $presidente=="" && $socio==""){
            $tipo .= "socio";
        }
        if($presidente!="" && $socio!=""){
            $tipo .= ",".$_POST["presidente"];
        }else if($presidente!="" && $socio==""){
            $tipo .= $_POST["presidente"];
        }
        if($administrador!="" && ($presidente!="" || $socio!="")){
            $tipo .= ",".$_POST["administrador"];
        }else if($administrador!="" && $presidente=="" && $socio==""){
            $tipo .= $_POST["administrador"];
        }
        //comprobación
        if($_POST["usuario"]=="" || $_POST["contrasena"]=="" || $_POST["nombre"]=="" || $_POST["apellidos"]=="" || $_POST["dni"]=="" || $_POST["correo"]=="" || $_POST["telefono"]=="" || $_POST["fecnac"]=="" || $_POST["num_miembros"]==""){
            
            echo "Debe rellenar todos los campos";

        }else if($ano_diferencia<=14){

            echo "Debe tener mas de 14 años";

        }else{

            insertarUsuario($_POST["usuario"], $_POST["contrasena"], $_POST["nombre"], $_POST["apellidos"], $_POST["dni"], $tipo, $_POST["correo"], $_POST["telefono"], $_POST["fecnac"], $_POST["num_miembros"]);
            header("Location: index.php");

        }
    }
    ?>
    <article>
        <div class="container">
            <h4 class="mb-3 text-center">Información</h4>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data" id="formRegistro">
                <table>
                    <tr>
                        <td>
                            <label for="nombre">Usuario</label>
                        </td>
                        <td>
                            <input type="text" class="form-control" name="usuario" placeholder="USUARIO" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nombre">Contraseña</label>
                        </td>
                        <td>
                            <input type="text" class="form-control" name="contrasena" placeholder="CONTRASEÑA" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nombre">Nombre</label>
                        </td>
                        <td>
                            <input type="text" class="form-control" name="nombre" placeholder="NOMBRE" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="apellidos">Apellidos</label>
                        </td>
                        <td>
                            <input type="text" class="form-control" name="apellidos" placeholder="APELLIDOS" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="dni">DNI</label>
                        </td>
                        <td>
                            <input type="text" class="form-control" name="dni" placeholder="DNI" required><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="correo">Correo</label>
                        </td>
                        <td>
                            <input type="text" class="form-control" name="correo" placeholder="CORREO" required><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="correo">Fecha de nacimiento</label>
                        </td>
                        <td>
                            <input type="date" class="form-control" name="fecnac" required><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="telefono">Telefono</label>
                        </td>
                        <td>
                            <input type="text" class="form-control" name="telefono" placeholder="TELEFONO" required><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="num_miembros">Miembros de la familia</label>
                        </td>
                        <td>
                            <input type="number" class="form-control" name="num_miembros" placeholder="NUMERO DE MIEMBROS" min="1" required><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label for="tipo">Tipo (Debe tener mínimo un roll, sino se le asignará socio)</label>
                        </td>
                        <td>
                            Socio <input name="socio" id="socio" value="socio" type="checkbox">
                            Presidente <input name="presidente" id="presidente" value="presidente" type="checkbox">
                            Administrador <input name="administrador" id="administrador" value="administrador" type="checkbox"><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Enviar">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    </article>

    <footer class="container-fluid bg-dark text-light p-5">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <h5>Redes</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                              </svg>
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                              </svg>
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pinterest" viewBox="0 0 16 16">
                                <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"/>
                              </svg>
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                              </svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>

                <div class="col-4 offset-1">
                    <form>
                        <h5>!ATENTOS A NUESTRAS NOVEDADES¡</h5>
                        <p>Introduce tu correo para mantenerte informado de todas nuestras novedades.</p>
                        <div class="d-flex w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center py-4 border-top">
            <p>&copy; 2021 Company, Inc. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/modal.js"></script>
    <script src="../js/entrenador.js"></script>
</body>

</html>