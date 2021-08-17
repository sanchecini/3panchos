<?php

session_start();
if(!isset($_SESSION['id'])){
    header("Location: index.php");
}

$nombre = $_SESSION['nombre'];
$tipo = $_SESSION['tipo'];



include 'includes/header.php';
?>




<body>

    <div id="mi-navlateral" class="nav-lateral">
        <p class="logo">Los Tres Panchos<span class="admin-menu">&#9776;</span></p>
        <p class="logo1"><span class="admin-menu1">&#9776;</span></p>
        <a href="#" class="icon-a"><i class="fa fa-cutlery iconos" ></i>&nbsp;&nbsp;Platillos</a>
        <a href="#" class="icon-a"><i class="fa fa-address-card iconos" ></i>&nbsp;&nbsp;Nosotros</a>
        <a href="#" class="icon-a"><i class="fa fa-clock-o iconos" ></i>&nbsp;&nbsp;Horarios</a>
        <a href="#" class="icon-a"><i class="fa fa-phone iconos" ></i>&nbsp;&nbsp;Contacto</a>
        <a href="#" class="icon-a"><i class="fa fa-list-alt iconos" ></i></i>&nbsp;&nbsp;Encuesta</a>
        <a href="#" class="icon-a"><i class="fa fa-file-text-o iconos" ></i>&nbsp;&nbsp;Footer</a>
        <a href="#" class="icon-a"><i class="fa fa-user-o iconos" ></i>&nbsp;&nbsp;Cuentas</a>

    </div>

    <div id="principal">
        <div class="head">
            <div class="col-div-6">
                <p class="nav">Panel</p>

            </div>
            <div class="perfil">
                <img src="build/img/profile.png" class="perfil-img">
                <p><?php echo $nombre; ?> <i class="fa fa-ellipsis-v puntos"></i></p>
                <div class="perfil-menu" >
                    <p><a href="lol.php"><i class="fa fa-cogs"></i>&nbsp;&nbsp;Configuración</a></p>
                    <p><a href="logout.php"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Cerrar Sesión</a></p>

                </div>

            </div>
            
           

<div class="clearfix"></div>
        </div>
        <div class="contenido">
                
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
                </div>


    </div>
    
</body>

<script type="text/javascript">
    $(".admin-menu").click(function(){
            $("#mi-navlateral").css('width','70px');
            $("#principal").css('margin-left','70px');
            $(".logo").css('display','none');
            $(".logo1").css('display','block');
            $(".logo span").css('visibility','visible');
            $(".logo span").css('margin-left','-10px');
            $(".icon-a").css('visibility','hidden');
            $(".icon-a").css('height','25px');
            $(".iconos").css('visibility','visible');
            $(".iconos").css('margin-left','-8px');
            $(".admin-menu1").css('display','block');
            $(".admin-menu").css('display','none');
        });


     $(".admin-menu1").click(function(){
            $("#mi-navlateral").css('width','300px');
            $("#principal").css('margin-left','300px');
            $(".logo").css('display','block');
            $(".icon-a").css('visibility','visible');
            $(".iconos").css('visibility','visible');
            $(".admin-menu1").css('display','none');
            $(".admin-menu").css('display','block');
        });
    </script>

    <script type="text/javascript">
    
    $(document).ready(function(){
        $(".perfil p").click(function(){
            $(".perfil-menu").toggle();
        });

    });
    
    </script>
</html>