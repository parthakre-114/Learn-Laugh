<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>L and L</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php 
session_start();

$veri = $_COOKIE['user'];
$response = "";

if ($veri == "verified") {
   
   ?>
   
   <script >
      alert('Your response has been recorded.');
   </script>

    <?php 
}elseif($veri=="unverified"){
?>
 <script >
      alert('Your response has not been recorded.Please try again.');
   </script>
<?php 
}else{

}


 ?>

<header class="header">

   <section class="flex">

      <a href="#home" class="logo">L and L</a>

      <nav class="navbar">
         <a href="#home">home</a>
         <a href="#about">about</a>
         <a href="#courses">Services</a>
         <a href="#teachers">executive</a>
         <a href="#reviews">reviews</a>
         <a href="#contact">contact</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="row">

      <div class="content">
         <h3>L&L <span>Frenchize</span></h3>
         <a href="#contact" class="btn">contact us</a>
      </div>

      <div class="image">
         <img src="images/homg-img.svg" alt="">
      </div>

   </div>

</section>

<!-- home section ends -->

<!-- couter section stars  -->

<section class="count">

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div class="content">
            <h3>15+</h3>
            <p>courses</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div class="content">
            <h3>1300+</h3>
            <p>students</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div class="content">
            <h3>10+</h3>
            <p>Members</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-face-smile"></i>
         <div class="content">
            <h3>100%</h3>
            <p>satisfaction</p>
         </div>
      </div>

   </div>

</section>

<!-- couter section ends -->


<?php 


  if ($response=='success') {
     ?> 

     <script>
      alert("Your response has been stored.");
  </script>
      
     <?php
  }elseif ($response=='error' ) {
     ?> 

     <script>
     alert("Your response has not been stored.Please try again.");
  </script> 
     <?php
  }else{
    ?> 

     <?php
  
  }

?>

<!-- about section starts  -->

<section class="about" id="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>As we are best among all the other and also try to be best and helps other with our open hands.</p>
         <a href="#contact" class="btn">contact us</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- courses section starts  -->

<section class="courses" id="courses">

   <h1 class="heading">Services <span>Provide</span></h1>

   <div class="swiper course-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/course-1.svg" alt="">
            <h3>web development</h3>
            <p>Hear we provide web developement.<br>with fun</p>
         </div>

         <div class="swiper-slide slide">
            <img src="images/course-2.svg" alt="">
            <h3>Foor Printing</h3>
            <p>Sniff all the data from anywere<br>gatherer</p>
         </div>

         <div class="swiper-slide slide">
            <img src="images/course-3.svg" alt="">
            <h3>Mediator</h3>
            <p>Mediator helps to let easy entraction between info sender and reciver</p>
         </div>

         <div class="swiper-slide slide">
            <img src="images/course-4.svg" alt="">
            <h3>Advisor</h3>
            <p>Gives advice and help you by giving good advices </p>
         </div>

         <div class="swiper-slide slide">
            <img src="images/course-5.svg" alt="">
            <h3>teaching</h3>
            <p>We will teach you some asics and many more things of life.</p>
         </div>

         <div class="swiper-slide slide">
            <img src="images/course-6.svg" alt="">
            <h3>bangali baba</h3>
            <p>"Do lota jal sabhi samasya ka <br>haal"</p>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- courses section ends -->

<!-- teachers section starts  -->

<section class="teachers" id="teachers">

   <h1 class="heading">HEAD <span> EXECUTIVE</span></h1>

   <div class="swiper teachers-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/SH1.jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>SHREEHARSH Shivpuje</h3>
            <h3>Information Gatherer & Strategist<br>(AIML)1st yr</h3>
         </div>
         
         <div class="swiper-slide slide">
            <img src="images/parth.jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Parth Thakre </h3>
            <h3>Information Gatherer & Strategist <br>(IT)1st yr</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/V1.jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Yash Bodhankar</h3>
            <h3>Technical Head<br>(IT)1st yr</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/P1.jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>PARTH</h3>
            <h3>Information Gatherer <br>(IT)1st yr</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/tutor-5.png" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>SHON</h3>
            <h3>CR Manager <br>(AIML)1st yr</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/tutor-6.png" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>YASH</h3>
            <h3>Technical Support <br>(IT)1st yr</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- teachers section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

   <h1 class="heading"> student's <span>reviews</span></h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum necessitatibus atque fuga delectus numquam consequatur velit autem distinctio possimus culpa!</p>
            <div class="user">
               <img src="images/pic-1.png" alt="">
               <div class="user-info">
                  <h3>Prashant </h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum necessitatibus atque fuga delectus numquam consequatur velit autem distinctio possimus culpa!</p>
            <div class="user">
               <img src="images/pic-2.png" alt="">
               <div class="user-info">
                  <h3>john deo</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum necessitatibus atque fuga delectus numquam consequatur velit autem distinctio possimus culpa!</p>
            <div class="user">
               <img src="images/pic-3.png" alt="">
               <div class="user-info">
                  <h3>john deo</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum necessitatibus atque fuga delectus numquam consequatur velit autem distinctio possimus culpa!</p>
            <div class="user">
               <img src="images/pic-4.png" alt="">
               <div class="user-info">
                  <h3>john deo</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum necessitatibus atque fuga delectus numquam consequatur velit autem distinctio possimus culpa!</p>
            <div class="user">
               <img src="images/pic-5.png" alt="">
               <div class="user-info">
                  <h3>john deo</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum necessitatibus atque fuga delectus numquam consequatur velit autem distinctio possimus culpa!</p>
            <div class="user">
               <img src="images/pic-6.png" alt="">
               <div class="user-info">
                  <h3>john deo</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading"><span>contact</span> us</h1>

   <div class="row">

      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>

      <form action="upload.php" method="post">
         <span>your name</span>
         <input type="text" required placeholder="enter your full name" maxlength="50" name="name" class="box">
         <span>your email</span>
         <input type="email" required placeholder="enter your valie email" maxlength="50" name="email" class="box">
         <span>your number</span>
         <input type="number" required placeholder="enter your valie number" name="number" max="9999999999" min="0"  class="box" onkeypress="if(this.value.length == 10) return false;">
         <span>select department</span>
         <select name="depart" class="box" required>
            <option value="" disabled selected>select the course --</option>
            <option value="Information Technology">Information Technology</option>
            <option value="Artificial intelligence">Artificial intelligence</option>
            <option value="Computer Science">Computer Science</option>
            <option value="civil Enginering">civil Enginering</option>
            <option value="electrical Enginering">electrical Enginering</option>
            <option value="mechanical Enginering">mechanical Enginering</option>
            <option value="electronics Enginering">electronics Enginering</option>
            <option value="mechanical Enginering">mechanical Enginering</option>
            <option value="mining Enginering">mining Enginering</option>
            <option value="electronics and telecominication">electronics and telecominication</option>
            <option value="Mechantronics">Mechantronics</option>
            <option value=""></option>
            <option value="other">other</option>
         </select>
         <span>select year</span>
         <div class="radio">
            <input type="radio" name="year" value="1st" id="1st">
            <label for="1st">1st year</label>
            <input type="radio" name="year" value="2nd" id="2nd">
            <label for="2nd">2nd year</label>
            <input type="radio" name="year" value="3nd" id="3nd">
            <label for="2nd">3nd year</label>
         </div>
         <span>select gender</span>
         <div class="radio">
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">male</label>
            <input type="radio" name="gender" value="female" id="female">
            <label for="female">female</label>
         </div>
         <input type="submit" value="send message" class="btn" name="send">
      </form>

   </div>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<footer class="footer">

   <section>

      <div class="share">
         <a href="#" class="fab fa-facebook-f"></a>
         <a href="#" class="fab fa-twitter"></a>
         <a href="#" class="fab fa-linkedin"></a>
         <a href="#" class="fab fa-instagram"></a>
         <a href="#" class="fab fa-youtube"></a>
      </div>

      <div class="credit">&copy; copyright @ 2022 by <span>L and L Developer Team.</span> | all rights reserved!</div>

   </section>

</footer>

<!-- footer section ends -->















<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>