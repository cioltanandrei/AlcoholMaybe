
<?php
    session_start();
    $height = $_POST['Height'];
    $weight = $_POST['Weight'];
    $age = $_POST['Age'];
    $experience = $_POST['Experience'];
    $gender = $_POST['Gender'];

    $total = 0;
    $minor = 0;

    if($age < 18) {
        $total = 1;
        $minor = 1;
    }
    else {
        $aux = $height / $weight;
        if($gender == 1)
            $total = 1;
        $total = $total + $aux;
        $total = $total + $experience;
        $total = intval($total);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSS Activity</title>
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
 
 
  
  
  <div class="top">
      <div class="container">
          <div class="row">
              <div class="col-md-3">
                  <img src="images/ceva2.png" alt="">
              </div>
              <div class="col-md-6">
                  <ul class="navigation">
                      <li><a href="layout1.php">Home</a></li>
                      <li><a href="drink.php">Why is the rom always gone?</a></li>
                      <li><a href="contact.php">Contact</a></li>
                      <li><a href="memes.php">Memes</a></li>
                  </ul>
              </div>
              <div class="col-md-3">
                  <ul class="social">
                      <li><img src="images/facebook.png" alt=""></li>
                      <li><img src="images/twitter.png" alt=""></li>
                  </ul>
              </div>
          </div>
      </div>
    
	</div>
    
    
  <div class="container">	
		<h2>How much can I drink?</h2>
        <br>
        <br>
       
        <?php
            if($minor == 1) :
        ?>
            <h3> <?php echo 'You are too young to drink, but one beer wont hurt anyone.' ?></h3>
        <?php
            else:
        ?>
        <h3> <?php echo 'You can drink at most ' ?>
            <?php echo $total; ?>
            <?php echo ' beers!' ?></h3>
        <?php
            endif;
        ?>
 
  <div class="slide">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <?php
                    if($minor == 1) :
                  ?>
                      <img src="images/young.jpg"  class="img-fluid" alt="">
                  <?php
                    else:
                  ?>
                      <img src="images/old.jpg"  class="img-fluid" alt="">
                  <?php
                    endif;
                  ?>
              </div>
          </div>
      </div>
  </div>
 
  <div class="tail">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="images/ceva2.png" alt="">
            </div>
            <div class="col-md-6">
                <ul class="navigation">
                    <li><a href="layout1.php">Home</a></li>
                      <li><a href="drink.php">Why is the rom always gone?</a></li>
                      <li><a href="contact.php">Contact</a></li>
                      <li><a href="memes.php">Memes</a></li>
                </ul>
            </div>
            <div class="col-md-3 contact">
                <p>+40 800 085 111</p>
                <p>moareTanta@yahoo.com</p>
            </div>
        </div>
    </div>
</div>
 
 <div class="bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>Bucuresti, Strada Hai La Scoala</p>
                </div>
                <div class="col-md-6 text-right">
                    <p>Copyright NU_MAI_BEA_BAIETE</p>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
 
