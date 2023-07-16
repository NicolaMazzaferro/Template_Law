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

    <h1 class="ff-title darkBrown display-1 layoutPracticePage text-center">Le Nostre Pratiche</h1>

    <div class="container-fluid">
      <div class="row justify-content-evenly text-center m-0 p-0">
        
        @foreach ($practices as $practice)

        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">{{$practice['name']}}</h5>
            <p class="card-text text-truncate">{{$practice['description']}}</p>
            <a href="{{route('practice_detail', ['id' => $practice['id']])}}" class="card-link">Descrizione</a>
          </div>
        </div>

        @endforeach
      </div>
    </div>
        


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>