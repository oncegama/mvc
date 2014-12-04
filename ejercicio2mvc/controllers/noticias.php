<?php
$titulo='Noticias:';
$contenido='La fecha de hoy 13 de Octubre de 2014';

$variables=array('titulo'=>$titulo,'contenido'=>$contenido);

//view('home',compact('titulo','variables'));
view('noticias',$variables);
?>