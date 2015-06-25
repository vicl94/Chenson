<!--Inicia Menu-->
	<div id="Menu">
    <div class="Logo">
    	<img src="img/Logo-chenson.png" width="50%" />
    </div>
        <ul class="nav clearfix animated">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="../catalogo.php">Catálogo</a></li>
            <li>
                <a href="galeria.php">Tienda</a>
                <div class="container-4">
                    <div class="col4 highlighted">
                        <h3><a target="iframeproductos" href="productos.php?target=preescolar">Preescolar</a></h3>
                    </div>
                    <div class="col1">
                        <h3><a target="iframeproductos" href="productos.php?target=preescolar&genero=nina">Preescolar niña</a></h3>
                        <ul>
                            <li><a target="iframeproductos" href="productos.php?target=preescolar&genero=nina&cuerpo=mochila">Mochila</a></li>
                            <li><a target="iframeproductos" href="productos.php?target=preescolar&genero=nina&cuerpo=mochila con ruedas">Mochila con ruedas</a></li>
                        </ul>
                    </div>
                    <div class="col1">
                        <h3><a target="iframeproductos" href="productos.php?target=preescolar&genero=nino">Preescolar niño</a></h3>
                        <ul>
                            <li><a target="iframeproductos" href="productos.php?target=preescolar&genero=nino&cuerpo=mochila">Mochila</a></li>
                            <li><a target="iframeproductos" href="productos.php?target=preescolar&genero=nino&cuerpo=mochila con ruedas">Mochila con ruedas</a></li>
                            <li><a target="iframeproductos" href="productos.php?target=preescolar&genero=nino&cuerpo=lonchera">Lonchera</a></li>
                            <li><a target="iframeproductos" href="productos.php?target=preescolar&genero=nino&cuerpo=canguro">Canguro</a></li>
                        </ul>
                    </div>
                    <div class="col4 highlighted">
                        <h3><a target="iframeproductos" href="productos.php?target=primaria">Primaria</a></h3>
                    </div>
                    <div class="col1">
                        <h3><a target="iframeproductos" href="productos.php?target=primaria&genero=nina">Primaria Niña</a></h3>
                        <ul>
                            <li><a target="iframeproductos" href="productos.php?target=primaria&genero=nina&cuerpo=mochila">Mochila</a></li>
                            <li><a target="iframeproductos" href="productos.php?target=primaria&genero=nina&cuerpo=mochila con ruedas">Mochila con ruedas</a></li>
                            <li><a target="iframeproductos" href="productos.php?target=primaria&genero=nina&cuerpo=lonchera">Lonchera</a></li>
                            <li><a target="iframeproductos" href="productos.php?target=primaria&genero=nina&cuerpo=lapicero">Lapicero</a></li>
                        </ul>
                    </div>
                    <div class="col1">
                        <h3><a target="iframeproductos" href="productos.php?target=primaria&genero=nino">Primaria Niño</h3>
                        <ul>
                            <li><a target="iframeproductos" href="productos.php?target=primaria&genero=nino&cuerpo=mochila">Mochila</a></li>
                            <li><a target="iframeproductos" href="productos.php?target=primaria&genero=nino&cuerpo=mochila con ruedas">Mochila con ruedas</a></li>
                            <li><a target="iframeproductos" href="productos.php?target=primaria&genero=nino&cuerpo=lonchera">Lonchera</a></li>
                            <li><a target="iframeproductos" href="productos.php?target=primaria&genero=nino&cuerpo=lapicero">Lapicero</a></li>
                        </ul>
                    </div>
                    <div class="col4 highlighted">
                        <h3><a target="iframeproductos" href="productos.php?target=teens">Teens</a></h3>
                    </div>
                    <div class="col1">
                        <h3><a target="iframeproductos" href="productos.php?target=teens&genero=chava">Teens chava</a></h3>
                        <ul>
                            <li><a target="iframeproductos" href="productos.php?target=teens&genero=chava&cuerpo=mochila">Mochila</a></li>
                            <li><a target="iframeproductos" href="productos.php?target=teens&genero=chava&cuerpo=mensajero">Mensajero</a></li>
                            <li><a target="iframeproductos" href="productos.php?target=teens&genero=chava&cuerpo=bolso escolar">bolso escolar</a></li>
                            <li><a target="iframeproductos" href="productos.php?target=teens&genero=chava&cuerpo=neceser">Neceser</a></li>
                            <li><a target="iframeproductos" href="productos.php?target=teens&genero=chava&cuerpo=valija">Valija</a></li>
                        </ul>
                    </div>
                    <div class="col1">
                        <h3>Primaria Niño</h3>
                        <ul>
                            <li><a href="#">Mochila</a></li>
                            <li><a href="#">Mensajero</a></li>
                            <li><a href="#">Canguro</a></li>
                            <li><a href="#">Valija</a></li>
                        </ul>
                    </div>
                </div>	
            </li>
            <li><a href="#">Donde comprar</a></li>
            <li>
                <a href="#">Blog</a>
            </li>
        </ul>
        <!--Buscar-->
        <div id="buscador">
            <script>
				function borracampo(){
				if(document.buscar.buscar.value == "Ingresa el código, marca o tipo de producto")
								   document.buscar.buscar.value = ""} 
								
				function restauracampo(){
				if(document.buscar.buscar.value=="")
				document.buscar.buscar.value="Ingresa el código, marca o tipo de producto"
				}					
			</script>
            <form id="buscar" name="buscar" method="post" action=""  >
            	<label for="buscar"><img src="img/Iconos/Buscar.png" width="5%" /></label>
                <input type="text" name="buscar" onClick="borracampo()" onBlur="restauracampo()" value="Ingresa el código, marca o tipo de producto"  id="buscar"   class="buscar"  />
                <input type="submit" name="Aceptar" id="Aceptar" value="Buscar" class="BotonB" />
            </form>             
         </div>
        
        <div class="login">
        	Login<img src="img/Iconos/login.png" width="10%" />
        </div>
        <div class="carrito">
        	<img src="img/Iconos/carrito.png" width="10%" />
        </div>

         <!--Termina buscar-->
        <br />
         <div class="Lineas">
    		<img src="img/Lineas.png" width="100%" />
   		 </div>	
	</div>
<!--Termina menu--> 