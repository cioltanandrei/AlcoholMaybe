<?php
	$country = [
		'Panik&Pub' => 'str.MIhai Eminescu Nr. 33, Strada Mihai Eminescu 33, București ',
		'The Pub' => 'Bulevardul Regina Elisabeta 9, București 030167',
		'St. Patrick' => 'Strada Smârdan 23-25, București 030072',
		'The Harp Irish Pub' => 'Strada Bibescu Vodă 1, București',
		'Shift Pub' => 'Strada General Eremia Grigorescu 17, București 010476',
		'Lokal' => 'Strada Mihai Eminescu 57, Bucharest 030167',
		'Garlic Pub' => 'Icoanei 66, Strada Mihai Eminescu 154, București',
		'The Dubliner' => 'Șoseaua Nicolae Titulescu 18, București',
		'Jacks Pub' => 'Strada Lipscani 45, București 030032',
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
    
      <div class="container">	
		<form action="" method="GET">
			<select name="country" id="">
				<option value="Panik&Pub">Panik&Pub</option>	
				<option value="The Pub">The Pub</option>	
				<option value="St. Patrick">St. Patrick</option>			
				<option value="The Harp Irish Pub">The Harp Irish Pub</option>			
				<option value="Shift Pub">Shift Pub</option>			
				<option value="Lokal">Lokal</option>			
				<option value="Garlic Pub">Garlic Pub</option>			
				<option value="The Dubliner">The Dubliner</option>			
				<option value="Jacks Pub">Jacks Pub</option>			
			</select>
			<input type="submit" value="Search">
		</form>

		<br><hr>

		<h2><?php echo $option; ?></h2>
		<p><?php echo $display; ?></p>
	</div>
  </div>
 
  <div class="slide">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <img src="images/beer2.jpg"  class="img-fluid" alt="">
              </div>
          </div>
      </div>
  </div>
 
  <div class="icon">
      <div class="container">
          <div class="row">
              <div class="col-md-3">
                  <div class="title">
                      <img src="images/p1.png" alt="">
 
                      <h2>Blonde beer</h2>
 
                      <p>Blond beer is a complex, clear, mid-strength ale, slightly sweet and dry with an alcohol content between 5.8 percent and 8 percent</p>
 
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="title">
                      <img src="images/p2.png" alt="">
 
                      <h2>Dark beer</h2>
 
                      <p>Dark beers should typically be served at room temperature, like a good red, to fully enjoy the taste and flavour. Also like a red, you should never drink dark beer (or any beer, for that matter) from the bottle.</p>

                  </div>
              </div>
              <div class="col-md-3">
                <div class="title">
                    <img src="images/p3.png" alt="">
 
                    <h2>Red Beer</h2>
 
                    <p>The Irish-style red ale is a balanced beer that uses a moderate amount of kilned malts and roasted barley in the recipe, which gives the beer the color for which it is named.</p>

                </div>
            </div>
            <div class="col-md-3">
                <div class="title">
                    <img src="images/p4.png" alt="">
 
                    <h2>Community</h2>
 
                    <p>We are all alcoholics. That's it. Life goes on.</p>

                </div>
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
 
