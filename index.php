<?php
session_start();
include("db.php");
$comments = $connect->query("SELECT * FROM Comments ORDER BY id DESC LIMIT 6");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/media.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Open+Sans:wght@700&family=Roboto:wght@400,900&display=swap"
    rel="stylesheet">
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="header__inner">
        <div class="logo">
          <a href="#">
            <img src="images/logo.png" alt="">
          </a>
        </div>
        <nav class="menu">
          <div class="btn__menu">
            <div></div>
            <div></div>
            <div></div>
          </div>
          <ul class="menu__list">
            <li><a href="#">HOME</a></li>
            <li><a href="#">ABOUT US</a></li>
            <li><a href="#">HOSTING</a></li>
            <li><a href="#com">COMMENTS</a></li>
            <li><a href="#"></a></li>
            <?php if(!isset($_SESSION['id'])){?>
            <li><a href="login.php">LOGIN</a></li>
            <li><a href="register.php">REGISTER</a></li>
            <?php }else{?>
            <li><a href="comment.php">COMMENT</a></li>
            <?php }?>
          
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <section class="top">
    <div class="container">
      <div class="top__inner">
        <div class="top-info">
          <div class="top-info__subtitle">
            Simple – Easy to use – 10x faster!
          </div>
          <h1 class="top-info__title">
            The Best Web Hosting
          </h1>
          <div class="top-info__descr">
            Starting at $7.99 $3.95/month*
            <span>Enter your website to see how we can help your business grow ... </span>
          </div>
          <ul class="top-info__list">
            <li>FREE Domain</li>
            <li>FREE Site Builders</li>
            <li>1-Click <img src="images/wp-icon.png" alt="">WordPress Install</li>
            <li>24/7 Support</li>
          </ul>
          <a class="top-info__btn" href="#">Get Started Now!</a>
          <div class="top-info__btn-descr">
            *Special intro offer and 30-day money-back guarantee
          </div>
        </div>
        <div class="top-images">
          <div class="top-images__box">
            <img src="images/superman.png" alt="">
            <div class="top-images__circle">
              <div class="top-images__title">Starting at </div>
              <div class="top-images__price">$7.99</div>
              <div class="top-images__date">/month</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="price">
    <div class="container">
      <h2 class="title">
        Pay for what you <span>actually</span> use. No hidden charge!
      </h2>
      <div class="price__descr">
        SEO WP built using Live Composer — a front-end page builder for <a href="">WordPress</a>. Live Composer is a new
        generation of
        the <a href="">visual editors</a> for your website. Using simple drag and drop interface you can create any page
        layout.<span> No
          coding skills</span> required
      </div>

      <div class="price__items">
        <div class="price-item">
          <div class="price-item__number">
            €190 <span>/mo</span>
          </div>
          <div class="price-item__images">
            <img src="images/price-item1.png" alt="">
          </div>
          <div class="price-item__title">
            Personal
          </div>
          <div class="price-item__text">
            I think your best bet would be to start or join a startup. That’s been a reliable way to get rich for
            hundreds of years.
          </div>
          <ul class="price-item__list">
            <li>10GB Space</li>
            <li>1 Free Domain</li>
            <li>300GB SSD Disk</li>
            <li>Custom domain</li>
          </ul>
          <a href="" class="price-item__btn">Get Started Now</a>
        </div>

        <div class="price-item">
          <div class="price-item__number">
            €499 <span>/mo</span>
          </div>
          <div class="price-item__images">
            <img src="images/price-item2.png" alt="">
          </div>
          <div class="price-item__title">
            Enterprise
          </div>
          <div class="price-item__text">
            I think your best bet would be to start or join a startup. That’s been a reliable way to get rich for
            hundreds of years.
          </div>
          <ul class="price-item__list">
            <li>10GB Space</li>
            <li>1 Free Domain</li>
            <li>300GB SSD Disk</li>
            <li>Custom domain</li>
          </ul>
          <a href="" class="price-item__btn">Get Started Now</a>
        </div>

        <div class="price-item">
          <div class="price-item__number">
            €999 <span>/mo</span>
          </div>
          <div class="price-item__images">
            <img src="images/price-item3.png" alt="">
          </div>
          <div class="price-item__title">
            Business
          </div>
          <div class="price-item__text">
            I think your best bet would be to start or join a startup. That’s been a reliable way to get rich for
            hundreds of years.
          </div>
          <ul class="price-item__list">
            <li>10GB Space</li>
            <li>1 Free Domain</li>
            <li>300GB SSD Disk</li>
            <li>Custom domain</li>
          </ul>
          <a href="" class="price-item__btn">Get Started Now</a>
        </div>
      </div>
    </div>
  </section>
  
  <section class="reviews" id="com">
    <div class="container">
      <div class="title">
        What <span>People</span> Say About Us
      </div>
      <div class="reviews-slider">
      
      <?php if($comments!=null){
       while ($comment = $comments->fetch_array()) {?>
        <div class="reviews-slider__item">
          <div class="reviews-box">
            <div class="reviews-box__images">
              <img src="images/photo1.jpg" alt="">
            </div>
            <div class="reviews-box__content">
              <div class="reviews-box__text">
              <?php echo $comment['text'];?>
              </div>
              <div class="reviews-box__author">
                <span><?php echo $comment['creator'];?></span> -- <?php echo $comment['date'];?>
              </div>
            </div>
          </div>
        </div>
        <?php }}else{ echo "<span style='text-align:center'>NOTHING</span>";}?>
      </div>
    </div>
  </section>

  <section class="clients">
    <div class="container">
      <div class="clients-inner">
        <div class="clients__photo">
          <img src="images/partners.png" alt="">
        </div>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="container">
      <div class="footer__inner">
        <div class="footer-col__logo">
          <a href="#" class="footer__logo">
            <img src="images/logo-white.png" alt="">
          </a>
          <div class="footer__text">
            Hosting Website Builder is a big library of pre-designed web elements which help you create website in few
            minutes.
          </div>
        </div>
        <div class="footer-menu">
          <div class="footer__title">Knowledge Base</div>
          <ul class="footer__list">
            <li><a href="#">Tutorials</a></li>
            <li><a href="#">Get Paid to Write</a></li>
            <li><a href="#">Questions</a></li>
            <li><a href="#">Meetups</a></li>
            <li><a href="#">Referral Program</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#"></a>Droplets for Demos</a></li>
          </ul>
        </div>
        <div class="footer-menu">
          <div class="footer__title">Company</div>
          <ul class="footer__list">
            <li><a href="#">Hosting.com Blog</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Affiliate Terms & Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="footer-form">
          <div class="footer__title">Quick Contact</div>
          <form>
            <input type="text" placeholder="Name">
            <input type="text" placeholder="Email Address">
            <input type="text" placeholder="Subject">
            <textarea placeholder="Message"></textarea>
            <button type="submit">Send</button>
          </form>
        </div>
      </div>
    </div>
  </footer> 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>