<?php
	$country = [
		'Panik&Pub' => 'str.MIhai Eminescu Nr. 33, Strada Mihai Eminescu 33, București ',
		'The Pub' => 'Bulevardul Regina Elisabeta 9, București 030167',
		'St. Patrick' => 'Strada Smârdan 23-25, București 030072',
		'The Harp Irish Pub' => 'Strada Bibescu Vodă 1, București',
		'Shift Pub' => 'Strada General Eremia Grigorescu 17, București 010476',
		'Lokal' => 'Strada Mihai Eminescu 57, Bucharest 030167',
		'Garlic Pub' => 'Icoanei 66, Strada Mihai Eminescu 154, București',
	];

	$display = "";
    $option = "";

    if(isset($_GET['country'])) {
        $option = $_GET['country'];
        
        if(isset($country[$option])) {
            $display = $country[$option];
        }
        else {
            $display = "Country not found";
        }
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
 
  <div class="slide">
      <div class="container">
          <div class="row">
              <div class="col-md-5">
                  <img src="images/meme2.jpeg"  class="img-fluid" alt="">
              </div>
          </div>
          <div class="row">
              <div class="col-md-5">
              </div>
              <div class="col-md-5">
                  <img src="images/meme1.jpg"  class="img-fluid" alt="">
              </div>
          </div>
          <div class="row">
              <div class="col-md-5">
                  <img src="images/meme3.jpg"  class="img-fluid" alt="">
              </div>
          </div>
          <div class="row">
              <div class="col-md-5">
              </div>
              <div class="col-md-5">
                  <img src="images/meme4.jpg"  class="img-fluid" alt="">
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
 
