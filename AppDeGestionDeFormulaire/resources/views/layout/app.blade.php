<html>
<head >
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <link rel="icon" type="image" href="images/logoNr.png">
  <link rel="stylesheet" href="css/style.css"> 
</head>

  <div class="wrapper">
    <!-- HEADER -->


    @if(Session::has('success'))
      <div class="alert alert-success" role="alert">
        {{ Session::get('message') }}
      </div>
    @endif

    @if(Session::has('message'))
      <div class="alert alert-danger" role="alert">
        {{ Session::get('msg') }}
      </div>
    @endif

    <nav class="navbar  navbar-dark bg-dark position-absolute top-0 start-0 w-100">
      <div class="container-fluid">
        @if(Auth::check())
        <a href="{{ route('Menus.index') }}">
        @endif
          <img src="/img/NOIR_renversee.png" alt="" style="height: 60px; widht: 60px;">
        @if(Auth::check())
        </a>
        @endif

        @if(Auth::check())
          <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <strong>{{ session::get('prenom' )}} {{ session::get('nom' )}}</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
              <li><a class="dropdown-item" href="{{route('Logins.logout')}}">Déconnexion</a></li>
            </ul>
          </div>
        @endif
      </div>
    </nav>
    <!-- END OF HEADER -->
  <body class="mt-5 pt-3" style="display:flex; flex-direction:column;" >
    <div class="position-static center-2 end-2 p-3" >
    </div>

  @yield('middleContent')
  </body>

              

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/74c890bd85.js" crossorigin="anonymous"></script>

  <script src="js/coteBlessure.js"></script>
  <script src="js/notifToast.js"></script>

</html>