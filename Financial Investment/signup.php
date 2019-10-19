<?php
 require "login.php";
 ?>

 <main>
 	
 	<section class="main-container">
     
      <div class="main-wrapper">
    <h1>Signup</h1>
     <?php
    if (isset($_GET['error'])) {
      if ($_GET['error'] =="emptyfields") {
        echo '<p class = "signuperror">Fill in all fields!</p>';
      }
      elseif ($_GET['error']== "individualuidmail") {
         echo '<p class="signuperror">Invalid username and e-mail!</p>';
      }
      elseif ($_GET['error'] =="invaliduid") {
      	echo '<p class="signuperror">Invalid username!</p>';
      	      }
      	      elseif ($_GET['error'] =="invalidmail") {
      	      	echo '<p class="signuperror">Invalid e-mail!</p>';
      	      	
      	      }
      	      elseif ($_GET['error'] =="passwordcheck") {
      	      	echo '<p class="signuperror">Your passwords do not match!</p>';
      	      }
      	      elseif ($_GET['error'] =="usertaken") {
      	      	echo '<p class="signuperror">Username is already taken!</p>';
      	      }
         }  
        if(isset($_GET['signup'])) {
           if ($_GET['signup'] =="success") {
          echo'<p class="signupsuccess">Signup successful!</p>';
        }
    }
    ?>
    <form class="signup-form" action="includes/signup.inc.php" method="post">
    	<input type="text" name="uid" placeholder="Username">
    		<input type="text" name="mail" placeholder="Email">
    			<input type="password" name="pwd" placeholder="Password">
    				<input type="password" name="pwd-repeat" placeholder="Confirm password">
            <p class="invest">Please select your investment:</p>
             <input type="checkbox" name="investment" value="Stock">Stock<br/>
             <input type="checkbox" name="investment" value="Stock">Bond<br/>
             <input type="checkbox" name="investment" value="other">Other<br/><br>
            <button type="submit" name="signup-submit">SIGNUP
            </button>

           </form>

</div>
</section>
</main>

<?php
require "footer.php";
?>