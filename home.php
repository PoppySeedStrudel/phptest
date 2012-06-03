<? 
    /**
     * home.php
     *
     * A simple home page for these login demos.
     *
     * David J. Malan
     * Computer Science E-75
     * Harvard Extension School
     */

    // enable sessions
    session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Home</title>
  </head>
  <body>
    <h1>Home</h1>
    <h3>
      <? if ($_SESSION["authenticated"]) { ?>
        You are logged in!  
        <br />
        <a href="logout.php">log out</a>
      <? } else { ?>
        You are not logged in!
      <? } ?>
    </h3>
    <br />
    <b>Login Demos</b>
    <ul>
      <li><a href="login5.php">version 5</a></li>
      <li><a href="login6.php">version 6</a></li>
      <li><a href="login7.php">version 7</a></li>
      <li><a href="login8.php">version 8</a></li>
    </ul>
  </body>
</html>
