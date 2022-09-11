<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="contact.css">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
</head>
<body>
<a href="Home.php">Go Back</a>
  <div class="container">
      
    <form>
      <i class="fas fa-paper-plane"></i>

      <div class="input-group">
        <label>Full Name</label>
        <input type="text" placeholder="Enter your name" id="contact-name" onkeyup="validateName()">
        <span id="name-error"></span>
      </div>

      <div class="input-group">
        <label>Phone No.</label>
        <input type="tel" placeholder="123 456 7890" id="contact-phone" onkeyup="validatePhone()">
        <span id="phone-error"></span>
      </div>

      <div class="input-group">
        <label>Email Id</label>
        <input type="email" placeholder="Enter Email" id="contact-email" onkeyup="validateEmail()">
        <span id="email-error"></span>
      </div>   

      <div class="input-group">
        <label>Your Message</label>
        <textarea rows="5" placeholder="Enter your message" id="contact-message" onkeyup="validateMessage()"></textarea>
        <span id="message-error"></span>

      </div>

    <button onclick="return validateForm()">Submit</button>
    <span id="submit-error"></span>
   
  </form>


  
  
  </div>

  <script src="contact.js"></script>
  
   
</body>
</html>