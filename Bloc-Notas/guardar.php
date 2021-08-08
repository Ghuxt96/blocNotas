<?php
$fi=fopen("archivo.txt","a")
or die("problema al crear achivo");
fwrite($fi,"Datos:");
fwrite($fi,"\n");
fwrite($fi,$_POST['texto']."\n");
fwrite($fi,"--------------------------\n\n");
fclose($fi);
echo "datos almacenados en el host";
?>