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

    <sidebar>
      <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark h-100" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-4">Sidebar</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
              Home
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
              Centre de notification
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
              Consulter les formulaires
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
              Procédures de travail
            </a>
          </li>
        </ul>
        <hr>
        @if(Session::get('admin') == true || Session::get('superviseur') == true)
          <button type="button" class="btn btn-dark position-relative" id="liveToastBtn">
            <i class="fa-regular fa-bell text-light"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            {{ session::get('notification' )}}
            </span>
          </button>
        @endif
        <hr>
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>mdo</strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="{{route('Logins.logout')}}">Déconnexion</a></li>
          </ul>
        </div>
      </div>
    </sidebar>

    <div class="toast-container position-static" id="liveToastContainer">
      <div class="toast" id="liveToast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <img src="..." class="rounded me-2" alt="...">
          <strong class="me-auto">Bootstrap</strong>
          <small class="text-muted">just now</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          See? Just like this.
        </div>
      </div>

      <div class="toast" id="liveToast1" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <img src="..." class="rounded me-2" alt="...">
          <strong class="me-auto">Bootstrap</strong>
          <small class="text-muted">2 seconds ago</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          Heads up, toasts will stack automatically
        </div>
      </div>
    </div>
    @yield('middleContent')

  </main>
 </body>

 <!-- FOOTER -->
 <footer style="width: 100%; background-color: #EEEEF0;" >
 <div class="footer contrast text-center" >
     <div class="footer-content" >

         <div class="footer-content-section first" >
             <div class="section-container" >

                 <div class="footer-social d-inline-flex">
                   
                     <a  style="text-decoration: none; color: inherit;" href="/a-propos-de-la-ville/communications/infolettre" class="infolettre contrast" alt="Abonnez-vous à l'infolettre">
                     <h3><i class="fa-solid fa-envelope"></i></h3> 
                     </a>
                     <a  style="text-decoration: none; color: inherit;" href="https://www.facebook.com/villetroisrivieres" alt="Facebook" target="_blank" class="facebook contrast">
                     <h3><i class="fa-brands fa-facebook"></i></h3>
                     </a>
                     <a  style="text-decoration: none; color: inherit;" href="https://www.instagram.com/villedetroisrivieres" alt="Instagram" target="_blank" class="instagram contrast">
                     <h3><i class="fa-brands fa-instagram"></i></h3>
                     </a>
                     <a  style="text-decoration: none; color: inherit;" href="https://twitter.com/VilleTR" alt="Twitter" target="_blank" class="twitter contrast">
                     <h3><i class="fa-brands fa-twitter"></i></h3>
                     </a>
                     <a  style="text-decoration: none; color: inherit;" href="https://www.linkedin.com/company/ville-de-trois-rivi-res" alt="LinkedIn" target="_blank" class="linkedin contrast">
                     <h3><i class="fa-brands fa-linkedin-in"></i></h3>
                     </a>
                     <a  style="text-decoration: none; color: inherit;" href="https://www.youtube.com/channel/UC4UyW0CoFiJaFCFaOzoQQ5w" alt="YouTube" target="_blank" class="youtube contrast">
                     <h3><i class="fa-brands fa-youtube"></i></h3>
                     </a>
                     
                 </div>

                 <h3 class="footer-title ">Ville de Trois-Rivières</h3>
                 <div class="footer-spacer"></div>
                 <div class="card">
                   <div class="footer-text"><a  style="text-decoration: none; color: inherit;" href="https://www.google.ca/maps/place/H%C3%B4tel+de+ville/@46.3430042,-72.545511,17z/data=!4m12!1m6!3m5!1s0x41aa0c6a9ae1712b:0xc5f7bf52c7282858!2sH%C3%B4tel+de+ville!8m2!3d46.3430005!4d-72.5433223!3m4!1s0x41aa0c6a9ae1712b:0xc5f7bf52c7282858!8m2!3d46.3430005!4d-72.5433223" target="_blank">1325, place de l'Hôtel-de-Ville, C.P. 368<br> Trois-Rivières, QC G9A 5H3</a></div>
                 </div>
                 <div class="card">
                   <div class="footer-text bold">Téléphone : <a href="tel:311"  style="text-decoration: none; color: inherit;">311</a> ou <a href="tel:8193742002"  style="text-decoration: none; color: inherit;">819 374-2002</a></div>
                 </div>
                 <div class="card">
                   <div class="footer-text"><a href="tel:18333742002"  style="text-decoration: none; color: inherit;">Canada ou États-Unis : 1 833 374-2002</a></div>
                 </div>
                 <div class="card">
                 <div class="footer-text"><a href="mailto:311@v3r.net"  style="text-decoration: none; color: inherit;">Courriel : 311@v3r.net</a>
                 </div>
                 <div class="footer-spacer"></div>
                 </div>
             </div>
         </div>
         <div class="footer-content-section last">
             <div class="section-container">
                 <div class="footer-social-bottom mobile-only container">
                   <a href="/a-propos-de-la-ville/communications" target="_self" style="text-decoration: none; color: inherit;">Communications</a>
                   <div class="footer-social-bottom-spacer"></div>
                   <a href="/faq" target="_self" style="text-decoration: none; color: inherit;">FAQ</a>
                   <div class="footer-social-bottom-spacer"></div>
                   <a href="http://www.tourismetroisrivieres.com/fr" target="_blank" style="text-decoration: none; color: inherit;">Tourisme</a>
                 </div>
<div><br></div>
                 <div class="footer-social-bottom" >
                   <a href="https://v3r.sharepoint.com/" style="text-decoration: none; color: inherit;" target="_blank">Intranet</a>
                   <div class="footer-social-bottom-spacer"></div>
                   <a href="https://organismesv3r.net/" style="text-decoration: none; color: inherit;" target="_blank">Portail d’accès aux organismes</a>

                   <div class="footer-social-bottom-spacer"></div>
                   <a href="https://www.v3r.net/politique-de-confidentialite" style="text-decoration: none; color: inherit;" target="_self">Politique de confidentialité</a>

                   <span class="copyright contrast" style="width: 100%; margin-top: 5px; text-decoration: none; color: inherit;"><small> © Ville de Trois-Rivières. Tous droits réservés.</small></span>
                 </div>

             </div>
         </div>

     </div>
 </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/74c890bd85.js" crossorigin="anonymous"></script>

<script src="js/ajoutertemoins.js"></script>
<script src="js/premierSoins.js"></script>
<script src="js/coteBlessure.js"></script>
<script src="js/notifToast.js"></script>
<script src="js/notifAdminToast.js"></script>

</html>