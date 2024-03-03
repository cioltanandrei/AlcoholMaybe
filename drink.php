<?php
	$country = [
		'Bar1' => 'England is a country that is part of the United Kingdom.[5][6][7] It shares land borders with Scotland to the north and Wales to the west. The Irish Sea lies northwest of England and the Celtic Sea lies to the southwest. England is separated from continental Europe by the North Sea to the east and the English Channel to the south. The country covers five-eighths of the island of Great Britain (which lies in the North Atlantic) in its centre and south; and includes over 100 smaller islands such as the Isles of Scilly, and the Isle of Wight. ',
		'Bar2' => 'France officially the French Republic (République française [ʁepyblik fʁɑ̃sɛz]), is a country with territory in western Europe and several overseas regions and territories.[XV] The European, or metropolitan, area of France extends from the Mediterranean Sea to the English Channel and the North Sea, and from the Rhine to the Atlantic Ocean. Overseas France include French Guiana on the South American continent and several island territories in the Atlantic, Pacific and Indian oceans. France spans 643,801 square kilometres (248,573 sq mi) and had a total population of over 67 million people as of April 2017',
		'Bar3' => 'Germany officially the Federal Republic of Germany (German: Bundesrepublik Deutschland, About this sound listen is a federal parliamentary republic in central-western Europe. It includes 16 constituent states, covers an area of 357,021 square kilometres (137,847 sq mi), and has a largely temperate seasonal climate. With about 82 million inhabitants, Germany is the most populous member state of the European Union. After the United States, it is the second most popular immigration destination in the world',
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
    
    
  <div class="container">	
		<h2>How much can I drink?</h2>

		<form class="drink" action="order.php" method="POST">

			<input type="text" name="Height" placeholder="Height">
			<br><br>
			<input type="text" name="Weight" placeholder="Weight">
			<br><br>
			<input type="text" name="Age" placeholder="Age">
			<br><br>
			<select name="Experience" id="Experience">
				<option value="0" selected="selected"></option>
				<option value="2">God save the Queen and give me beer - PRO</option>
				<option value="1">I am fineeeeee - MID</option>
				<option value="0">Bleah, what is that? - NOOB</option>
			</select>
			<br><br>


			Male<input type="radio" name="Gender" value="1" checked="checked">
			Female<input type="radio" name="Gender" value="2">
			<br><br>

			<input type="submit" value="Tell me the truth">
		</form>
 
  <div class="slide">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <img src="images/beer2.jpg"  class="img-fluid" alt="">
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
 
