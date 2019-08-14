<?php
/**
 * Script que captura el contenido de una pagina HTML y devuelve todos
 * las direcciones hacia las imágenes que hay en la pagina
 * 
 * Desarrollado por http://www.lawebdelprogramador.com/
 */
 
# especificamos la url a capturar las imágenes
$urlInternet="http://www.lawebdelprogramador.com";
 
/**
 * Función para descargar el contenido de una página web
 * Tiene que recibir la url a descargar.
 * Devuelve el contenido de la pagina o false en caso de no ser una url
 * existente o una redirección.
 */
function get_contentUrl($url)
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	$data = curl_exec($ch);
	$httpcode=curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);
 
	if($httpcode>=200 && $httpcode<300)
		return $data;
	return false;
}
 
if($contenidoWeb=get_contentUrl($urlInternet))
{
	$urls=array();
 
	# creamos una instanacia a DOMDocument
	$doc = new DOMDocument;
	$doc->preserveWhiteSpace = FALSE;
 
	# cargamos la pagina web desdecargada desde la función get_contentUrl()
	@$doc->loadHTML($contenidoWeb);
 
	# buscamos todos los tags del tipo <img ...>
	$anchor_tags = $doc->getElementsByTagName("img");
 
	# recorremos cada uno de los tags encontrados
	foreach ($anchor_tags as $tag)
	{
		# obtenemos la url de las imagenes
		$url=$tag->getAttribute("src");
 
		if(strlen($url)>=4 && substr($url,0,4)=="http")
		{
			# si la url tiene 4 caracteres o mas y empieza por http entendemos que
			# la url es entera... (http://.....)
			$urls[]=$url;
		}elseif(strlen($url) && substr($url,0,1)=="/"){
			# si la url tiene una longitud mayor a 0 y empieza por /
			# le añadimos el dominio delante... (/pagina)
			$urls[]=$urlInternet.$url;
		}else{
			# Si no empieza por http ni por una barra, entendemos que es un nombre
			# de un arhivo... (pagina.html)
			$urls[]=$urlInternet."/".$url;
		}
	}
 
	# eliminamos los valores duplicados del array
	$urls=array_unique($urls);
 
	# ordenamos los valores
	sort($urls);
 
	# mostramos cada uno de los enlaces
	foreach($urls as $url)
	{
		echo "<br>".$url;
	}
}else{
	echo "La página no es correcta, o es una redirección.";
}
?>
	
