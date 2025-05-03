<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us - Barangay Calangain</title>
  <link rel="stylesheet" href="src/css/contact.css" />
  <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="wrapper">
    <aside id="sidebar">
      <button class="toggle-btn" type="button">
        <i class="lni lni-grid-alt"></i>
        <span class="toggle-label">Barangay Request</span>
      </button>
      <ul class="sidebar-nav">
        <li><a href="#"><i class="lni lni-home"></i><span>Home</span></a></li>
        <li><a href="#"><i class="lni lni-pencil"></i><span>Request</span></a></li>
        <li><a href="#"><i class="lni lni-comments"></i><span>About Us</span></a></li>
        <li><a href="#" class="active"><i class="lni lni-phone"></i><span>Contact Us</span></a></li>
        <li><a href="#"><i class="lni lni-question-circle"></i><span>Help Us</span></a></li>
        <li><a href="#"><i class="lni lni-user"></i><span>Profile</span></a></li>
        <li><a href="#"><i class="lni lni-exit"></i><span>Logout</span></a></li>
      </ul>
    </aside>

    <div class="main-content">
      <div class="container">
        <div class="form-section">
          <h2>Contact Us</h2>
          <form id="contactForm">
            <div class="form-group">
              <label for="name">Full Name</label>
              <input type="text" id="name" placeholder="Enter your full name" />
            </div>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email" placeholder="Enter your email address" />
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" rows="5" placeholder="Write your message..."></textarea>
            </div>
            <button type="submit">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="src/js/script.js"></script>
</body>
</html>
