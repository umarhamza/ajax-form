<!DOCTYPE html>
<html>
<head>
  <title>Ajax Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div id="form-messages"></div>
  <form id="ajax-contact" method="post" action="mailer.php">
      <div class="field">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
      </div>

      <div class="field">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
      </div>

      <div class="field">
          <label for="phone">Phone:</label>
          <input type="phone" id="phone" name="number" required>
      </div>

      <div class="field">
          <label for="message">Message:</label>
          <textarea id="message" name="message" required></textarea>
      </div>

      <div class="field">
          <button type="submit">Send</button>
      </div>
  </form>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.js"></script>
  <script src="app.js"></script>
</body>
</html>
