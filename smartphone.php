<?php 
require_once __DIR__ . '/db/phones.php';
$cards =database_get_all_cards();

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronic Shop</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
</head>
<body>

    <!-- top navbar -->
    <div class="top-navbar">
        <p>WELCOME TO OUR SHOP</p>
        <div class="icons">
            <a href="login.php"><img src="./images/register.png" alt="" width="18px">Login</a>
            <a href="register.php"><img src="./images/register.png" alt="" width="18px">Register</a>
        </div>
    </div>
    <!-- top navbar -->

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php" id="logo"><span id="span1">ELectronics <span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="./images/menu.png" alt="" width="30px"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product.php">Product</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(9, 45, 123);">
                  <li><a class="dropdown-item" href="smartphone.php">Samrt Phone</a></li>
                  <li><a class="dropdown-item" href="cameras.php">Cameras</a></li>
                  <li><a class="dropdown-item" href="fridge.php">Fridge</a></li>
                  <li><a class="dropdown-item" href="ac.php">AC</a></li>
                  <li><a class="dropdown-item" href="smartwatch.php">Samrt Watch</a></li>
                  <li><a class="dropdown-item" href="headphone.php">Headphone</a></li>
                  <li><a class="dropdown-item" href="laptop.php">Laptop</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
            <form class="d-flex" id="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <!-- navbar -->
    <!-- Smart Phone cards -->
    <div class="container" id="smartphone-cards">
        <h1 class="text-center">Smart Phone</h1>
                     
      <!-- Smart Phone cards -->
      <!-- other cards -->
      
    <div class="container" id="other-cards">
        <div class="row">
        <?php foreach($cards as $card):?>
          <div class="col-md-6 py-3 py-md-0">
            <a href="details.php?id=<?php echo $card['id'] ?>" style ="text-decoration:none;">
            <div class="card">
                <img src="<?php echo $card['img'] ?>" alt="">
                <div class="card-img-overlay">
                </div>
                <div class="phonename"><?php echo $card['product_name']?></div>
                <div class="price"><?php echo $card['price']?></div>
                <button id="shopnow"> SHOW</button>
            </div></a>
          </div>
        <?php endforeach;?>

          
        </div>
      </div>
      <!-- other cards -->
      <!-- banner -->
    <section class="banner">
        <div class="content">
          <h1> <span>Electronic Gadget</span>
            <br>
            Up To <span id="span2">50%</span> Off
          </h1>
          <p>ELectronics has everything you need to sell electronics online.
          </p>
          <div class="btn"><button>Shop Now</button></div>
    
        </div>
        <div class="img">
          <img src="./images/image1.png" alt="">
        </div>
      </section>
      <!-- banner -->
  

  
      <!-- offer -->
      <div class="container" id="offer">
        <div class="row">
          <div class="col-md-3 py-3 py-md-0">
            <i class="fa-solid fa-cart-shopping"></i>
            <h3>Free Shipping</h3>
            <p>On order over $1000</p>
          </div>
          <div class="col-md-3 py-3 py-md-0">
            <i class="fa-solid fa-rotate-left"></i>
            <h3>Free Returns</h3>
            <p>Within 30 days</p>
          </div>
          <div class="col-md-3 py-3 py-md-0">
            <i class="fa-solid fa-truck"></i>
            <h3>Fast Delivery</h3>
            <p>World Wide</p>
          </div>
          <div class="col-md-3 py-3 py-md-0">
            <i class="fa-solid fa-thumbs-up"></i>
            <h3>Big choice</h3>
            <p>Of products</p>
          </div>
        </div>
      </div>
      <!-- offer -->
  
  
  
  
  
  
  
      <!-- footer -->
      <footer id="footer">
        <div class="footer-top">
          <div class="container">
            <div class="row">
  
              <div class="col-lg-3 col-md-6 footer-contact">
                <h3>Electronics</h3>
                <p>
                  Egypt <br>
                </p>
                <strong>Phone:</strong> +200000000000 <br>
                <strong>Email:</strong> electronics@.com <br>
              </div>
  
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Usefull Links</h4>
               <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                
               </ul>
              </div>
  
  
  
             
  
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
  
               <ul>
                <li><a href="smartphone.php">Smart Phone</a></li>
                <li><a href="cameras.php">Cameras</a></li>
                <li><a href="fridge.php">Fridge</a></li>
                <li><a href="ac.php">AC</a></li>
                <li><a href="smartwatch.php">Smart Watch</a></li>
                <li><a href="headphone.php">Headphone</a></li>
                <li><a href="laptop.php">Laptop</a></li>
               </ul>
              </div>
  
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Social Networks</h4>
                <p>Follow us.. </p>
  
                <div class="socail-links mt-3">
                  <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  <a href="#"><i class="fa-brands fa-skype"></i></a>
                  <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                </div>
              
              </div>
  
            </div>
          </div>
        </div>
        <hr>
        <div class="container py-4">
          <div class="copyright">
            &copy; Copyright <strong><span>Electronics</span></strong>. All Rights Reserved
          </div>
          
        </div>
      </footer>
      <!-- footer -->
  
  
  
  
  
  
  
      <a href="#" class="arrow"><i><img src="./images/arrow.png" alt=""></i></a>
  
  
  
  
  
  
  
  
  
  
  
  
  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  </body>
  </html>