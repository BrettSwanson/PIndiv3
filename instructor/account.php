<?php
  require("header.html");
  require("nav.html")
 ?>
  <form id="passwordReset">
    <div class="passwordContainer">
      <label for="oldPassword">Old Password:</label>
      <input type="password" id="oldPassword" name="oPass"/>
    </div>
    <div class="passwordContainer">
      <label for="newPassword">New Password:</label>
      <input type="password" id="newPassword" name="nPass"/>
    </div>
    <div>
      <input type="submit" value="Reset"/>
    </div>
  </form>
<?php
  require("footer.html");
?>
