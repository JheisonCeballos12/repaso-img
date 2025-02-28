<?php
//encabezado de la pagina
$headerTitle="Motos_Ktm";

//cuerpo de pagina
$parrafo= "KTM es una abreviatura que representa Kronreif Trunkenpolz Mattighofen, en honor a sus fundadores y a la ciudad de origen en Austria🇦🇹. ¡Una marca con historia y pasión por las dos ruedas!";

//buton de volver a la pagina principal
$buttonVolver= "../index.php";

//modelos de motos en secciones
$ktm390adventur="ktm390 adventur";
$imgktm390adventur="..//imagenes\ktm\adventur-ktm390.png";
$precioktm390adventur="PRECIO: 31.990.000";
$descripcionktm390adventur="La KTM 390 Adventure es una motocicleta monocilíndrica de 373.2 cm³ de cilindrada, con un motor de 4 tiempos y refrigeración líquida. Es una moto multipropósito con un diseño deportivo. 
Características 
Tiene una velocidad máxima de 150 km/h
Cuenta con un embrague antihopping PASC™
Tiene un consumo de combustible de 3.37 l/100 km
Tiene un tanque de combustible de 14.5 litros
Tiene una pantalla TFT a color
Tiene luces LED
Tiene un sistema de control de tracción
Tiene suspensiones WP APEX en cada rueda
Tiene una rueda delantera de 19
Diseño Tiene un chasis multitubular ligero, Tiene un bajo centro de gravedad, Tiene un comportamiento ágil. 
Conectividad 
Se puede vincular con un smartphone mediante el sistema KTM My Ride
Permite hacer o responder llamadas, escuchar música y obtener navegación paso a paso";

$ktmduke1390="ktm duke1390";
$imgktmduke1390="..//imagenes\ktm\ktm_1390_duke_.png";
$precioktmduke1390="PRECIO: 109.990.000";
$descripcionktmduke1390="La KTM 1390 SUPER DUKE R EVO es una BEAST, pura y evolucionada. No sólo comparte los mismos avances que la nueva KTM 1390 SUPER DUKE R, sino que también incorpora la intuitiva Tecnología de Suspensión Semiactiva WP (SAT). Al ser capaz de adaptar automáticamente su suspensión a la actitud del piloto o a la superficie de la carretera, aporta inteligencia al asfalto y a la caza. ";

$ktmduke250="ktm duke250";
$imgktmduke250="..//imagenes\ktm\ktm250.png";
$precioktmduke250="PRECIO: 23.490.000.";
$descripcionktmduke250="KTM Duke 250 es llamada “la pequeña de las grandes” por su diseño compacto y ligera conducción a pesar de ser una moto de 250 cc. Esta Naked cuenta con motor monocilindrico de 4 tiempos DOHC, suspensión horquilla invertida y una aerodinámica que le permite sacar máximo provecho ¡Galgo México la tiene para tí!";

$ktmduke390="ktm duke390";
$imgktmduke390="..//imagenes\ktm\ktm390.png";
$precioktmduke390="PRECIO: 31,990,000";
$descripcionktmduke390="La KTM 390 DUKE es un puro ejemplo del porqué tanta gente se siente atraída por la emoción del motociclismo urbano. Este proyectil en curvas maximiza el placer de manejo con la relación calidad precio, llevándose todos los elogios cuando lo que cuenta es la agilidad. Ligera como una pluma, potente y contando con lo último en tecnología, garantiza la mejor diversión dinámica, tanto si estás luchando en la jungla urbana como dejando tu marca en un bosque de curvas.
Potencia. 43 HP @ 9000 rpm.
Tipos de motor. 4 tiempos, monocilíndrico.
Caja de velocidades. Mecánica de 6 velocidades.
";

$ktmrc125="ktm rc125";
$imgktmrc125="..//imagenes\ktm\rc-ktm-125-removebg-preview.png";
$precioktmrc125="PRECIO: 15 505 000 ";
$descripcionktmrc125="La KTM RC 125 2024 está ya en la parrilla de salida, a punto para salir disparada cuando las luces se apaguen. Con una parte ciclo totalmente nueva, una espectacular estética inspirada en MotoGP™, además de una mejora en el comportamiento y la ergonomía, la KTM RC 125 está preparada y lista para llevar afrontar la batalla tanto en la calle como en el circuito, haciéndote sentir como un auténtico piloto de competición.
Esta motocicleta está diseñada y desarrollada en Austria, y ensamblada en la India.";

$ktmsx250="ktm sx250";
$imgktmsx250="..//imagenes\ktm\sx-ktm-250-removebg-preview.png";
$precioktmsx250="PRECIO: 450.990.000";
$descripcionktmsx250="La KTM 250 SX-F se ha visto profundamente renovada en 2025, en especial la parte ciclo e introduciendo mejoras en la electrónica mediante un nuevo sistema de conectividad.
Novedades KTM 250 SX-F 2025
Sistema conectividad (CUO)
Chasis renovado más ligero
Soportes del motor y anclaje del amortiguador
Sistema de bieletas renovado
Nuevos reglajes de la horquilla
Patín de la cadena
Pedal del freno trasero reforzado
Plásticos del radiador con nuevo diseño
Silentblocs de goma entre el depósito y el chasis
Conducto de entrada a la caja del filtro con nuevo diseño
Neumáticos Dunlop Geomax MX34
Decoración";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>motos akt</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main class="clases_motos">

    <header class="encabezadoPag" >
        <h1><?php echo$headerTitle ?></h1>
    </header>

     <p><?php echo $parrafo ?></p>
      <div>
            <a href="<?php echo $buttonVolver ?>"><button>Volver</button></a>
      </div>
   
    <section>
        <div>
            <h2><?php echo $ktm390adventur ?></h2>
            <img src="<?php echo $imgktm390adventur ?>" alt="">
             <H3><?php echo $precioktm390adventur ?></H3>
            <p><?php echo $descripcionktm390adventur ?></p>
        </div>
        <div>
        <h2><?php echo $ktmduke1390 ?></h2>
            <img src="<?php echo $imgktmduke1390 ?>" alt="">
             <H3><?php echo $precioktmduke1390 ?></H3>
            <p><?php echo $descripcionktmduke1390 ?></p>
        </div>
        <div>
        <h2><?php echo $ktmduke250 ?></h2>
            <img src="<?php echo $imgktmduke250 ?>" alt="">
             <H3><?php echo $precioktmduke250 ?></H3>
            <p><?php echo $descripcionktmduke250 ?></p>
        </div>
        <div>
        <h2><?php echo $ktmduke390 ?></h2>
            <img src="<?php echo $imgktmduke390 ?>" alt="">
             <H3><?php echo $precioktmduke390 ?></H3>
            <p><?php echo $descripcionktmduke390 ?></p>
        </div>
        <div>
        <h2><?php echo $ktmrc125 ?></h2>
            <img src="<?php echo $imgktmrc125 ?>" alt="">
             <H3><?php echo $precioktmrc125 ?></H3>
            <p><?php echo $descripcionktmrc125 ?></p>
        </div>
        <div>
        <h2><?php echo $ktmsx250 ?></h2>
            <img src="<?php echo $imgktmsx250 ?>" alt="">
             <H3><?php echo $precioktmsx250 ?></H3>
            <p><?php echo $descripcionktmsx250 ?></p>
        </div>
        
              
        <div>
            <a href="../index.php"><button>Volver</button></a>
        </div>
    </section>
    </main>
</body>
</html>