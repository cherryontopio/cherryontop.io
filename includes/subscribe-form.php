<?php
echo '
<div class="subscribe-form-section">
  <div class="subscribe-form-container">
    <h3></h3>
    
    <form action="https://cherryontop.io/includes/subscribe-landing-page.php" method="POST" class="subscribe-form" novalidate>
      
      <label for="first_name">First Name:</label>
      <input type="text" id="first_name" name="first_name" required autocomplete="given-name" placeholder="Enter your first name">
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required autocomplete="email" placeholder="Enter your email (you@example.com)">
      
      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" required autocomplete="tel" placeholder="Enter your phone number">

      <button type="submit">Sign Me Up!</button>
    </form>
  </div>
</div>';
