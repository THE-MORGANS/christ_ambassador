<!DOCTYPE HTML>
<html lang="en">

<head>
    @include('partials.user.head')

  <style>
    /* nav{
          background-color: #022147;
      } */
    .sa-header li a {
      color: #555b62;
    }

    #header.sticky.sa-header li a {
      color: #fff;
    }

    header {
      background-color: white;
    }
  </style>
</head>

<body>

  <div class="preloader-wrap" id="preloader-wrap">
    <div class="lds-ripple">
      <div></div>
      <div></div>
    </div>
  </div>

  <!-- Header -->
  <header id="header" class="nav-stacked sa-header" data-spy="affix" data-offset-top="1">
    <!-- Navigation -->
    <nav id="navigation_bar" class="navbar navbar-default sa-navbar">
      <div class="container">
        <div class="navbar-header">
          <div class="logo">
            <a href="index.html">
              <img src="assets/images/logos/ca_logo.svg" alt="image" />
            </a>
          </div> <!-- /Logo -->
          <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse"
            class="navbar-toggle collapsed" type="button">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="navigation">
          <ul class="nav navbar-nav">
            <ul class="nav navbar-nav">
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Podcast</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#"">Ecommerce</a></li>
              <li><a href=" #">Events</a></li>
              <li><a href="#">Gallery</a></li>
              <li><a href="#">Contact us</a></li>
              <li class="dropdown ss-cart-dropdown ss-dropdown-right">
                <a class="sa_count" href="cart.html"><i class="fa fa-shopping-cart"></i><span>0</span></a>
                <ul class="sub-menu ss-cart-inner ss-cart-empty">
                  <li>
                    <p>No item in cart yet</p>
                  </li>
                </ul>
              </li>
              <li><a class="btn btn-primary" href="#" style="color: #fff">Donate</a></li>
            </ul>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navigation end -->
  </header>
  <!-- /Header -->

  <!-- start-sa-banner-carousel -->
  <div class="sa-banner-carousel">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 col-12">
          <div class="sa-banner-slider owl-carousel">
            <div class="item">
              <div class="banner-details">
                <h2>Welcome To Christ Ambassadors</h2>
                <p>A ministry for children, teenagers and young adults.</p>
                <a href="#" class="sa-btn-transparent">Learn more About Us<img src="assets/images/icon/arrow-right.png"
                    alt="img"></a>
              </div>
            </div>
            <div class="item">
              <div class="banner-details">
                <h2>Welcome To Christ Ambassadors</h2>
                <p>A ministry for children, teenagers and young adults.</p>
                <a href="#" class="sa-btn-transparent">Learn more About Us<img src="assets/images/icon/arrow-right.png"
                    alt="img"></a>
              </div>
            </div>
            <div class="item">
              <div class="banner-details">
                <h2>Welcome To Christ Ambassadors</h2>
                <p>A ministry for children, teenagers and young adults.</p>
                <a href="#" class="sa-btn-transparent">Learn more About Us<img src="assets/images/icon/arrow-right.png"
                    alt="img"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-10 col-12">
          <div class="sa-banner-audio-area">
            <h3>Living A Christian Life</h3>
            <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum...</p>
            <div class="audio-player">
              <div id="play-btn" class="audio-button">
                <i class="fa fa-play"> </i>
                <i class="fa fa-pause"></i>
              </div>
              <a class="audio-wrapper" id="player-container" href="javascript:;">
                <audio id="player" ontimeupdate="initProgressBar()">
                  <source src="http://www.lukeduncan.me/oslo.mp3" type="audio/mp3">
                </audio>
              </a>
              <div class="player-controls scrubber">
                <small class="end-time">5:44</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end-sa-banner-carousel -->

  <!-- start-ministries-section -->
  <section class="latest_blog section-padding style-3 ministries">
    <div class="container">
      <div class="section-header text-center">
        <h2>A Church That's Relevant</h2>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
          some</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-12">
          <div class="sa-stroies-service">
            <div class="sa-stroies-service-single sa-stroies-extras py-5">
              <div class="sa-stroies-service-single-img my-3">
                <span>
                  <img src="/assets/images/pray.svg" />
                </span>
              </div>
              <h2><a href="#">ABOUT US</a></h2>
              <p>There are many variations of passages of the lorem Ipsum availle suffer alteration.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12">
          <div class="sa-stroies-service">
            <div class="sa-stroies-service-single sa-stroies-extras py-5">
              <div class="sa-stroies-service-single-img my-3">
                <span>
                  <img src="/assets/images/pray_with_us.svg" />
                </span>
                <!-- <i class="flaticon-flag"></i> -->
              </div>
              <h2><a href="#">Pray FOR US</a></h2>
              <p>There are many variations of passages of the lorem Ipsum availle suffer alteration.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12">
          <div class="sa-stroies-service">
            <div class="sa-stroies-service-single sa-stroies-extras py-5">
              <div class="sa-stroies-service-single-img my-3">
                <span>
                  <img src="/assets/images/donate.svg" />
                </span>
              </div>
              <h2><a href="#">GIVE</a></h2>
              <p>There are many variations of passages of the lorem Ipsum availle suffer alteration.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- end-ministries-section -->
  <div class="section-padding gallery-section bg-gray">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2>Our Activities</h2>
            <!-- <p>Showcase your images in a boxed layout</p> -->
          </div>
        </div>
        <div class="col-md-12 mb-4">
          <div class="row">
            <div class="col-12 col-md-6 col-lg-3 mb-4">
              <div class="gallery-wrapper gallery-album gallery-has-zoom gallery-height">
                <a class="gallery-item ht-1" href="../assets/images/isotop/03.png">
                  <div class="thumb">
                    <img src="../assets/images/bible_audio.jpg" alt="img">
                  </div>
                  <div class="sa-stroies-service-single gallery-extras white_text">
                    <h2><a href="#">AUDIO BIBLE RECORDING</a></h2>
                    <p>We believe in the efficacy of the word of God and reading it out is an iimportant part of
                      engaging.</p>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
              <div class="gallery-wrapper gallery-album gallery-has-zoom gallery-height">
                <a class="gallery-item ht-1" href="../assets/images/isotop/03.png">
                  <div class="thumb">
                    <img src="../assets/images/podcast_img.jpg" alt="img">
                  </div>
                  <div class="sa-stroies-service-single gallery-extras white_text">
                    <h2><a href="#">PODCASTS A.K.A CHRISTCAST!</a></h2>
                    <p>There are many variations of passages of the lorem Ipsum availle suffer alteration.</p>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
              <div class="gallery-wrapper gallery-album gallery-has-zoom gallery-height">
                <a class="gallery-item ht-1" href="../assets/images/isotop/03.png">
                  <div class="thumb">
                    <img src="../assets/images/book_games_img.jpg" alt="img">
                  </div>
                  <div class="sa-stroies-service-single gallery-extras white_text">
                    <h2><a href="#">BOOKS/GAMES</a></h2>
                    <p>There are many variations of passages of the lorem Ipsum availle suffer alteration.</p>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
              <div class="gallery-wrapper gallery-album gallery-has-zoom gallery-height">
                <a class="gallery-item ht-1" href="../assets/images/isotop/03.png">
                  <div class="thumb">
                    <img src="../assets/images/declarations_img.jpg" alt="img">
                  </div>
                  <div class="sa-stroies-service-single gallery-extras white_text">
                    <h2><a href="#">DECLARATIONS</a></h2>
                    <p>There are many variations of passages of the lorem Ipsum availle suffer alteration.</p>
                  </div>
                </a>
              </div>
            </div>
          </div>

        </div>
        <div class="col-12 mt-5">
          <div class="text-center">
            <a href="#" class="btn btn-lg dark-btn">Explore More</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="latest_event_sermons pd-default-2">
    <div class="container">
      <div class="section-header text-center">
        <h2>Upcoming Podcast</h2>
        <p>Join us and become part of something great</p>
      </div>
      <div class="w-100 bg-lighter-orange">
        <div class="row">
          <div class="col-md-4">
            <div class="next_event position-relative ps-5 pt-5">
              <div class="event_wrap_top">
                <p class="subtitle m-0 align-self-end">Upcoming podcast</p>
                <div class="event_date position-relative p-0" style="top:0 !important;">
                  <span class="mb-2">12</span> Jul'19
                </div>
              </div>
              <h4><a href="#">Which is the same as saying</a></h4>
              <div class="event_info ps-0">
                <p>You need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem
                  Ipsum generators on the Internet tend.</p>
                <ul>
                  <li><i class="fa fa-clock-o"></i> Sunday 8:00 - 9:00 am</li>
                  <li><i class="fa fa-map-marker"></i> 56 Thatcher Avenue River Forest Chicago, IL United States</li>
                </ul>
              </div>
              <a href="#" class="btn btn-primary mb-4">Join Now <i class="fa fa-caret-right"></i> </a>
            </div>
          </div>
          <div class="col-md-8">
            <a>
              <img class="w-100 h-100" src="assets/images/upcoming_podcast_img.jpg" />
            </a>
          </div>
        </div>

      </div>
      <div class="w-100 pt-3 text-end">
        <a>View all podcasts <i class="fa fa-long-arrow-right ms-2"></i></a>

      </div>
    </div>
  </section>

  <section class="section-padding style-3 donation-bg">
    <div class="container">
      <div class="col-lg-6 mx-auto">
        <div class="sa-intro-area text-color">
          <div class="row">
            <div class="col-12 col-md-8">
              <h2>We want to serve the world around us</h2>
              <p>All the Lorem Ipsum generator on the Internet tend repeat. All the Lorem Ipsum generator on the
                Internet tend repeat.</p>
              <a href="#" class="btn dark-btn btn-sm mb-3">DONATE</a>
            </div>
            <div class="col-md-4 text-center my-auto">
              <i class="fa fa-quote-right fa-flip-horizontal extras"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="latest_blog section-padding style-3">
    <div class="container">
      <div class="section-header text-center">
        <h2>Our Blog</h2>
        <p>Read, Share and Inspire</p>
      </div>
      <div class="blog">
        <div class="row">
          <article class="col-md-4 col-12">
            <div class="blog_wrap p-0 blog-shadow">
              <!-- <div class="blog-tag">
                <span>Relationship</span>
              </div> -->
              <div class="blog_img">
                <a href="#"><img src="assets/images/posts/post_1.jpg" alt="image"></a>
              </div>
              <div class="blog_info px-4">
                <p class="subtitle">Relationship</p>
                <h5><a href="#">On the other hand - It is getting out of hand</a></h5>
                <div class="blog_meta">
                  <ul>
                    <li><i class="fa fa-calendar"></i> Aug 12, 2022</li>
                    <li><b>By:</b> Jordan King</li>
                  </ul>

                </div>
              </div>
            </div>
          </article>

          <article class="col-md-4 col-12">
            <div class="blog_wrap p-0 position-relative blog-shadow">
              <!-- <div class="blog-tag">
                <span>Relationship</span>
              </div> -->
              <div class="blog_img">
                <a href="#"><img src="assets/images/posts/post_2.jpg" alt="image"></a>
              </div>
              <div class="blog_info px-4">
                <p class="subtitle">Relationship</p>
                <h5><a href="#">On the other hand - It is getting out of hand</a></h5>
                <div class="blog_meta">
                  <ul>
                    <li><i class="fa fa-calendar"></i> Aug 12, 2022</li>
                    <li><b>By:</b> Jordan King</li>
                  </ul>
                </div>
              </div>
            </div>
          </article>

          <article class="col-md-4 col-12">
            <div class="blog_wrap p-0 position-relative blog-shadow">
              <!-- <div class="blog-tag">
                <span>Relationship</span>
              </div> -->
              <div class="blog_img">
                <a href="#"><img src="assets/images/posts/post_3.jpg" alt="image"></a>
              </div>
              <div class="blog_info px-4">
                <p class="subtitle">Relationship</p>
                <h5><a href="#">On the other hand - It is getting out of hand</a></h5>
                <div class="blog_meta">
                  <ul>
                    <li><i class="fa fa-calendar"></i> Aug 12, 2022</li>
                    <li><b>By:</b> Jordan King</li>
                  </ul>
                </div>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
@include('partials.user.footer')
  <!-- /End Footer -->


  <!-- Scripts -->
@include('paritals.user.scripts')
</body>



</html>