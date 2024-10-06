<html>

<head>
<title>Contact Us</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="http://localhost/PICA%20Quiz/CSS/contactus_css.css">
</head>

<body>
  <?php include 'Welcome_Header.php' ?>
  <section class="contact">
    <div class="content">
      <h2>Contact Us</h2>
      <p>Established in 1993, Parul University, Vadodara was recognised as Parul University in 2015.
        It is the first University in India to have all its six constituent AYUSH colleges accredited by National Accreditation Board for Hospitals and Healthcare Providers (NABH).
        The facilities and the awards won by the University have attracted students not only from India but 50 countries across the world.</p>
    </div>
    <div class="container">
      <div class="contactInfo">
        <div class="box">
          <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
          <div class="text">
            <h3>Address</h3>
            <p>Post Limda,<br/>Waghodia,<br/>Gujrat, 391760<p>
            </div>
          </div>
          <div class="box">
            <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
            <div class="text">
              <h3>Phone-No</h3>
              <p>1800 123 1104<p>
              </div>
            </div>
            <div class="box">
              <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
              <div class="text">
                <h3>Email-id</h3>
                <p>picaquizwebsite@gmail.com<p>
                </div>
              </div>
            </div>
            <div class="contactForm">
              <form action="http://localhost/PICA%20Quiz/php/contact_us_db.php" method="post">
                <h2>Send Message</h2>
                <div class="inputBox">
                  <input type="text" name="full_name" required>
                  <span>Full Name</span>
                </div>
                <div class="inputBox">
                  <input type="email" name="email_id" required>
                  <span>Email</span>
                </div>
                <div class="inputBox">
                  <textarea required name="Mess"></textarea>
                  <span>Type Your Message</span>
                </div>
                <div class="inputBox">
                  <input type="submit" name="submit" value="Send">
                </div>
              </form>
            </div>
    </section>
</body>

</html>
