<?php
//encabezado de la pagina
$headerTitle="Motos_Bajaj";

//cuerpo de pagina
$parrafo= "";

//buton de volver a la pagina principal
$buttonVolver= "../index.php";

//modelos de motos en secciones
$dominar400="Dominar 400";
$imgdominar400="..//imagenes\bajaj\dominar-400-verde-portada.png";
$preciodominar400="PRECIO: 18.149. 000";
$descripciondominar400=" La Dominar 400, la primer moto de Bajaj de mayor cilindraje con caja de 6 velocidades que alcanza de 0 a 100 kmph en 8.23 segundos. Cuenta con un Motor DOHC,Fuel Injection y 40 HP que te darán mayor potencia y optimización de combustible.Frenos ABS de doble canal 
Faro completo de LED
Sensores delanteros y traseros en las llantas
Con la Dominar 400 podrás rodar completamente seguro gracias a sus frenos ABS y sus sensores en las llantas los cuales detectan deslizamiento y regulan la presión del frenado para evitar bloqueos, además, mantiene la estabilidad de la direccional y reduce la distancia de frenado. Su faro completo de LED crea una iluminación parecida a la luz de del día incluso en los tramos más oscuro del camino.";

$Ns200="Pulsar Ns 200";
$imgNs200="..//imagenes\bajaj\ns200.png ";
$precioNs200="12.799.000";
$descripcionNs200="Su potencia es de 23,52 HP (caballos de fuerzas) y 18.5 NM de torque (NM:newton metro), todo refrigerado por sistema líquido. La Pulsar NS 200 alcanza una velocidad máxima de 138 km/hora con una aceleración de 0-100 en 10.5 segundos.";

$platino125="Platino 125";
$imgplatino125="..//imagenes\bajaj\platino125.png";
$precioplatino125="PRECIO: 6.699.000  ";
$descripcionplatino125="Platino 125 es una moto cómoda para rodar, cómoda para frenar, cómoda para trabajar, cómoda para el mantenimiento y cómoda para el transporte diario el día a día. Mejor dicho, es una moto cómoda en todo sentido. Viene con freno de disco CBS, sistema de cambios inteligente, suspensión trasera Nitrox, tablero digital y sillín largo y suave.";

$pulsarRS200="Pulsar Rs 200";
$imgpulsarRS200="..//imagenes\bajaj\pulsar-rs200.pngsa";
$preciopulsarRS200="PRECIO: 15,799,000";
$descripcionpulsarRS200="La Pulsar RS 200 es una motocicleta deportiva de Bajaj con un motor de 4 tiempos y 200 cc. Tiene un diseño agresivo y robusto, y está equipada con un sistema de frenos antibloqueo (ABS). 
Características 
Motor de 4 tiempos, monocilíndrico, SOHC, DTSi, 4 válvulas
Potencia máxima de 24,13 Hp a 9750 rpm
Torque máximo de 18,6 N.m a 8000 rpm
Transmisión de 6 velocidades
Freno delantero: ABS, Disco de 280 mm
Freno trasero: Disco 300 mm
Llanta delantera: 100/80-17 , 52P Tubeless
Llanta trasera: 130/70-17 , 61P Tubeless
Suspensión delantera: Hidraúlica, Telescópica Vertical 120 mm recorrido
Peso en seco: 164 kg
Estilo Diseño deportivo y agresivo, Carenado aerodinámico, Luces traseras de Crystal LED de alta intensidad, Tablero con límite de revoluciones. 
Tecnología 
Fuel injection (FI) para mayor eficiencia del combustible y mejor desempeño del motor
Suspensión mono nitrox para mayor comodidad";
$Pulsar180neonfi="Pulsar 180 neon fi";
$imgPulsar180neonfi="..//imagenes\bajaj\pulsar180-neon.png";
$precioPulsar180neonfi="PRECIO: 9,999,000 ";
$descripcionPulsar180neonfi="Su motor de 180 centímetros cúbicos es ideal para el transporte urbano y no le teme salir a carretera, ya que cuenta con la potencia necesaria para moverse por la ciudad con gran dinamismo y su inyección electrónica le permite reducir significativamente el consumo de combustible. Con 16.78 caballos de fuerza y un tanque de 15 litros, este monocilíndrico promete largas jornadas de conducción, gracias a la constante ventilación por aire que permite su monoblock estriado.";

$Torito="torito 200";
$imgTorito="..//imagenes\bajaj\torito-bajaj.png";
$precioTorito="PRECIO: 16.999.000 ";
$descripcionTorito="El motocarro de pasajeros #1 en Colombia y el mundo es el ideal para trabajar y progresar. Cumple tu sueño e invierte en esta alternativa de trabajo, que gracias a su relación precio y calidad se convierte en la mejor opción para progresar. Perfecto para recorridos cortos al interior de poblaciones ya sea para turismo o transporte diario.
Colores disponibles: Blanco.";

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
            <h2><?php echo $dominar400 ?></h2>
            <img src="<?php echo $imgdominar400 ?>" alt="">
             <H3><?php echo $preciodominar400 ?></H3>
            <p><?php echo $descripciondominar400 ?></p>
        </div>
        <div>
        <h2><?php echo $Ns200 ?></h2>
            <img src="<?php echo $imgNs200 ?>" alt="">
             <H3><?php echo $precioNs200 ?></H3>
            <p><?php echo $descripcionNs200 ?></p>
        </div>
        <div>
        <h2><?php echo $platino125 ?></h2>
            <img src="<?php echo $imgplatino125 ?>" alt="">
             <H3><?php echo $precioplatino125 ?></H3>
            <p><?php echo $descripcionplatino125 ?></p>
        </div>
        <div>
        <h$descripcionpulsarRS2002><?php echo $pulsarRS200 ?></h2>
            <img src="<?php echo $imgpulsarRS200 ?>" alt="">
             <H3><?php echo $preciopulsarRS200 ?></H3>
            <p><?php echo $descripcionpulsarRS200 ?></p>
        </div>
        <div>
        <h2><?php echo $Pulsar180neonfi ?></h2>
            <img src="<?php echo $imgPulsar180neonfi ?>" alt="">
             <H3><?php echo $precioPulsar180neonfi ?></H3>
            <p><?php echo $descripcionPulsar180neonfi ?></p>
        </div>
        <div>
        <h2><?php echo $Torito ?></h2>
            <img src="<?php echo $imgTorito ?>" alt="">
             <H3><?php echo $precioTorito ?></H3>
            <p><?php echo $descripcionTorito ?></p>
        </div>
           
        <div>
            <a href="../index.php"><button>Volver</button></a>
        </div>
    </section>
    </main>
</body>
</html>

                
