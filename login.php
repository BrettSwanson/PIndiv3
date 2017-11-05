<?php
require('header.html');
?>
<form action="welcome.php" method="post">
  <div>
    <label for="firstBox">First Name</label>
    <input type="text" id="firstBox"  name="firstName" required />
  </div>
  <div>
    <label for="lastBox">Last Name</label>
    <input type="text" id="lastBox" name="lastName" required />
  </div>
    <label for="userBox">Username</label>
    <input type="text" id="userBox" name="username" required
    maxlength="7" />
  </div>
    <label for="passBox">Password</label>
    <input type="password" id="passBox" name="password" required />
  <div>
    <label for="email">Email Address</label>
    <input type="email" id="emailBox" name="email" required />
  </div>
  <div>
    <label for="idBox">Instructor</label>
    <input type="checkbox" id="instructorCheck" name="insCheck"  />
  </div>
  <div>
    <input type="submit" value="Login" />
  </div>
</form>
<?php require('footer.html');
?>
