<!DOCTYPE html>
<html>

<head>
  <title>Elizabeth J. Peak Art</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="vue.js" charset="utf-8"></script>
  <script src="https://use.fontawesome.com/bb7011fb1c.js"></script>

</head>

<header>
  <nav>
    <h4 class="logo">Elizabeth J. Peak</h4>
    <ul class="nav-links">
      <li><a href="/index.html">Recent Works</a></li>
      <li><a href="/earlyworks.html">Early Works</a></li>
      <li><a href="/about.html">About</a></li>
      <li><a href="/resume.html">Resume</a></li>
      <li><a href="/contact.php">Contact</a></li>
    </ul>
    <div class="burger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </nav>
</header>

<body>
  <h1>Contact</h1>
    <h2>
      Please use this form to reach Elizabeth Peak for orders or general inquiries.
    </h2>

    <div class="contact-container">
      <form class="contact-form" action="contactform.php" method="post">
        <input id="mail-name" type="text" name="name" placeholder="Full Name" required>
        <input id="mail-email" type="text" name="mail" placeholder="Your E-Mail" required>
        <input id="mail-subject" type="text" name="subject" placeholder="Subject" required>
        <textarea id="mail-message" name="message" placeholder="Message" required></textarea>
        <button id="mail-submit" type="submit" name="submit">Send</button>
        <p class="form-message"></p>
      </form>
    </div>

</body>

<script src="nav.js"></script>

</html>
