<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<?php
    if(isset($_POST['post'])) {
    include("contact_connect.php");
    $yname = $_POST['your_name'];
    $yemail = $_POST['your_email'];
    $yphone = $_POST['your_phone'];
    $ysubject = $_POST['subject_1'];
    $ymassege = $_POST['text_massege'];
    $insert_query = "INSERT INTO contact_us_1(y_name,y_email,y_phone,y_subject,y_massege,) VALUES('$yname','$yemail','$yphone,'$ysubject','$ymassege')";
    if(mysqli_query($con,$insert_query))
    {
     echo "data inserted";
    }
    else{
     echo "error in data insertion";
    }
}
?>
   <div class="wrapper">
    <header>Send us a Message</header>
    <form action="#">
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="your_name" placeholder="Enter your name">
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="email" name="your_email" placeholder="Enter your email">
          <i class='fas fa-envelope'></i>
        </div>
      </div>
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="your_phone" placeholder="Enter your phone">
          <i class='fas fa-phone-alt'></i>
        </div>
        <div class="field">
          <input type="text" name="subject_1" placeholder="Enter your website">
          <i class='fas fa-globe'></i>
        </div>
      </div>
      <div class="message">
        <textarea placeholder="Write your message" name="text_massege"></textarea>
        <i class="material-icons">message</i>
      </div>
      <div class="button-area">
        <button type="submit">Send Message</button>
        <span></span>
      </div>
    </form>
  </div>

</body>
</html>