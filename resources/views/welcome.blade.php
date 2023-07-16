<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Myron Law Associates</title>
    <script src="https://kit.fontawesome.com/4b868b45f2.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    {{-- Navbar --}}

    <nav class="navbar navbar-expand-lg navBg">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav d-flex justify-content-center w-100">
            <a class="nav-link darkBlue" href="{{ route('home')}}">Home</a>
            <a class="nav-link darkBlue" href="{{ route('practice')}}">Pratiche</a>
            <a class="nav-link darkBlue" href="{{ route('about_us')}}">Chi Siamo</a>
            <a class="nav-link darkBlue" href="{{ route('contact')}}">Contattaci</a>
          </div>
        </div>
      </div>
    </nav>

    {{-- END Navbar --}}

    {{-- Header --}}

    <div class="container-fluid bgHeader">
      <div class="row align-items-center justifycontent-center">
        <div class="col-12 layoutHeader">
          <img class="logo mb-4 pe-2" src="./media/logo_white.png" alt="logo">
          <div class="darkBrown ff-title text-uppercase textLogo d-inline-block">myron law associates</div>

        </div>
        
        <div class="col-12 col-xxl-6 layoutHeader">
          
          <h1 class="darkBrown ff-title title">Servizi legali di prim' ordine</h1>
          <p class="text-white fs-3 pt-4">Siamo orgogliosi di aiutare le persone di ogni ceto sociale a ottenere la giustizia e la pace che meritano.</p>
          
          <a href="{{ route('about_us')}}"><button class="buttonAbout">CHI SIAMO</button></a>
        </div>
      </div>
    </div>

    {{-- END Header --}}

    {{-- Contact --}}

    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-md-4 layoutHeader">
          <h2 class="ff-title display-4 lightBlue">Come affrontiamo la legge</h2>
          <p class="fs-4 mt-5 lightBlue">I profitti dei nostri clienti sono la nostra massima priorità. Siamo in costante comunicazione con le persone che serviamo e ci impegniamo a far avanzare i bisogni e i desideri immediati dei nostri clienti. Il nostro team lavora 24 ore su 24 per fornire i servizi e il supporto necessari di cui ogni cliente ha bisogno da noi.</p>
    
          <a href="{{ route('contact')}}"><button class="buttonAbout">CONTATTACI</button></a>
        </div>
        <div class="col-12 col-md-3">
              
        </div>
        <div class="col-12 col-md-4">
          <img class="imgWoman img-fluid" src="./media/woman.jpg" alt="woman">
        </div>
      </div>
    </div>
    
    {{-- END Contact --}}

    {{-- Practice --}}

    <div class="container-fluid">
      <div class="row layoutHeader">
        <div class="col-12 col-md-3">
          <h2 class="ff-title display-4 lightBlue">Le nostre pratiche principali</h2>
        </div>
      </div>
      <div class="row layoutPractice">
        <div class="col-12 col-md-4 bgBox1">
          <h3 class="titleBox ff-title lightBlue">Consiglio Generale</h3>
          <p class="practiceDescription">Cosa c'è di speciale nei tuoi servizi o nelle tue offerte? Dai al tuo pubblico un motivo per scegliere te rispetto alla concorrenza. Citalo sopra, poi rimpolpalo qui.</p>
        </div>
        <div class="col-12 col-md-4 bgBox2">
          <h3 class="titleBox ff-title lightBlue">Contenzioso civile</h3>
          <p class="practiceDescription">Cosa c'è di speciale nei tuoi servizi o nelle tue offerte? Dai al tuo pubblico un motivo per scegliere te rispetto alla concorrenza. Citalo sopra, poi rimpolpalo qui.</p>
        </div>
        <div class="col-12 col-md-4 bgBox3">
          <h3 class="titleBox ff-title lightBlue">Soluzione della disputa</h3>
          <p class="practiceDescription">Cosa c'è di speciale nei tuoi servizi o nelle tue offerte? Dai al tuo pubblico un motivo per scegliere te rispetto alla concorrenza. Citalo sopra, poi rimpolpalo qui.</p>
        </div>
      </div>
    </div>

    {{-- END Practice --}}

    {{-- Service --}}

    <div class="container-fluid">
      <div class="row layoutService">
        <div class="col-12 col-md-5 p-0">
          <img class="img-fluid pb-5" src="./media/hands.jpg" alt="hands">
        </div>
        <div class="col-12 col-md-1">

        </div>
        <div class="col-12 col-md-6">
          <h2 class="display-1 ff-title lightBlue">I Nostri Servizi</h2>
          <p class="fs-4 mt-5 lightBlue">Condividi i tuoi servizi o specializzazioni qui, quindi elencali come elenchi puntati per una facile lettura ottimizzata per i dispositivi mobili.</p>
          <p class="fs-5 mt-5 lightBlue listService"><img class="pe-5" src="./media/paper.png" alt="paper">Aggiungi servizi e specializzazioni</p>
          <p class="fs-5 mt-5 lightBlue listService"><img class="pe-5" src="./media/paper.png" alt="paper">Aggiungi servizi e specializzazioni</p>
          <p class="fs-5 mt-5 lightBlue listService"><img class="pe-5" src="./media/paper.png" alt="paper">Aggiungi servizi e specializzazioni</p>
        </div>
      </div>
    </div>

    {{-- END Service --}}

    {{-- Feedback --}}

    <div class="container-fluid bgFeedback">
      <div class="row text-center justify-content-evenly">
        <div class="col-12 mb-5">
          <h2 class="display-1 ff-title darkBrown titleFeed">Feedback dei Clienti</h2>
          <h3 class="display-6 ff-title darkBrown">Perché dovresti assumere la nostra azienda.</h3>
        </div>
        @foreach ($feedback as $feed)
            <div class="col-12 col-md-3 my-5">
              <div class="cardFeed">
                <p class="m-5 fs-4 textFeed">{{$feed['text']}}</p>
                <p class="m-5 fs-4 darkBrown ff-title textUser">- {{$feed['user']}}</p>
              </div>
            </div>
        @endforeach
      </div>
    </div>

    {{-- END Feedback --}}

    {{-- Footer --}}

    <div class="container-fluid mb-5">
      <div class="row layoutHeader">
        <div class="col-12 col-md-6">
          <h2 class="display-4 ff-title darkBlue pb-5">Contattaci</h2>
          <p class="darkBlue"><i class="fa-sharp fa-solid fa-location-dot pe-3 darkBrown"></i>Strada S. Giorgio Martire, 2D 70124 - Bari</p>
          <p class="darkBlue"><i class="fa-solid fa-phone pe-3 darkBrown"></i>123 4567890</p>
          <p class="darkBlue"><i class="fa-sharp fa-solid fa-envelope pe-3 darkBrown"></i>support@mail.com</p>

          <h2 class="display-4 ff-title darkBlue titleFeed pb-5">Orario di ufficio</h2>
          <p class="darkBrown m-0">da Lunedi a Venerdì</p>
          <p class="darkBlue">dalle 9:00 alle 18:00</p>
          <p class="darkBrown m-0">Sabato</p>
          <p class="darkBlue">dalle 9:00 alle 12:00</p>
          <p class="darkBrown m-0">Domenica CHIUSO</p>

          <h2 class="display-5 ff-title darkBlue titleFeed pb-5">Seguici sui Social <a href="#"><i class="fa-brands fa-facebook ps-5 pe-3 pt-5 darkBrown"></i></a> <a href="#"><i class="fa-brands fa-twitter ps-5 pe-3 darkBrown"> </i></a> <a href="#"><i class="fa-brands fa-instagram ps-5 pe-3 darkBrown"></i></a> </h2>
          <p class="darkBlue">© 2023 Azienda Srl - Tutti i diritti riservati</p>
          <p class="darkBlue">P.IVA IT00000000000</p>

        </div>
        <div class="col-12 col-md-6 d-flex align-items-end justify-content-end mb-5">
          <img class="logo mb-4 pe-2" src="./media/logo_dark.png" alt="logo">
          <div class="darkBlue ff-title text-uppercase textLogo d-inline-block pt-5">myron law associates</div>
        </div>
      </div>
    </div>

    {{-- END Footer --}}




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>