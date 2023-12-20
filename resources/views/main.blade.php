<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg  fixed-top mainNav">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav topnavs">
                <li class="nav-item active">
                    <a  href="/main">Home</a>
                </li>
                <li class="nav-item ">
                    <a  href="/product">Products</a>
                </li>
                <li class="nav-item">
                    <a  href="About">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="donate">Donations</a>
                </li>
                <li class="nav-item ">
                    <a  href="blog">Blog</a>
                </li>
            </ul>
        </div>
    
        <img class="d-block w-40" src="images\logo.png" alt="First slide" style="height: 80px;">
        <a class="navbar-brand" href="#">Online Bazaar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav topnavs">
                <li class="nav-item">
                    <a  href="#"><img src="images\cart.png" style="height: 25px;" ></a>
                </li>
                <li class="nav-item">
                    <a  href="#">Cart</a>
                </li>
                <li class="nav-item">
                    <a  href="login\login.html">Login</a>
                </li>
                <li class="nav-item">
                    <a  href="login\signup.html">Signin</a>
                </li>
                <li class="nav-item">
                    <a href="Admin\loginPage.html">Admin Panel</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid pt-5 mb-5">
        <input class="form-inline col-sm-12 col-md-11 col-ld-6 py-1 searchstore" type="search" placeholder="      Search in Mart   " aria-label="Search">
        <a class="search-icon " href="#" style="margin-left:10px;"><img class="search" src="images\search.png"  style="height: 35px;"></a>
         
    </div>
        
    <div class="row text-center">
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="10000">
                <img src="images\cr3.jpg" class="d-block w-100" alt="First slide">
              </div>
              <div class="carousel-item" data-interval="2000">
                <img src="images\cr2.jpg" class="d-block w-100" alt="2nd slide">
              </div>
              <div class="carousel-item">
                <img src="images\cr1.jpg" class="d-block w-100" alt="3rd slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
          
    <div class="d-flex text-center justify-content-center pt-5">
        <nav class="navbar navbar-expand-lg navbar-light  gurranty">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                    <img class="d-inline w-40" src="images\delivey.png" style="height: 50px;">
                    <a class="nav-link" >Nation Wide Delivery</a>
                    </li>
                    <li class="nav-item">
                    <img class="d-inline w-40" src="images\strore.png" style="height: 50px;">
                        <a class="nav-link">Trusted Stores</a>
                    </li>
                    <li class="nav-item">
                    <img class="d-inline w-40" src="images\best.png" style="height: 50px;">
                        <a class="nav-link">Best Price Guarantee</a>
                    </li>
                    <li class="nav-item">
                    <img class="d-inline w-40" src="images\moneyback.png" style="height: 50px;">
                        <a class="nav-link">100% Authentic Products</a>
                    </li>
                </ul>
            </nav>
    </div>

  <!-- Productss -->

  <!-- Offer Start -->
  <div class="container-fluid offer pt-5">
    <div class="row px-xl-5">
        <div class="col-md-6 pb-4">
            <div class="position-relative text-center text-md-right text-white mb-2 py-5 px-5 sale">
                <img src="images/bag.png"  style="height: 300px; max-width: 100%; " alt="">
                <div class="position-relative" style="z-index: 1;">
                    <h5 class="text-uppercase  mb-3">20% off the all order</h5>
                    <h1 class="mb-4 font-weight-semi-bold">Limited Time Deals</h1>
                    <a href="" class="btn  py-md-2 px-md-3">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 pb-4">
            <div class="position-relative text-center text-md-left text-white mb-2 py-5 px-5 sale">
                <img src="images/falsh.png" style="height: 300px; max-width: 100%; " w-40 alt="">
                <div class="position-relative" style="z-index: 1;">
                    <h5 class="text-uppercase  mb-3">Sale offers</h5>
                    <h1 class="mb-4 font-weight-semi-bold">Blessed Friday Sale</h1>
                    <a href="" class="btn py-md-2 px-md-3">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
<!-- Offer End -->
<!-- Footer -->
<div class="container-fluid foot mt-5 pt-5">
  <div class="row px-xl-5 pt-5">
      <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
          <a href="" class="text-decoration-none">
              <h1 class="mb-4 font-weight-semi-bold">Online Bazaar</h1>
          </a>
          <p>This is a Non-Israeli product store. We ensure that none of our products support Israel directly or indirectly.</p>
          <p class="mb-2"><i class="fa fa-map-marker-alt  mr-3"></i>Islamad, Pakistan</p>
          <p class="mb-2"><i class="fa fa-envelope  mr-3"></i>NonIsreal@store.com</p>
          <p class="mb-0"><i class="fa fa-phone-alt  mr-3"></i>+092 333 333333  </p>
      </div>
      <div class="col-lg-8 col-md-12">
          <div class="row">
              <div class="col-md-4 mb-5">
                  <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                  <div class="d-flex flex-column justify-content-start">
                    <a class="text-dark mb-2" href="main.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-dark mb-2" href="product.html"><i class="fa fa-angle-right mr-2"></i>Products</a>
                    <a class="text-dark mb-2" href="about.html"><i class="fa fa-angle-right mr-2"></i>About us</a>
                    <a class="text-dark mb-2" href="donation.html"><i class="fa fa-angle-right mr-2"></i>Donations</a>
                    <a class="text-dark mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                    <a class="text-dark" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
              </div>
              
              <div class="col-md-4 mb-5">
                  <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                  <form action="">
                      <div class="form-group mb-4">
                          <input type="text" class="form-control border-0 py-2" placeholder="Your Name" required="required" />
                      </div>
                      <div class="form-group mb-4">
                          <input type="email" class="form-control border-0 py-2 " placeholder="Your Email"
                              required="required" />
                      </div>
                      <div>
                          <button  type="submit">Subscribe Now</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>

  <div class="row border-top border-light mx-xl-5 py-4">
      <div class="col-md-6 px-xl-0">
          <p class="mb-md-0  text-md-left text-dark">
              &copy; <a class="text-dark font-weight-semi-bold" href="#">Online Bazaar</a>. All Rights Reserved. 
          </p>
      </div>
      <div class="col-md-6 px-xl-0 text-center text-md-right">
          <img class="img-fluid" src="img/payments.png" alt="">
      </div>
  </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
