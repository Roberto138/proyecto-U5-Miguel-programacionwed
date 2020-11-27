<!DOCTYPE html> <!--inicio de nuestro documento HTML-->
<html lang="en"><!--marcado de hipertexto, y le permite al usuario crear y estructurar secciones, párrafos, encabezados, enlaces
 y elementos de cita en bloque, aquí empiezo mi código-->
 
<head><!--esto nos da el significado para el encabezado de nuestro empiezo del documento-->
  <meta charset="UTF-8"> <!--aqui damos una declaracion que sera visible para quien visite nuestra web-->
  <title> PROYECTO </title><!--aqui presentamos el titulo que llevara nuestro documento en este caso sera PROYECTO-->
  <link rel="stylesheet" type="text/css" href="estiloss.css"/><!--especifica la relación entre el documento actual y un recurso externo-->
  
</head><!--cierro mi encabezado-->
<body>
      <center><!--aqui centro lo que es mi documento o dicho texto-->
        <td><font color="#FFFFFF" face=" helvetica"><!-- aqui inserto una celda que llevara un dato le doy color y fuente que quiero-->
        <h1> Programaciòn Web </h1><!--cabecera más importante en una página web-->
      </center><!-- cerramos nuestro documeto-->
</body>
  
            
  <header><!-- presentamos un grupo que queremos pretederminar dentro de ella-->   
    <nav class="navegacion"><!-- aqui este titulo tiene el proposito de dar enlaces de navegacion-->
      <ul class="menu"><!--aqui nos permite ver la palabra definida subrayada-->
         <li><a href="index.php">Inicio</a></li><!--el LI nos define cada elemento de tabla de la cual se le esta dando forma y 
         la a crea enlaces con otra paginas-->
              <li><a href="Temario.php">Temario</a></li><!--lo mismo seguira sucediendo aqui-->
      </ul>
    </nav>
  </header><!--dentra de lo que aqui representamos una documentacion generica o quien estamos llamando, cabe cerramos nuestras declaraciones antes mencionadas en el codigo-->

<section id="main-content" >


	<article>
<h1 align=center><b>Temario</b></h1><!--damos un titulo principal a lo que es nuestra tabla y la centramos-->
<b>
<center>
		<table border="2px"  align=center><!--apartir de aqui empezamos a declarar la tabla la cual llevaria toda la informacion y se hizo de la siguiente manera-->

  <tr>

    <td align="center"><b>Nº</b></td>
    <td align="center"><b>Temas</b></td>
    <td align="center"><b>Subtemas</b></td>
  </tr>

  <tr>
    <td align="center">1</td><!-- se ve se fueron insertando los elementos a llamar dentro de la tabla-->
    <td align="">Introducciòn a las aplicaciones web</td>
    <td align="">1.1 Evolución de las aplicaciones web.<br>
                       1.2 Arquitectura de las aplicaciones web.<br>
                       1.3 Tecnologías para el desarrollo de aplicaciones web.<br>
                       1.4 Planificación de aplicaciones web. </td>
  </tr>

  <tr>
	<td align="center">2</td><!-- se ve se fueron insertando los elementos a llamar dentro de la tabla-->
    <td align="">HTML, XML y CSS</td>
    <td align="">2.1 Introducción.<br> <!--salto de linea-->
                       2.2 Estructura global de un documento Web.<br><!--salto de linea-->
                       2.3 Elementos básicos: texto, vínculos, listas, tablas, objetos, imágenes y aplicaciones.<br><!--salto de linea-->
                       2.4 Formularios.<br><!--salto de linea-->
                       2.5 Lenguajes de presentación en documentos Web.<br><!--salto de linea-->
                       2.6 Selectores.<br><!--salto de linea-->
                       2.7 Modelo de caja. </td>
  </tr>


   <tr>
	<td align="center">3</td><!-- se ve se fueron insertando los elementos a llamar dentro de la tabla-->
    <td align="">Programaciòn del lado del cliente</td><!--y bueno definimos lo que va a llevar nuestra celda en el formato-->
    <td align="">3.1 Introducción al lenguaje.<br>
                       3.2 Manejo de Frameworks.<br><!--salto de linea qui en este caso utilizamos muchos saltos-->
                       3.3 Estructuras de Control.<br>
                       3.4 Manipulación de objetos. </td>
  </tr>

   <tr>
	<td align="center">4</td><!-- se ve se fueron insertando los elementos a llamar dentro de la tabla-->
	<td align="">Programaciòn del lado del servidor</td>
    <td align="">4.1 Introducción al lenguaje.<br>
                      4.2 Estructuras de Control.<br><!--salto de linea-->
                      4.3 Tratamiento de Formularios.<br>
                      4.4 Manejo de objetos del servidor.<br>
                      4.5 Creación de clases.<br>
                      4.6 Acceso a datos</td>
  </tr>

     <tr>
	<td align="center">5</td><!-- se ve se fueron insertando los elementos a llamar dentro de la tabla-->
	<td align="">Còmputo en la nube y servicios</td>
    <td align="">5.1 Conceptos generales.<br>
                       5.2 Tipos de Servicios en la nube.<br>
                       5.3 Patrones de diseño.<br><!--salto de linea-->
                       5.4 Estándares en servicios.<br>
                       5.5 Plataformas tecnológicas.<br>
                       5.6 Seguridad e interoperabilidad</td>
  </tr>
</table>
</center>	
	</article>	
</section>

<br>
      <center>
        <h2 color="#FFFFFF">INSTITUTO TECNOLÒGICO NACIONAL DE MÈXICO</h2><!--representamos un pie o encabezado en nivel en este caso aparecera en la parte de abajo-->
      </center>
</body>
</html><!--cerramos nuestro codigo-->