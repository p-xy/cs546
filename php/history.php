<?php
  $airport = $_GET['airport'];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>CS 546 Airport Aggregator Project</title>

    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/airport.css">
  </head>

  <body>

    <div id="airport" class="container">
      <div class="header-wrap">
        <div class="header">
          <nav class="nav-main">
            <ul>
              <li><a href="../home.html">Home</a></li>
              <li><a href="../about.html">About</a></li>
              <li class="airports">
                <span>Airports</span>
                <ul>
                  <li><a>JFK International Airport</a></li>
                  <li><a>San Francisco International Airport</a></li>
                  <li><a>Miami Airport</a></li>
                  <li><a>Houston George Bush International Airport</a></li>
                  <li><a>Honolulu International Airport</a></li>
                </ul>
              </li>
              <li><a href="#">Register</a>|<a href="#">Login</a></li>
            </ul>
          </nav>
        </div>
      </div>

        <div class="content-wrap">
          <div class="content-left">
            <nav class="nav-secondary">
              <ul>
                <li><h3><?php echo $airport ?> International Airport</h3></li>
                <li><a href="airport.php?airport=<?php echo $airport ?>">Home</a></li>
                <li><a href="history.php?airport=<?php echo $airport ?>">History</a></li>
                <li><a href="flights.php?airport=<?php echo $airport ?>">Flights</a></li>
                <li><a href="shopping.php?airport=<?php echo $airport ?>">Shopping & Food</a></li>
                <li><a href="rentals.html">Car Rentals</a></li>
                <li><a href="parking.html">Parking</a></li>
                <li><a href="airlines.html">Airlines</a></li>
                <li><a href="reviews.html">Reviews</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </nav>
          </div>

          <div class="content-right">
            <section class="airport-home">
              <h2>History of <?php echo $airport ?> International Airport</h2>
              <p>
                <?php
                    include_once "Database_Connection.php";
                    $sql = "select history from airports where name = '$airport'";
                    $result = mysql_query($sql);
                    $row = mysql_fetch_array($result);
                    echo $row['history'];
                ?>
              </p>
            </section>

            <section class="airport-links">
              <ul>
                <li class="history">
                  <a href="history.html">History</a>
                </li>
                <li class="flights">
                  <a href="flights.html">Flights</a>
                </li>
                <li class="shopping">
                  <a href="shopping.html">Shopping</a>
                </li>
                <li class="rentals">
                  <a href="rentals.html">Rentals</a>
                </li>
                <li class="parking">
                  <a href="parking.html">Parking</a>
                </li>
                <li class="airlines">
                  <a href="airlines.html">Airlines</a>
                </li>
                <li class="reviews">
                  <a href="reviews.html">Reviews</a>
                </li>
                <li class="faq">
                  <a href="faq.html">FAQ</a>
                </li>
                <li class="contact">
                  <a href="contact.html">Contact</a>
                </li>
              </ul>
            </section>
          </div>
        </div>

        <div class="footer-wrap">
          <div class="footer">
            <address class="contact">
              <span id="name">Airport Aggregator</span>
              <span id="email">epolixa@gmail.com</span>
            </address>
          </div>
        </div>
    </div>
  </body>
</html>
