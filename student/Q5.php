<?php
  require("header.html");
  require("nav.html");
?>
    <p>Say you keep your PHP functions in a file called "functions.php".
    What will happen when a function is called past this line?
    </p>
    <p>
      <code>
        include(functions);
      </code>
    </p>
  <form>
    <div class="question">
      <input type="radio" name="Q5">All of it will run with no error shown.
    </div>
    <div class="question">
      <input type="radio" name="Q5">An error will show, but the page will still
      try to run what it can.
    </div>
    <div class="question">
      <input type="radio" name="Q5"> Nothing will be shown past when an error
      occurs.
    </div>
    <div class="submit">
      <input type="submit" value="Submit"/>
    </div>
  </form>
<?php
  require("footer.html");
?>
