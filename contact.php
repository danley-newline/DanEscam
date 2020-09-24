<?php


    if (isset($_POST['submit'])){
 
    $name = $_POST['name'];
    $usersEmail = $_POST['email'];
    $subject = $_POST['sujet'];
    $message= $_POST['message'];

    $to = "danielkacou0@gmail.com";
    $body = "";

    $body .= "De: ".$name. "\r\n";
    $body .= "Email: ".$usersEmail. "\r\n";
    $body .= "Message: ".$message. "\r\n";

    
    mail($to,$subject,$body);
    
    }

?>
    
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Groupe Escam</title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">

</head>

<body>

  <!--Start Navbar-->
  <nav id="navbar_top" class="navbar navbar-expand-lg w-100">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src="assets/image/log.png" alt="" width="80" height="80">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Accueil
            </a>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="apropos.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              L'Ecole
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="apropos.html">Entete</a>
              <a class="dropdown-item" href="apropos.html#mot-dir">Mot du fondateur</a>
              <a class="dropdown-item" href="apropos.html#pre-escam">Presentation Escam</a>
              <a class="dropdown-item" href="apropos.html#mission-escam">Notre Mission</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="formation.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Formation
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="formation.html">Entete</a>
              <a class="dropdown-item" href="formation.html#diplo">Nos Diplômes</a>
              <a class="dropdown-item" href="formation.html#branch">Branches pro</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="filliere.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Filliere
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="filliere.html">Entete</a>
              <a class="dropdown-item" href="filliere.html#bts">BTS</a>
              <a class="dropdown-item" href="filliere.html#licpro">Licence pro / DUT</a>
              <a class="dropdown-item" href="filliere.html#ingern">Ingenieur / Master I</a>
              <a class="dropdown-item" href="filliere.html#master2">Master II</a>
              <a class="dropdown-item" href="filliere.html#f-tech">Fillière Techniques</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contactez-nous</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div id="home" class="container-fluid w-100 head-ecole header-home text-center mb-5">
      <img class="w-100" src="assets/image/im2.jpg" alt="Chicago" height="300px">
        <div class="text-ecole head-h2">
          <h2>Espaces Formulaire </h2>
        </div>
    </div>

    <div class="container title-filiere mt-5 mb-5 ">
        <h1 id="bts" class="text-center">Message Bien Envoyé  <br> Vous pouvez aussi nous joindre au 49 24 48 11</h1>
    </div>

    
    <footer class="page-footer font-small pt-4">
    <div class="container text-center text-md-left">
        <div class="row text-center text-md-left mt-3 pb-3">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">ESCAM ABidjan</h6>
                
                <p> <a href="#!">Escam Cocody - 49 24 48 11</a> </p>
                <p> <a href="#!">Escam Bingerville - 09 56 41 79</a> </p>
                <p> <a href="#!">Escam Yopougon - 07 50 49 33</a> </p>
                <p> <a href="#!">Escam Abobo - 07 96 99 98</a> </p>
                <p> <a href="#!">ESIE Cocody - 49 24 48 11</a> </p>
                <p> <a href="#!">ESIE Yopougon - 07 50 49 33</a> </p>
            </div>

            <hr class="w-100 clearfix d-md-none">

            <div class="col-md-4 col-lg-3 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Siege interieur</h6>
                <p> <a href="#!">Escam Bouake - 59 23 46 19</a> </p>
                <p> <a href="#!">Escam San Pedro - 47 07 28 83</a> </p>
                <p> <a href="#!">Escam Man - 08 04 44 67</a> </p>
            </div>

            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                <p><i class="fas fa-home mr-3"></i> Abidjan, Cocody, CI</p>
                <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                <p><i class="fas fa-phone mr-3"></i> +225 49 24 48 11</p>
                <p><i class="fas fa-print mr-3"></i> +225 07 50 49 33</p>
            </div>

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Groupe ESCAM </h6>
              <p class="text-uppercase font-weight-bold">SIEGE SOCIAL :</p>
              <p>Abidjan Cocody, Non loin de l'Ecole de la Gendarmerie face Café BAO.</p>
            </div>


        </div>

        <hr>

        <!-- Grid row -->
        <div class="row d-flex align-items-center">

            <div class="col-md-7 col-lg-8">

                <!--Copyright-->
                <p class="text-center text-md-left">© 2020 Tous Droit Réservé:
                    <a href="#!">
                        <strong> ESCAM CI</strong>
                    </a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0">

                <!-- Social buttons -->
                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

</footer>
    <!-- Footer -->



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="assets/js/reveal.js"></script>

</body>

</html>

    
