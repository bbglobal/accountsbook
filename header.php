<?php
  function head($title) {
    echo '
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta name="google-site-verification" content="Gqdkgq_g28X_TOkkV1sRML3M3ZaQ4d4Jrtt3vFQmcuo" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="css/bootstrap.css" />
      <link rel="stylesheet" href="css/styles.css" />
      <script src="js/script.js" defer></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <title>AccountsBook - '.$title.'</title>
    </head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FHJ9FCBTE4"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag("js", new Date());
      gtag("config", "G-FHJ9FCBTE4");
    </script>
    
    <body>
      <header>
        <nav id="mynav">
          <div class="grid-row d-flex">
            <div class="grid-column">
              <div class="nav-section">
                <div class="nav-link">
                  <a href="index.php">Home</a>
                </div>
                <div class="nav-link dropdown">
                  <a href="#">Services</a><img id="services-icon" src="img/chevrons-down b.svg" alt="image" width="17px">
                  <div class="dropdown-content">
                    <a href="how-it-works.php">
                      <strong>Regular Bookkeeping</strong>
                    </a>
                    <p>For business owners with up to date books.</p>
                    <a href="catch-up-bookkeeping-services.php">
                      <strong>Catch Up Bookkeeping</strong>
                    </a>
                    <p>For business owners with overdue books.</p>
                  </div>
                </div>
                <!-- <div class="nav-link">
                  <a href="#">About</a>
                </div> -->
                <div class="nav-link">
                  <a href="prices.php">Pricing</a>
                </div>
              </div>
            </div>
            <div class="grid-column">
              <div class="nav-section">
                <div class="nav-link">
                  <a href="index.php">
                    <img src="img/logo.png" alt="Logo" width="150px" />
                  </a>
                </div>
              </div>
            </div>
            <div class="grid-column">
              <div class="nav-section">
                <div class="nav-link">
                  <a href="tel:(315) 907-4273">(315) 907-4273</a>
                </div>
                <div class="nav-link btn">
                  <a href="prices.php" id="btn">Try AccountsBook Now</a>
                </div>
              </div>
            </div>
          </div>
        </nav>
    
    
        <nav class="menu-extras">
          <input type="checkbox" id="check">
          <ul class="d-flex align-items-center justify-content-between py-3" id="my-nav">
            <li>
              <i class="fas fa-grin-beam"></i>
              <a href="index.php"> <img src="img/logo.png" alt="logo" width="100px"> </a>
            </li>
            <li>
              <label for="check">
                <a class="mx-3" style="cursor: pointer;">
                  <i class="fa fa-bars" id="hamberger"></i>
                </a>
              </label>
            </li>
          </ul>
          <ul id="menu-extra">
            <li class="py-3">
              <a href="/">Home</a>
              <hr>
            </li>        
            <li class="py-3">
              <a href="prices.php">Pricing</a>
              <hr>
            </li>
    
            <!--<li class="py-3">-->
            <!--  <a href="#">About</a>-->
            <!--  <hr>-->
            <!--</li>-->
            <li class="py-3" id="services">
              <a href="#">Services</a><img id="services-icon" src="img/chevrons-down b.svg" alt="image" width="25px">
              <hr>
            </li>
            <div id="menu-drop">
              <li>
                <strong>
                  <a href="how-it-works.php">Regular Bookkeeping</a>
                </strong>
                <p>For business owners with up to date books.</p>
                <hr>
              </li>
              <li>
                <strong>
                  <a href="catch-up-bookkeeping-services.php">Catch Up Bookkeeping</a>
                </strong>
                <p>For business owners with overdue books.</p>
                <hr>
              </li>
            </div>
            <li class="py-3">
              <a href="tel:3159074273">(315) 907-4273</a>
            </li>
            <button class="text-center btn-info">Try AccountsBook Now</button>
          </ul>
        </nav>';
  }
