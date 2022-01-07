<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Be In Touch With Company</title>
  
</head>
<style>
    /* CSS Variables */
:root {
  --primary: #ddd;
  --dark: #333;
  --light: #fff;
  --shadow: 0 1px 5px rgba(104, 104, 104, 0.8);
}

html {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
  color: var(--dark);
}

body {
  background: #ccc;
  margin: 80px 30px;
  line-height: 1.4;
}

.btn {
  background: var(--dark);
  color: var(--light);
  padding: 0.6rem 1.3rem;
  text-decoration: none;
  border: 0;
}

img {
  max-width: 100%;
}

.wrapper {
  display: grid;
  grid-gap: 20px;
}

/* Navigation */
.main-nav ul {
  display: grid;
  grid-gap: 20px;
  padding: 0;
  list-style: none;
  grid-template-columns: repeat(4, 1fr);
}

.main-nav a {
  background: var(--primary);
  display: block;
  text-decoration: none;
  padding: 0.8rem;
  text-align: center;
  color: var(--dark);
  text-transform: uppercase;
  font-size: 1.1rem;
  box-shadow: var(--shadow);
}

.main-nav a:hover {
  background: var(--dark);
  color: var(--light);
}

/* Top Container */
.top-container {
  display: grid;
  grid-gap: 20px;
  grid-template-areas:
    'showcase showcase top-box-a'
    'showcase showcase top-box-b';
}

/* Showcase */
.showcase {
  grid-area: showcase;
  min-height: 400px;
  background: url(https://image.ibb.co/kYJK8x/showcase.jpg);
  background-size: cover;
  background-position: center;
  padding: 3rem;
  display: flex;
  flex-direction: column;
  align-items: start;
  justify-content: center;
  box-shadow: var(--shadow);
}

.showcase h1 {
  font-size: 4rem;
  margin-bottom: 0;
  color: var(--light);
}

.showcase p {
  font-size: 1.3rem;
  margin-top: 0;
  color: var(--light);
}

/* Top Box */
.top-box {
  background: var(--primary);
  display: grid;
  align-items: center;
  justify-items: center;
  box-shadow: var(--shadow);
  padding: 1.5rem;
}

.top-box .price {
  font-size: 2.5rem;
}

.top-box-a {
  grid-area: top-box-a;
}

.top-box-b {
  grid-area: top-box-b;
}

/* Boxes */
.boxes {
  display: grid;
  grid-gap: 20px;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
}

.box {
  background: var(--primary);
  text-align: center;
  padding: 1.5rem 2rem;
  box-shadow: var(--shadow);
}

/* Info */
.info {
  background: var(--primary);
  box-shadow: var(--shadow);
  display: grid;
  grid-gap: 30px;
  grid-template-columns: repeat(2, 1fr);
  padding: 3rem;
}

/* Portfolio */
.portfolio {
  display: grid;
  grid-gap: 20px;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
}

.portfolio img {
  width: 100%;
  box-shadow: var(--shadow);
}

/* Footer */
footer {
  margin-top: 2rem;
  background: var(--dark);
  color: var(--light);
  text-align: center;
  padding: 1rem;
}

/* Media Queries */
@media (max-width: 700px) {
  .top-container {
    grid-template-areas:
      'showcase showcase'
      'top-box-a top-box-b';
  }

  .showcase h1 {
    font-size: 2.5rem;
  }

  .main-nav ul {
    grid-template-columns: 1fr;
  }

  .info {
    grid-template-columns: 1fr;
  }

  .info .btn {
    display: block;
    text-align: center;
    margin: auto;
  }
}

@media (max-width: 500px) {
  .top-container {
    grid-template-areas:
      'showcase'
      'top-box-a'
      'top-box-b';
  }
}
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
body, html {
  height: 100%;
}

.bg {
  /* The image used */
  background-color: white;
          
}
input[type=text], input[type=password] {
  width: 45%;
  padding: 20px;
  margin: 5px 0 15px 0;
  border: ridge 0.1rem black;
  background: white;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 35%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
.contact{
  background-color: beige;
}
header{
  text-align: center;
  padding-bottom: 30px;
  
}
header h1{
  
}

</style>
<body class="bg">
  <header><h1>BeInTouchWithCompany</h1></header>
  
  <div class="wrapper">
    <!-- Navigation -->
    <nav class="main-nav">
      <ul>
        <li>
          <a href="#">Home</a>
        </li>
        <li>
          <a href="./faq.php">About</a>
        </li>
        <li>
          <a href="#">Services</a>
        </li>
        <li>
          <a href="#">login</a> 
        </li>
      </ul>
    </nav>
    <div class="slideshow-container">

      <!-- Full-width images with number and caption text -->
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="Microsoft.jpg" style="width:100%">
        <div class="text">Caption Text</div>
      </div>
    
      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="photo.jpg" style="width:100%">
        <div class="text">Caption Two</div>
      </div>
    
      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="photo_1.jpg" style="width:100%">
        <div class="text">Caption Three</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="Microsoft.jpg" style="width:100%">
        <div class="text">Caption Text</div>
      </div>
    
      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="photo.jpg" style="width:100%">
        <div class="text">Caption Two</div>
      </div>
    
      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="photo_1.jpg" style="width:100%">
        <div class="text">Caption Three</div>
      </div>
    
      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    
    <!-- The dots/circles -->
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <script>
        var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
showSlides(slideIndex = n);
}

function showSlides(n) {
var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");
if (n > slides.length) {slideIndex = 1}
if (n < 1) {slideIndex = slides.length}
for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
}
for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";
dots[slideIndex-1].className += " active";
}

    </script>
    <!-- javascript for automatic slideshow-->
    <script>
      
        var slideIndex = 0;
showSlides();

function showSlides() {
var i;
var slides = document.getElementsByClassName("mySlides");
for (i = 0; i < slides.length; i++) {
  slides[i].style.display = "none";
}
slideIndex++;
if (slideIndex > slides.length) {slideIndex = 1}
slides[slideIndex-1].style.display = "block";
setTimeout(showSlides, 2000); // Change image every 2 seconds
}
    </script>
    

    <!-- Top Container -->
    <section class="top-container">
      <header class="showcase">
        <h1>Be In Touch With Company</h1>
        <p>"To get visit our login page for latest new vacancy"</p>
        <a href="#" class="btn">Go to login</a>
      </header>

      
      
    </section>
   
    <!-- Boxes Section -->
    <section class="boxes">
      <div class="box">
        <i class="fas fa-chart-pie fa-4x"></i>
        <h3>Trainee - Digital Analyst</h3>
        <p>Strong programming skills
- Analytical and problem-solving skills and a self-starter
- Self-motivated
- Excellent oral and written communication skills
- Creativity</p>
      </div>
      <div class="box">
        <i class="fas fa-globe fa-4x"></i>
        <h3>Front End Developer</h3>
        <p>Collaborate with back-end developers and web designers to improve usability
- Developing an intuitive dashboard for managing the product
- Developing a responsive mobile-ready themed interface for customers</p>
      </div>
      <div class="box">
        <i class="fas fa-cog fa-4x"></i>
        <h3>Software Engineer</h3>
        <p> An entry level software development position that will work in a team environment that develops and modify Greenway software products using a variety of client server, web, Databases, Analytics and UI technologies in agile work environment</p>
      </div>
      <div class="box">
        <i class="fas fa-users fa-4x"></i>
        <h3>Technical Consultant</h3>
        <p>Passion to learn & explore new and emerging technologies like. (Bigdata, NoSQL, Mobile, Social, Cloud, Analytics’ etc.,)
- Passion to research/analyse and solve complex problems in software technologies, frameworks, and platforms.
- Innovate and transform complex topics/explanations to simple to follow methods/models.
- Engage with broad technical audience & Help them solve their code/theoretical problems.</p>
      </div>
    </section>

    <!-- Info Section -->
    <section class="info">
      <img src="https://bsmedia.business-standard.com/_media/bs/img/article/2020-03/02/full/1583095303-7139.png" alt="">
      <div>
        <h2>Information technology in India</h2>
        <p>Information Technology in India is an industry consisting of two major components: IT services and business process outsourcing</p>
        <a href="#" class="btn">“Technology is best when it brings people together”</a>
      </div>
    </section>

    <!-- Portfolio -->
    <section class="portfolio">
      <img src="https://bsmedia.business-standard.com/_media/bs/img/article/2021-03/19/full/1616154354-133.jpg" alt="">
      <img src="https://img.etimg.com/thumb/msid-76695421,width-1200,height-900,imgsize-228666,overlay-ettech/photo.jpg" alt="">
      <img src="data:image/jpeg;base64,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" alt="">
      <img src="https://img.etimg.com/thumb/msid-83296778,width-650,imgsize-63512,,resizemode-4,quality-100/capgemini.jpg" alt="">
      <img src="https://content.fortune.com/wp-content/uploads/2020/07/G500-2020-Accenture-GettyImages-1207804970.jpg" alt="">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Wipro_Primary_Logo_Color_RGB.svg/1200px-Wipro_Primary_Logo_Color_RGB.svg.png" alt="">
      <img src="https://m.economictimes.com/thumb/msid-75999078,width-1200,height-900,resizemode-4,imgsize-102746/untitled-19.jpg" alt="">
      <img src="https://lh3.googleusercontent.com/proxy/_J3OVSx10sJskc7n2Al1DQAgJOIK98kQbs8qaUyuRcUtUpfiixGivTp6lZMi7yHeVlFpk13-EC06o0TGffVMOv7eMwR86FPCpQJeIsZadTwT-hw" alt="">
      <img src="data:image/jpeg;base64,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" alt="">
    </section>
    
    <?php
    if(isset($_POST['post'])) {
    include("contact_connect.php");
    $yname = $_POST['your_name'];
    $yemail = $_POST['your_email'];
    $ysubject = $_POST['subject_1'];
    $ymassege = $_POST['text_massege'];
    $insert_query = "INSERT INTO contact_us_1(y_name,y_email,y_subject,y_massege) VALUES('$yname','$yemail','$ysubject','$ymassege')";
    if(mysqli_query($con,$insert_query))
    {
     echo "data inserted";
    }
    else{
     echo "error in data insertion";
    }
}
?>
    <center>
      <form action="index.php" method="POST">
    <div class="contact">
      <h1 class="hd">
        CONTACT US
      </h1>
      <label>Your Name</label>
      <br>
        <input type="text" name="your_name">
        <br>
        <label>Your Email</label>
        <br>
        <input type="text" name="your_email">
        <br>
        <label>Subject</label>
        <br>
        <input type="text" name="subject_1">
        <br>
        <label>Text Massege</label>
        <br>
        <input type="text" name="text_massege">
        <br>
        <input class="btn" type="submit" name="post" value="Post">

    </div>
</form>
</center>

    <!-- Footer -->
    <footer>
      <p>Best IT company &copy;</p>
    </footer>

  </div>
  <!-- Wrapper Ends -->

</body>
</html>