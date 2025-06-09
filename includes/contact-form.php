<!-- contact-form.php -->
<?php
echo '
<div class="contact-form-section">
  <div class="contact-form-container">
    <h3>Send me a message</h3>
    <form action="https://cherryontop.io/includes/contact-form-handler.php" method="POST" class="contact-form" novalidate>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required autocomplete="name" placeholder="Your full name">

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required autocomplete="email" placeholder="you@example.com">

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="5" required placeholder="Your message here"></textarea>

      <button type="submit">Send Message</button>
    </form>
  </div>
</div>';
?>