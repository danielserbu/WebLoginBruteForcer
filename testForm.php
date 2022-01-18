<!DOCTYPE html>
<html lang="en" >
    <head>
      <meta charset="UTF-8">
      <title>Victim login page</title>
    </head>
    <body>
        <center>
          <h1 style="font-size:120px;">Victim login page</h1>
          <style>
			input[type='text'] { font-size: 24px; }
			input[type='password'] { font-size: 24px; }
			input[type='submit'] { font-size: 24px; }
		  </style>
          <form action="" method="POST">
            <label type="text" for="username">Username:</label>
            <input type="text" id="username" name="username">
            <br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <br><br>
            <input type="submit" name="Log In" value="Log In">
          </form>
          <?php
			  // Validation
			  $_user = "TestUser";
			  $_password = "daniel";
			  // ^ You can change these.
              if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){
				echo "<br>";
                if($_REQUEST['username'] == $_user && $_REQUEST['password'] == $_password){
                  echo "<b style='color:green;font-size:24px;'>Good credentials</b>";
                }else{
                  echo "<b style='color:red;font-size:24px;'>Wrong crendentials</b>";
                }
              }
            ?>
        </center>
    </body>
</html>
