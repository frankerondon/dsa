<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
	<head>
		<title>||FRANKERSEARCH||</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="author" content="colorlib.com">
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
		<link href="./main.css" rel="stylesheet" />	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type='text/javascript' src='./main.js'></script>
		<!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
		<link rel="icon" type="image/x-icon" href="./img/iconsearch.svg" />
		
	</head>
	
	<body>
		<div class="s003">
			<form method="POST" action="upload.php" enctype="multipart/form-data">
				
				<!--
				<h1 align="center">NOMBRE DEL BUSCADOR</h1>				
				-->
				<br/><br/><br/>
				<img src="./img/logo5.png" class="centeer">
				
				<main class="main_full">
					<div class="container">
						<div class="panel">
							<div class="button_outer">
								<div class="btn_upload">
									<input type="file" name="uploadedFile" id="upload_file" accept=".txt"/>
									Subir .txt
								</div>
							</div>
						</div>
						<div class="error_msg"></div>
						<div class="estiloSubmit">
							<input type="submit" name="uploadBtn" value="Upload" />
						</div>	
					</div>	
				</main>
				
				<h1 align="center">INSTRUCCIONES</h1>
				<br/><br/>
				
				
				<h3 align="center">Escriba y redacte su consulta a realizar en un archivo de texto</h3>
				<br/><br/><br/>
				<h3 align="center">Presionar el boton "Subir .txt" para cargar archivos de texto</h3>
				<br/><br/><br/>
				<h3 align="center">Habilitar las pestañas o ventanas emergente en los navegadores</h3>
				<br/><br/><br/>
				<h3 align="center">Instrucciones Para Chrome</h3>
				<br/>
				<img src="./img/ch1.png" class="centeer">
				<br/><br/><br/>
				<h3 align="center">Instrucciones Para Firefox</h3>
				<br/>
				<img src="./img/fx1.png" class="centeer">
				<br/><br/><br/>
				<h3 align="center">Instrucciones Para Opera</h3>
				<br/>
				<img src="./img/op1.png" class="centeer">
				<br/><br/><br/>
				<h3 align="center">Instrucciones Para Microsoft Edge</h3>
				<br/>
				<img src="./img/ed1.png" class="centeer">
				<br/><br/>
			</form>
			
			
			
			
			
			
			
			
		</div>
		
		
		
		  <div class="lineHorizontal"></div>
		
		
		
		<footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © franker.dev 2021</div>
					<br/>
                    <div class="col-lg-4 my-3 my-lg-0">
						<!--  
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
						-->
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/frank-rondon-b88013144/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
						<a class="btn btn-dark btn-social mx-2" href="https://github.com/frankerondon" target="_blank"><i class="fab fa-github"></i></a>
						<a class="btn btn-dark btn-social mx-2" href="https://www.youtube.com/channel/UCM-vyup3--9zLjKUK6Jv_Nw" target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                    
                </div>
            </div>
        </footer>
		
		
		<script>
			var btnUpload = $("#upload_file");
			btnUpload.on("change", function(e){
				$(".error_msg").text("ARCHIVO CARGADO");
			});
		</script>
		
	</body>
</html>