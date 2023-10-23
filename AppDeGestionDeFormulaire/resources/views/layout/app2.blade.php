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

 
<body class="d-flex flex-column" style="display:flex; flex-direction:column;" >
  <main class="d-flex h-100">
    <sidebar class="fixed-top h-100">
      <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark h-100" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32"></svg>
          <span class="fs-4">SST V3R</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="{{ route('Menus.pageAdmin') }}" class="nav-link text-white" aria-current="page">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
              Accueil
            </a>
          </li>
          <li>
            <a href="{{ route('Menus.pageAdmin') }}" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
              Centre de notification
            </a>
          </li>
          <li>
            <a href="{{ route('Admins.listeFormulaire') }}" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
              Consulter les formulaires
            </a>
          </li>
          <li>
            <a href="{{ route('Menus.pageAdmin') }}" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
              Procédures de travail
            </a>
          </li>
        </ul>
        <hr>
        <div class="dropdown d-flex justify-content-between">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
          
            <strong>mdo</strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="{{route('Logins.logout')}}">Déconnexion</a></li>
          </ul>
          @if(Session::get('admin') == true || Session::get('superviseur') == true)
          <button type="button" class="btn btn-dark position-relative" id="liveToastBtn">
            <i class="fa-regular fa-bell text-light"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            {{ session::get('notification' )}}
            </span>
          </button>
        @endif
        </div>
      </div>
    </sidebar>

    <div class="toast-container position-static" id="liveToastContainer">
      <div class="toast position-static" id="liveToast" role="alert" aria-live="assertive" aria-atomic="true"  data-bs-autohide="false">
        <div class="toast-header">
        
          <strong class="me-auto">Notification</strong>
          <small class="text-muted">??temps??</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          Vous avez {{ Session::get('notification') }} notifications
        </div>
      </div>

      <div class="toast position-static" id="liveToast1" role="alert" aria-live="assertive" aria-atomic="true"  data-bs-autohide="false">
        <div class="toast-header ">
       
          <strong class="me-auto">Notification</strong>
          <small class="text-muted">??temps??</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          Vous avez {{ Session::get('notificationValider') }} notifications
        </div>
      </div>
    </div>

    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark h-100" style="width: 280px;">

    </div>
    @yield('middleContent')

  </main>
 </body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/74c890bd85.js" crossorigin="anonymous"></script>

<script src="js/ajoutertemoins.js"></script>
<script src="js/premierSoins.js"></script>
<script src="js/coteBlessure.js"></script>
<script src="js/notifToast.js"></script>
<script src="js/notifAdminToast.js"></script>

</html>