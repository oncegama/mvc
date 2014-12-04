<?php
$titulo='Bienvenidos al Home';
$contenido='.......';

$variables=array('titulo'=>$titulo,'contenido'=>$contenido);

//view('home',compact('titulo','variables'));
view('home',$variables);

?>