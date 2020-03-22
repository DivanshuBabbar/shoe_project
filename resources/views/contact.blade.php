<!DOCTYPE html>
<html lang="en">
  <head>
    <title>shoelacestech</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.2/sweetalert2.all.js"></script>
    
  </head>
  <body>
  


  <div class="site-wrap">

    

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="row align-items-center">
              <div class="col-2 col-xl-2">
              <h1 class="mb-3"><a href="/welcome" class="text-black h2 mb-3"><img src="images/logo.png" width="52" height="42"></a></h1>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                 <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li><a href="/welcome">Home</a></li>
                    <li class="has-children">
                      <a href="">About</a>
                      <ul class="dropdown arrow-top">
                        <li><a href="/basic_profile">Basic Profile</a></li>
                        <li><a href="/key_man">Key Man</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="why-choose-us.html">Why Choose Us</a></li>
                       <!--  <li class="has-children">
                          <a href="#">Sub Menus</a> -->
                         <!--  <ul class="dropdown">
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="why-choose-us.html">Why Choose Us</a></li>
                          </ul> -->
                        <!-- </li> -->
                      </ul>
                    </li>
                    <li class="has-children">
                      <a href="/footwear_industry">Footwear Industry</a>
                       <ul class="dropdown arrow-top">
                        <li><a href="/nylon_laces">Nylon Shoe Laces</a></li>
                        <li><a href="">Polyester</a></li>
                        <li><a href="">Tapes</a></li>
                        <li><a href="">Cords</a></li>
                      </ul>
                    </li>
                    <li><a href="/blog">Garment Industry</a></li>
                    <li class="active" ><a href="/contact">Contact</a></li>
                   
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="slide-one-item home-slider owl-carousel">
      
      <div class="site-blocks-cover inner-page overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 text-center" data-aos="fade">
              <h1 class="font-secondary  font-weight-bold text-uppercase">Welcome to shoes</h1>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover inner-page overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="font-secondary font-weight-bold text-uppercase">Content heading</h1>
            </div>
          </div>
        </div>
      </div> 
    </div>

    <div class="slant-1"></div>
    <div class="site-section mb-0 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">

            

            <form  class="p-5 bg-white mail_form">
              <input type="hidden" name="csrf" value="">
              

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" name="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" name="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" name="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" name="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea  name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <button type="button" class="btn btn-primary py-2 px-4 text-white send_email">Submit</button>
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Harsh Enterprises</p>

              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">5-J/43A & 44 ,New Industrial Township</p>

              <p class="mb-0 font-weight-bold">City</p>
              <p class="mb-4">Faridabad</p>

              <p class="mb-0 font-weight-bold">State</p>
              <p class="mb-4">Haryana</p>

              <p class="mb-0 font-weight-bold">Pin Code</p>
              <p class="mb-4">121001</p>

              <p class="mb-0 font-weight-bold">Country</p>
              <p class="mb-4">India</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-2"><a href="tel:+91-9811078355">+91-9811078355</a></p>
              <p class="mb-2"><a href="tel:+91-9350868641">+91-9350868641</a></p>
              <p class="mb-2"><a href="tel:+91-9999667721">+91-9999667721</a></p>
              <p class="mb-2"><a href="tel:+91-9313333243">+91-9313333243 </a></p>

              <p class="mb-0 font-weight-bold">LandLine</p>
              <p class="mb-2"><a href="tel:0129-4085875">0129-4085875 </a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="mailto: enterprisesharsh.84@gmail.com">enterprisesharsh.84@gmail.com</a></p>

            </div>
            
            <!-- <div class="p-4 mb-3 bg-white">
              <img src="images/tapes.jpg" alt="Image" class="img-fluid mb-4 rounded">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>Contact us at : <a href="mailto: enterprisesharsh.84@gmail.com">enterprisesharsh.84@gmail.com</a></p>
              
            </div> -->

          </div>
        </div>
      </div>
    </div>
    
    <footer class="site-footer bg-dark">
      <div class="container">
      
        <div class="row">
          <div class="col-md-4 mb-4 mb-md-0">
            <h3 class="footer-heading mb-4 text-white">About</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quos rem ullam, placeat amet.</p>
            <p><a href="#" class="btn btn-primary text-white px-4">Read More</a></p>
          </div>
          <div class="col-md-5 mb-4 mb-md-0 ml-auto">
            <div class="row mb-4">
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">Quick Menu</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contacts</a></li>
                    <li><a href="#">Privacy</a></li>
                  </ul>
              </div>
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">Laces</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">hjkhh</a></li>
                    <li><a href="#">Design</a></li>
                    <li><a href="#">variety</a></li>
                    <li><a href="#">Multi Purpose </a></li>
                  </ul>
              </div>
            </div>

            <div class="row mb-5">
              <div class="col-md-12">
              <h3 class="footer-heading mb-4 text-white">Stay up to date</h3>
              <form action="#" class="d-flex footer-subscribe">
                <input type="text" class="form-control rounded-0" placeholder="Enter your email">
                <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
              </form>
            </div>
            </div>
          </div>

          
          <div class="col-md-2">
            
            <div class="row">
            <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Social Icons</h3></div>
              <div class="col-md-12">
                <p>
                  <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                  <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                  <a href="#" class="p-2"><span class="icon-vimeo"></span></a>

                </p>
              </div>
          </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
           
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | 
            </p>

            
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>

  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

  
  </body>
</html>