<?php
$titulo='Contacto:';
$contenido='Teléfono: 2-87-84-21 <br> e-mail: ejercicio@gmail.com <br> Dirección: Benito Juares No. 293, Col. Municipal, <br> C.P. 50281, <br> Toluca,Estado de México';

$variables=array('titulo'=>$titulo,'contenido'=>$contenido);

//view('home',compact('titulo','variables'));
view('contactar',$variables);
?>