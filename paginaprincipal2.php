<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicio2.css">
  <link rel="stylesheet" href="motoemergente.css">

  <title>Document</title>
</head>

<body>
  <header>
    <nav>
      <div class="menu-container">
        <div class="hamburger" id="hamburger">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </div>
        <div class="menu" id="menu">
          <a href="#botonHonda">HONDA</a>
          <a href="#botonYamaha">YAMAHA</a>
          <a href="#botonKawasaki">KAWASAKI</a>
          <a href="#botonKtm">KTM</a>
          <a href="#botonSuzuki">SUZUKI</a>
          <a href="#botonDucati">DUCATI</a>
          <a href="cerrarsesion.php">CERRAR SESIÓN</a>
        </div>
      </div>
      <div></div>
      <div class="logo">
        <img src="https://i.ibb.co/bbs75P8/logo.png" alt="Logo Motos.com">
      </div>
      <?php
      echo "Bienvenido " . $_SESSION["email"];
      ?>
    </nav>
    <div class="slider">
      <div class="slide-track">
        <div class="slide">
          <img src="https://i.ibb.co/z7CRZZ5/LOGO-HONDA.png" height="100" width="250" alt="honda" />
        </div>
        <div class="slide">
          <img src=" https://i.ibb.co/Gk0Yx4P/LOGO-YAMAHA.png" height="100" width="250" alt="YAMAHA" />
        </div>
        <div class="slide">
          <img src="https://i.ibb.co/sWR81Lh/LOGO-KAWASAKI.png" height="100" width="250" alt="KAWASAKI" />
        </div>
        <div class="slide">
          <img src="https://i.ibb.co/hXHtn3v/LOGO-KTM.png" height="100" width="250" alt="ktm" />
        </div>
        <div class="slide">

          <img src="https://i.ibb.co/JCnkwmQ/LOGO-SUZUKI.png" height="100" width="250" alt="SUZUKI" />
        </div>

        <div class="slide">
          <img src="https://i.ibb.co/SBpBYq0/LOGO-DUCATI-1.png" height="100" width="250" alt="ducati" />
        </div>
        <div class="slide">
          <img src="https://i.ibb.co/z7CRZZ5/LOGO-HONDA.png" height="100" width="250" alt="honda" />
        </div>
        <div class="slide">
          <img src=" https://i.ibb.co/Gk0Yx4P/LOGO-YAMAHA.png" height="100" width="250" alt="YAMAHA" />
        </div>
        <div class="slide">
          <img src="https://i.ibb.co/sWR81Lh/LOGO-KAWASAKI.png" height="100" width="250" alt="KAWASAKI" />
        </div>
        <div class="slide">
          <img src="https://i.ibb.co/hXHtn3v/LOGO-KTM.png" height="100" width="250" alt="ktm" />
        </div>
        <div class="slide">
          <img src="https://i.ibb.co/JCnkwmQ/LOGO-SUZUKI.png" height="100" width="250" alt="SUZUKI" />
        </div>

        <div class="slide">
          <img src="https://i.ibb.co/SBpBYq0/LOGO-DUCATI-1.png" height="100" width="250" alt="ducati" />
        </div>
        <div class="slide">
          <img src="https://i.ibb.co/z7CRZZ5/LOGO-HONDA.png" height="100" width="250" alt="honda" />
        </div>
        <div class="slide">
          <img src=" https://i.ibb.co/Gk0Yx4P/LOGO-YAMAHA.png" height="100" width="250" alt="YAMAHA" />
        </div>
        <div class="slide">
          <img src="https://i.ibb.co/sWR81Lh/LOGO-KAWASAKI.png" height="100" width="250" alt="KAWASAKI" />
        </div>
        <div class="slide">
          <img src="https://i.ibb.co/hXHtn3v/LOGO-KTM.png" height="100" width="250" alt="ktm" />
        </div>
        <div class="slide">

          <img src="https://i.ibb.co/JCnkwmQ/LOGO-SUZUKI.png" height="100" width="250" alt="SUZUKI" />
        </div>

        <div class="slide">
          <img src="https://i.ibb.co/SBpBYq0/LOGO-DUCATI-1.png" height="100" width="250" alt="ducati" />
        </div>
        <div class="slide">
          <img src="https://i.ibb.co/z7CRZZ5/LOGO-HONDA.png" height="100" width="250" alt="honda" />
        </div>
        <div class="slide">
          <img src=" https://i.ibb.co/Gk0Yx4P/LOGO-YAMAHA.png" height="100" width="250" alt="YAMAHA" />
        </div>
        <div class="slide">
          <img src="https://i.ibb.co/sWR81Lh/LOGO-KAWASAKI.png" height="100" width="250" alt="KAWASAKI" />
        </div>
        <div class="slide">
          <img src="https://i.ibb.co/hXHtn3v/LOGO-KTM.png" height="100" width="250" alt="ktm" />
        </div>
        <div class="slide">
          <img src="https://i.ibb.co/JCnkwmQ/LOGO-SUZUKI.png" height="100" width="250" alt="SUZUKI" />
        </div>

        <div class="slide">
          <img src="https://i.ibb.co/SBpBYq0/LOGO-DUCATI-1.png" height="100" width="250" alt="ducati" />
        </div>
      </div>
    </div>
  </header>
<script>
    // Seleccionar elementos del DOM
    const hamburger = document.getElementById('hamburger');
    const menu = document.getElementById('menu');

    // Agregar un evento de clic al icono de la hamburguesa
    hamburger.addEventListener('click', function () {
      // Alternar la clase 'open' en el menú
      menu.classList.toggle('open');
    });
  </script>
 <section id="intro">
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi iure sunt maxime sit alias molestiae deserunt placeat, nisi ut veritatis ad vel beatae enim? Soluta earum assumenda ut? Amet, quasi!</p>
  </section>
  <section id="botonHonda"> <!-- Motos Honda -->
  <h2>HONDA</h2>
    <div class="simple_gallery">
      <div class="cajamotoshonda">
        <ul>
          <li><a href="#IrVentanaFlotanteHONDA-XADV"><img src="https://i.ibb.co/Kx85gLf/HONDA-XADV.png"
                id="HONDA-XADV" /></a></li>
          <li><a href="#IrVentanaFlotanteHONDA-AFRICA-TWIN"><img src="https://i.ibb.co/vkGncN9/AFRICA-TWIN.png"
                id="HONDA-AFRICA-TWIN" /></a></li>
          <li><a href="#IrVentanaFlotanteHONDA-CBR-650-R"><img src="https://i.ibb.co/9vTDQL0/HONDA-CBR-650-R.png"
                id="HONDA-CBR-650-R" /></a></li>
          <li><a href="#IrVentanaFlotanteHONDA-SH"><img src="https://i.ibb.co/dkCN99P/HONDA-SH.png" id="HONDA-SH" /></a>
          </li>
          <li><a href="#IrVentanaFlotanteHONDA-CB500-X"><img src="https://i.ibb.co/Ss0QDqV/HONDA-CB500-X.png"
                id="HONDA-CB500-X" /></a></li>
          <li><a href="#IrVentanaFlotanteHONDA-FIREBLADE-1000-RR"><img
                src="https://i.ibb.co/YTT8664/HONDA-FIREBLADE-1000-RR.png" id="HONDA-FIREBLADE-1000-RR" /></a></li>
                </ul>
        <div class="clear"></div>
      </div>
      <div id="overflow">
        <i id="close" class="fa fa-window-close"></i>
        <img src="">
      </div>

    </div>

    <div id="IrVentanaFlotanteHONDA-XADV" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>HONDA XADV</h2>
          <img src="https://i.ibb.co/Kx85gLf/HONDA-XADV.png" alt="">
          <h3>Motor:</h3>
          <ul>
            <li>Tipo: Monocilíndrico en línea.</li>
            <li>Cilindrada: Varía según el modelo (por ejemplo, 745 cc en el modelo X-ADV).</li>
            <li>Potencia: Adecuada para uso tanto en carretera como fuera de ella.</li>
          </ul>
          <h3>Estilo y Diseño:</h3>
          <ul>
            <li>Estilo aventurero con un toque urbano.</li>
            <li>Diseño robusto con líneas modernas y agresivas.</li>
            <li>Carrocería espaciosa y ergonómica para largos viajes.</li>
          </ul>
          <h3>Suspensión:</h3>
          <ul>
            <li>Horquilla delantera invertida para mejor absorción de impactos.</li>
            <li>Amortiguadores Pro-Link ajustables para adaptarse a diferentes cargas y terrenos.</li>
          </ul>
          <h3>Frenos:</h3>
          <ul>
            <li>Sistema de frenos ABS de serie para mayor seguridad en la frenada.</li>
            <li>Frenos de disco delanteros y traseros con excelente capacidad de frenado.</li>
          </ul>
        </div>
      </div>
    </div>

    <div id="IrVentanaFlotanteHONDA-AFRICA-TWIN" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>HONDA AFRICA TWIN</h2>
          <img src="https://i.ibb.co/vkGncN9/AFRICA-TWIN.png" alt="">
          <h3>Motor:</h3>
          <ul>
            <li>Tipo: Bicilíndrico en L.</li>
            <li>Cilindrada: Varía según el modelo (por ejemplo, 1262 cc en el modelo Diavel 1260).</li>
            <li>Potencia: Potencia impresionante con alto par motor, ofreciendo un rendimiento excepcional en diversas
              condiciones de conducción.</li>
          </ul>

          <h3>Estilo y Diseño:</h3>
          <ul>
            <li>Estilo cruiser combinado con elementos deportivos.</li>
            <li>Diseño muscular y agresivo con una apariencia única y distintiva.</li>
            <li>Carrocería aerodinámica y robusta con líneas fluidas y elegantes.</li>
          </ul>

          <h3>Suspensión:</h3>
          <ul>
            <li>Horquilla delantera invertida y monoamortiguador trasero ajustable para adaptarse a diferentes estilos
              de
              conducción y terrenos.</li>
            <li>Amortiguadores de alta calidad que ofrece una conducción suave y cómoda.</li>
          </ul>

          <h3>Frenos:</h3>
          <ul>
            <li>Sistema de frenos con discos delanteros y traseros de alto rendimiento.</li>
            <li>Frenos de disco avanzados, incluyendo sistemas ABS y control de tracción para una mayor seguridad.</li>
          </ul>
        </div>

      </div>
    </div>

    <div id="IrVentanaFlotanteHONDA-CBR-650-R" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>HONDA CBR 650 R</h2>
          <img src="https://i.ibb.co/9vTDQL0/HONDA-CBR-650-R.png" alt="">
          <ul>
            <h3>Motor:</h3>
            <li>Tipo: Cuatro cilindros en V a 90°.</li>
            <li>Cilindrada: 1103 cc.</li>
            <li>Potencia: Varía según la versión, con modelos que superan los 200 CV.</li>
          </ul>

          <ul>
            <h3>Estilo y Diseño:</h3>
            <li>Estilo deportivo y agresivo.</li>
            <li>Diseño aerodinámico y elegante, optimizado para la velocidad y el rendimiento en pista.</li>
            <li>Carrocería aerodinámica diseñada para minimizar la resistencia al aire y mejorar la estabilidad a
              altas
              velocidades.</li>
          </ul>

          <ul>
            <h3>Suspensión: </h3>
            <li>Horquilla delantera invertida y amortiguador trasero Öhlins de alta gama.</li>
            <li>Amortiguadores electrónicos ajustables con modos de conducción preestablecidos.</li>
          </ul>

          <ul>
            <h3>Frenos:</h3>
            <li>Sistema de frenos Brembo de última generación con tecnología de frenado ABS.</li>
            <li>Frenos de disco delanteros y traseros de gran diámetro para una frenada potente y controlada.</li>
          </ul>
        </div>

      </div>
    </div>

    <div id="IrVentanaFlotanteHONDA-SH" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>HONDA SH</h2>
          <img src="https://i.ibb.co/dkCN99P/HONDA-SH.png" alt="">

          <ul>
            <h3>Motor:</h3>
            <li>Tipo: Bicilíndrico en L.</li>
            <li>Cilindrada: Varía según el modelo, típicamente entre 797 cc y 1200 cc.</li>
            <li>Potencia: Depende del modelo específico, con versiones que alcanzan hasta 150 CV.</li>
          </ul>

          <ul>
            <h3>Estilo y Diseño:</h3>
            <li>Estilo naked agresivo y minimalista.</li>
            <li>Diseño icónico y sin carenado, destacando el motor y el chasis.</li>
            <li>Carrocería de acero que proporciona una base sólida y ágil.</li>
          </ul>

          <ul>
            <h3>Suspensión: </h3>
            <li>Horquilla delantera invertida y amortiguador trasero ajustable para un manejo ágil y cómodo.</li>
            <li>Amortiguadores avanzados que se adaptan a diferentes estilos de conducción y condiciones de la
              carretera.
            </li>
          </ul>

          <ul>
            <h3>Frenos:</h3>
            <li>Sistema de frenos de alto rendimiento con tecnología ABS para una frenada segura y controlada.</li>
            <li>Frenos de disco delanteros y traseros de gran diámetro para una respuesta de frenado eficaz.</li>
          </ul>
        </div>

      </div>
    </div>

    <div id="IrVentanaFlotanteHONDA-CB500-X" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>HONDA CB500 X</h2>
          <img src="https://i.ibb.co/Ss0QDqV/HONDA-CB500-X.png" alt="">

          <ul>
            <h3>Motor:</h3>
            <li>Tipo: Bicilíndrico en L.</li>
            <li>Cilindrada: 937 cc.</li>
            <li>Potencia: 114 hp a 9,000 rpm.</li>
          </ul>

          <ul>
            <h3>Estilo y Diseño:</h3>
            <li>Estilo agresivo y deportivo característico de la línea Hypermotard.</li>
            <li>Diseño minimalista con líneas afiladas y musculosas.</li>
            <li>Carrocería esbelta y compacta para una mayor agilidad.</li>
          </ul>

          <ul>
            <h3>Suspensión:</h3>
            <li>Horquilla delantera invertida Marzocchi ajustable con barras de 45 mm de diámetro y 170 mm de
              recorrido.
            </li>
            <li>Amortiguadores traseros completamente ajustables con 150 mm de recorrido.</li>
          </ul>

          <ul>
            <h3>Frenos:</h3>
            <li>Sistema de frenos Brembo con ABS Bosch de última generación.</li>
            <li>Frenos de disco de 245 mm con pinza de 2 pistones.</li>
          </ul>
        </div>
      </div>
    </div>

    <div id="IrVentanaFlotanteHONDA-FIREBLADE-1000-RR" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>HONDA FIREBLADE 1000 RR</h2>
          <img src="https://i.ibb.co/YTT8664/HONDA-FIREBLADE-1000-RR.png" alt="">
          <ul>
            <h3>Motor:</h3>
            <li>Tipo: Bicilíndrico en L.</li>
            <li>Cilindrada: 998 cc.</li>
            <li>Potencia: 224 hp a 15,250 rpm.</li>
          </ul>

          <ul>
            <h3>Estilo y Diseño:</h3>
            <li>Estilo futurista y aerodinámico.</li>
            <li>Diseño agresivo con carenado completo de fibra de carbono.</li>
            <li> Carrocería ligera de fibra de carbono para reducir el peso.</li>

          </ul>

          <ul>
            <h3>Suspensión: </h3>
            <li>Horquilla delantera Öhlins NPX25/30 con tratamiento de superficie TiN y barras de 43 mm de
              diámetro.</li>
            <li>Amortiguadores Öhlins TTX36 con muelle de titanio y sistema de bieletas progresivas.</li>
          </ul>

          <ul>
            <h3>Frenos:</h3>
            <li>Sistema de frenos Brembo Stylema R con ABS Cornering EVO.</li>
            <li>Frenos de disco semi-flotante de 330 mm con pinzas monobloque de 4 pistones.</li>

          </ul>
        </div>
      </div>
    </div>
  </section> <!-- Motos Honda -->

  <section id="botonYamaha"> <!-- Motos Yamaha -->
    <h2>YAMAHA</h2>
    <div class="simple_gallery">
      <div class="cajamotosyamaha">
        <ul>
          <li><a href="#IrVentanaFlotanteYAMAHA-XSR-900-F"><img src="https://i.ibb.co/cDPLcZD/YAMAHA-XSR-900-F.png"
                id="YAMAHA-XSR-900-F" /></a></li>
          <li><a href="#IrVentanaFlotanteYAMAHA-TENERE-700"><img src="https://i.ibb.co/TcbXMsm/YAMAHA-TENERE-700.png"
                id="YAMAHA-TENERE-700" /></a></li>
          <li><a href="#IrVentanaFlotanteYAMAHA-YZF-R6"><img src="https://i.ibb.co/mRWdVfx/YAMAHA-YZF-R6.png"
                id="YAMAHA-YZF-R6" /></a></li>
          <li><a href="#IrVentanaFlotanteYAMAHA-MT-07"><img src="https://i.ibb.co/8X2sGNx/YAMAHA-MT-07.png"
                id="YAMAHA-MT-07" /></a></li>
          <li><a href="#IrVentanaFlotanteYAMAHA-TRACER-900"><img src="https://i.ibb.co/jR3NYRD/YAMAHA-TRACER-900.png"
                id="YAMAHA-TRACER-900" /></a></li>
          <li><a href="#IrVentanaFlotanteYAMAHA-YZF-R1"><img src="https://i.ibb.co/tKF5Hm3/YAMAHA-YZF-R1.png"
                id="YAMAHA-YZF-R1" /></a></li>
                </ul>
        <div class="clear"></div>
      </div>
      <div id="overflow">
        <i id="close" class="fa fa-window-close"></i>
        <img src="">
      </div>

    </div>

    <div id="IrVentanaFlotanteKTM-SUPER-DUKE-1290" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>KTM-SUPER-DUKE-1290</h2>
          <img src="https://i.ibb.co/PcqSdXT/KTM-SUPER-DUKE-1290.png" alt="">
        <h3>Motor:</h3>
        <ul>
          <li>Tipo: Bicilíndrico en V.</li>
          <li>Cilindrada: 1301 cc.</li>
          <li>Potencia: Extremadamente potente y capaz de ofrecer un rendimiento excepcional tanto en carreteras como
            en circuitos.</li>
        </ul>
  
        <h3>Estilo y Diseño:</h3>
        <ul>
          <li>Estilo naked con una apariencia agresiva y musculosa que refleja su naturaleza de alta rendimiento.</li>
          <li>Diseño aerodinámico y ergonómico diseñado para una experiencia de conducción deportiva y cómoda.</li>
          <li>Carrocería angular y futurista con detalles distintivos que destacan su carácter dinámico y tecnológico.
          </li>
        </ul>
  
        <h3>Suspensión:</h3>
        <ul>
          <li>Horquilla delantera invertida y sistema de amortiguación trasera totalmente ajustable, diseñados para
            proporcionar una respuesta precisa y un manejo excepcional en todo tipo de condiciones.</li>
          <li>Amortiguadores de alta gama con tecnología avanzada para ofrecer un rendimiento óptimo en curvas y una
            conducción suave en carreteras irregulares.</li>
        </ul>
  
        <h3>Frenos:</h3>
        <ul>
          <li>Sistema de frenos Brembo de alta especificación con discos delanteros y traseros de gran tamaño,
            proporcionando una frenada potente y controlada incluso a altas velocidades.</li>
          <li>Frenos delanteros equipados con tecnología de frenado antibloqueo (ABS) de última generación para una
            seguridad óptima en todas las condiciones de conducción.</li>
            </ul>
        </div>
      </div>
    </div>

    <div id="IrVentanaFlotanteKTM-250-SX" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>KTM 250 SX</h2>
          <img src="https://i.ibb.co/dBxCFyX/KTM-250-SX.png" alt="">

        <h3>Motor:</h3>
        <ul>
          <li>Tipo: Monocilíndrico de 2 tiempos.</li>
          <li>Cilindrada: 249 cc.</li>
          <li>Potencia: Potente y ágil, diseñada específicamente para el rendimiento en competiciones off-road.</li>
        </ul>
        <h3>Estilo y Diseño:</h3>
        <ul>
          <li>Estilo de motocross puramente orientado al rendimiento, con una apariencia agresiva y funcional.</li>
          <li>Diseño ligero y aerodinámico, optimizado para ofrecer la máxima maniobrabilidad y capacidad de salto en
            terrenos off-road.</li>
          <li>Carrocería minimalista con detalles de alta resistencia, diseñada para soportar las demandas del
            motocross competitivo.</li>
        </ul>
  
        <h3>Suspensión:</h3>
        <ul>
          <li>Horquilla delantera invertida y amortiguador trasero ajustable de alta gama, diseñados para absorber
            impactos grandes y pequeños en terrenos difíciles.</li>
          <li>Suspensión especialmente calibrada para ofrecer una respuesta precisa y una excelente tracción en todo
            tipo de superficies.</li>
        </ul>
  
        <h3>Frenos:</h3>
        <ul>
          <li>Sistema de frenos de alto rendimiento con discos delanteros y traseros, diseñado para ofrecer una
            potente capacidad de frenado en condiciones extremas.</li>
          <li>El sistema de frenos no suele incluir ABS, ya que en el motocross la capacidad de bloquear la rueda
            trasera puede ser útil para ciertas maniobras.</li>
            </ul>
        </div>
      </div>
    </div>

    <div id="IrVentanaFlotanteKTM-SMC-690" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>KTM SMC 690</h2>
          <img src="https://i.ibb.co/fkpHx5p/KTM-SMC-690.png" alt="">
         
        <h3>Motor:</h3>
        <ul>
          <li>Tipo: Monocilíndrico de 4 tiempos.</li>
          <li>Cilindrada: 690 cc.</li>
          <li>Potencia: Potente y con un alto par motor, diseñada para un rendimiento óptimo en carreteras y
            circuitos.</li>
        </ul>
        <h3>Estilo y Diseño:</h3>
        <ul>
          <li>Estilo supermoto con un aspecto agresivo y deportivo, destinado a ofrecer una experiencia de conducción
            emocionante en carreteras y pistas.</li>
          <li>Diseño aerodinámico y ergonómico, con una posición de conducción cómoda y orientada al rendimiento
            deportivo.</li>
          <li>Carrocería compacta y ligera, con detalles inspirados en el mundo de las competiciones de supermoto.
          </li>
        </ul>
  
        <h3>Suspensión:</h3>
        <ul>
          <li>Horquilla delantera invertida de alta calidad y amortiguador trasero ajustable, diseñados para ofrecer
            una excelente absorción de impactos y una respuesta precisa en curvas.</li>
          <li>Suspensión específicamente ajustada para proporcionar una conducción ágil y estable tanto en carreteras
            como en circuitos.</li>
        </ul>
  
        <h3>Frenos:</h3>
        <ul>
          <li>Sistema de frenos de alto rendimiento con discos delanteros y traseros, diseñado para proporcionar una
            potente capacidad de frenado en condiciones de conducción deportiva.</li>
          <li>El sistema de frenos suele incluir tecnología de frenado antibloqueo (ABS) para una frenada segura y
            controlada en diversas situaciones.</li>
            </ul>
        </div>
      </div>
    </div>

    <div id="IrVentanaFlotanteKTM-DUKE-390" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>KTM DUKE 390</h2>
          <img src="https://i.ibb.co/PjFy8cB/KTM-DUKE-390.png" alt="">
          
        <h3>Motor:</h3>
        <ul>
          <li>Tipo: Monocilíndrico.</li>
          <li>Cilindrada: 373.2 cc.</li>
          <li>Potencia: Potente y ágil, ideal para uso urbano y aventuras en carreteras.</li>
        </ul>
        <h3>Estilo y Diseño:</h3>
        <ul>
          <li>Estilo naked con un diseño moderno y agresivo que refleja su naturaleza deportiva.</li>
          <li>Diseño compacto y ligero, perfecto para maniobrar fácilmente en el tráfico urbano y disfrutar de la
            conducción en carreteras sinuosas.</li>
          <li>Carrocería aerodinámica con líneas angulares y detalles llamativos que le dan un aspecto dinámico y
            juvenil.</li>
        </ul>
  
        <h3>Suspensión:</h3>
        <ul>
          <li>Horquilla delantera invertida y monoamortiguador trasero ajustable para ofrecer una conducción suave y
            estable en una variedad de condiciones.</li>
          <li>Amortiguadores diseñados para absorber los baches de la carretera y proporcionar una respuesta ágil en
            curvas.</li>
        </ul>
  
        <h3>Frenos:</h3>
        <ul>
          <li>Sistema de frenos con discos delanteros y traseros de alto rendimiento para una frenada potente y
            controlada.</li>
          <li>Tecnología de frenado antibloqueo (ABS) en la rueda delantera para una mayor seguridad al frenar en
            situaciones de emergencia.</li>
            </ul>
        </div>

      </div>
    </div>
  
  
  
  
    <div id="IrVentanaFlotanteKTM-450-EXC-F" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>KTM 450 EXC F</h2>
          <img src="https://i.ibb.co/swvJjsw/KTM-450-EXC-F.png" alt="">
          <h3>Motor:</h3>
<ul>
   <li>Tipo: Monocilíndrico de 4 tiempos.</li>
 <li>Cilindrada: 449.9 cc.</li>
<li>Potencia: Potente y robusta, optimizada para el rendimiento en competiciones off-road y enduro.</li>
 </ul>

 <h3>Estilo y Diseño:</h3>
<ul>
 <li>Estilo de enduro con una apariencia agresiva y funcional, diseñada para enfrentar terrenos difíciles y variados.</li>
 <li>Diseño resistente y ergonómico, con detalles orientados a la resistencia y la comodidad del piloto en
   largas travesías off-road.</li>
   <li>Carrocería minimalista pero resistente, con componentes específicamente diseñados para soportar las
   demandas del enduro extremo.</li>
  </ul>
  
    <h3>Suspensión:</h3>
  <ul>
  <li>Horquilla delantera invertida y amortiguador trasero ajustable de alta gama, diseñados para ofrecer una
   excelente absorción de impactos en terrenos variados.</li>
  <li>Suspensión especialmente calibrada para proporcionar una tracción óptima y una respuesta precisa en
  terrenos accidentados y técnicos.</li>
  </ul>
  
   <h3>Frenos:</h3>
   <ul>
  <li>Sistema de frenos de alto rendimiento con discos delanteros y traseros, diseñado para proporcionar una
      potente capacidad de frenado en condiciones extremas de enduro.</li>
   <li>El sistema de frenos suele incluir tecnología de frenado antibloqueo (ABS) para una mayor seguridad en
    terrenos resbaladizos.</li>

            </ul>
        </div>

      </div>
    </div>
  
  
    
    <div id="IrVentanaFlotanteKTM-790-ADVENTURE" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>KTM 790 ADVENTURE</h2>
          <img src="https://i.ibb.co/GMqDZpw/KTM-790-ADVENTURE.png" alt="">
  <h3>Motor:</h3>
        <ul>
          <li>Tipo: Bicilíndrico en paralelo.</li>
          <li>Cilindrada: 799 cc.</li>
          <li>Potencia: Potente y con un amplio rango de par motor, ideal para aventuras tanto en carreteras como fuera
            de ellas.</li>
        </ul>
        <h3>Estilo y Diseño:</h3>
        <ul>
          <li>Estilo aventurero con un diseño robusto y funcional, preparado para enfrentar diversos tipos de terreno y
            condiciones climáticas.</li>
          <li>Diseño ergonómico y versátil, con una posición de conducción cómoda tanto para trayectos largos como para
            pilotaje off-road.</li>
          <li>Carrocería resistente y aerodinámica, con detalles que facilitan la conducción en diferentes entornos.
          </li>
        </ul>
  
        <h3>Suspensión:</h3>
        <ul>
          <li>Horquilla delantera de largo recorrido y amortiguador trasero ajustable, diseñados para absorber las
            irregularidades del terreno y proporcionar estabilidad en todo tipo de condiciones.</li>
          <li>Suspensión específicamente adaptada para ofrecer un equilibrio entre confort en carretera y capacidad
            off-road.</li>
        </ul>
  
        <h3>Frenos:</h3>
        <ul>
          <li>Sistema de frenos de alto rendimiento con discos delanteros y traseros, diseñado para ofrecer una potente
            capacidad de frenado incluso en terrenos complicados.</li>
          <li>Algunos modelos pueden incluir tecnología de frenado antibloqueo (ABS) ajustable, que permite al conductor
            adaptar la respuesta de los frenos a las condiciones del terreno.</li>

            </ul>
        </div>

      </div>
    </div>
    </div>
  </section> <!-- Motos Yamaha -->
  <section id="botonKawasaki"> <!-- Motos Kawasaki -->
  <h2>KAWASAKI</h2>
    <div class="simple_gallery">
      <div class="cajamotoskawasaki">
        <ul>
          <li><a href="#IrVentanaFlotanteKAWASAKI-ER6-N"><img src="https://i.ibb.co/jvbvpDQ/KAWASAKI-ER6-N.png"
                id="KAWASAKI-ER6-N" /></a></li>
          <li><a href="#IrVentanaFlotanteKAWASAKI-VULCAN-S"><img src="https://i.ibb.co/54whPML/KAWASAKI-VULCAN-S.png"
                id="KAWASAKI-VULCAN-S" /></a></li>
          <li><a href="#IrVentanaFlotanteKAWASAKI-NINJA-650-R"><img
                src="https://i.ibb.co/mBvxgLQ/KAWASAKI-NINJA-650-R.png" id="KAWASAKI-NINJA-650-R" /></a></li>
          <li><a href="#IrVentanaFlotanteKAWASAKI-Z900"><img src="https://i.ibb.co/kyjT6tP/KAWASAKI-Z900.png"
                id="KAWASAKI-Z900" /></a></li>
          <li><a href="#IrVentanaFlotanteKAWASAKI-VERSYS-650"><img
                src="https://i.ibb.co/dcsDpz8/KAWASAKI-VERSYS-650.png" id="HONDA-CB500-X" /></a></li>
          <li><a href="#IrVentanaFlotanteKAWASAKI-NINJA-H2-R"><img
                src="https://i.ibb.co/3ysS7Tg/KAWASAKI-NINJA-H2-R.png" id="KAWASAKI-NINJA-H2-R" /></a></li>
                </ul>
        <div class="clear"></div>
      </div>
      <div id="overflow">
        <i id="close" class="fa fa-window-close"></i>
        <img src="">
      </div>

    </div>

    <div id="IrVentanaFlotanteYAMAHA-XSR-900-F" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>YAMAHA XSR 900 F</h2>
          <img src="https://i.ibb.co/cDPLcZD/YAMAHA-XSR-900-F.png" alt="">
        <h3>Motor:</h3>
        <ul>
          <li>Tipo: Bicilíndrico en V.</li>
          <li>Cilindrada: 1301 cc.</li>
          <li>Potencia: Extremadamente potente y capaz de ofrecer un rendimiento excepcional tanto en carreteras como
            en circuitos.</li>
        </ul>
  
        <h3>Estilo y Diseño:</h3>
        <ul>
          <li>Estilo naked con una apariencia agresiva y musculosa que refleja su naturaleza de alta rendimiento.</li>
          <li>Diseño aerodinámico y ergonómico diseñado para una experiencia de conducción deportiva y cómoda.</li>
          <li>Carrocería angular y futurista con detalles distintivos que destacan su carácter dinámico y tecnológico.
          </li>
        </ul>
  
        <h3>Suspensión:</h3>
        <ul>
          <li>Horquilla delantera invertida y sistema de amortiguación trasera totalmente ajustable, diseñados para
            proporcionar una respuesta precisa y un manejo excepcional en todo tipo de condiciones.</li>
          <li>Amortiguadores de alta gama con tecnología avanzada para ofrecer un rendimiento óptimo en curvas y una
            conducción suave en carreteras irregulares.</li>
        </ul>
  
        <h3>Frenos:</h3>
        <ul>
          <li>Sistema de frenos Brembo de alta especificación con discos delanteros y traseros de gran tamaño,
            proporcionando una frenada potente y controlada incluso a altas velocidades.</li>
          <li>Frenos delanteros equipados con tecnología de frenado antibloqueo (ABS) de última generación para una
            seguridad óptima en todas las condiciones de conducción.</li>
            </ul>
        </div>
      </div>
    </div>

    <div id="IrVentanaFlotanteYAMAHA-TENERE-700" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>YAMAHA TENERE 700</h2>
          <img src="https://i.ibb.co/TcbXMsm/YAMAHA-TENERE-700.png" alt="">

        <h3>Motor:</h3>
        <ul>
          <li>Tipo: Monocilíndrico de 2 tiempos.</li>
          <li>Cilindrada: 249 cc.</li>
          <li>Potencia: Potente y ágil, diseñada específicamente para el rendimiento en competiciones off-road.</li>
        </ul>
        <h3>Estilo y Diseño:</h3>
        <ul>
          <li>Estilo de motocross puramente orientado al rendimiento, con una apariencia agresiva y funcional.</li>
          <li>Diseño ligero y aerodinámico, optimizado para ofrecer la máxima maniobrabilidad y capacidad de salto en
            terrenos off-road.</li>
          <li>Carrocería minimalista con detalles de alta resistencia, diseñada para soportar las demandas del
            motocross competitivo.</li>
        </ul>
  
        <h3>Suspensión:</h3>
        <ul>
          <li>Horquilla delantera invertida y amortiguador trasero ajustable de alta gama, diseñados para absorber
            impactos grandes y pequeños en terrenos difíciles.</li>
          <li>Suspensión especialmente calibrada para ofrecer una respuesta precisa y una excelente tracción en todo
            tipo de superficies.</li>
        </ul>
  
        <h3>Frenos:</h3>
        <ul>
          <li>Sistema de frenos de alto rendimiento con discos delanteros y traseros, diseñado para ofrecer una
            potente capacidad de frenado en condiciones extremas.</li>
          <li>El sistema de frenos no suele incluir ABS, ya que en el motocross la capacidad de bloquear la rueda
            trasera puede ser útil para ciertas maniobras.</li>
            </ul>
        </div>
      </div>
    </div>

    <div id="IrVentanaFlotanteYAMAHA-YZF-R6" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>YAMAHA YZF R6</h2>
          <img src="https://i.ibb.co/mRWdVfx/YAMAHA-YZF-R6.png" alt="">
         
        <h3>Motor:</h3>
        <ul>
          <li>Tipo: Monocilíndrico de 4 tiempos.</li>
          <li>Cilindrada: 690 cc.</li>
          <li>Potencia: Potente y con un alto par motor, diseñada para un rendimiento óptimo en carreteras y
            circuitos.</li>
        </ul>
        <h3>Estilo y Diseño:</h3>
        <ul>
          <li>Estilo supermoto con un aspecto agresivo y deportivo, destinado a ofrecer una experiencia de conducción
            emocionante en carreteras y pistas.</li>
          <li>Diseño aerodinámico y ergonómico, con una posición de conducción cómoda y orientada al rendimiento
            deportivo.</li>
          <li>Carrocería compacta y ligera, con detalles inspirados en el mundo de las competiciones de supermoto.
          </li>
        </ul>
  
        <h3>Suspensión:</h3>
        <ul>
          <li>Horquilla delantera invertida de alta calidad y amortiguador trasero ajustable, diseñados para ofrecer
            una excelente absorción de impactos y una respuesta precisa en curvas.</li>
          <li>Suspensión específicamente ajustada para proporcionar una conducción ágil y estable tanto en carreteras
            como en circuitos.</li>
        </ul>
  
        <h3>Frenos:</h3>
        <ul>
          <li>Sistema de frenos de alto rendimiento con discos delanteros y traseros, diseñado para proporcionar una
            potente capacidad de frenado en condiciones de conducción deportiva.</li>
          <li>El sistema de frenos suele incluir tecnología de frenado antibloqueo (ABS) para una frenada segura y
            controlada en diversas situaciones.</li>
            </ul>
        </div>
      </div>
    </div>

    <div id="IrVentanaFlotanteYAMAHA-MT-07" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>YAMAHA MT 07</h2>
          <img src="https://i.ibb.co/8X2sGNx/YAMAHA-MT-07.png" alt="">
          
        <h3>Motor:</h3>
        <ul>
          <li>Tipo: Monocilíndrico.</li>
          <li>Cilindrada: 373.2 cc.</li>
          <li>Potencia: Potente y ágil, ideal para uso urbano y aventuras en carreteras.</li>
        </ul>
        <h3>Estilo y Diseño:</h3>
        <ul>
          <li>Estilo naked con un diseño moderno y agresivo que refleja su naturaleza deportiva.</li>
          <li>Diseño compacto y ligero, perfecto para maniobrar fácilmente en el tráfico urbano y disfrutar de la
            conducción en carreteras sinuosas.</li>
          <li>Carrocería aerodinámica con líneas angulares y detalles llamativos que le dan un aspecto dinámico y
            juvenil.</li>
        </ul>
  
        <h3>Suspensión:</h3>
        <ul>
          <li>Horquilla delantera invertida y monoamortiguador trasero ajustable para ofrecer una conducción suave y
            estable en una variedad de condiciones.</li>
          <li>Amortiguadores diseñados para absorber los baches de la carretera y proporcionar una respuesta ágil en
            curvas.</li>
        </ul>
  
        <h3>Frenos:</h3>
        <ul>
          <li>Sistema de frenos con discos delanteros y traseros de alto rendimiento para una frenada potente y
            controlada.</li>
          <li>Tecnología de frenado antibloqueo (ABS) en la rueda delantera para una mayor seguridad al frenar en
            situaciones de emergencia.</li>
            </ul>
        </div>

      </div>
    </div>
  
  
  
  
    <div id="IrVentanaFlotanteYAMAHA-TRACER-900" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>YAMAHA TRACER 900</h2>
          <img src="https://i.ibb.co/jR3NYRD/YAMAHA-TRACER-900.png" alt="">
          <h3>Motor:</h3>
<ul>
   <li>Tipo: Monocilíndrico de 4 tiempos.</li>
 <li>Cilindrada: 449.9 cc.</li>
<li>Potencia: Potente y robusta, optimizada para el rendimiento en competiciones off-road y enduro.</li>
 </ul>

 <h3>Estilo y Diseño:</h3>
<ul>
 <li>Estilo de enduro con una apariencia agresiva y funcional, diseñada para enfrentar terrenos difíciles y variados.</li>
 <li>Diseño resistente y ergonómico, con detalles orientados a la resistencia y la comodidad del piloto en
   largas travesías off-road.</li>
   <li>Carrocería minimalista pero resistente, con componentes específicamente diseñados para soportar las
   demandas del enduro extremo.</li>
  </ul>
  
    <h3>Suspensión:</h3>
  <ul>
  <li>Horquilla delantera invertida y amortiguador trasero ajustable de alta gama, diseñados para ofrecer una
   excelente absorción de impactos en terrenos variados.</li>
  <li>Suspensión especialmente calibrada para proporcionar una tracción óptima y una respuesta precisa en
  terrenos accidentados y técnicos.</li>
  </ul>
  
   <h3>Frenos:</h3>
   <ul>
  <li>Sistema de frenos de alto rendimiento con discos delanteros y traseros, diseñado para proporcionar una
      potente capacidad de frenado en condiciones extremas de enduro.</li>
   <li>El sistema de frenos suele incluir tecnología de frenado antibloqueo (ABS) para una mayor seguridad en
    terrenos resbaladizos.</li>

            </ul>
        </div>

      </div>
    </div>
  
  
    
    <div id="IrVentanaFlotanteYAMAHA YZF R1" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>YAMAHA YZF R1</h2>
          <img src="https://i.ibb.co/tKF5Hm3/YAMAHA-YZF-R1.png" alt="">
  <h3>Motor:</h3>
        <ul>
          <li>Tipo: Bicilíndrico en paralelo.</li>
          <li>Cilindrada: 799 cc.</li>
          <li>Potencia: Potente y con un amplio rango de par motor, ideal para aventuras tanto en carreteras como fuera
            de ellas.</li>
        </ul>
        <h3>Estilo y Diseño:</h3>
        <ul>
          <li>Estilo aventurero con un diseño robusto y funcional, preparado para enfrentar diversos tipos de terreno y
            condiciones climáticas.</li>
          <li>Diseño ergonómico y versátil, con una posición de conducción cómoda tanto para trayectos largos como para
            pilotaje off-road.</li>
          <li>Carrocería resistente y aerodinámica, con detalles que facilitan la conducción en diferentes entornos.
          </li>
        </ul>
  
        <h3>Suspensión:</h3>
        <ul>
          <li>Horquilla delantera de largo recorrido y amortiguador trasero ajustable, diseñados para absorber las
            irregularidades del terreno y proporcionar estabilidad en todo tipo de condiciones.</li>
          <li>Suspensión específicamente adaptada para ofrecer un equilibrio entre confort en carretera y capacidad
            off-road.</li>
        </ul>
  
        <h3>Frenos:</h3>
        <ul>
          <li>Sistema de frenos de alto rendimiento con discos delanteros y traseros, diseñado para ofrecer una potente
            capacidad de frenado incluso en terrenos complicados.</li>
          <li>Algunos modelos pueden incluir tecnología de frenado antibloqueo (ABS) ajustable, que permite al conductor
            adaptar la respuesta de los frenos a las condiciones del terreno.</li>

            </ul>
        </div>

      </div>
    </div>
    </div>
       
  </section> <!-- Motos kawasaki -->


  <section id="botonKtm"> <!-- Motos Ktm -->
  <h2>KTM</h2>
    <div class="simple_gallery">
      <div class="cajamotosktm">
        <ul>
          <li><a href="#IrVentanaFlotanteKTM-SUPER-DUKE-1290"><img
                src="https://i.ibb.co/PcqSdXT/KTM-SUPER-DUKE-1290.png" id="KTM-SUPER-DUKE-1290" /></a></li>
          <li><a href="#IrVentanaFlotanteKTM-250-SX"><img src="https://i.ibb.co/dBxCFyX/KTM-250-SX.png"
                id="KTM-250-SX" /></a></li>
          <li><a href="#IrVentanaFlotanteKTM-SMC-690"><img src="https://i.ibb.co/fkpHx5p/KTM-SMC-690.png"
                id="KTM-SMC-690" /></a></li>
          <li><a href="#IrVentanaFlotanteKTM-DUKE-390"><img src="https://i.ibb.co/PjFy8cB/KTM-DUKE-390.png"
                id="KTM-DUKE-390" /></a></li>
          <li><a href="#IrVentanaFlotanteKTM-450-EXC-F"><img src="https://i.ibb.co/swvJjsw/KTM-450-EXC-F.png"
                id="KTM-450-EXC-F" /></a></li>
          <li><a href="#IrVentanaFlotanteKTM-790-ADVENTURE"><img src="https://i.ibb.co/GMqDZpw/KTM-790-ADVENTURE.png"
                id="KTM-790-ADVENTURE" /></a></li>
                </ul>
        <div class="clear"></div>
      </div>
      <div id="overflow">
        <i id="close" class="fa fa-window-close"></i>
        <img src="">
      </div>

    </div>

    <div id="IrVentanaFlotanteKTM-SUPER-DUKE-1290" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>KTM-SUPER-DUKE-1290</h2>
          <img src="https://i.ibb.co/PcqSdXT/KTM-SUPER-DUKE-1290.png" alt="">
        <h3>Motor:</h3>
        <ul>
          <li>Tipo: Bicilíndrico en V.</li>
          <li>Cilindrada: 1301 cc.</li>
          <li>Potencia: Extremadamente potente y capaz de ofrecer un rendimiento excepcional tanto en carreteras como
            en circuitos.</li>
        </ul>
  
        <h3>Estilo y Diseño:</h3>
        <ul>
          <li>Estilo naked con una apariencia agresiva y musculosa que refleja su naturaleza de alta rendimiento.</li>
          <li>Diseño aerodinámico y ergonómico diseñado para una experiencia de conducción deportiva y cómoda.</li>
          <li>Carrocería angular y futurista con detalles distintivos que destacan su carácter dinámico y tecnológico.
          </li>
        </ul>
  
        <h3>Suspensión:</h3>
        <ul>
          <li>Horquilla delantera invertida y sistema de amortiguación trasera totalmente ajustable, diseñados para
            proporcionar una respuesta precisa y un manejo excepcional en todo tipo de condiciones.</li>
          <li>Amortiguadores de alta gama con tecnología avanzada para ofrecer un rendimiento óptimo en curvas y una
            conducción suave en carreteras irregulares.</li>
        </ul>
  
        <h3>Frenos:</h3>
        <ul>
          <li>Sistema de frenos Brembo de alta especificación con discos delanteros y traseros de gran tamaño,
            proporcionando una frenada potente y controlada incluso a altas velocidades.</li>
          <li>Frenos delanteros equipados con tecnología de frenado antibloqueo (ABS) de última generación para una
            seguridad óptima en todas las condiciones de conducción.</li>
            </ul>
        </div>
      </div>
    </div>

    <div id="IrVentanaFlotanteKTM-250-SX" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>KTM 250 SX</h2>
          <img src="https://i.ibb.co/dBxCFyX/KTM-250-SX.png" alt="">

        <h3>Motor:</h3>
        <ul>
          <li>Tipo: Monocilíndrico de 2 tiempos.</li>
          <li>Cilindrada: 249 cc.</li>
          <li>Potencia: Potente y ágil, diseñada específicamente para el rendimiento en competiciones off-road.</li>
        </ul>
        <h3>Estilo y Diseño:</h3>
        <ul>
          <li>Estilo de motocross puramente orientado al rendimiento, con una apariencia agresiva y funcional.</li>
          <li>Diseño ligero y aerodinámico, optimizado para ofrecer la máxima maniobrabilidad y capacidad de salto en
            terrenos off-road.</li>
          <li>Carrocería minimalista con detalles de alta resistencia, diseñada para soportar las demandas del
            motocross competitivo.</li>
        </ul>
  
        <h3>Suspensión:</h3>
        <ul>
          <li>Horquilla delantera invertida y amortiguador trasero ajustable de alta gama, diseñados para absorber
            impactos grandes y pequeños en terrenos difíciles.</li>
          <li>Suspensión especialmente calibrada para ofrecer una respuesta precisa y una excelente tracción en todo
            tipo de superficies.</li>
        </ul>
  
        <h3>Frenos:</h3>
        <ul>
          <li>Sistema de frenos de alto rendimiento con discos delanteros y traseros, diseñado para ofrecer una
            potente capacidad de frenado en condiciones extremas.</li>
          <li>El sistema de frenos no suele incluir ABS, ya que en el motocross la capacidad de bloquear la rueda
            trasera puede ser útil para ciertas maniobras.</li>
            </ul>
        </div>
      </div>
    </div>

    <div id="IrVentanaFlotanteKTM-SMC-690" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>KTM SMC 690</h2>
          <img src="https://i.ibb.co/fkpHx5p/KTM-SMC-690.png" alt="">
         
        <h3>Motor:</h3>
        <ul>
          <li>Tipo: Monocilíndrico de 4 tiempos.</li>
          <li>Cilindrada: 690 cc.</li>
          <li>Potencia: Potente y con un alto par motor, diseñada para un rendimiento óptimo en carreteras y
            circuitos.</li>
        </ul>
        <h3>Estilo y Diseño:</h3>
        <ul>
          <li>Estilo supermoto con un aspecto agresivo y deportivo, destinado a ofrecer una experiencia de conducción
            emocionante en carreteras y pistas.</li>
          <li>Diseño aerodinámico y ergonómico, con una posición de conducción cómoda y orientada al rendimiento
            deportivo.</li>
          <li>Carrocería compacta y ligera, con detalles inspirados en el mundo de las competiciones de supermoto.
          </li>
        </ul>
  
        <h3>Suspensión:</h3>
        <ul>
          <li>Horquilla delantera invertida de alta calidad y amortiguador trasero ajustable, diseñados para ofrecer
            una excelente absorción de impactos y una respuesta precisa en curvas.</li>
          <li>Suspensión específicamente ajustada para proporcionar una conducción ágil y estable tanto en carreteras
            como en circuitos.</li>
        </ul>
  
        <h3>Frenos:</h3>
        <ul>
          <li>Sistema de frenos de alto rendimiento con discos delanteros y traseros, diseñado para proporcionar una
            potente capacidad de frenado en condiciones de conducción deportiva.</li>
          <li>El sistema de frenos suele incluir tecnología de frenado antibloqueo (ABS) para una frenada segura y
            controlada en diversas situaciones.</li>
            </ul>
        </div>
      </div>
    </div>

    <div id="IrVentanaFlotanteKTM-DUKE-390" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>KTM DUKE 390</h2>
          <img src="https://i.ibb.co/PjFy8cB/KTM-DUKE-390.png" alt="">
          
        <h3>Motor:</h3>
        <ul>
          <li>Tipo: Monocilíndrico.</li>
          <li>Cilindrada: 373.2 cc.</li>
          <li>Potencia: Potente y ágil, ideal para uso urbano y aventuras en carreteras.</li>
        </ul>
        <h3>Estilo y Diseño:</h3>
        <ul>
          <li>Estilo naked con un diseño moderno y agresivo que refleja su naturaleza deportiva.</li>
          <li>Diseño compacto y ligero, perfecto para maniobrar fácilmente en el tráfico urbano y disfrutar de la
            conducción en carreteras sinuosas.</li>
          <li>Carrocería aerodinámica con líneas angulares y detalles llamativos que le dan un aspecto dinámico y
            juvenil.</li>
        </ul>
  
        <h3>Suspensión:</h3>
        <ul>
          <li>Horquilla delantera invertida y monoamortiguador trasero ajustable para ofrecer una conducción suave y
            estable en una variedad de condiciones.</li>
          <li>Amortiguadores diseñados para absorber los baches de la carretera y proporcionar una respuesta ágil en
            curvas.</li>
        </ul>
  
        <h3>Frenos:</h3>
        <ul>
          <li>Sistema de frenos con discos delanteros y traseros de alto rendimiento para una frenada potente y
            controlada.</li>
          <li>Tecnología de frenado antibloqueo (ABS) en la rueda delantera para una mayor seguridad al frenar en
            situaciones de emergencia.</li>
            </ul>
        </div>

      </div>
    </div>
  
  
  
  
    <div id="IrVentanaFlotanteKTM-450-EXC-F" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>KTM 450 EXC F</h2>
          <img src="https://i.ibb.co/swvJjsw/KTM-450-EXC-F.png" alt="">
          <h3>Motor:</h3>
<ul>
   <li>Tipo: Monocilíndrico de 4 tiempos.</li>
 <li>Cilindrada: 449.9 cc.</li>
<li>Potencia: Potente y robusta, optimizada para el rendimiento en competiciones off-road y enduro.</li>
 </ul>

 <h3>Estilo y Diseño:</h3>
<ul>
 <li>Estilo de enduro con una apariencia agresiva y funcional, diseñada para enfrentar terrenos difíciles y variados.</li>
 <li>Diseño resistente y ergonómico, con detalles orientados a la resistencia y la comodidad del piloto en
   largas travesías off-road.</li>
   <li>Carrocería minimalista pero resistente, con componentes específicamente diseñados para soportar las
   demandas del enduro extremo.</li>
  </ul>
  
    <h3>Suspensión:</h3>
  <ul>
  <li>Horquilla delantera invertida y amortiguador trasero ajustable de alta gama, diseñados para ofrecer una
   excelente absorción de impactos en terrenos variados.</li>
  <li>Suspensión especialmente calibrada para proporcionar una tracción óptima y una respuesta precisa en
  terrenos accidentados y técnicos.</li>
  </ul>
  
   <h3>Frenos:</h3>
   <ul>
  <li>Sistema de frenos de alto rendimiento con discos delanteros y traseros, diseñado para proporcionar una
      potente capacidad de frenado en condiciones extremas de enduro.</li>
   <li>El sistema de frenos suele incluir tecnología de frenado antibloqueo (ABS) para una mayor seguridad en
    terrenos resbaladizos.</li>

            </ul>
        </div>

      </div>
    </div>
  
  
    
    <div id="IrVentanaFlotanteKTM-790-ADVENTURE" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>KTM 790 ADVENTURE</h2>
          <img src="https://i.ibb.co/GMqDZpw/KTM-790-ADVENTURE.png" alt="">
  <h3>Motor:</h3>
        <ul>
          <li>Tipo: Bicilíndrico en paralelo.</li>
          <li>Cilindrada: 799 cc.</li>
          <li>Potencia: Potente y con un amplio rango de par motor, ideal para aventuras tanto en carreteras como fuera
            de ellas.</li>
        </ul>
        <h3>Estilo y Diseño:</h3>
        <ul>
          <li>Estilo aventurero con un diseño robusto y funcional, preparado para enfrentar diversos tipos de terreno y
            condiciones climáticas.</li>
          <li>Diseño ergonómico y versátil, con una posición de conducción cómoda tanto para trayectos largos como para
            pilotaje off-road.</li>
          <li>Carrocería resistente y aerodinámica, con detalles que facilitan la conducción en diferentes entornos.
          </li>
        </ul>
  
        <h3>Suspensión:</h3>
        <ul>
          <li>Horquilla delantera de largo recorrido y amortiguador trasero ajustable, diseñados para absorber las
            irregularidades del terreno y proporcionar estabilidad en todo tipo de condiciones.</li>
          <li>Suspensión específicamente adaptada para ofrecer un equilibrio entre confort en carretera y capacidad
            off-road.</li>
        </ul>
  
        <h3>Frenos:</h3>
        <ul>
          <li>Sistema de frenos de alto rendimiento con discos delanteros y traseros, diseñado para ofrecer una potente
            capacidad de frenado incluso en terrenos complicados.</li>
          <li>Algunos modelos pueden incluir tecnología de frenado antibloqueo (ABS) ajustable, que permite al conductor
            adaptar la respuesta de los frenos a las condiciones del terreno.</li>

            </ul>
        </div>

      </div>
    </div>
    </div>
  </section> <!-- Motos ktm -->


  <section id="botonSuzuki"> <!-- Motos Suzuki -->
  <h2>SUZUKI</h2>
    <div class="simple_gallery">
      <div class="cajamotossuzuki">
        <ul>
          <li><a href="#IrVentanaFlotanteSUZUKI-BOULEVARD"><img src="https://i.ibb.co/2hCk7sn/SUZUKI-BOULEVARD.png"
                id="SUZUKI-BOULEVARD" /></a></li>
          <li><a href="#IrVentanaFlotanteSUZUKI-V-STROM-650"><img src="https://i.ibb.co/SK1zHyV/SUZUKI-V-STROM-650.png"
                id="SUZUKI-V-STROM-650" /></a></li>
          <li><a href="#IrVentanaFlotanteSUZUKI-HAYABUSA"><img src="https://i.ibb.co/939yRSy/SUZUKI-HAYABUSA.png"
                id="SUZUKI-HAYABUSA" /></a></li>
          <li><a href="#IrVentanaFlotanteSUZUKI-BURGMAN-400"><img src="https://i.ibb.co/0CVbB2z/SUZUKI-BURGMAN-400.png"
                id="SUZUKI-BURGMAN-400" /></a></li>
          <li><a href="#IrVentanaFlotanteSUZUKI-GSX-S-1000"><img src="https://i.ibb.co/jySXMBs/SUZUKI-GSX-S-1000.png"
                id="SUZUKI-GSX-S-1000" /></a></li>
          <li><a href="#IrVentanaFlotanteSUZUKI-GSX-R-1000"><img src="https://i.ibb.co/BT3J48S/SUZUKI-GSX-R-1000.png"
                id="SUZUKI-GSX-R-1000" /></a></li>
                </ul>
        <div class="clear"></div>
      </div>
      <div id="overflow">
        <i id="close" class="fa fa-window-close"></i>
        <img src="">
      </div>

    </div>

    <div id="IrVentanaFlotanteSUZUKI-BOULEVARD" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>SUZUKI BOULEVARD</h2>
          <img src="https://i.ibb.co/2hCk7sn/SUZUKI-BOULEVARD.png" alt="">
        <h3>Motor:</h3>
        <ul>
          <li>Tipo: Bicilíndrico en V.</li>
          <li>Cilindrada: 1301 cc.</li>
          <li>Potencia: Extremadamente potente y capaz de ofrecer un rendimiento excepcional tanto en carreteras como
            en circuitos.</li>
        </ul>
  
        <h3>Estilo y Diseño:</h3>
        <ul>
          <li>Estilo naked con una apariencia agresiva y musculosa que refleja su naturaleza de alta rendimiento.</li>
          <li>Diseño aerodinámico y ergonómico diseñado para una experiencia de conducción deportiva y cómoda.</li>
          <li>Carrocería angular y futurista con detalles distintivos que destacan su carácter dinámico y tecnológico.
          </li>
        </ul>
  
        <h3>Suspensión:</h3>
        <ul>
          <li>Horquilla delantera invertida y sistema de amortiguación trasera totalmente ajustable, diseñados para
            proporcionar una respuesta precisa y un manejo excepcional en todo tipo de condiciones.</li>
          <li>Amortiguadores de alta gama con tecnología avanzada para ofrecer un rendimiento óptimo en curvas y una
            conducción suave en carreteras irregulares.</li>
        </ul>
  
        <h3>Frenos:</h3>
        <ul>
          <li>Sistema de frenos Brembo de alta especificación con discos delanteros y traseros de gran tamaño,
            proporcionando una frenada potente y controlada incluso a altas velocidades.</li>
          <li>Frenos delanteros equipados con tecnología de frenado antibloqueo (ABS) de última generación para una
            seguridad óptima en todas las condiciones de conducción.</li>
            </ul>
        </div>
      </div>
    </div>

    <div id="IrVentanaFlotanteSUZUKI-V-STROM-650" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>SUZUKI V STROM 650</h2>
          <img src="https://i.ibb.co/SK1zHyV/SUZUKI-V-STROM-650.png" alt="">

        <h3>Motor:</h3>
        <ul>
          <li>Tipo: Monocilíndrico de 2 tiempos.</li>
          <li>Cilindrada: 249 cc.</li>
          <li>Potencia: Potente y ágil, diseñada específicamente para el rendimiento en competiciones off-road.</li>
        </ul>
        <h3>Estilo y Diseño:</h3>
        <ul>
          <li>Estilo de motocross puramente orientado al rendimiento, con una apariencia agresiva y funcional.</li>
          <li>Diseño ligero y aerodinámico, optimizado para ofrecer la máxima maniobrabilidad y capacidad de salto en
            terrenos off-road.</li>
          <li>Carrocería minimalista con detalles de alta resistencia, diseñada para soportar las demandas del
            motocross competitivo.</li>
        </ul>
  
        <h3>Suspensión:</h3>
        <ul>
          <li>Horquilla delantera invertida y amortiguador trasero ajustable de alta gama, diseñados para absorber
            impactos grandes y pequeños en terrenos difíciles.</li>
          <li>Suspensión especialmente calibrada para ofrecer una respuesta precisa y una excelente tracción en todo
            tipo de superficies.</li>
        </ul>
  
        <h3>Frenos:</h3>
        <ul>
          <li>Sistema de frenos de alto rendimiento con discos delanteros y traseros, diseñado para ofrecer una
            potente capacidad de frenado en condiciones extremas.</li>
          <li>El sistema de frenos no suele incluir ABS, ya que en el motocross la capacidad de bloquear la rueda
            trasera puede ser útil para ciertas maniobras.</li>
            </ul>
        </div>
      </div>
    </div>

    <div id="IrVentanaFlotanteSUZUKI-HAYABUSA" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>SUZUKI HAYABUSA</h2>
          <img src="https://i.ibb.co/939yRSy/SUZUKI-HAYABUSA.png" alt="">
         
        <h3>Motor:</h3>
        <ul>
          <li>Tipo: Monocilíndrico de 4 tiempos.</li>
          <li>Cilindrada: 690 cc.</li>
          <li>Potencia: Potente y con un alto par motor, diseñada para un rendimiento óptimo en carreteras y
            circuitos.</li>
        </ul>
        <h3>Estilo y Diseño:</h3>
        <ul>
          <li>Estilo supermoto con un aspecto agresivo y deportivo, destinado a ofrecer una experiencia de conducción
            emocionante en carreteras y pistas.</li>
          <li>Diseño aerodinámico y ergonómico, con una posición de conducción cómoda y orientada al rendimiento
            deportivo.</li>
          <li>Carrocería compacta y ligera, con detalles inspirados en el mundo de las competiciones de supermoto.
          </li>
        </ul>
  
        <h3>Suspensión:</h3>
        <ul>
          <li>Horquilla delantera invertida de alta calidad y amortiguador trasero ajustable, diseñados para ofrecer
            una excelente absorción de impactos y una respuesta precisa en curvas.</li>
          <li>Suspensión específicamente ajustada para proporcionar una conducción ágil y estable tanto en carreteras
            como en circuitos.</li>
        </ul>
  
        <h3>Frenos:</h3>
        <ul>
          <li>Sistema de frenos de alto rendimiento con discos delanteros y traseros, diseñado para proporcionar una
            potente capacidad de frenado en condiciones de conducción deportiva.</li>
          <li>El sistema de frenos suele incluir tecnología de frenado antibloqueo (ABS) para una frenada segura y
            controlada en diversas situaciones.</li>
            </ul>
        </div>
      </div>
    </div>

    <div id="IrVentanaFlotanteSUZUKI-BURGMAN-400" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>SUZUKI BURGMAN 400</h2>
          <img src="https://i.ibb.co/0CVbB2z/SUZUKI-BURGMAN-400.png" alt="">
          
        <h3>Motor:</h3>
        <ul>
          <li>Tipo: Monocilíndrico.</li>
          <li>Cilindrada: 373.2 cc.</li>
          <li>Potencia: Potente y ágil, ideal para uso urbano y aventuras en carreteras.</li>
        </ul>
        <h3>Estilo y Diseño:</h3>
        <ul>
          <li>Estilo naked con un diseño moderno y agresivo que refleja su naturaleza deportiva.</li>
          <li>Diseño compacto y ligero, perfecto para maniobrar fácilmente en el tráfico urbano y disfrutar de la
            conducción en carreteras sinuosas.</li>
          <li>Carrocería aerodinámica con líneas angulares y detalles llamativos que le dan un aspecto dinámico y
            juvenil.</li>
        </ul>
  
        <h3>Suspensión:</h3>
        <ul>
          <li>Horquilla delantera invertida y monoamortiguador trasero ajustable para ofrecer una conducción suave y
            estable en una variedad de condiciones.</li>
          <li>Amortiguadores diseñados para absorber los baches de la carretera y proporcionar una respuesta ágil en
            curvas.</li>
        </ul>
  
        <h3>Frenos:</h3>
        <ul>
          <li>Sistema de frenos con discos delanteros y traseros de alto rendimiento para una frenada potente y
            controlada.</li>
          <li>Tecnología de frenado antibloqueo (ABS) en la rueda delantera para una mayor seguridad al frenar en
            situaciones de emergencia.</li>
            </ul>
        </div>

      </div>
    </div>
  
  
  
  
    <div id="IrVentanaFlotanteSUZUKI-GSX-S-1000" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>SUZUKI GSX S 1000</h2>
          <img src="https://i.ibb.co/jySXMBs/SUZUKI-GSX-S-1000.png" alt="">
          <h3>Motor:</h3>
<ul>
   <li>Tipo: Monocilíndrico de 4 tiempos.</li>
 <li>Cilindrada: 449.9 cc.</li>
<li>Potencia: Potente y robusta, optimizada para el rendimiento en competiciones off-road y enduro.</li>
 </ul>

 <h3>Estilo y Diseño:</h3>
<ul>
 <li>Estilo de enduro con una apariencia agresiva y funcional, diseñada para enfrentar terrenos difíciles y variados.</li>
 <li>Diseño resistente y ergonómico, con detalles orientados a la resistencia y la comodidad del piloto en
   largas travesías off-road.</li>
   <li>Carrocería minimalista pero resistente, con componentes específicamente diseñados para soportar las
   demandas del enduro extremo.</li>
  </ul>
  
    <h3>Suspensión:</h3>
  <ul>
  <li>Horquilla delantera invertida y amortiguador trasero ajustable de alta gama, diseñados para ofrecer una
   excelente absorción de impactos en terrenos variados.</li>
  <li>Suspensión especialmente calibrada para proporcionar una tracción óptima y una respuesta precisa en
  terrenos accidentados y técnicos.</li>
  </ul>
  
   <h3>Frenos:</h3>
   <ul>
  <li>Sistema de frenos de alto rendimiento con discos delanteros y traseros, diseñado para proporcionar una
      potente capacidad de frenado en condiciones extremas de enduro.</li>
   <li>El sistema de frenos suele incluir tecnología de frenado antibloqueo (ABS) para una mayor seguridad en
    terrenos resbaladizos.</li>

            </ul>
        </div>

      </div>
    </div>
  
  
    
    <div id="IrVentanaFlotanteSUZUKI-GSX-R-1000" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>SUZUKI GSX R 1000</h2>
          <img src="https://i.ibb.co/BT3J48S/SUZUKI-GSX-R-1000.png" alt="">
  <h3>Motor:</h3>
        <ul>
          <li>Tipo: Bicilíndrico en paralelo.</li>
          <li>Cilindrada: 799 cc.</li>
          <li>Potencia: Potente y con un amplio rango de par motor, ideal para aventuras tanto en carreteras como fuera
            de ellas.</li>
        </ul>
        <h3>Estilo y Diseño:</h3>
        <ul>
          <li>Estilo aventurero con un diseño robusto y funcional, preparado para enfrentar diversos tipos de terreno y
            condiciones climáticas.</li>
          <li>Diseño ergonómico y versátil, con una posición de conducción cómoda tanto para trayectos largos como para
            pilotaje off-road.</li>
          <li>Carrocería resistente y aerodinámica, con detalles que facilitan la conducción en diferentes entornos.
          </li>
        </ul>
  
        <h3>Suspensión:</h3>
        <ul>
          <li>Horquilla delantera de largo recorrido y amortiguador trasero ajustable, diseñados para absorber las
            irregularidades del terreno y proporcionar estabilidad en todo tipo de condiciones.</li>
          <li>Suspensión específicamente adaptada para ofrecer un equilibrio entre confort en carretera y capacidad
            off-road.</li>
        </ul>
  
        <h3>Frenos:</h3>
        <ul>
          <li>Sistema de frenos de alto rendimiento con discos delanteros y traseros, diseñado para ofrecer una potente
            capacidad de frenado incluso en terrenos complicados.</li>
          <li>Algunos modelos pueden incluir tecnología de frenado antibloqueo (ABS) ajustable, que permite al conductor
            adaptar la respuesta de los frenos a las condiciones del terreno.</li>

            </ul>
        </div>

      </div>
    </div>
    </div>
  </section> <!-- Motos Suzuki -->



  <section id="botonDucati"> <!-- Motos Ducati -->
  <h2>DUCATI</h2>
    <div class="simple_gallery">
      <div class="cajamotosducati">
        <ul>
          <li><a href="#IrVentanaFlotanteDUCATI-SCRAMBLER"><img src="https://i.ibb.co/8DVjNhk/DUCATI-SCRAMBLER.png"
                id="DUCATI-SCRAMBLER" /></a></li>
          <li><a href="#IrVentanaFlotanteDUCATI-DIAVEL"><img src="https://i.ibb.co/HtDpcYr/DUCATI-DIAVEL.png"
                id="DUCATI-DIAVEL" /></a></li>
          <li><a href="#IrVentanaFlotanteDUCATI-PANIGALE"><img src="https://i.ibb.co/Jc0jXwQ/DUCATI-PANIGALE.png"
                id="DUCATI-PANIGALE" /></a></li>
          <li><a href="#IrVentanaFlotanteDUCATI-MONSTER"><img src="https://i.ibb.co/6md8JtW/DUCATI-MONSTER.png"
                id="DUCATI-MONSTER" /></a></li>
          <li><a href="#IrVentanaFlotanteDUCATI-HYPERMOTARD-950"><img
                src="https://i.ibb.co/FnhWDSB/DUCATI-HYPERMOTARD-950.png" id="DUCATI-HYPERMOTARD-950" /></a></li>
          <li><a href="#IrVentanaFlotanteDUCATI-SUPERLEGGERA"><img
                src="https://i.ibb.co/Rv32jtw/DUCATI-SUPERLEGGERA.png" id="DUCATI-SUPERLEGGERA" /></a></li>
                </ul>
        <div class="clear"></div>
      </div>
      <div id="overflow">
        <i id="close" class="fa fa-window-close"></i>
        <img src="">
      </div>

    </div>

    <div id="IrVentanaFlotanteDUCATI-SCRAMBLER" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>DUCATI SCRAMBLER</h2>
          <img src="https://i.ibb.co/8DVjNhk/DUCATI-SCRAMBLER.png" alt="">
        <h3>Motor:</h3>
        <ul>
          <li>Tipo: Bicilíndrico en V.</li>
          <li>Cilindrada: 1301 cc.</li>
          <li>Potencia: Extremadamente potente y capaz de ofrecer un rendimiento excepcional tanto en carreteras como
            en circuitos.</li>
        </ul>
  
        <h3>Estilo y Diseño:</h3>
        <ul>
          <li>Estilo naked con una apariencia agresiva y musculosa que refleja su naturaleza de alta rendimiento.</li>
          <li>Diseño aerodinámico y ergonómico diseñado para una experiencia de conducción deportiva y cómoda.</li>
          <li>Carrocería angular y futurista con detalles distintivos que destacan su carácter dinámico y tecnológico.
          </li>
        </ul>
  
        <h3>Suspensión:</h3>
        <ul>
          <li>Horquilla delantera invertida y sistema de amortiguación trasera totalmente ajustable, diseñados para
            proporcionar una respuesta precisa y un manejo excepcional en todo tipo de condiciones.</li>
          <li>Amortiguadores de alta gama con tecnología avanzada para ofrecer un rendimiento óptimo en curvas y una
            conducción suave en carreteras irregulares.</li>
        </ul>
  
        <h3>Frenos:</h3>
        <ul>
          <li>Sistema de frenos Brembo de alta especificación con discos delanteros y traseros de gran tamaño,
            proporcionando una frenada potente y controlada incluso a altas velocidades.</li>
          <li>Frenos delanteros equipados con tecnología de frenado antibloqueo (ABS) de última generación para una
            seguridad óptima en todas las condiciones de conducción.</li>
            </ul>
        </div>
      </div>
    </div>

    <div id="IrVentanaFlotanteDUCATI-DIAVEL" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>DUCATI DIAVEL</h2>
          <img src="https://i.ibb.co/HtDpcYr/DUCATI-DIAVEL.png" alt="">

        <h3>Motor:</h3>
        <ul>
          <li>Tipo: Monocilíndrico de 2 tiempos.</li>
          <li>Cilindrada: 249 cc.</li>
          <li>Potencia: Potente y ágil, diseñada específicamente para el rendimiento en competiciones off-road.</li>
        </ul>
        <h3>Estilo y Diseño:</h3>
        <ul>
          <li>Estilo de motocross puramente orientado al rendimiento, con una apariencia agresiva y funcional.</li>
          <li>Diseño ligero y aerodinámico, optimizado para ofrecer la máxima maniobrabilidad y capacidad de salto en
            terrenos off-road.</li>
          <li>Carrocería minimalista con detalles de alta resistencia, diseñada para soportar las demandas del
            motocross competitivo.</li>
        </ul>
  
        <h3>Suspensión:</h3>
        <ul>
          <li>Horquilla delantera invertida y amortiguador trasero ajustable de alta gama, diseñados para absorber
            impactos grandes y pequeños en terrenos difíciles.</li>
          <li>Suspensión especialmente calibrada para ofrecer una respuesta precisa y una excelente tracción en todo
            tipo de superficies.</li>
        </ul>
  
        <h3>Frenos:</h3>
        <ul>
          <li>Sistema de frenos de alto rendimiento con discos delanteros y traseros, diseñado para ofrecer una
            potente capacidad de frenado en condiciones extremas.</li>
          <li>El sistema de frenos no suele incluir ABS, ya que en el motocross la capacidad de bloquear la rueda
            trasera puede ser útil para ciertas maniobras.</li>
            </ul>
        </div>
      </div>
    </div>

    <div id="IrVentanaFlotanteDUCATI-PANIGALE" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>DUCATI PANIGALE</h2>
          <img src="https://i.ibb.co/Jc0jXwQ/DUCATI-PANIGALE.png" alt="">
         
        <h3>Motor:</h3>
        <ul>
          <li>Tipo: Monocilíndrico de 4 tiempos.</li>
          <li>Cilindrada: 690 cc.</li>
          <li>Potencia: Potente y con un alto par motor, diseñada para un rendimiento óptimo en carreteras y
            circuitos.</li>
        </ul>
        <h3>Estilo y Diseño:</h3>
        <ul>
          <li>Estilo supermoto con un aspecto agresivo y deportivo, destinado a ofrecer una experiencia de conducción
            emocionante en carreteras y pistas.</li>
          <li>Diseño aerodinámico y ergonómico, con una posición de conducción cómoda y orientada al rendimiento
            deportivo.</li>
          <li>Carrocería compacta y ligera, con detalles inspirados en el mundo de las competiciones de supermoto.
          </li>
        </ul>
  
        <h3>Suspensión:</h3>
        <ul>
          <li>Horquilla delantera invertida de alta calidad y amortiguador trasero ajustable, diseñados para ofrecer
            una excelente absorción de impactos y una respuesta precisa en curvas.</li>
          <li>Suspensión específicamente ajustada para proporcionar una conducción ágil y estable tanto en carreteras
            como en circuitos.</li>
        </ul>
  
        <h3>Frenos:</h3>
        <ul>
          <li>Sistema de frenos de alto rendimiento con discos delanteros y traseros, diseñado para proporcionar una
            potente capacidad de frenado en condiciones de conducción deportiva.</li>
          <li>El sistema de frenos suele incluir tecnología de frenado antibloqueo (ABS) para una frenada segura y
            controlada en diversas situaciones.</li>
            </ul>
        </div>
      </div>
    </div>

    <div id="IrVentanaFlotanteDUCATI-MONSTER" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>DUCATI MONSTER</h2>
          <img src="https://i.ibb.co/6md8JtW/DUCATI-MONSTER.png" alt="">
          
        <h3>Motor:</h3>
        <ul>
          <li>Tipo: Monocilíndrico.</li>
          <li>Cilindrada: 373.2 cc.</li>
          <li>Potencia: Potente y ágil, ideal para uso urbano y aventuras en carreteras.</li>
        </ul>
        <h3>Estilo y Diseño:</h3>
        <ul>
          <li>Estilo naked con un diseño moderno y agresivo que refleja su naturaleza deportiva.</li>
          <li>Diseño compacto y ligero, perfecto para maniobrar fácilmente en el tráfico urbano y disfrutar de la
            conducción en carreteras sinuosas.</li>
          <li>Carrocería aerodinámica con líneas angulares y detalles llamativos que le dan un aspecto dinámico y
            juvenil.</li>
        </ul>
  
        <h3>Suspensión:</h3>
        <ul>
          <li>Horquilla delantera invertida y monoamortiguador trasero ajustable para ofrecer una conducción suave y
            estable en una variedad de condiciones.</li>
          <li>Amortiguadores diseñados para absorber los baches de la carretera y proporcionar una respuesta ágil en
            curvas.</li>
        </ul>
  
        <h3>Frenos:</h3>
        <ul>
          <li>Sistema de frenos con discos delanteros y traseros de alto rendimiento para una frenada potente y
            controlada.</li>
          <li>Tecnología de frenado antibloqueo (ABS) en la rueda delantera para una mayor seguridad al frenar en
            situaciones de emergencia.</li>
            </ul>
        </div>

      </div>
    </div>
  
  
  
  
    <div id="IrVentanaFlotanteDUCATI-HYPERMOTARD-950" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>DUCATI HYPERMOTARD 950</h2>
          <img src="https://i.ibb.co/FnhWDSB/DUCATI-HYPERMOTARD-950.png" alt="">
          <h3>Motor:</h3>
<ul>
   <li>Tipo: Monocilíndrico de 4 tiempos.</li>
 <li>Cilindrada: 449.9 cc.</li>
<li>Potencia: Potente y robusta, optimizada para el rendimiento en competiciones off-road y enduro.</li>
 </ul>

 <h3>Estilo y Diseño:</h3>
<ul>
 <li>Estilo de enduro con una apariencia agresiva y funcional, diseñada para enfrentar terrenos difíciles y variados.</li>
 <li>Diseño resistente y ergonómico, con detalles orientados a la resistencia y la comodidad del piloto en
   largas travesías off-road.</li>
   <li>Carrocería minimalista pero resistente, con componentes específicamente diseñados para soportar las
   demandas del enduro extremo.</li>
  </ul>
  
    <h3>Suspensión:</h3>
  <ul>
  <li>Horquilla delantera invertida y amortiguador trasero ajustable de alta gama, diseñados para ofrecer una
   excelente absorción de impactos en terrenos variados.</li>
  <li>Suspensión especialmente calibrada para proporcionar una tracción óptima y una respuesta precisa en
  terrenos accidentados y técnicos.</li>
  </ul>
  
   <h3>Frenos:</h3>
   <ul>
  <li>Sistema de frenos de alto rendimiento con discos delanteros y traseros, diseñado para proporcionar una
      potente capacidad de frenado en condiciones extremas de enduro.</li>
   <li>El sistema de frenos suele incluir tecnología de frenado antibloqueo (ABS) para una mayor seguridad en
    terrenos resbaladizos.</li>

            </ul>
        </div>

      </div>
    </div>
  
  
    
    <div id="IrVentanaFlotanteDUCATI-SUPERLEGGERA" class="modal">
      <div class="ventana">
        <a href="#" class="cerrar-ventana">&times;</a>
        <div class="scroll">
          <h2>DUCATI SUPERLEGGERA</h2>
          <img src="https://i.ibb.co/Rv32jtw/DUCATI-SUPERLEGGERA.png" alt="">
  <h3>Motor:</h3>
        <ul>
          <li>Tipo: Bicilíndrico en paralelo.</li>
          <li>Cilindrada: 799 cc.</li>
          <li>Potencia: Potente y con un amplio rango de par motor, ideal para aventuras tanto en carreteras como fuera
            de ellas.</li>
        </ul>
        <h3>Estilo y Diseño:</h3>
        <ul>
          <li>Estilo aventurero con un diseño robusto y funcional, preparado para enfrentar diversos tipos de terreno y
            condiciones climáticas.</li>
          <li>Diseño ergonómico y versátil, con una posición de conducción cómoda tanto para trayectos largos como para
            pilotaje off-road.</li>
          <li>Carrocería resistente y aerodinámica, con detalles que facilitan la conducción en diferentes entornos.
          </li>
        </ul>
  
        <h3>Suspensión:</h3>
        <ul>
          <li>Horquilla delantera de largo recorrido y amortiguador trasero ajustable, diseñados para absorber las
            irregularidades del terreno y proporcionar estabilidad en todo tipo de condiciones.</li>
          <li>Suspensión específicamente adaptada para ofrecer un equilibrio entre confort en carretera y capacidad
            off-road.</li>
        </ul>
  
        <h3>Frenos:</h3>
        <ul>
          <li>Sistema de frenos de alto rendimiento con discos delanteros y traseros, diseñado para ofrecer una potente
            capacidad de frenado incluso en terrenos complicados.</li>
          <li>Algunos modelos pueden incluir tecnología de frenado antibloqueo (ABS) ajustable, que permite al conductor
            adaptar la respuesta de los frenos a las condiciones del terreno.</li>

            </ul>
        </div>

      </div>
    </div>

  </section> <!-- Motos ducati-->

  <footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
      <li class="social-icon__item">
        <a class="social-icon__link" href="https://www.facebook.com">
          <ion-icon name="logo-facebook"></ion-icon>
        </a>
      </li>
      <li class="social-icon__item"><a class="social-icon__link" href="https://x.com/">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="https://es.linkedin.com/">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="https://www.instagram.com/">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="#">Inicio</a></li>
      <li class="menu__item"><a class="menu__link" href="politicadeprivacidad.html">Política de privacidad</a></li>
      <li class="menu__item"><a class="menu__link" href="mailto:franciscoapruebame@gmail.com">Contacto</a></li>

    </ul>
    <p>&copy;2024 Emilio Pouso | All Rights Reserved</p>
  </footer>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>

<!-- ................................................................................................   -->