<?php
  include('includes/header.php');
  include('connection.php');
  $payment=0;
  $paidMoney=0;
  $paymentPrevious=0;
  $result = mysqli_query($con,'SELECT * FROM cardbalance WHERE id = ( SELECT MAX(id) FROM cardbalance)');
  $row = mysqli_fetch_array($result);
  $id=$row['id'];    
  $UID=$row['UID'];    
  $paymentPrevious=$row['payment'];    

if(isset($_POST["submit"])){
  $payment=$_POST["payment"];
  $paidMoney=$payment;
  $payment=$paidMoney+$paymentPrevious;
  
  $sql="UPDATE cardbalance SET payment=$payment WHERE id=$id";
  mysqli_query($con,$sql);

  $sql="INSERT INTO cardstate (UID,payment) VALUES ($UID,$payment)";
  mysqli_query($con,$sql);
  mysqli_close($con);
}
?>
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0">ДХСАХ<span class="text-primary">.</span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Нүүр</a></li>
                <li class="has-children">
                  <a href="#about-section" class="nav-link">About Us</a>
                  <ul class="dropdown">
                    <li><a href="#team-section" class="nav-link">Team</a></li>
                    <li><a href="#pricing-section" class="nav-link">Pricing</a></li>
                    <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                    <li><a href="#gallery-section" class="nav-link">Gallery</a></li>
                    <li><a href="#services-section" class="nav-link">Services</a></li>
                    <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                    <li class="has-children">
                      <a href="#">More Links</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                
                
                <li><a href="#blog-section" class="nav-link">Blog</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-facebook"></span></a></li>
                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-twitter"></span></a></li>
                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-linkedin"></span></a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  
     
    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">

          
          <div class="col-md-10 mt-lg-5 text-center">
            <div class="single-text owl-carousel">
              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up">Banking Solutions</h1>
                <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident cupiditate suscipit, magnam libero velit esse sapiente officia inventore!</p>
                <div data-aos="fade-up" data-aos-delay="100">
                </div>
              </div>

              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up">Financing Solutions</h1>
                <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident cupiditate suscipit, magnam libero velit esse sapiente officia inventore!</p>
              </div>

              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up">Savings Accounts</h1>
                <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident cupiditate suscipit, magnam libero velit esse sapiente officia inventore!</p>
              </div>

            </div>
          </div>
            
        </div>
      </div>

      <a href="#next" class="mouse smoothscroll">
        <span class="mouse-icon">
          <span class="mouse-wheel"></span>
        </span>
      </a>
    </div>  

    <div class="site-section" id="next">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="">
            <img src="images/flaticon-svg/svg/001-wallet.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
            <h3 class="card-title">Money Savings</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
          <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">
            <img src="images/flaticon-svg/svg/004-cart.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
            <h3 class="card-title">Online Shoppings</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
          <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="200">
            <img src="images/flaticon-svg/svg/006-credit-card.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
            <h3 class="card-title">Credit / Debit Cards</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>

        </div>

        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="images/girl.png" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="mb-4">
              <h3 class="h3 mb-4 text-black">Ухаалаг кассын төхөөрөмж</h3>
              
            </div>
              
            <div class="mb-4">
              <ul class="list-unstyled ul-check success">
                <li>Дугаар: <?=$id;?></li>
                <li>Картны дахин давтагдашгүй дугаар: <?=$UID;?></li>
                <li>Төлбөрийн үлдэгдэл: <?=$paymentPrevious;?></li>
              </ul>
              
            </div>

            <div class="mb-4">
              <form action="" method="POST" autocomplete="off">
                <div class="form-group d-flex align-items-center">
                  <input type="number" name="payment" class="form-control mr-2" placeholder="Төлбөр" required>
                  <button type="submit" name="submit" class="btn btn-primary">Мэдээллийн сан руу илгээ</button>
                </div>
              </form>
              <div class="mb-4">
              <ul class="list-unstyled ul-check success">
                <li>Дугаар: <?=$id;?></li>
                <li>Картны дахин давтагдашгүй дугаар: <?=$UID;?></li>
                <li>Хийгдсэн төлбөр: <?=$paidMoney;?></li>
                <li>Одоо байгаа төлбөрийн үлдэгдэл: <?=($paymentPrevious + $paidMoney);?></li>
              </ul>
              
            </div>
              <p class="text-danger">Анхааруулга: Reload болон F5 товчлуур дээр дарж болохгүй!</p>
            </div>

            
            
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section cta-big-image" id="about-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Бидний тухай</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus minima neque tempora reiciendis.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="images/contact.png" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            
            <h3 class="text-black mb-4">We Solve Your Financial Problem</h3>

            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            
          </div>
        </div>    
        
      </div>  
    </div>

    <section class="site-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">How It Works</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
        
        <div class="row align-items-lg-center" >
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">

            <div class="owl-carousel slide-one-item-alt">
              <img src="images/slide_1.jpg" alt="Image" class="img-fluid">
              <img src="images/slide_2.jpg" alt="Image" class="img-fluid">
              <img src="images/slide_3.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="custom-direction">
              <a href="#" class="custom-prev"><span><span class="icon-keyboard_backspace"></span></span></a><a href="#" class="custom-next"><span><span class="icon-keyboard_backspace"></span></span></a>
            </div>

          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            
            <div class="owl-carousel slide-one-item-alt-text">
              <div>
                <h2 class="section-title mb-3">01. Online Applications</h2>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
              </div>
              <div>
                <h2 class="section-title mb-3">02. Get an approval</h2>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
              </div>
              <div>
                <h2 class="section-title mb-3">03. Card delivery</h2>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
              </div>
              
            </div>
            
          </div>
        </div>
      </div>
    </section>

    
    

    <section class="site-section border-bottom bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Онцлог давуу талууд</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/flaticon-svg/svg/001-wallet.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3>Business Consulting</h3>
                <p>Стандарт RFID карт уншигч</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/flaticon-svg/svg/006-credit-card.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3>Credit Card</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/flaticon-svg/svg/002-rich.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3>Income Monitoring</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/flaticon-svg/svg/003-notes.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3>Insurance Consulting</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/flaticon-svg/svg/004-cart.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3>Financial Investment</h3>
                <p>Тусгай төхөөрөмжинд суурилуулсан, төлбөрийн систем</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/flaticon-svg/svg/005-megaphone.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3>Financial Management</h3>
                <p>Объект руу нэвтрэхийн тулд шууд уншуулах уян хатан программ</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <section class="site-section" id="about-section">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="images/hero_1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            

            <div class="row">

              
              
              <div class="col-12 mb-4" data-aos="fade-up" data-aos-delay="">
                <div class="unit-4 d-flex">
                  <div class="unit-4-icon mr-4 mb-3"><span class="text-primary flaticon-head"></span></div>
                  <div>
                    <h3>Bank Loan</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="mb-0"><a href="#">Learn More</a></p>
                  </div>
                </div>
              </div>
              <div class="col-12 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="unit-4 d-flex">
                  <div class="unit-4-icon mr-4 mb-3"><span class="text-primary flaticon-smartphone"></span></div>
                  <div>
                    <h3>Banking Consulation </h3>
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <p class="mb-0"><a href="#">Learn More</a></p>
                  </div>
                </div>
              </div>
            </div>


            
          </div>
        </div>

        
      </div>
    </section>
  
    
    

    <section class="site-section" id="blog-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Мэдээ & Мэдээлэл</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="h-entry">
              <a href="single.html">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              </a>
              <h2 class="font-size-regular"><a href="#">A Basic Guide to Starting a Franchise in the Philippines</a></h2>
              <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="h-entry">
              <a href="single.html">
                <img src="images/img_4.jpg" alt="Image" class="img-fluid">
              </a>
              <h2 class="font-size-regular"><a href="#">A Basic Guide to Starting a Franchise in the Philippines</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="h-entry">
              <a href="single.html">
                <img src="images/img_3.jpg" alt="Image" class="img-fluid">
              </a>
              <h2 class="font-size-regular"><a href="#">A Basic Guide to Starting a Franchise in the Philippines</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div> 
          </div>
          
        </div>
      </div>
    </section>    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#about-section" class="smoothscroll">Terms</a></li>
                  <li><a href="#about-section" class="smoothscroll">Policy</a></li>
                  <li><a href="#about-section" class="smoothscroll">About Us</a></li>
                  <li><a href="#services-section" class="smoothscroll">Services</a></li>
                  <li><a href="#testimonials-section" class="smoothscroll">Testimonials</a></li>
                  <li><a href="#contact-section" class="smoothscroll">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3 footer-social">
                <h2 class="footer-heading mb-4">Биднийг дагаарай</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p class="copyright"><small>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Вэб сайтыг хийсэн <i class="icon-heart text-danger" aria-hidden="true"></i> <a href="https://<?= $myPark; ?>" target="_blank" ><?= $myPark; ?></a></small></p>
        
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->
  
<?php 
  include('includes/footer.php'); 
  include("includes/scripts.php"); 
?>