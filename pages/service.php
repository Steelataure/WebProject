<?php
$title = "Service";
ob_start();
?>


  </div>

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Services
        </h2>
      </div>
    </div>
    <div class="container ">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="assets/images/s1.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Shared Hosting
              </h4>
              <p>
                Generators on the Internet tend to repeat predefined chunks as necessary
              </p>
              <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="assets/images/s2.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Dedicated Hosting
              </h4>
              <p>
                Generators on the Internet tend to repeat predefined chunks as necessary
              </p>
              <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 ">
          <div class="box ">
            <div class="img-box">
              <img src="assets/images/s3.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Cloud Hosting
              </h4>
              <p>
                Generators on the Internet tend to repeat predefined chunks as necessary
              </p>
              <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="assets/images/s4.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                VPS Hosting
              </h4>
              <p>
                Generators on the Internet tend to repeat predefined chunks as necessary
              </p>
              <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="assets/images/s5.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Wordpress Hosting
              </h4>
              <p>
                Generators on the Internet tend to repeat predefined chunks as necessary
              </p>
              <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="assets/images/s6.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Domain Name
              </h4>
              <p>
                Generators on the Internet tend to repeat predefined chunks as necessary
              </p>
              <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->


  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="" href="index.html">
                <img src="assets/images/nav-bullet.png" alt="">
                Home
              </a>
              <a class="" href="about.html">
                <img src="assets/images/nav-bullet.png" alt="">
                About
              </a>
              <a class="active" href="service.html">
                <img src="assets/images/nav-bullet.png" alt="">
                Services
              </a>
              <a class="" href="price.html">
                <img src="assets/images/nav-bullet.png" alt="">
                Pricing
              </a>
              <a class="" href="contact.html">
                <img src="assets/images/nav-bullet.png" alt="">
                Contact Us
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
              necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful
            </p>
          </div>
        </div>
        <div class="col-md-3 mb-0">
          <h4>
            Subscribe
          </h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>


<?php
$content = ob_get_clean();
include '../template/layout.php';
?>
