<!DOCTYPE html>
<html lang="pl">

<head>

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-PS47ZZQ');</script>
  <!-- End Google Tag Manager -->

  <link rel="stylesheet" href="style2.css">
  </link>
  <meta charset="UTF-8" />
  <title>Perfect Cut - Salon fryzjerski</title>
  <link rel="icon" href="icon.jpg">
  <script src="skrypt2.js"></script>

</head>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PS47ZZQ"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <h1 id="start"> &#9986 Premiery &#9986</h1>
  <h2>- NETFLIX -</h2>
  <header>
    <ul class="ul1">
      <li><a href="#start">Start</a></li>
      <li><a href="#info">O nas</a></li>
      <li><a href="#film">Polecane seriale</a></li>
      <li><a class="gallery" href="#galeria">Galeria</a></li>
      <li><a href="#newsletter">Bądź na bierząco</a></li>
      <li><a href="#kontakt">Kontakt</a></li>
    </ul>
  </header>
  <main>
    <h3 id="info">O nas</h3>
    <p>
    Netflix to serwis streamingowy na zasadach abonamentu, który umożliwia użytkownikom oglądanie filmów, 
    seriali i programów bez reklam przy użyciu urządzenia połączonego z internetem.
    <span id="dots">...</span><span id="more">
    Filmy, seriale i programy można także pobierać na urządzenia z systemem iOS, Android lub Windows 10, aby obejrzeć je bez dostępu do internetu.
    Materiały dostępne w serwisie Netflix są różne dla poszczególnych rejonów i mogą ulegać zmianom na przestrzeni czasu. 
    Masz dostęp do obszernej biblioteki tytułów zawierającej nagradzane Netflix Originals, seriale, programy, filmy pełnometrażowe, dokumenty i nie tylko. 
    Materiały z serwisu Netflix możesz oglądać na dowolnym urządzeniu połączonym z internetem i mającym zainstalowaną aplikację Netflix, takim jak: 
    telewizor Smart TV, konsola do gier, odtwarzacz multimedialny, dekoder, smartfon czy tablet. Z serwisu Netflix możesz także korzystać w przeglądarce internetowej na komputerze. 
    Sprawdź wymagania systemowe pod kątem zgodności przeglądarki oraz zalecaną prędkość połączenia internetowego zapewniającą najlepszą jakość odtwarzanych materiałów.<br>
    <br>Źródło: https://help.netflix.com/pl/node/412
    </span><button onclick="myFunction()" id="myBtn">Pokaż więcej</button>
    </p>

      <!-- Filmik -->
      <h3 id="film">Polecane seriale</h3>
      <h2>Stranger Things</h2>
      <h4>Opis:</h4>
      <p>Podczas powrotu do domu znika dwunastoletni Will Byers. Zaginięcie chłopca jest początkiem dziwnych i niebezpiecznych wydarzeń trapiących prowincjonalne miasteczko.</p>
      <br><h4><a href="https://www.filmweb.pl/serial/Stranger+Things-2016-750359">DOWIEDZ SIĘ WIĘCEJ</a></h4>
      <br>

      <div style="text-align:center;">
      <iframe width="420" height="315" allowfullscreen="true"
      src="https://www.youtube.com/embed/b9EkMc79ZSU">
      </iframe>
      </div>

      <h2>Dark</h2>
      <h4>Opis:</h4>
      <p>Zaginięcie dzieci ujawnia podwójne życie i nadszarpnięte relacje członków czterech rodzin, łącząc się z wydarzeniami sprzed trzydziestu lat.</p>
      <br><h4><a href="https://www.filmweb.pl/serial/Dark-2017-771383">DOWIEDZ SIĘ WIĘCEJ</a></h4>
      <br>

      <div style="text-align:center;">
      <iframe width="420" height="315" allowfullscreen="true"
      src="https://www.youtube.com/embed/eni33Abcf3I">
      </iframe>
      </div>

    <!-- Galeria zdjęć -->
    <h3 id="galeria">Galeria</h3>
    <p style="text-align: center; margin-top: 30px;">Kliknij na zdjęcie, aby je obejrzeć: </p>
    <div class="container">

      <!-- Zdjęcia -->
      <div class="slajdy">
        <div class="numer">1 / 6</div>
        <img src="zdjecia/1.jpg" style="width:100%">
      </div>

      <div class="slajdy">
        <div class="numer">2 / 6</div>
        <img src="zdjecia/2.jpg" style="width:100%">
      </div>

      <div class="slajdy">
        <div class="numer">3 / 6</div>
        <img src="zdjecia/3.jpg" style="width:100%">
      </div>

      <div class="slajdy">
        <div class="numer">4 / 6</div>
        <img src="zdjecia/4.jpg" style="width:100%">
      </div>

      <div class="slajdy">
        <div class="numer">5 / 6</div>
        <img src="zdjecia/5.jpg" style="width:100%">
      </div>

      <div class="slajdy">
        <div class="numer">6 / 6</div>
        <img src="zdjecia/6.jpg" style="width:100%">
      </div>

      <!-- Przyciski -->
      <a class="poprzedni" onclick="plusSlides(-1)">&#10094;</a>
      <a class="nastepny" onclick="plusSlides(1)">&#10095;</a>

      <!-- Miniaturki zdjęć -->
      <div class="rzad">
        <div class="kolumna">
          <img class="demo kursor" src="zdjecia/1.jpg" style="width:100%" onclick="currentSlide(1)" onload="currentSlide(1)">
        </div>
        <div class="kolumna">
          <img class="demo kursor" src="zdjecia/2.jpg" style="width:100%" onclick="currentSlide(2)">
        </div>
        <div class="kolumna">
          <img class="demo kursor" src="zdjecia/3.jpg" style="width:100%" onclick="currentSlide(3)">
        </div>
        <div class="kolumna">
          <img class="demo kursor" src="zdjecia/4.jpg" style="width:100%" onclick="currentSlide(4)">
        </div>
        <div class="kolumna">
          <img class="demo kursor" src="zdjecia/5.jpg" style="width:100%" onclick="currentSlide(5)">
        </div>
        <div class="kolumna">
          <img class="demo kursor" src="zdjecia/6.jpg" style="width:100%" onclick="currentSlide(6)">
        </div>
      </div>
    </div>

    <h3 id="newsletter">Bądź na bieżąco</h3>

    <p style="text-align: center; margin-top: 30px; font-size: 22px;">
      Podaj nam kilka informacji o sobie, a jako pierwszy dowiesz się o wszystkich nowościach
    oraz otrzymasz ekskluzywne materiały tylko dla subskrybentów. </p>

    <div class="formularz">
      <form method="POST" action="" name="myForm" id="form">
        <h4>Imię</h4><input type="text" name="imie"><br>
        <h4>Nazwisko</h4><input type="text" name="nazwisko"><br>
        <h4>Telefon</h4><input type="text" name="telefon" id="telefon" class="kolor2"><br>
        <h4>Treść</h4><input type="text" name="treść"><br>
        <input type="hidden" name="myForm" value="selectForm" />
        <input type="button" name="button" value="Zatwierdź" style="margin-top: 20px; font-size: 20px;" onclick="return doSubmit()">
      </form>

    </div>
    
<!-- 
    <?php
    if (isset($_POST['myForm'])) {
      $a = $_POST['imie'];
      $b = $_POST['nazwisko'];
      $e = $_POST['telefon'];
      $f = $_POST['treść'];

      if (
        empty($_POST["imie"]) || empty($_POST["nazwisko"]) ||   empty($_POST["telefon"]) ||  empty($_POST["treść"])
      ) {
        echo "Uzupełnij wszystkie dane!";
      }

      if (!filter_var($f, FILTER_VALIDATE_EMAIL)) {
        echo "Podaj poprawną treść!";
      } 
      
      // else {
      //   $servername = "localhost";
      //   $username = "root";
      //   $password = "";
      //   $dbname = "myDB";

      //   $conn = new mysqli($servername, $username, $password);
      //   if ($conn->connect_error) {
      //     die("Błąd połączenia: " . $conn->connect_error);
      //   }

      //   $sql = "CREATE DATABASE IF NOT EXISTS myDB";
      //   if ($conn->query($sql) === TRUE) {
      //   } else {
      //     echo "Błąd: " . $conn->error;
      //   }


      //   $conn = new mysqli($servername, $username, $password, $dbname);
      //   if ($conn->connect_error) {
      //     die("Błąd połączenia : " . $conn->connect_error);
      //   }

      //   $sql = "CREATE TABLE IF NOT EXISTS klienci (
      //              id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      //              imie NVARCHAR(30) NOT NULL,
      //              nazwisko NVARCHAR(30) NOT NULL,
      //              data_ NVARCHAR(30) NOT NULL,
      //              godzina NVARCHAR(30) NOT NULL,
      //              telefon NVARCHAR(30) NOT NULL,
      //              email NVARCHAR(30) NOT NULL,
      //              reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
      //              )";

      //   if ($conn->query($sql) === TRUE) {
      //   } else {
      //     echo "Błąd: " . $conn->error;
      //   }

      //   $sql = "INSERT INTO klienci (imie, nazwisko, data_, godzina, telefon, email)
      //   VALUES ('$a', '$b', '$c', '$d', '$e', '$f')";

      //   if ($conn->query($sql) === TRUE) {
      //     echo '<script type="text/javascript">',
      //     'zapisane();',
      //     '</script>';
      //   } else {
      //     echo "Błąd: " . $sql . "<br>" . $conn->error;
      //   }


      //   $conn->close();
      // }
    }

    ?> -->

    
    <h3 id="kontakt">Kontakt</h3>
    <p>
    <div class="row" style="box-sizing: border-box; display: flex;
    flex-direction: row;">
      <div class="column">
        <h5>&#9743 123 456 789</h5>
      </div>
      <div class="column">
        <h6>&#9993 perfectcut@gmail.com</h6>
      </div>
    </div>
    </p>
    <p class="dół">Czekamy na was!</p>
  </main>

</body>

</html>