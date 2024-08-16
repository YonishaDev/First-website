

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Spices</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">SPICES </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-expanded="false"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#product">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
          </ul>
         <button class="btn p-2 my-lg-0 my-2"> <a  class="nav-link" href="signup.html">Sign UP</a></button>
      </div>
    </nav>
  
     <!-- SignIn -->
      <section id="contact">
           <div class="container box">
          <div class="row">
                <div class="col-lg-7 col-md-7 col-12">
                  <img src="img/login.webp" class="img-fluid">
                </div>
              <div class="col-lg-5 col-md-5 col-12">
                <h1>SIGN IN</h1>
                <form class="mb-3" action="login-process.php" method="post">
                
                  <input type="email" class="form-control" placeholder="Enter Your Email">
                  <input type="password" class="form-control" placeholder="Enter Your Password">
        
                  <button class="btn signin">SIGN IN</button>
                  Create an account<a href="signup.html">Sign up</a>
                </form>
              </div>
            </div>
          </div>
      </section>
      
      <footer>Copyrights @SpicesForever 2024</footer>

    <!-- Script -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
