<html>
	<head>
		<title>||FRANKERSEARCH||</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="author" content="colorlib.com">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<link href="./main.css" rel="stylesheet" />	
		<link rel="icon" type="image/x-icon" href="./img/iconsearch.svg" />
	</head>
	
	<body>	
		<div class="s003">
			<?php
				session_start();

				$message = ''; 
				$arrLinestxt= array();
				$query= '';
				$url='https://cse.google.com/cse?cx=40654be97a6768f18&q=';
				$urlcompleta='';
				$recorridoForeach=0;
				$arrUrls= array();
				$recorridoForeach2=0;


				if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload'){
					if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK){

						$fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
						$fileName = $_FILES['uploadedFile']['name'];
						$fileSize = $_FILES['uploadedFile']['size'];
						$fileType = $_FILES['uploadedFile']['type'];
						$fileNameCmps = explode(".", $fileName);
						$fileExtension = strtolower(end($fileNameCmps));
						$newFileName = md5(time() . $fileName) . '.' . $fileExtension;				
						$allowedfileExtensions = 'txt';		

						if ($fileExtension==$allowedfileExtensions){
							
							$uploadFileDir = './uploaded_files/';
							$dest_path = $uploadFileDir . $newFileName;
							if(move_uploaded_file($fileTmpPath, $dest_path)) {				
			
								echo '<br/><br/>';
								$fp = fopen($dest_path, "r");
								$cont=1;
								while(!feof($fp)) {
									$linea = fgets($fp);
									if(!ctype_space($linea)){		
										echo 'Consulta '.$cont.': '.$linea."<br /><br />";
										array_push($arrLinestxt,$linea);
									}
									else {
										echo 'Linea '.$cont.': LINEA VACIA'.$linea."<br />";
									}
									$cont++;
								}
								fclose($fp);	
							}
							
							else {
							$message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
							}
						}

						else{		
							echo "
								<script>
									alert('Formato invalido, solo se admiten archivos de texto .txt');
									location.href='./index.php';
								</script>
							";
						}
					}


					else{
						$message = 'There is some error in the file upload. Please check the following error.<br>';
						$message .= 'Error:' . $_FILES['uploadedFile']['error'];
					}
				}
				foreach($arrLinestxt as $consultas){
					$cadenaNum= strval($recorridoForeach);
					$query= str_replace(' ','+',$consultas);
					//var_dump($cadenaNum);
					echo '<br/>';
					//echo 'Armando el query: <br/>';
					//var_dump($query);
					echo '<br/>';
					$urlcompleta=$url.$query;
					//var_dump($urlcompleta);
					echo '<br/><br/>';
					array_push($arrUrls,$urlcompleta);
					
					$recorridoForeach++;
					
				}
				$jsonArrUrls= json_encode($arrUrls);
				echo '<br/><br/>';
				//var_dump($jsonArrUrls);
				session_destroy();
			?>
		
		</div>
		
		<script>
			var jsonUrls= <?php echo $jsonArrUrls?>
		</script>
		<script type='text/javascript' src='./main.js'></script>
	</body>
</html>






