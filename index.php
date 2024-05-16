<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/styles.css" />
  <script src="js/script.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <title>AccountsBook</title>
</head>

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
              <a href="#">Services</a><img id="services-icon" src="img/chevrons-down.svg" alt="image" width="17px">
              <img id="services-iconb" src="img/chevrons-down b.svg" alt="image" width="17px" style="display: none;">
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
                <img id="logo-black" src="img/logo.png" alt="Logo" width="130px" style="display: none;" />
                <img id="logo-white" src="img/logo-w.png" alt="Logo" width="130px" />
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
          <a href="prices.php">Pricing</a>
          <hr>
        </li>
        <li class="py-3">
          <a href="#">About</a>
          <hr>
        </li>
        <li class="py-3" id="services">
          <a href="#">Services</a><img id="services-icon" src="img/caret-down-svgrepo-com.svg" alt="image" width="25px">
          <hr>
        </li>
        <div id="menu-drop">
          <li>
            <strong>
              <a href="how-it-works.php">Monthly Bookkeeping</a>
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
          <a href="#">+1 245 555 999</a>
        </li>
        <button class="text-center btn-info">Try AccountBook Free</button>
      </ul>
    </nav>

    <div class="header-section">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6">
            <h1>Bookkeeping simplified.</h1>
            <br>
            <p>
              We help businessmen and entrepreneurs like you in saving valuable time and financial resources by offering dedicated professionals in streamlining your bookkeeping and income tax processes. Whether it's QuickBooks or Xero, our well-trained professionals have you covered: allowing you to focus on expanding and developing your business.
            </p>
            <p>
              <strong>
                <a href="prices.php" style="color: #fff ;">Sign up now </a>, or book your free consultation.
              </strong>
            </p>
            <a href="how-it-works.php" class="btn btn-info">Learn More</a>
            <p>✨ With hundreds of satisfied customers, we take pride in providing quality service.
            </p>
          </div>
          <div class="col-12 col-sm-12 col-md-6">
            <img id="header-img" src="https://mckibookkeeping.com/wp-content/uploads/2022/06/Frame.png" alt="header Image" width="70%" />
          </div>
        </div>
      </div>
    </div>
  </header>

  <section>
    <div class="container my-5">
      <div class="row">
        <div class="col-12 text-center">
          <h2>Industry-Leading Software</h2>
        </div>
        <div class="col-12 px-5">
          <p>At AccountsBook, we leverage cutting-edge cloud-based software to maintain accurate and real-time financial records. Our bookkeepers are professionally trained and well-versed in using industry-standard software like QuickBooks, Xero, and MYOB.</p>
        </div>
        <div class="d-flex flex-wrap justify-content-around align-items-center mt-5">
          <div class="mt-5">
            <img src="img/qb.png" alt="image" width="200px">
          </div>
          <div class="mt-5">
            <img src="img/xero.png" alt="image" width="200px">
          </div>
          <div class="mt-5">
            <img src="img/myob.png" alt="image" width="200px">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-5 pt-5 gtch">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>What do you get?</h2>
        </div>
        <div class="col-12">
          <p class="main">
            You get a dedicated, professionally trained bookkeeper who serves as your main point of contact and prepares accurate financial statements for your business every month. They are aided by a research team to help you with your queries.
          </p>
        </div>
        <div class="col-12 text-center mb-5">
          <a href="how-it-works.php" class="btn btn-outline-dark">Learn More</a>
        </div>
      </div>
    </div>
  </section>

  <section class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 px-5 py-5">
        <h2 class="mt-5 pt-5 mr-2" style="margin-right: 28px;">One-on-one Expert Support</h2>
        <p>
          We provide you with a dedicated bookkeeper supported by a team of knowledgeable small business experts. Get a direct line to your team on desktop or mobile—professional support is just a few swipes, taps, or clicks away.
        </p>
      </div>
      <div class="col-12 col-sm-12 col-md-6 px-5 pt-5 mt-3">
        <img class="one-to-one" src="img/strategic-consulting-concept.png" alt="image" width="100%" />
      </div>
      <div class="col-12 col-sm-12 col-md-6 px-5 py-5 mt-4">
        <h2>Updated Accounts Everytime</h2>
        <p>
          Forgot about your last week's marketing expense or the sales revenue? Don't worry, just log in to your account to find updated financials of your business that aid you in making real-time decisions.
        </p>
      </div>
      <div class="col-12 col-sm-12 col-md-6 px-5">
        <img src="img/organisation.png" alt="image" width="100%" />
      </div>

      <div class="col-12 col-sm-12 col-md-6 px-5">
        <h2 class="mt-5 pt-5" style="margin-right: 10px;">Insightful Financial Reporting</h2>
        <p>
          Get updated financial statements, income and expense overviews, and data analysis each month, so you can see the big picture with actionable insights to help you grow your business.
        </p>
      </div>
      <div class="col-12 col-sm-12 col-md-6 px-5 pt-5">
        <img class="one-to-one" src="img/neew-book-accounting.png" alt="image" width="100%" />
      </div>

    </div>
    <hr class="my-4">
  </section>

  <section class="container testimonials py-4">
    <div class="row">
      <div class="col-12 text-center">
        <h2>Trusted by Business Owners Worldwide.</h2>
      </div>
      <div class="col-12 mb-3">
        <h5>
          <strong>Testimonials</strong>
        </h5>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p>
          Our favourite part of working with AccountsBook is the peace of mind knowing that our accounting is regularly checked over, and kept up to date.
        </p>
        <span class="bnmvTW">Andrew Hassfield</span>
        <span>CEO, GiftsnWrap</span>
        </p>
      </div>
    </div>
    <div class="col-12">
      <p>
        I feel working with AccountsBook was one of the best decisions I made as a business owner.
      </p>
      <p>
        <span class="bnmvTW">Dr Anwar</span>
        <span>Smile Dental Clinic</span>
      </p>
    </div>
    </div>
  </section>
  <?php
  include 'faq.php';
  include 'banner.php';
  include 'footer.php';
  ?>