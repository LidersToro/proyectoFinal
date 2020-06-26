<?php
session_start();
require_once __DIR__.'/../modelo/EmpresaModelo.php';
print "<!DOCTYPE html>\n";
print "<html lang=\"en\">\n";
print "\n";
print "<head>\n";
print "    <meta charset=\"utf-8\" />\n";
print "    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"../assets/img/apple-icon.png\">\n";
print "    <link rel=\"icon\" type=\"image/png\" href=\"../assets/img/favicon.ico\">\n";
print "    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />\n";
print "    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>\n";
print "    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />\n";
print "    <!--     Fonts and icons     -->\n";
print "    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700,200\" rel=\"stylesheet\" />\n";
print "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" />\n";
print "    <!-- CSS Files -->\n";
print "    <link href=\"../assets/css/bootstrap.min.css\" rel=\"stylesheet\" />\n";
print "    <link href=\"../assets/css/light-bootstrap-dashboard.css?v=2.0.0 \" rel=\"stylesheet\" />\n";
print "    <!-- CSS Just for demo purpose, don't include it in your project -->\n";
print "    <link href=\"../assets/css/demo.css\" rel=\"stylesheet\" />\n";
print "</head>\n";
print "\n";
print "<body>\n";
print "    <div class=\"wrapper\">\n";
print "        <div class=\"sidebar\" data-image=\"../assets/img/sidebar-5.jpg\">\n";
print "            <!--\n";
print "        Tip 1: You can change the color of the sidebar using: data-color=\"purple | blue | green | orange | red\"\n";
print "\n";
print "        Tip 2: you can also add an image using data-image tag\n";
print "    -->\n";
print "    <div class=\"sidebar-wrapper\">\n";
print "        <div class=\"logo\">\n";
print "            <a href=\"#pablo\" class=\"simple-text\">\n";
print "                Delivery SLC (ADMIN)\n";
echo $_SESSION['user'];
print "            </a>\n";
print "        </div>\n";
print "        <ul class=\"nav\">\n";
print "            <li class=\"nav-item active\">\n";
print "                <a class=\"nav-link\" href=\"empresagestion.php\">\n";
print "                    <i class=\"nc-icon nc-chart-pie-35\"></i>\n";
print "                    <p>Gestion de Empresas</p>\n";
print "                </a>\n";
print "            </li>\n";
print "            <li class=\"nav-item\">\n";
print "                <a class=\"nav-link\" href=\"./motoquerogestion.php\">\n";
print "                    <i class=\"nc-icon nc-circle-09\"></i>\n";
print "                    <p>Gestion Motoqueros</p>\n";
print "                </a>\n";
print "            </li>\n";
print "            <li>\n";
print "            <li class=\"nav-item\">\n";
print "                <a class=\"nav-link\" href=\"./useradmin.php\">\n";
print "                    <i class=\"nc-icon nc-circle-09\"></i>\n";
print "                    <p>Gestion de Admin</p>\n";
print "                </a>\n";
print "            </li>\n";
//print "            <li>\n";
//print "                <a class=\"nav-link\" href=\"./reporte.php\">\n";
//print "                    <i class=\"nc-icon nc-pin-3\"></i>\n";
//print "                    <p>Delivery</p>\n";
//print "                </a>\n";
//print "            </li>\n";
//print "            <li class=\"nav-item active active-pro\">\n";
//print "                <a class=\"nav-link active\" href=\"upgrade.html\">\n";
//print "                    <i class=\"nc-icon nc-alien-33\"></i>\n";
//print "                    <p>Upgrade to PRO</p>\n";
//print "                </a>\n";
//print "            </li>\n";
print "        </ul>\n";
print "    </div>\n";
print "</div>\n";
print "<div class=\"main-panel\">\n";
print "    <!-- Navbar -->\n";
print "    <nav class=\"navbar navbar-expand-lg \" color-on-scroll=\"500\">\n";
print "        <div class=\"container-fluid\">\n";
print "            <a class=\"navbar-brand\" href=\"#pablo\"> Gestion de Empresas </a>\n";
print "            <button href=\"\" class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" aria-controls=\"navigation-index\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">\n";
print "                <span class=\"navbar-toggler-bar burger-lines\"></span>\n";
print "                <span class=\"navbar-toggler-bar burger-lines\"></span>\n";
print "                <span class=\"navbar-toggler-bar burger-lines\"></span>\n";
print "            </button>\n";
print "            <div class=\"collapse navbar-collapse justify-content-end\" id=\"navigation\">\n";
print "                <ul class=\"nav navbar-nav mr-auto\">\n";
print "                    <li class=\"nav-item\">\n";
print "                        <a href=\"#\" class=\"nav-link\" data-toggle=\"dropdown\">\n";
print "                            <span class=\"d-lg-none\">Gestion de Usuarios</span>\n";
print "                        </a>\n";
print "                    </li>\n";
print "                </ul>\n";
print "                <ul class=\"navbar-nav ml-auto\">\n";
print "                    <li class=\"nav-item\">\n";
print "                        <a class=\"nav-link\" href=\"#pablo\">\n";
print "                            <span class=\"no-icon\">Perfil</span>\n";
print "                        </a>\n";
print "                    </li>\n";
print "                   \n";
print "                    </li>\n";
print "                    <li class=\"nav-item\">\n";
print "                        <a class=\"nav-link\" href=\"login.html\">\n";
print "                            <span class=\"no-icon\">Cerrar Sesion</span>\n";
print "                        </a>\n";
print "                    </li>\n";
print "                </ul>\n";
print "            </div>\n";
print "        </div>\n";
print "    </nav>\n";
print "    <!-- End Navbar -->\n";
print "    <div class=\"content\">\n";
print "        <div class=\"container-fluid\">\n";
print "            <div class=\"row\">\n";
print "                <div class=\"col-md-12\">\n";
print "                    <div class=\"card strpied-tabled-with-hover\">\n";
print "                        <div class=\"card-header \">\n";
print "                            <h4 class=\"card-title\">Lista de las Empresas Inscritas a nuesto Delivery</h4>\n";
print "                            <p class=\"card-category\">Delivery SLC</p>\n";
print "                            <button type=\"submit\" onclick=\"location.href='RegistrarEmpresa.php'\" class=\"btn btn-info btn-fill pull-left\">Registrar Nueva Empresa</button>\n";
print "                        </div>\n";
print "                        <div class=\"card-body table-full-width table-responsive\">\n";

$Obj = new empresa();
$aux = $Obj->obtenerTodos();
//$aux1 = $Obj->ultimoCodigo();
print "                            <table class=\"table table-hover table-striped\">\n";
print "                                <thead>\n";
print "                                    <th>ID</th>\n";
print "                                    <th>Nombre</th>\n";
print "                                    <th>Correo</th>\n";
print "                                    <th>Contrasena</th>\n";
print "                                    <th>Latitud</th>\n";
print "                                    <th>Longitud</th>\n";
print "                                    <th>Telefono</th>\n";
print "                                    <th>Logo</th>\n";
print "                                    <th>Usuario</th>\n";
print "                                </thead>\n";
print "                                <tbody>\n";
while($fila = $aux->fetch_row()){

print "                                    <tr>\n";
print "                                         <td> $fila[0] </td>\n";
print "                                        <td>$fila[1]</td>\n";
print "                                        <td>$fila[2]</td>\n";
print "                                        <td>$fila[3]</td>\n";
print "                                        <td>$fila[4]</td>\n";
print "                                        <td>$fila[5]</td>\n";
print "                                        <td>$fila[6]</td>\n";
echo '                                        <td><img src="data:image/jpeg;base64,'.base64_encode( $fila[7] ).'"height="200" width="200" class="img-thumnail"/></td>';
print "                                        <td><b>$fila[8]</b></td>\n";
print "                                        <td class=\"td-actions text-right\">\n";
//$_SESSION['id'] = $fila[0];
//$_SESSION['nomb'] = $fila[1];
//$_SESSION['pass'] = $fila[2];
print "                                            <button type=\"submit\" onclick=\"location.href='EditarEmpresa.php ? pid=$fila[0]&pnombre=$fila[1]&pcorreo=$fila[2]&pcontrasena=$fila[3]&platitud=$fila[4]&plongitud=$fila[5]&ptelefono=$fila[6]&pusuario=$fila[8]'\" rel=\"tooltip\" title=\"Editar\" name = \"editar$fila[0]\" value = \"$fila[0]\" class=\"btn btn-info btn-simple btn-link\">\n";
print "                                                <i class=\"fa fa-edit\"></i>\n";
print "                                            </button>\n";
print "                                            <button type=\"button\" onclick=\"location.href='../controlador/controladorBorrarEmpresa.php ? pid=$fila[0]'\" rel=\"tooltip\" title=\"Eliminar\" name = \"eliminar$fila[0]\" class=\"btn btn-danger btn-simple btn-link\">\n";
print "                                                <i class=\"fa fa-times\"></i>\n";
print "                                            </button>\n";
print "                                        </td>\n";
print "                                    </tr>\n";
print "                                    <tr>\n";
}
/*for ($i = 0; $i <= $aux1; $i++)
{
if(isset($_POST['editar'.$i]))
{
    $Obj = new admin();
    $var = $Obj->buscarCuenta($_POST['editar'.$i]);
    $ej = $var->fetch_row();
    $_SESSION['id'] = $ej[0];
    $_SESSION['nomb'] = $ej[1];
}
}*/
/*for ($i = 1; $i <= $aux1; $i++)
  {
    if ($_POST['editar'.$i])
    {
    $Obj = new admin();
    $var = $Obj->buscarCuenta($_POST['editar'.$fila[0]);
    $ej = $var->fetch_row();
    $_SESSION['id'] = $ej[0];
    $_SESSION['nomb'] = $ej[1];
    }
  }*/

print "                                </tbody>\n";
print "                            </table>\n";
print "                        </div>\n";
print "                    </div>\n";
print "                </div>\n";
print "            </div>\n";
print "        </div>\n";
print "    </div>\n";
print "    <footer class=\"footer\">\n";
print "        <div class=\"container-fluid\">\n";
print "            <nav>\n";
print "                <p class=\"copyright text-center\">\n";
print "                    ©\n";
print "                    <script>\n";
print "                        document.write(new Date().getFullYear())\n";
print "                    </script>\n";
print "                    <a href=\"dashboard.html\">Landing Web</a>, la mejor empresa de desarrollo web.\n";
print "                </p>\n";
print "            </nav>\n";
print "        </div>\n";
print "    </footer>\n";
print "        </div>\n";
print "    </div>";
print "    </html>";
?>
