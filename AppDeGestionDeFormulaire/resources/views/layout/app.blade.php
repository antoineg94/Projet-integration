<html>
<head >
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="main.js"></script>

  <link rel="icon" type="image" href="/images/logoNr.png">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
</head>

  <div class="wrapper">
    <!-- HEADER -->

  <nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">

    <a class="navbar-brand" href="{{ route('Utilisateurs.AccueilType') }}">

    <img src="/images/logoBl.png" alt="" style="height: 32px; widht: 32px;"></a>
    <div>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
      
    <div class="offcanvas offcanvas-end navbar-dark bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel" style="color:white;">Bienvenue {{Session::get('prenom')}} {{Session::get('nom')}}</h5>
       
        <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close" style="color:white;"></button>
      </div>
    </div>
  </div>
</nav>
    <!-- END OF HEADER -->
<body style="display:flex; flex-direction:column;">
  

    @yield('middleContent')
    </body>

    <!-- FOOTER -->
    <footer class="d-flex h-25 flex-wrap justify-content-between align-items-center py-3" style="background-color: black; color: white;" style="margin-top:auto;">
    <div class="container d-flex align-items-center" >
    <div class="col-md-4 d-flex">
      <span class="text-muted">© 2023 Amazscrum</span>
    </div>
<div class="col-md-4 d-flex justify-content-end align-items-right d-flex">
    <ul class="justify-content-end  align-items-right list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/cegeptr/"><i class="fa-brands fa-facebook"></i></a></li>
      <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/cegeptr/"><i class="fa-brands fa-instagram"></i></a></li>
      <li class="ms-3"><a class="text-muted" href="https://cegeptr.omnivox.ca">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: #F78C38;" fill="currentColor" class="bi bi-flower2" viewBox="0 0 16 16">
      <path d="M8 16a4 4 0 0 0 4-4 4 4 0 0 0 0-8 4 4 0 0 0-8 0 4 4 0 1 0 0 8 4 4 0 0 0 4 4zm3-12c0 .073-.01.155-.03.247-.544.241-1.091.638-1.598 1.084A2.987 2.987 0 0 0 8 5c-.494 0-.96.12-1.372.331-.507-.446-1.054-.843-1.597-1.084A1.117 1.117 0 0 1 5 4a3 3 0 0 1 6 0zm-.812 6.052A2.99 2.99 0 0 0 11 8a2.99 2.99 0 0 0-.812-2.052c.215-.18.432-.346.647-.487C11.34 5.131 11.732 5 12 5a3 3 0 1 1 0 6c-.268 0-.66-.13-1.165-.461a6.833 6.833 0 0 1-.647-.487zm-3.56.617a3.001 3.001 0 0 0 2.744 0c.507.446 1.054.842 1.598 1.084.02.091.03.174.03.247a3 3 0 1 1-6 0c0-.073.01-.155.03-.247.544-.242 1.091-.638 1.598-1.084zm-.816-4.721A2.99 2.99 0 0 0 5 8c0 .794.308 1.516.812 2.052a6.83 6.83 0 0 1-.647.487C4.66 10.869 4.268 11 4 11a3 3 0 0 1 0-6c.268 0 .66.13 1.165.461.215.141.432.306.647.487zM8 9a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
      </svg>
      </a></li>
    </ul>
    </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/74c890bd85.js" crossorigin="anonymous"></script>


</html>