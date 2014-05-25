<?php
$xmlstr = <<<XML
<?xml version="1.0" encoding="UTF-8" ?>
<proyecto>
	<Menu>
		<uno>Inicio</uno>
		<dos>Canciones</dos>
		<tres>Maquetas</tres>
		<cuatro>Contacta</cuatro>
		<cinco>Graffitis</cinco>
		<seis>Eventos</seis>
		<siete>Descargas</siete>
		<ocho>Reproductor</ocho>
	</Menu>
	<submenu>
		<uno>Maquetas</uno>
		<dos>Canciones</dos>
		<tres>Graffittis</tres>
	</submenu>
	<comundes>
		<titulo>Titulo:</titulo>
		<año>Año:</año>
		<artista>Artista:</artista>
		<ciudad>Ciudad:</ciudad>
		<style>Estilo:</style>
		<ficheroup>Fichero a subir: </ficheroup>
	</comundes>
	<contenido>
		<inicio>
			<titinicio>
				La historia del Rap
			</titinicio>
			<textoini>El rap surge como un estilo musical en los barrios negros y latinos de Nueva York en la década de 1970, como la expresión desde el sonido y las melodías de la cultura hip hop, que agrupa corrientes estéticas como el graffiti, el breakdance o el scratch. Desde allí se lanzó al mundo, tomando diferentes peculiaridades regionales en cada país o continente.
			Musicalmente hablando, mientras el hip hop propiamente dicho nace desde la música religiosa de origen negro y se funde en gran manera con el funk y el disco, el rap rompe con esta ligazón y se acerca más al breakdance, tomando al mismo tiempo un lenguaje propio.
			En las primeras presentaciones de grupos de rap, el estilo se sustentaba en las musicas de un Disc Jockey que, utilizando algunas canciones y empleando cortes y mezclas, lograba una composición que funcionaba como fondo sonoro para que pudiese rapear un MC o varios intérpretes al mismo tiempo.
			Ese lenguaje y esa cadencia particular se sustentan en una actitud contestataria, de una clara tendencia anti-sistema. Pero como toda expresión artística, resulta muy complejo detenerla o congelarla. Es así que los raperos de los años 70 dieron lugar a una expresión más metafórica y compleja desde la lírica en los años 80, que a la vez se manifestó en los ritmos y bases de musica empleadas.</textoini>
		</inicio>
		<maquetas>
			<textomaq>Tienes un grupo? harto de no saber que hacer con tus canciones? Subelas y si nos gustan tendras un sitio en nuestros eventos!</textomaq>
		</maquetas>
		<contacta>
			<cabecera>Contacta con nosotros</cabecera>
			<titulocont>Alguna Pregunta?????!!!!</titulocont>
			<textocont>Quieres hacerte socio del local? Podeis disfrutar de nuestro local y sus instalaciones, y si quedan dudas, no dudeis en enviar un MAIL!
			Además si eres usuario nos puedes enviar un mail para pedirnos que cambiemos cualquier 
			información sobre ti que esté incorrectamente puesta o que haya cambiado con el paso del tiempo. 
			Y solo por ser usuario y enviarnos un mail con alguna propuesta de mejora o informando de que algo 
			està mal(PORSUPUESTO CON ALGO LÓGICO) conseguiran una bebida gratis en nuestro local siempre que no haya concierto o algún evento especial. Sólo tendrás que ir a la barra e indicar tu nombre de usuario y el día que lo enviaste,
 			tras una pequeña comprobación te daremos tu bebida GRATIS!!!! </textocont>
		</contacta>
		<graffiti>
			<titulograff>Sube tus piezas e iremos colgandolas por nuestro local!</titulograff>
			<estiloform>Estilo:</estiloform>
		</graffiti>
		<Eventos>
			<titulo>Aqui los eventos proximos: </titulo>
			<texto>No olvides pedir mas información en nuestro local:</texto>
			<evento1> 17/06/2013: Para los amantes de los graffitis este sabado podrán demostrar sus habilidades en nuestro local, tendremos un muro muy especial en el que podreis dar rienda suelta a vuestras habilidades con el spray. Se dispondra de 30 minutos para realizar el dibujo y una gama de 10 colores para poder utilizar.</evento1>
			<evento2> 13/06/2013: Afinad vuestras gargantas porque ya está aquí el torneo de los torneos del rap. Habrán dos fases eliminatorias para llegar a la final. La primera fase sera de freestyle de 60 segundos cada ronda de cada participante, la segunda fase sera con la canción mas votada en la página web. </evento2>
			<evento3> 21/06/2013: Que sería de todos nosotros sin nuestros queridos DJ's...NADA!!! Por ello queremos organizar un "especial" para ellos dónde podrán demostrar sus habilidades rayando los discos. En esta ocasión se permitirá participar sin ser usuario con bases subidas. Los que no sean usuarios de la página nos tendrán que enviar un mail con los datos personales(dni, nombre, apellidos, nºmovil) y con almenos dos bases. Os responderemos en la mayor brevedad posible con la confirmación de la invitación al evento. </evento3>
			<evento4> 15/07/2013: Llegó el momento para demostrar la velocidad mental para dejar a tu rival K.O, si crees que tienes habilidades para improvisar alistate de forma totalmente gratuita y disfruta de una tarde intensa donde el mejor será el rey de los gallos. Se improvisara en rondas de 60 segundos con una base muy muy cañera para que os motiveis al máximo.</evento4>
		</Eventos>
		<tablacomun>
			<artist>Artista</artist>
			<title>Titulo</title>
			<year>Año</year>
		</tablacomun>
		<tablamaq>
			<city>Ciudad</city>
		</tablamaq>
		<tablagraf>
			<city>Ciudad</city>
			<style>Estilo</style>
		</tablagraf>
		<logged>
	<saludo>Hola</saludo>
	<cerrar>Cerrar sesión</cerrar>
	<iniciar>Iniciar sesión</iniciar>
	</logged>
	</contenido>
	<subidas>
		<completa>Fichero subido con éxito!</completa>
		<fallo>No se ha podido subir el archivo</fallo>
		<extension>Las extensiones que aceptamos son: .rar,.jpg,.png,.gif y .mp3</extension>
	</subidas>
	<canciones>
		<titulo>Cuelga aqui tu musica, y pronto la podras oir en el reproductor!</titulo>
	</canciones>
</proyecto>
XML;
?>
		