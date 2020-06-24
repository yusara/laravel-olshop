<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  
<script src="https://kit.fontawesome.com/b8f6daf2b8.js" crossorigin="anonymous"></script>
  <title>@yield('title')</title>
</head>

<body>
  <nav class="px-5 navbar fixed-top">
    <a class="navbar-brand text-dark mr-3" href="{{ url('/')}}" style="font-size: 25px;">biarbrewok</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <a href="{{ url('/') }}" class="text-dark ml-auto page-scroll">Home</a> -->
    <a href="#produk" class="text-dark ml-auto page-scroll">Produk</a>
    <a href="#testimoni" class="text-dark ml-2 page-scroll">Testimoni</a>
    <a href="#kontak" class="text-dark ml-2 page-scroll">Kontak</a>
    
    <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div> -->
    <!-- <a href="logout.php" class=""></a> -->
  </nav>

    @yield('container')
  <div class="container-fluid kontak">
    <div class="row mt-5">
      <div class="offset-2 col-lg-8 text-center">
        <span>Temukan Kami di:</span><br>
        <button class="button border-0 button-yt"><i class="fab fa-youtube"></i>     YouTube</button>
        <button class="button border-0 button-ig"><i class="fab fa-instagram"></i>     Instagram</button>
        <button class="button border-0 button-wa"><i class="fab fa-whatsapp"></i>     WhatsApp</button>
      </div>
    </div>

    <div class="row text-center">
      <div class="col">
        <span>Kami juga ada di Marketplace</span><br>
        <button class="button border-0 button-tp"><img height="30px" class="mp-button"src="{{asset('assets/img/tp-logo.png')}}" alt=""></button>
        <button class="button border-0 button-sp"><img height="30px" class="mp-button"src="{{asset('assets/img/sp-logo.png')}}" alt=""></button>
        <button class="button border-0 button-bl"><img height="30px" class="mp-button"src="{{asset('assets/img/bl-logo.png')}}" alt=""></button>
      </div>
    </div>
  </div>
  

  
  <footer class="" style="height: 50px;background-color:#090500;">
    <div class="row">
        <div class="col">
            
        </div>
    </div>
  </footer>

  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>
</body>

</html>