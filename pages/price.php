<?php
$title = "Prix";
ob_start();
?>


<body class="sub_page">
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Fast & Secure <br>
                      Web Hosting
                    </h1>
                    <p>
                      Anything embarrassing hidden in the middle of text. All the Lorem Ipsuanything embarrassing hidden in the middle of text. All the Lorem Ipsumm </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                      <a href="" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" col-lg-10 mx-auto">
                      <div class="img-box">
                        <img src="images/slider-img.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Fast & Secure <br>
                      Web Hosting
                    </h1>
                    <p>
                      Anything embarrassing hidden in the middle of text. All the Lorem Ipsuanything embarrassing hidden in the middle of text. All the Lorem Ipsumm </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                      <a href="" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" col-lg-10 mx-auto">
                      <div class="img-box">
                        <img src="images/slider-img.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Fast & Secure <br>
                      Web Hosting
                    </h1>
                    <p>
                      Anything embarrassing hidden in the middle of text. All the Lorem Ipsuanything embarrassing hidden in the middle of text. All the Lorem Ipsumm </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                      <a href="" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" col-lg-10 mx-auto">
                      <div class="img-box">
                        <img src="images/slider-img.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- price section -->

  <section class="price_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Pricing
        </h2>
      </div>
      <div class="price_container ">
        <div class="box">
          <div class="detail-box">
            <h2>$ <span>49</span></h2>
            <h6>
              Startup
            </h6>
            <ul class="price_features">
              <li>
                2GB RAM
              </li>
              <li>
                20GB SSD Cloud Storage
              </li>
              <li>
                Weekly Backups
              </li>
              <li>
                DDoS Protection
              </li>
              <li>
                Full Root Access
              </li>
              <li>
                24/7/365 Tech Support
              </li>
            </ul>
          </div>
          <div class="btn-box">
            <a href="">
              See Detail
            </a>
          </div>
        </div>
        <div class="box">
          <div class="detail-box">
            <h2>$ <span>99</span></h2>
            <h6>
              Standard
            </h6>
            <ul class="price_features">
              <li>
                4GB RAM
              </li>
              <li>
                50GB SSD Cloud Storage
              </li>
              <li>
                Weekly Backups
              </li>
              <li>
                DDoS Protection
              </li>
              <li>
                Full Root Access
              </li>
              <li>
                24/7/365 Tech Support
              </li>
            </ul>
          </div>
          <div class="btn-box">
            <a href="">
              See Detail
            </a>
          </div>
        </div>
        <div class="box">
          <div class="detail-box">
            <h2>$ <span>149</span></h2>
            <h6>
              Business
            </h6>
            <ul class="price_features">
              <li>
                8GB RAM
              </li>
              <li>
                100GB SSD Cloud Storage
              </li>
              <li>
                Weekly Backups
              </li>
              <li>
                DDoS Protection
              </li>
              <li>
                Full Root Access
              </li>
              <li>
                24/7/365 Tech Support
              </li>
            </ul>
          </div>
          <div class="btn-box">
            <a href="">
              See Detail
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- price section -->

<?php
$content = ob_get_clean();
include '../template/layout.php';
?>
