<?php
$conexion=mysql_connect('localhost','reysa_7777','Br12es10@#');
mysql_query("SET NAMES 'utf8'");
$resultado=mysql_select_db(reysap_com_mx_clientes);
extract($_REQUEST);
$consulta="insert into clientes values ('$nombre','$direccion','$telefono','$email','$comentario')"; 
$result_consulta=mysql_query($consulta);

$nombre = utf8_decode($_POST['nombre']);
$direccion = utf8_decode($_POST['direccion']);
$telefono = utf8_decode($_POST['telefono']);
$email = utf8_decode($_POST['email']);
$comentario = utf8_decode($_POST['comentario']);

echo "<h3>El Mensaje Que has Enviado Es:</h3>";
echo "<br />";
echo "<p>Nombre: ";
echo $nombre;
echo "<br />";
echo "Direccion: ";
echo $direccion;
echo "<br />";
echo "Telefono: ";
echo $telefono;
echo "<br />";
echo "Email: ";
echo $email;
echo "<br />";
echo "Comentario: ";
echo $comentario;
echo "</p>";

$aquien = "recepcion@reysap.com.mx ";
$asunto = "Has recibido un correo de la página ";
$mensaje = "Has recibido un correo de la página web de ".$nombre." con domicilio en: ".$direccion." y teléfono: ".$telefono." su correo electrónico es: ".$email." y comenta lo siguiente: ".$comentario;

if(mail($aquien,$asunto,$mensaje)){

echo'<script languaje="javascript">
alert("Atenderemos Su Mensaje \n Gracias Por su visita.");
location.href="index.html"</script>'; 
}
else{
echo "Fallo el envio.";
}

?>

