@extends('landing.layouts.main')
@section('landingPage')
    <!-- Banner Section Begin -->
    <section class="banner" id="home" style="background: url(assets/images/banner-agency.jpg) center; background-size: cover;" id="home">
        <div class="overlay"></div>
        <div class="banner-content">
          <div class="container">
            <div class="col-md-12">
              <div class="subtitle">
                <p>Hello, We Are</p>
              </div>
              <div class="title">
                <h1 id="typed-agency"></h1>
              </div>
            </div>
          </div><!-- /.container -->
  
        </div><!-- /.banner-content -->
      </section><!-- /.banner -->
      <!-- Banner Section End -->
  
      <!-- About Section Begin -->
      <section class="iconic-column agency-services" id="services">
        <div class="title section-title text-center">
          <div class="title-icon-container">
            <div class="title-icon"><i class="pe-7s-id pe-2x"></i></div>
          </div>
          <h1>Our Services</h1>
          <h2>Best deals for you</h2>
        </div>
  
        <div class="container">
          <div class="row">
            <div class="iconic-column col-md-4 col-sm-4 col-xs-12 wow animated fadeIn">
              <div class="icon">
                <i class="pe-7s-portfolio pe-2x"></i>
              </div>
              <div class="text">
                <div class="title"><h3>PHOTOGRAPH</h3></div>
                <div class="content"><p>Capture your best moments with Us. consectetur adipiscing elit. Proin sed finibus nibh. Vestibulum pharetra blandit mollis.</p></div>
              </div>
            </div><!--/.iconic-column -->
            <div class="iconic-column col-md-4 col-sm-4 col-xs-12 wow animated fadeIn">
              <div class="icon">
                <i class="pe-7s-paper-plane pe-2x"></i>
              </div>
              <div class="text">
                <div class="title"><h3>Visual Communication Design</h3></div>
                <div class="content"><p>Beautify your product with Us. Donsectetur adipiscing elit. Proin sed finibus nibh. kkasd. dipiscing elit. Proin sed finibus nibh.</p></div>
              </div>
            </div><!--/.iconic-column -->
            <div class="iconic-column col-md-4 col-sm-4 col-xs-12 wow animated fadeIn">
              <div class="icon">
                <i class="pe-7s-paperclip pe-2x"></i>
              </div>
              <div class="text">
                <div class="title"><h3>Videografi</h3></div>
                <div class="content"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed finibus nibh. Vestibulum pharetra blandit mollis.</p></div>
              </div>
            </div><!--/.iconic-column -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.features -->
      <!-- About section End -->
      
      <!-- Counter Section Begin-->
      <section class="counter counter-alt" style="background: url(assets/images/banner2.jpg) center; background-size: cover; background-attachment: fixed;">
        <div class="overlay"></div>
        <div class="container content">
          <div class="row">
            <div class="col-sm-3">
              <div class="icon"><i class="pe-7s-clock pe-4x"></i></div>
              <h3 class="timer" data-to="1500" data-speed="3000" data-from="0">1500</h3>        
              <h4>Hours Of Work</h4>
            </div>
            <div class="col-sm-3">
              <div class="icon"><i class="pe-7s-coffee pe-4x"></i></div>
              <h3 class="timer" data-to="45" data-speed="3000" data-from="0">45</h3>
              <h4>Cups of Coffee</h4>
            </div>
            <div class="col-sm-3">
              <div class="icon"><i class="pe-7s-rocket pe-4x"></i></div>
              <h3 class="timer" data-to="178" data-speed="3000" data-from="0">178</h3>
              <h4>Project Done</h4>
            </div>
            <div class="col-sm-3">
              <div class="icon"><i class="pe-7s-add-user"></i></div>
              <h3 class="timer" data-to="32" data-speed="3000" data-from="0">32</h3>
              <h4>Clients</h4>
            </div>
          </div>      
        </div>
      </section><!--/.timer -->
      <!-- Counter Section End -->
  
      <section class="agency-team">
        <div class="container">
          <div class="title section-title text-center wow animated fadeIn">
            <div class="title-icon-container">
              <div class="title-icon"><i class="pe-7s-rocket pe-2x pe-va"></i></div>
            </div>
            <h1>Our Team</h1>
            <h2>The Great People</h2>
          </div>
          <div class="agency-team-wrap">
  
            <div class="item wow animated fadeIn" data-wow-delay="0.2s">
              <div class="team-member">
                <div class="image">
                  <img src="assets/images/team1.jpg" alt="">
  
                  <div class="overlay">
                    <div class="content-link">
                      <div class="link-wrap">
                        <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#">
                          <i class="fa fa-twitter"></i>
                        </a>
                      </div>
                    </div>                
                  </div>
                </div>
                <div class="name"><h3>John Doe</h3></div>
                <div class="position"><h4>CEO / Founder</h4></div>
              </div>
            </div><!--/.item -->
  
            <div class="item wow animated fadeIn" data-wow-delay="0.2s">
              <div class="team-member">
                <div class="image">
                  <img src="assets/images/team2.jpg" alt="">
  
                  <div class="overlay">
                    <div class="content-link">
                      <div class="link-wrap">
                        <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#">
                          <i class="fa fa-twitter"></i>
                        </a>
                      </div>
                    </div>                
                  </div>
                </div>
                <div class="name"><h3>Jessica Kim</h3></div>
                <div class="position"><h4>Lead Designer</h4></div>
              </div>
            </div><!--/.item -->
  
            <div class="item wow animated fadeIn" data-wow-delay="0.2s">
              <div class="team-member">
                <div class="image">
                  <img src="assets/images/team3.jpg" alt="">
  
                  <div class="overlay">
                    <div class="content-link">
                      <div class="link-wrap">
                        <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#">
                          <i class="fa fa-twitter"></i>
                        </a>
                      </div>
                    </div>                
                  </div>
                </div>
                <div class="name"><h3>Stephen Edward</h3></div>
                <div class="position"><h4>Graphic Designer</h4></div>
              </div>
            </div><!--/.item -->
  
            <div class="item wow animated fadeIn" data-wow-delay="0.2s">
              <div class="team-member">
                <div class="image">
                  <img src="assets/images/team4.jpg" alt="">
  
                  <div class="overlay">
                    <div class="content-link">
                      <div class="link-wrap">
                        <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#">
                          <i class="fa fa-twitter"></i>
                        </a>
                      </div>
                    </div>                
                  </div>
                </div>
                <div class="name"><h3>Alex Darby</h3></div>
                <div class="position"><h4>UI/UX Designer</h4>
                </div>
              </div>
            </div><!--/.item -->
  
            <div class="item wow animated fadeIn" data-wow-delay="0.2s">
              <div class="team-member">
                <div class="image">
                  <img src="assets/images/team5.jpg" alt="">
  
                  <div class="overlay">
                    <div class="content-link">
                      <div class="link-wrap">
                        <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#">
                          <i class="fa fa-twitter"></i>
                        </a>
                      </div>
                    </div>                
                  </div>
                </div>
                <div class="name"><h3>John Darwin</h3></div>
                <div class="position"><h4>Quality Control</h4>
                </div>
              </div>
            </div><!--/.item -->
          </div><!--/.agency-team-wrap -->
        </div><!--/.container -->
      </section><!--/.agency-team -->
  
  
      <section class="agency-about-image wow animated fadeIn" id="ab">
        <div class="container-fluid">
  
          <div class="col-md-6 col-sm-6 left-content" style="background: url('assets/images/banner-agency-about.png') center; background-size: cover;"></div>
  
          <div class="col-md-6 col-sm-6 right-content">
            <div class="text-content">
              <h3 class="underlined-heading">About Us</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur viverra vulputate tincidunt. Fusce ultricies dui pretium purus vestibulum suscipit. Proin ut turpis a mauris porttitor luctus eu quis velit. Nunc libero dolor, commodo sit amet nunc nec, sollicitudin semper ligula.</p>
            </div><!--/.left-content -->
          </div><!--/.right-content -->
        </div><!--/.container -->
      </section><!--/.agency-about-image -->
    
      <!--Portfolio Section Begin -->
      <section class="portfolio portfolio-alt" id="portfolio">
        <div class="container">
          <div class="title section-title text-center wow animated fadeIn">
            <div class="title-icon-container">
              <div class="title-icon"><i class="pe-7s-rocket pe-2x pe-va"></i></div>
            </div>
            <h1>Our Portfolio</h1>
            <h2>Lorem ipsum dolor</h2>
          </div><!--/.title -->
          <div class="description">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
          </div><!--/.dscription -->
        </div>
  
        <div class="container">
          <div class="portfoliocontent wow animated fadeIn">
  
            <div class="item col-md-4 col-sm-6 col-xs-12 webdesign">
              <a href="portfolio-single.html">
                <div class="content">
                  <div class="overlay">
                    <div class="valign-container">
                      <div class="text valign-content">
                        <span class="project-name">Beauty Typography</span>
                        <div class="separator-container">
                          <div class="separator"><div class="shape"></div></div>
                        </div>
                        <span class="project-date">1 Jan 2015</span>
                      </div>
                    </div>
                  </div>
                  <div class="image">
                    <img src="assets/images/work1.jpg" alt="Portfolio image">
                  </div>
                </div><!--/.content -->
              </a>
            </div><!--/.item -->
  
            <div class="item col-md-4 col-sm-6 col-xs-12 webdevelopment">
              <a href="portfolio-single.html">
                <div class="content">
                  <div class="overlay valign-container">
                    <div class="valign-container">
                      <div class="text valign-content">
                        <span class="project-name">Sweet Cake</span>
                        <div class="separator-container">
                          <div class="separator"><div class="shape"></div></div>
                        </div>
                        <span class="project-date">17 Feb 2015</span>
                      </div>
                    </div>
                  </div>
                  <div class="image">
                    <img src="assets/images/work2.jpg" alt="Portfolio image">
                  </div>
                </div><!--/.content -->
              </a>
            </div><!--/.item -->
  
            <div class="item col-md-4 col-sm-6 col-xs-12 webdesign">
              <a href="portfolio-single.html">
                <div class="content">
                  <div class="overlay valign-container">
                    <div class="valign-container">
                      <div class="text valign-content">
                        <span class="project-name">Nice Photography</span>
                        <div class="separator-container">
                          <div class="separator"><div class="shape"></div></div>
                        </div>
                        <span class="project-date">15 Mar 2015</span>
                      </div>
                    </div>
                  </div>
                  <div class="image">
                    <img src="assets/images/work3.jpg" alt="Portfolio image">
                  </div>
                </div><!--/.content -->
              </a>
            </div><!--/.item -->
  
            <div class="item col-md-4 col-sm-6 col-xs-12 webdevelopment">
              <a href="portfolio-single.html">
                <div class="content">
                  <div class="overlay valign-container">
                    <div class="valign-container">
                      <div class="text valign-content">
                        <span class="project-name">Bike Photo</span>
                        <div class="separator-container">
                          <div class="separator"><div class="shape"></div></div>
                        </div>
                        <span class="project-date">22 Dec 2014</span>
                      </div>
                    </div>
                  </div>
                  <div class="image">
                    <img src="assets/images/work4.png" alt="Portfolio image">
                  </div>
                </div><!--/.content -->
              </a>
            </div><!--/.item -->
  
            <div class="item col-md-4 col-sm-6 col-xs-12 webdesign">
              <a href="portfolio-single.html">
                <div class="content">
                  <div class="overlay valign-container">
                    <div class="valign-container">
                      <div class="text valign-content">
                        <span class="project-name">Good Camera</span>
                        <div class="separator-container">
                          <div class="separator"><div class="shape"></div></div>
                        </div>
                        <span class="project-date">27 Dec 2015</span>
                      </div>
                    </div>
                  </div>
                  <div class="image">
                    <img src="assets/images/work5.jpg" alt="Portfolio image">
                  </div>
                </div><!--/.content -->
              </a>
            </div><!--/.item -->
  
            <div class="item col-md-4 col-sm-6 col-xs-12 webdevelopment">
              <a href="portfolio-single.html">
                <div class="content">
                  <div class="overlay valign-container">
                    <div class="valign-container">
                      <div class="text valign-content">
                        <span class="project-name">Nice Shirt Design</span>
                        <div class="separator-container">
                          <div class="separator"><div class="shape"></div></div>
                        </div>
                        <span class="project-date">2 Mar 2015</span>
                      </div>
                    </div>
                  </div>
                  <div class="image">
                    <img src="assets/images/work6.jpg" alt="Portfolio image">
                  </div>
                </div><!--/.content -->
              </a>
            </div><!--/.item -->
          </div><!--/.portfoliocontent -->
        </div><!--/.container -->
        
        <div class="container">
          <div class="col-md-12">
            <div class="show-more text-center">
              <a href="portfolio-list.html" class="def-btn">Show More</a>
            </div>
          </div>
        </div>
  
      </section><!--/.portfolio-alt -->
      <!-- Portfolio Section End -->
  
      <!-- Testimonial Section Begin-->
      <section class="testimonial testimonial-alt text-center wow animated fadeIn" id="testimonial" style="background: url(assets/images/banner4.jpg) center; background-size: cover; background-attachment: fixed;">
        <div class="overlay"></div>
        <div class="carousel slide">
          <div class="container">
            <div class="testimonial-alt-content">
              
              <div class="item">
                <div class="text">
                  <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis at magna et hendrerit.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                  </p>
                </div>
                <div class="bottom-content col-md-12 no-h-padding">
                  <div class="name-position col-md-8">
                    <div class="name">Jonathan Doe</div>
                    <div class="position">CEO of Kebon Kopi</div>
                  </div>
                  <div class="image col-md-4">
                    <img src="assets/images/me.jpg" alt="">
                  </div>
                </div>
              </div><!--/.item -->
              
              <div class="item">
                <div class="text">
                  <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis at magna et hendrerit.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                  </p>
                </div>
                <div class="bottom-content col-md-12 no-h-padding">
                  <div class="name-position col-md-8">
                    <div class="name">Chris Steven</div>
                    <div class="position">CEO of Rancabentang</div>
                  </div>
                  <div class="image col-md-4">
                    <img src="assets/images/me2.jpg" alt="">
                  </div>
                </div>
              </div><!--/.item -->
  
              <div class="item">
                <div class="text">
                  <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis at magna et hendrerit.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                  </p>
                </div>
                <div class="bottom-content col-md-12 no-h-padding">
                  <div class="name-position col-md-8">
                    <div class="name">David Varella</div>
                    <div class="position">CEO of Kebon Kopi</div>
                  </div>
                  <div class="image col-md-4">
                    <img src="assets/images/me3.jpg" alt="">
                  </div>
                </div>
              </div><!--/.item -->
            </div><!--/.testimonial-alt-content -->
          </div><!--/.container -->
        </div><!--/.testimonial-carousel -->
      </section><!--/.testimonial -->
      <!-- Testimonial Section End-->
    
      <!-- Clients Section End  -->
      <br><br>
  
      <!-- Map Section Begin  -->
      <section class="map map-alt" id="contact">
        <div class="container-fluid nopad-h">
          <div class="col-md-6 nopad-h">
            <div class="map-canvas" id="map-canvas"></div>
          </div>
          <div class="col-md-6 nopad-h">
            <div class="footer-form">
              <div class="title section-title text-center wow animated fadeIn">
                <div class="title-icon-container">
                  <div class="title-icon"><i class="pe-7s-rocket pe-2x pe-va"></i></div>
                </div>
                <h1>Get In Touch</h1>
                <h2>With Us</h2>
              </div>
              <div id="notification"></div>
              <form role="form" method="post" action="https://demo.suavedigital.com/MePro/contact.php" id="contactform">
                <div class="col-md-12 input-container wow animated fadeIn" data-wow-delay="0.2s">
                  <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                </div>
                <div class="col-md-12 input-container wow animated fadeIn" data-wow-delay="0.2s">
                  <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                </div>
                <div class="col-md-12 textarea-container wow animated fadeIn" data-wow-delay="0.2s">
                  <textarea name="message" class="form-control" id="message" placeholder="Your Message Here"></textarea>
                </div>
                <div class="col-md-12 button-container wow animated fadeIn" data-wow-delay="0.2s">
                  <input type="submit" class="submit-btn def-btn" value="Send Message">
                </div>
              </form>
            </div><!--/.footer-form -->
          </div>
        </div><!--/.container-fluid -->
    </section><!--/.map-alt -->
      <!-- Map Section End  -->
  
@endsection