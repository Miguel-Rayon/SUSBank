<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/333b9b8f44.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../configuracion/css/estilos.css">
    <style>
    /* posicion del texto del navbar */
    .navbar-nav {
    width: 100%;
    text-align: center;
        }

    .navbar-nav > li {
        float: none;
        display: inline-block;
        }
    /* hacer a las imagenes del carrusel responsivas */
    .carousel-inner img {
        width: 100%;
        height: 100%;
    }
    </style>
    <title>SUS BANK</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <!-- logo -->
    <a class="navbar-brand" href="#">
        <img src="../img/logo.png" alt="logo" style="width:50px;">
    </a>
     <!-- Navbar text-->
    <span class="navbar-text">
    <dt>SUS Bank</dt>    
    </span>
    <span class="navbar-text">
    ㅤㅤ    
    </span>
    <span class="navbar-text">
    ㅤㅤ    
    </span>
    
    <!-- Links -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
       
        <li class="nav-item">
            <!-- dirige a la pagina:  -->
            <a class="nav-link" href="#">Personas</a>
        </li>
        <span class="navbar-text">
        ㅤㅤ    
        </span>
        <li class="nav-item">
            <!-- dirige a la pagina:  -->
            <a class="nav-link" href="#">Empresas</a>
        </li>     
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <span class="navbar-text">
            ㅤㅤ    
            </span>
            <li class="nav-item"><a></a>ㅤㅤ</li>
            <li class="nav-item"><a></a>ㅤㅤ</li>
            <li class="nav-item"><a></a>ㅤㅤ</li>
            <li class="nav-item"><a></a>ㅤㅤ</li>
            <li class="nav-item"><i class="fa-solid fa-user" ></i><a href="#" class="nav-link"><small>Hazte cliente</small></a></li>
            <li class="nav-item"><i class="fa-solid fa-user-check"></i><a href="#" class="nav-link"><small>Acceso</small> </a></li>
            <li class="nav-item"><a></a>ㅤㅤ</li>
            <li class="nav-item"><i class="fa-solid fa-question"></i><a class="nav-link" href="#"><small>Sobre Nosotros</small></a></li>
        </ul>
    </div>  
    </nav>
    <!-- Carrusel de imagenes -->
    <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="../img/Vimprueb1.jpeg" alt="Img1" class="img-fluid">
        <div class="carousel-caption">
            <h3>Lorem Ipsum</h3>
            <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
        </div>   
        </div>
        <div class="carousel-item">
        <img src="../img/Vimprueb2.jpeg" alt="Img2" class="img-fluid">
        <div class="carousel-caption">
            <h3>Lorem Ipsum</h3>
            <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
        </div>   
        </div>
        <div class="carousel-item">
        <img src="../img/Vimprueb3.jpeg" alt="Img3" class="img-fluid">
        <div class="carousel-caption">
            <h3>Lorem Ipsum</h3>
            <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
        </div>   
        </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
    </div>
    <br>

    <div class="contenedor_grid">
		<div class="contenedor_xd">
			<div class="cardd" style="background-image: url('../img/card_prueba.jpg')">
				<div class="textos">
					<h3>Lorem ipsum</h3>
					<button class="boton">Saber Más</button>
				</div>
			</div>
			<div class="cardd" style="background-image: url('../img/card_prueba.jpg')">
				<div class="textos">
					<h3>Lorem ipsum</h3>
					<button class="boton">Saber Más</button>
				</div>
			</div>
			<div class="cardd" style="background-image: url('../img/card_prueba.jpg')">
				<div class="textos">
					<h3>Lorem ipsum</h3>
					<button class="boton">Saber Más</button>
				</div>
			</div>

			<div class="cardd" style="background-image: url('../img/card_prueba.jpg')">
				<div class="textos">
					<h3>Lorem ipsum</h3>
					<button class="boton">Saber Más</button>
				</div>
			</div>
			<div class="cardd" style="background-image: url('../img/card_prueba.jpg')">
				<div class="textos">
					<h3>Lorem ipsum</h3>
					<button class="boton">Saber Más</button>
				</div>
			</div>
			<div class="cardd" style="background-image: url('../img/card_prueba.jpg')">
				<div class="textos">
					<h3>Lorem ipsum</h3>
					<button class="boton">Saber Más</button>
				</div>
			</div>
		</div>

		<div class="banner" style="background-image: url('../img/card_prueba.jpg')">
			<h3>Lorem ipsum</h3>
			<ul>
				<li>Lorem ipsum</li>
				<li>Lorem ipsum</li>
				<li>Lorem ipsum</li>
				<li>Lorem ipsum</li>
				<li>Lorem ipsum</li>
				<li>Lorem ipsum</li>
			</ul>
			<button class="boton">Saber Más</button>
		</div>
	</div>
    <!-- Card Banner 1-->
    <div class="cards-banner-one">
      <div class="content">
        <h2>Lorem ipsum</h2>
        <!-- lorem 20 -->
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, amet dolorem! 
            Vitae amet, accusamus neque reprehenderit quidem commodi magni? Obcaecati!</p>
            <input type="button" value="Leer Más">
      </div>
    </div>
    <div class="cards-banner-one">
      <div class="content">
        <h2>Lorem ipsum</h2>
        <!-- lorem 20 -->
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, amet dolorem! 
            Vitae amet, accusamus neque reprehenderit quidem commodi magni? Obcaecati!</p>
            <input type="button" value="Leer Más">
      </div>
    </div>

    <!-- Cards -->
    <div class="Body_de_la_pagina">
        <div class="container_card">
                <div class="card c1">
                    <div class="icon">
                    <i class="fa-solid fa-people-group"></i>
                    </div>
                    <div class="descripcion">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae repellendus officia eius iure, id explicabo 
                            perspiciatis fugit neque fuga a distinctio nobis nemo consectetur, ad tempore nihil tempora modi molestias minus 
                            nulla voluptas veritatis minima temporibus? Fugit cumque, error voluptas delectus consequatur nostrum tempore, explicabo 
                            omnis ducimus veniam perferendis repellendus.</p>
                            <input type="button" value="Leer Más">
                    </div>
                </div>
                <div class="card c2">
                    <div class="icon">
                    <i class="fa-solid fa-wallet"></i>
                    </div>
                    <div class="descripcion">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae repellendus officia eius iure, id explicabo 
                            perspiciatis fugit neque fuga a distinctio nobis nemo consectetur, ad tempore nihil tempora modi molestias minus 
                            nulla voluptas veritatis minima temporibus? Fugit cumque, error voluptas delectus consequatur nostrum tempore, explicabo 
                            omnis ducimus veniam perferendis repellendus.</p>
                            <input type="button" value="Leer Más">
                    </div>
                </div>
                <div class="card c3">
                    <div class="icon">
                    <i class="fa-solid fa-tags"></i>
                    </div>
                    <div class="descripcion">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae repellendus officia eius iure, id explicabo 
                            perspiciatis fugit neque fuga a distinctio nobis nemo consectetur, ad tempore nihil tempora modi molestias minus 
                            nulla voluptas veritatis minima temporibus? Fugit cumque, error voluptas delectus consequatur nostrum tempore, explicabo 
                            omnis ducimus veniam perferendis repellendus.</p>
                            <input type="button" value="Leer Más">
                    </div>
                </div>
        </div>
    </div>

    <!--Pie de Pagina-->
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="../img/logo.png" alt="Logo" style="width:120px;">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>SUS Bank</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
</body>
</html> 