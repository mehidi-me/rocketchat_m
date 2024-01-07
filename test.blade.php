<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <!-- <link rel="stylesheet" href="style.css" /> -->
  <link rel="stylesheet" href="{{ asset('css/app.css?v=8') }}">
  <link href="
https://cdn.jsdelivr.net/npm/air-datepicker@3.4.0/air-datepicker.min.css
" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <title>Pizza App</title>
</head>

<body>
      <div class="modal">
    <div class="block">
      <p>
        Das à discretion Angebot gilt für 2 Stunden.
        Pizza: Gestartet wird mit einer Meter Pizza je 4 oder 5 Personen, nach Verzehr kann eine weitere Meterpizza 30cm
        oder
        20cm Pizza nachbestellt werden.<br><br>
        Softgetränke: Hausgemachter Eistee, Citro, Apfelschorle, Cranberryschorle, Sirup, Wasser mit/ohne jeweils im
        Offenausschank<br><br>
        Bier: Moretti Bier aus Zapfhan<br><br>
        Weisswein: Pinot Grigio
      </p>
      <button onclick="notice()">OK, ich verstehe</button>
    </div>
  </div>
  <header>
    <div class="container">
      <div class="logo">
        <a href="index.html">
          <img src="{{asset('images/logo.svg')}}" alt="" />
        </a>
      </div>
      <div class="links-wrap">
        <div class="links">
          <a href="#" onclick="menu()">Home</a>
          <a href="#about" onclick="menu()">Über uns</a>
          <a href="#menu" onclick="menu()">Speisekarte</a>
          <a href="#book" onclick="menu()">Einen Tisch reservieren</a>
          <a href="#feedback" onclick="menu()">Rückmeldung</a>

        </div>

        <i class="uil uil-align-center-alt menu" onclick="menu()"></i>
      </div>
      <div>
        <a href="#" id="signupBtn" onclick="menu()">
          <button><i class="uil uil-phone"></i> 080-3232-344</button>
        </a>
      </div>
    </div>
  </header>
  <main>
    <div class="anim">
      <h1 class="mega my-element" data-paroller-factor="0.2" data-paroller-factor-lg="0.1" data-paroller-factor-md="0.3"
        data-paroller-factor-sm="-0.2" data-paroller-factor-xs="-0.1" data-paroller-type="foreground"
        data-paroller-direction="horizontal" data-paroller-transition="transform .2s linear">willkommen bei PICO
      </h1>
      <h1 class="mega my-element" data-paroller-factor="-0.2" data-paroller-factor-lg="-0.1"
        data-paroller-factor-md="-0.3" data-paroller-factor-sm="0.2" data-paroller-factor-xs="0.1"
        data-paroller-type="foreground" data-paroller-direction="horizontal"
        data-paroller-transition="transform .2s linear">willkommen bei PICO
      </h1>
    </div>
    <img src="{{asset('images/overlay.png')}}" alt="" class="overlay">
    <a href="#menu">
      <div class="round">
        <img class="texts" src="{{asset('images/menu.svg')}}" alt="">
        <img src="{{asset('images/star.svg')}}" alt="" class="star">
      </div>
      `
    </a>

    <img class="brand" src="{{asset('images/pico.png')}}" alt="">
  </main>
  <section class="bg">
    <div class="container">
      <div class="grid-4">
        <div class="card">
          <img src="{{asset('images/i1.svg')}}" alt="">
          <div class="body">
            <h2>7 Tage offen</h2>
          </div>
        </div>
        <div class="card">
          <img src="{{asset('images/i2.svg')}}" alt="">
          <div class="body">
            <h2>Gruppenraum</h2>
          </div>
        </div>

        <div class="card">
          <img src="{{asset('images/i3.svg')}}" alt="">
          <div class="body">
            <h2>auch zum take-away</h2>
          </div>
        </div>

        <div class="card">
          <img src="{{asset('images/i4.svg')}}" alt="">
          <div class="body">
            <h2>Pizza einzeln oder als Meter</h2>
   
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg" id="about">
    <div class="title" data-text="wer wir sind">
      <h2>über PICO</h2>
    </div>
    <div class="container">
      <div class="grid-2 adj align-center">
        <div class="img">
          <img src="{{asset('images/about.png')}}" alt="">
        </div>
        <div class="contents">
          <p>Napoletanischer Teig, aber doch etwas knusprig? Knusprig wie eine Pinsa, aber doch eine Pizza? Pizza mit einer 48- 72h Ruhepause? Eine Pause sei dir bei  PICO & Pizza gegönnt.</p>

          <div class="opening">
            <h3>Unsere Winter-Öffnungszeiten:</h3>
            <div class="flxed">
              <div class="card">
                <h4>Sonntag bis Donnerstag</h4>
                <p>11:00 - 21:30</p>
              </div>
              <div class="card">
                <h4>Freitag & Samstag:</h4>
                <p>10:00 - 22:00</p>
              </div>
              <div class="card">
                <h4>Pizzaofen: täglich</h4>
                <p>11:30 - 21:30</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <img src="{{asset('images/customer-top-bg.png')}}" alt="" class="end">
  </section>
  <section id="menu">
    <div class="title" data-text="Pizza am Meter">
      <h2>meterlange Pizza</h2>
    </div>
    <div class="container">
      <div class="meter">
        <div class="img">
          <img src="{{asset('images/pizza.png')}}" alt="">
        </div>
        <p>Setzen Sie Ihre eigene Meter-Pizza aus einer, zwei oder drei Pizzen aus unserem Menü zusammen. 
empfohlen für 3-4 Personen
</p>
      </div>
    </div>
  </section>
  <section>
    <div class="title" data-text="unser Angebot">
      <h2>menü</h2>
    </div>
 

    <div class="container">
      <div class="tab">
        <button class="product-btn active" data-filter="all">All</button>
        <button class="product-btn" data-filter="pizza">Pizza</button>
        {{-- <button class="product-btn" data-filter="burger">Burger</button>
        <button class="product-btn" data-filter="drinks">Drinks</button>
        <button class="product-btn" data-filter="setmenu">Set menu</button> --}}
      </div>
      <div class="grid-4 tab-content active">
        <?php
   $path = public_path('product_images');
     $files = \File::allFiles($path);

foreach ($files as $file) { 
    //echo $file->getFilename();
   $cleanedFilename = ucwords(str_replace(['_', '-'], ' ', pathinfo($file->getFilename(), PATHINFO_FILENAME)));
  // echo $cleanedFilename . "<br>";
    ?>
     <div class="product" data-item="pizza">
        <div class="price">
          $49.00
        </div>
        <div class="img">
          <img src="{{asset('product_images/'.$file->getFilename())}}" alt="">
        </div>
        <div class="body">
          <h3>{{$cleanedFilename}}</h3>


        </div>
      </div>
 <?php }
 ?>
        
      </div>
     
    </div>
  </section>
  <section class="bg" id="book">
    <img src="{{asset('images/customer-s-bg.png')}}" alt="" class="start">
    <div class="title" data-text="Book a table">
      <h2>Special baBooking</h2>
    </div>
    <div class="container">
      <div class="form">
        <form id="myBookingForm" onsubmit="SendMail(event)">
          <input type="text" name="full_name" placeholder="Vor- und Nachname" required>
          <div class="row">
            <input type="email" name="email" placeholder="e-Mail" required>
            <input type="tel" name="number" placeholder="Telefonnummer" required>
          </div>
          <input type="text" id="dateTime" name="dateTime" placeholder="Select Date" required>
          <div class="form-block">
                 <p class="field-title">Choose a package <i class="uil uil-info-circle" onclick="notice()"></i></p>
            <div class="packages" id="packages">
              <div>
                <input type="radio" id="package1" value="Paket 1" name="package_type" checked>
                <label class="package" for="package1">
                  <div class="price">
                   <span class="p1">29</span> CHF
                  </div>
                  <h3>Paket 1</h3>
                  <p>Unlimitiert Pizza & Softgetränke</p>
                </label>
              </div>

              <div>
                <input type="radio" id="package2" value="Paket 2" name="package_type">
                <label class="package" for="package2">
                  <div class="price">
                   <span class="p2">43</span> CHF
                  </div>
                  <h3>Paket 2</h3>
                  <p>Unlimitiert Pizza & Bier & Weisswein & Softgetränke</p>
                </label>
              </div>

              <div>
                <input type="radio" id="package3" value="Wunsch Paket" name="package_type">
                <label class="package" for="package3">
                  <div class="price">
            AB <span class="p3">20</span> CHF
                  </div>
                  <h3>Wunsch Paket</h3>
                  <p>nichts für Sie dabei? Schreiben Sie uns, damit wir gemeinsam eine Lösung finden</p>
                </label>
              </div>
            </div>
          </div>
          <div class="form-block">
            <p class="field-title">Anzahl Personen</p>
            <div class="people" id="people">
              <input type="number" id="numOfPeople" name="num_of_people" value="6" min="6" max="18">
              <div class="btns">
                <a  onclick="increasePeople()"><i class="uil uil-plus"></i></a>
                <a onclick="decreasePeople()"><i class="uil uil-minus"></i></a>
            </div>
            </div>
          </div>
          <textarea name="description" placeholder="Mitteilung...."></textarea>
          <button id='booking_submit_btn' class="submit">Gruppenraum reservieren</button>
        </form>
        <div class="store">
          <img src="{{asset('images/store.png')}}" alt="">
        </div>
      </div>
    </div>
    <img src="{{asset('images/customer-top-bg.png')}}" alt="" class="end">
  </section>
  <section id="feedback">
    <div class="title" data-text="Testimonials">
      <h2>Meinungen über uns What people say about us: Besucherstimmen</h2>
    </div>
    <div class="container">
      <div class="arrows">
        <button class="custom-arrow prev-arrow">
          <img src="{{asset('images/arrow-left.svg')}}" alt="" />
        </button>
        <button class="custom-arrow next-arrow">
          <img src="{{asset('images/arrow-right.svg')}}" alt="" />
        </button>
      </div>
    </div>

    <div class="slider-wraper">
      <div class="slider-main">
        <div class="review card">
          <div class="author">
            <div class="profile">
              <img src="{{asset('images/profile.png')}}" alt="">
            </div>
            <div>
              <h4>Huston Wilson</h4>
              <span>Web Designer</span>
            </div>
          </div>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla, iusto incidunt vitae quos cupiditate
            aliquam facere dolores. Praesentium soluta sequi voluptate doloribus earum iure quisquam officia
            voluptates. Voluptate, ipsum suscipit!
          </p>

        </div>
        <div class="review card">
          <div class="author">
            <div class="profile">
              <img src="{{asset('images/profile.png')}}" alt="">
            </div>
            <div>
              <h4>Huston Wilson</h4>
              <span>Web Designer</span>
            </div>
          </div>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla, iusto incidunt vitae quos cupiditate
            aliquam facere dolores. Praesentium soluta sequi voluptate doloribus earum iure quisquam officia
            voluptates. Voluptate, ipsum suscipit!
          </p>

        </div>

        <div class="review card">
          <div class="author">
            <div class="profile">
              <img src="{{asset('images/profile.png')}}" alt="">
            </div>
            <div>
              <h4>Huston Wilson</h4>
              <span>Web Designer</span>
            </div>
          </div>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla, iusto incidunt vitae quos cupiditate
            aliquam facere dolores. Praesentium soluta sequi voluptate doloribus earum iure quisquam officia
            voluptates. Voluptate, ipsum suscipit!
          </p>

        </div>

        <div class="review card">
          <div class="author">
            <div class="profile">
              <img src="{{asset('images/profile.png')}}" alt="">
            </div>
            <div>
              <h4>Huston Wilson</h4>
              <span>Web Designer</span>
            </div>
          </div>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla, iusto incidunt vitae quos cupiditate
            aliquam facere dolores. Praesentium soluta sequi voluptate doloribus earum iure quisquam officia
            voluptates. Voluptate, ipsum suscipit!
          </p>

        </div>
      </div>
    </div>
  </section>
    <section class="bg">
    <img src="{{asset('images/customer-s-bg.png')}}" alt="" class="start">
    <div class="title" data-text="Best chef">
      <h2>Our best Chef</h2>
    </div>
    <div class="container">
      <div class="grid-4">
        <div class="card-ch">
          <img src="{{asset('images/ch1.jpeg')}}" alts="">
          <div>
            <div class="det">
              <h2>Mehidi Hasan</h2>
            </div>
          </div>
        </div>
        <div class="card-ch">
         <img src="{{asset('images/ch2.jpeg')}}" alts="">
          <div>
            <div class="det">
              <h2>Mehidi Hasan</h2>
            </div>
          </div>
        </div>
        <div class="card-ch">
         <img src="{{asset('images/ch3.jpeg')}}" alts="">
          <div>
            <div class="det">
              <h2>Mehidi Hasan</h2>
            </div>
          </div>
        </div>
        <div class="card-ch">
            <img src="{{asset('images/ch4.jpeg')}}" alts="">
             <div>
               <div class="det">
                 <h2>Mehidi Hasan</h2>
               </div>
             </div>
           </div>
      </div>
      <img src="{{asset('images/customer-top-bg.png')}}" alt="" class="end">
  </section>
  <section>
    <div class="title" data-text="Galerie">
      <h2>Bilder sagen mehr als Worte see our outlet</h2>
    </div>
    <div class="container">
      <div class="gallary">
        <div class="img"><img src="{{asset('images/2.png')}}" alt=""></div>
        <div class="img"><img src="{{asset('images/3.png')}}" alt=""></div>
        <div class="img"><img src="{{asset('images/2.png')}}" alt=""></div>
        <div class="img"><img src="{{asset('images/3.png')}}" alt=""></div>
      </div>
    </div>
  </section>
    <footer>
    <div class="container">
      <div class="about">
        <div class="logo"><img src="{{asset('images/logo.svg')}}" alt=""></div>
        <div class="social">
          <a href="#"><i class="uil uil-facebook-f"></i></a>
          <a href="#"><i class="uil uil-instagram"></i></a>
          <a href="#"><i class="uil uil-youtube"></i></a>
        </div>
      </div>
      <div class="social">
        <div class="location">

          <div class="contact">
            <p><i class="uil uil-location-point"></i> location, location, city</p>
            <a href="tel:+41616320202"><i class="uil uil-phone"></i>+41616320202</a>
            <a href="mailto:maw@gmail.com"><i class="uil uil-envelope-alt"></i> example@gmail.com</p>
          </div>
        </div>
      </div>
    </div>
    <p class="copy">&copy; 2024 Pico, All right reserved.</p>

  </footer>
    <script src="
https://cdn.jsdelivr.net/npm/air-datepicker@3.4.0/air-datepicker.min.js
"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/paroller.js') }}"></script>
  <script src="{{ asset('js/parloller.min.js') }}"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <script>
    $(".my-element").paroller();
  </script>
  <script>
    $(".slider-main").slick({
      dots: false,
      infinite: false,
      speed: 1000,
      slidesToShow: 3,
      slidesToScroll: 1,
      centerMode: true,
      autoplay: true,
      autoplaySpeed: 3000,
      infinite: true,
      appendArrows: $(".custom-arrow"),
      prevArrow: $(".prev-arrow"),
      nextArrow: $(".next-arrow"),
      responsive: [
        {
          breakpoint: 660,
          settings: {
            slidesToShow: 1,
            centerMode: false,

          },
        },
      ],
    });
    $(".gallary").slick({
      dots: false,
      infinite: false,
      speed: 1000,
      slidesToShow: 2.2,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
      arrows: false,
      infinite: true,
      responsive: [
        {
          breakpoint: 660,
          settings: {
            slidesToShow: 1.1,
            centerMode: false,
          },
        },
      ],
    });

  </script>
</body>

</html>