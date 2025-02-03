<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Siimple Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- Merged CSS (Inline Styles) -->
  <style>
    :root {
      --default-font: "Roboto", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      --heading-font: "Raleway", sans-serif;
      --nav-font: "Poppins", sans-serif;
      --background-color: #ffffff;
      --default-color: #444444;
      --heading-color: #462918;
      --accent-color: #fd680e;
      --surface-color: #ffffff;
      --contrast-color: #ffffff;
      --nav-color: #ffffff;
      --nav-hover-color: #fd680e;
      --nav-mobile-background-color: #0a0a0a;
      --nav-dropdown-background-color: #3b3b3b;
      --nav-dropdown-color: #ffffff;
      --nav-dropdown-hover-color: #fd680e;
    }

    body {
      color: var(--default-color);
      background-color: var(--background-color);
      font-family: var(--default-font);
      margin: 0;
      padding: 0;
    }

    a {
      color: var(--accent-color);
      text-decoration: none;
      transition: 0.3s;
    }

    a:hover {
      color: color-mix(in srgb, var(--accent-color), transparent 25%);
      text-decoration: none;
    }

    h1, h2, h3, h4, h5, h6 {
      color: var(--heading-color);
      font-family: var(--heading-font);
    }

    /* Hero Section */
    .hero {
      width: 100%;
      height: 100vh; /* Ensure full viewport height */
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      background-image: url('../../../login-register-form/hero-bg.jpg'); /* Background image */
      background-size: cover; /* Make the background image cover the entire section */
      background-position: center; /* Center the background image */
      padding: 0;
    }

    .hero .container {
      position: relative;
      z-index: 3;
      color: var(--contrast-color);
    }

    .hero h2 {
      margin: 0;
      font-size: 48px;
      font-weight: 300;
     
    }

    .hero p {
      margin: 10px 0 0 0;
      font-size: 24px;
      color: var(--contrast-color);
    }

    .hero .btn-get-started {
      color: var(--contrast-color);
      background: var(--accent-color);
      font-weight: 400;
      font-size: 16px;
      letter-spacing: 1px;
      display: inline-block;
      padding: 10px 40px;
      margin: 30px 10px 0 10px;
      border-radius: 50px;
      transition: 0.3s;
    }

    .hero .btn-get-started:hover {
      background: color-mix(in srgb, var(--accent-color) 90%, white 15%);
    }

    /* Footer Styles */
    .footer {
      color: var(--default-color);
      background-color: var(--background-color);
      font-size: 14px;
      text-align: center;
      padding: 30px 0;
      position: relative;
    }

    .footer .copyright {
      padding-top: 25px;
      border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
    }
  </style>
</head>

<body class="index-page">

  <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2>Welcome to Aerron's Life</h2>
        <p>I'm a hopeless romantic, I know I am.</p>
        <a href="{{ route('login') }}" class="btn-get-started">Log in</a>
        <a href="{{ route('register') }}" class="btn-get-started">Sign up</a>
      </div>
    </section>
  </main>

  <footer id="footer" class="footer light-background">
    <div class="container">
      <div class="copyright">
        <span>Copyright</span> <strong class="px-1 sitename">Aerron</strong> <span>All Rights Reserved</span>
      </div>
    </div>
  </footer>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>
