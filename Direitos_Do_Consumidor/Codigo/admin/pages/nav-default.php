<?php
session_start();
$mail=$_SESSION['email'];
include "bd.php";
$nome=getNome("$mail");
?>


<?php
/**
 * Created by PhpStorm.
 * User: Francisco Libele
 * Date: 10/24/2017
 * Time: 10:32 PM
 */

echo "
     <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\" >
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">DC Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class=\"nav navbar-top-links navbar-right\">

                <!-- /.dropdown -->


                <!-- /.dropdown -->
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-user\">
                        <li><a href=\"#\"><i class=\"fa fa-user fa-fw\" ></i> ".$nome."</a>  
                        
                        </li>
                        <li><a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Configurações </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li><a href=\"login.php\"><i class=\"fa fa-sign-out fa-fw\"></i> Sair</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            
            <!-- /.navbar-top-links -->

            <div class=\"navbar-default sidebar\" role=\"navigation\">
                <div class=\"sidebar-nav navbar-collapse\">
                    <ul class=\"nav\" id=\"side-menu\">
                        <li class=\"sidebar-search\">
                            <div class=\"input-group custom-search-form\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Pesquisar...\">
                                <span class=\"input-group-btn\">
                                <button class=\"btn btn-default\" type=\"button\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href=\"index.php\"><i class=\"fa fa-dashboard fa-fw\"></i> Dashboard </a>
                        </li>
 
                         <li>
                            <a href=\"usuarios.php\"><i class=\"fa fa-user fa-fw\"></i> Usuários </a>
                             <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"registar.php\">Adicionar</a>
                                </li>
                                <li>
                                    <a href=\"#\">Bloquear</a>
                                </li>
                                  <li>
                                    <a href=\"#\">Remover</a>
                                </li>
                                 <li>
                                    <a href=\"todosusers.php\">Todos</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-bar-chart-o fa-fw\"></i> Estatística <span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"graficos.php\">Gráficos</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=\"tables.html\"><i class=\"fa fa-sitemap fa-fw\"></i> Módulos</a>
                             <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"denuncia.php\">Denúncia</a>
                                </li>
                                <li>
                                    <a href=\"morris.html\">Reclamações</a>
                                </li>
                                  <li>
                                    <a href=\"morris.html\">Sugestões</a>
                                </li>
                            </ul>  
                        </li>
                        <li>
                                    <a href=\"log.php\">Logs</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

";

?>


?>