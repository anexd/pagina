<?php

#cabeçalho
 include  'header.php';

# lista conteúdo


 
if(isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
} 
else{
	$pagina = 'home';
}

switch($pagina){
	case 'home': include 'views/home.php'; break; 
	case 'estudos': include 'views/estudos.php'; break;
	case 'opencv': include 'views/opencv.php'; break; 
	case 'multimidias': include 'views/multimidia.php'; break; 
	case 'fale-conosco': include 'views/fale-conosco.php'; break; 
	 
	default: include 'views/home.php'; break; 

}
 #rodapé
 include 'footer.php';