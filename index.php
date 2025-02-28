<?php
//Encabezado de pagina
$logoHeader="imagenes\logo\logo.png";
$listNavegacion=array("clases_motos/yamaha.php","clases_motos/suzuki.php","clases_motos/kawasaki.php","clases_motos/ktm.php","clases_motos/honda.php","clases_motos/akt.php","clases_motos/bajaj.php","clases_motos/bmw.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUNDO MOTOS COL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    
  <header class="sidebar">
    <div class="logo">
        <img src="<?php echo $logoHeader?>" alt="logo_motos">
    </div>

    <nav>
      <ul>
        <li><a href="#Inicio">Inicio</a></li>
        <li><a href="<?php echo $listNavegacion[0] ?>">yamaha</a></li>
        <li><a href="<?php echo $listNavegacion[1] ?>">Suzuki</a></li>
        <li><a href="<?php echo $listNavegacion[2] ?>">Kawasaki</a></li>
        <li><a href="<?php echo $listNavegacion[3] ?>">Ktm</a></li>
        <li><a href="<?php echo $listNavegacion[4] ?>">Honda</a></li>   
        <li><a href="<?php echo $listNavegacion[5] ?>">Akt</a></li>
        <li><a href="<?php echo $listNavegacion[6] ?>">Bajaj</a></li>
        <li><a href="<?php echo $listNavegacion[7] ?>">Bmw</a></li>
        <li><a href="#Contactos">Contactos</a></li>
      </ul>
    </nav>
  </header>

  <section id="Inicio" class="Inicio ">
   <header>
     <h1>aqui tenemos una pequeña presentacion de nuestras motos disponibles</h1>
     <img src="imagenes/body/img body.jpg" alt="logo_moto">
     <p>La moto es emoción, libertad y equilibrio. Una historia de amor que no termina nunca. Más allá de un medio de transporte o un deporte, alternativa de ocio o actividad social, la moto representa la cara visible de un estilo de vida diferente, libre y opuesta a lo convencional.</p>
   </header>
  </section>
</main>
</body>
  
  