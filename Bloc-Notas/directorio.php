
<?php 
		if(isset($_POST["crear"])){
			mkdir($_POST["nombre"], 755);
            echo "datos guardados dentro del host";
		}
	?>