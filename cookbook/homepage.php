<?php
$servername = "localhost";
$username = "username";
$password = "";
$db = "caterers";

$dbc = new mysqli($servername, $username, $password);
$sqdb = "CREATE DATABASE caterers";
$dbc->query($sqdb);
$dbc->close();

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql1 = "CREATE TABLE Bangalore(
id INT(6) UNSIGNED NOT NULL ,
name VARCHAR(30) PRIMARY KEY,
cuisine VARCHAR(30) NOT NULL,
rating INT(3))";

$sql2 = "CREATE TABLE Chennai(
id INT(6) UNSIGNED NOT NULL,
name VARCHAR(30) PRIMARY KEY,
cuisine VARCHAR(30) NOT NULL,
rating INT(3))";

$sql3 = "CREATE TABLE Mumbai(
id INT(6) UNSIGNED NOT NULL,
name VARCHAR(30) PRIMARY KEY,
cuisine VARCHAR(30) NOT NULL,
rating INT(3))";

$sql4 = "CREATE TABLE Delhi(
id INT(6) UNSIGNED NOT NULL,
name VARCHAR(30) PRIMARY KEY,
cuisine VARCHAR(30) NOT NULL,
rating INT(3))";

$conn->query($sql1);
$conn->query($sql2);
$conn->query($sql3);
$conn->query($sql4);


$sql5 = "INSERT INTO Bangalore (id,name,cuisine,rating)
VALUES
(1, 'Indian Caterers', 'Indian',4),
(2, 'Chinese Caterers', 'Chinese',4),
(3, 'Italian Caterers', 'Italian',4),
(4, 'Mexican Caterers', 'Mexican',4),
(5, 'Best Caterers', 'Chinese',4),
(6, 'Laxmi Caterers', 'Indian',4),
(7, 'Pazzo', 'Italian',4),
(8, 'Si Mi Amigo', 'Mexican',4),
(9, 'Continental', 'Chinese',5),
(10, 'Prabhu Caterers', 'Indian',5),
(11, 'Shanghai Noon', 'Chinese',5),
(12, 'Pablo Bakes', 'Italian',5),
(13, 'Jalapeno', 'Mexican',5),
(14, 'Tharana', 'Indian',3),
(15, 'Authentic China', 'Chinese',3),
(16, 'Authentic Italian', 'Italian',3),
(17, 'Authentic Mexican', 'Mexican',3),
(18, 'Globetrotters', 'Chinese',4),
(19, 'Savory Indian', 'Indian',4),
(20, 'Pizzerino', 'Italian',4),
(21, 'Se Queda', 'Mexican',4),
(22, 'Mainland China', 'Chinese',5),
(23, 'Ramlal Caterers', 'Indian',5),
(24, 'Jade Palace', 'Chinese',5),
(25, 'Pasta n Pizza', 'Italian',5),
(26, 'Hot Peppers', 'Mexican',5)";

$conn->query($sql5);


$sql6 = "INSERT INTO Chennai (id,name,cuisine,rating)
VALUES
(1, 'Indian Caterers', 'Indian',4),
(2, 'Chinese Caterers', 'Chinese',4),
(3, 'Italian Caterers', 'Italian',4),
(4, 'Mexican Caterers', 'Mexican',4),
(5, 'Best Caterers', 'Chinese',4),
(6, 'Laxmi Caterers', 'Indian',4),
(7, 'Pazzo', 'Italian',4),
(8, 'Si Mi Amigo', 'Mexican',4),
(9, 'Continental', 'Chinese',5),
(10, 'Prabhu Caterers', 'Indian',5),
(11, 'Shanghai Noon', 'Chinese',5),
(12, 'Pablo Bakes', 'Italian',5),
(13, 'Jalapeno', 'Mexican',5),
(14, 'Tharana', 'Indian',3),
(15, 'Authentic China', 'Chinese',3),
(16, 'Authentic Italian', 'Italian',3),
(17, 'Authentic Mexican', 'Mexican',3),
(18, 'Globetrotters', 'Chinese',4),
(19, 'Savory Indian', 'Indian',4),
(20, 'Pizzerino', 'Italian',4),
(21, 'Se Queda', 'Mexican',4),
(22, 'Mainland China', 'Chinese',5),
(23, 'Ramlal Caterers', 'Indian',5),
(24, 'Jade Palace', 'Chinese',5),
(25, 'Pasta n Pizza', 'Italian',5),
(26, 'Hot Peppers', 'Mexican',5)";

$conn->query($sql6);

$sql7 = "INSERT INTO Mumbai (id,name,cuisine,rating)
VALUES
(1, 'Indian Caterers', 'Indian',4),
(2, 'Chinese Caterers', 'Chinese',4),
(3, 'Italian Caterers', 'Italian',4),
(4, 'Mexican Caterers', 'Mexican',4),
(5, 'Best Caterers', 'Chinese',4),
(6, 'Laxmi Caterers', 'Indian',4),
(7, 'Pazzo', 'Italian',4),
(8, 'Si Mi Amigo', 'Mexican',4),
(9, 'Continental', 'Chinese',5),
(10, 'Prabhu Caterers', 'Indian',5),
(11, 'Shanghai Noon', 'Chinese',5),
(12, 'Pablo Bakes', 'Italian',5),
(13, 'Jalapeno', 'Mexican',5),
(14, 'Tharana', 'Indian',3),
(15, 'Authentic China', 'Chinese',3),
(16, 'Authentic Italian', 'Italian',3),
(17, 'Authentic Mexican', 'Mexican',3),
(18, 'Globetrotters', 'Chinese',4),
(19, 'Savory Indian', 'Indian',4),
(20, 'Pizzerino', 'Italian',4),
(21, 'Se Queda', 'Mexican',4),
(22, 'Mainland China', 'Chinese',5),
(23, 'Ramlal Caterers', 'Indian',5),
(24, 'Jade Palace', 'Chinese',5),
(25, 'Pasta n Pizza', 'Italian',5),
(26, 'Hot Peppers', 'Mexican',5)";

$conn->query($sql7);

$sql8 = "INSERT INTO Delhi (id,name,cuisine,rating)
VALUES
(1, 'Indian Caterers', 'Indian',4),
(2, 'Chinese Caterers', 'Chinese',4),
(3, 'Italian Caterers', 'Italian',4),
(4, 'Mexican Caterers', 'Mexican',4),
(5, 'Best Caterers', 'Chinese',4),
(6, 'Laxmi Caterers', 'Indian',4),
(7, 'Pazzo', 'Italian',4),
(8, 'Si Mi Amigo', 'Mexican',4),
(9, 'Continental', 'Chinese',5),
(10, 'Prabhu Caterers', 'Indian',5),
(11, 'Shanghai Noon', 'Chinese',5),
(12, 'Pablo Bakes', 'Italian',5),
(13, 'Jalapeno', 'Mexican',5),
(14, 'Tharana', 'Indian',3),
(15, 'Authentic China', 'Chinese',3),
(16, 'Authentic Italian', 'Italian',3),
(17, 'Authentic Mexican', 'Mexican',3),
(18, 'Globetrotters', 'Chinese',4),
(19, 'Savory Indian', 'Indian',4),
(20, 'Pizzerino', 'Italian',4),
(21, 'Se Queda', 'Mexican',4),
(22, 'Mainland China', 'Chinese',5),
(23, 'Ramlal Caterers', 'Indian',5),
(24, 'Jade Palace', 'Chinese',5),
(25, 'Pasta n Pizza', 'Italian',5),
(26, 'Hot Peppers', 'Mexican',5)";


$conn->query($sql8);

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/homepage.js"></script>
  </head>

  <body>

      <div class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <a class="navbar-brand" href="#">Cookbuk</a>
      </div>

      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1>Cookbuk Services</h1>
          <p>Bringing together Caterers and Consumers</p>
        </div>
      </div>

      <div class="midpage">

          <div class="carcontainer">
          <div id="myCarousel" class="carousel slide">
              <ul class="carousel-indicators">
                <li class="item1 active"></li>
                <li class="item2"></li>
                <li class="item3"></li>
              </ul>

              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/1.jpg"  width="100%" height="100%">
                </div>
                <div class="carousel-item">
                  <img src="img/2.jpg"  width="100%" height="100%">
                </div>
                <div class="carousel-item">
                  <img src="img/3.jpg"  width="100%" height="100%">
                </div>
              </div>

              <a class="carousel-control-prev" href="#myCarousel">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#myCarousel">
                <span class="carousel-control-next-icon"></span>
              </a>
              </div>
            </div>

            <div class="container-fluid">
              <div class="about">
              <h2>About Company</h2>
              <h4>Caterers. Consumers. Simplified.</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Mauris sollicitudin, elit sed efficitur placerat, leo sem dignissim lacus,
              suscipit dapibus nulla orci eget tortor.Aliquam libero mauris, hendrerit
              sit amet rhoncus vestibulum, condimentum non turpis. Cras ultrices eu
              arcu consequat vehicula. Pellentesque a urna a ex fringilla consequat
              egestas sed elit.</p>
              </div>


        </div>
        </div>

        <div class="container-fluid data2">
          <div class="whyus">
            <h2>Why Choose Us?</h2>
            <h4>Standards. Savings. Security.</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Mauris sollicitudin, elit sed efficitur placerat, leo sem dignissim lacus,
            suscipit dapibus nulla orci eget tortor.</p>
            <p>Aliquam libero mauris, hendrerit
            sit amet rhoncus vestibulum, condimentum non turpis. Cras ultrices eu
            arcu consequat vehicula. Pellentesque a urna a ex fringilla consequat
            egestas sed elit.</p>
            <p>Aliquam libero mauris, hendrerit
            sit amet rhoncus vestibulum, condimentum non turpis. Cras ultrices eu
            arcu consequat vehicula. Pellentesque a urna a ex fringilla consequat
            egestas sed elit.</p>
          </div>
        </div>

        <div class="container-fluid data m-0">
          <form class="" action="listings.php" method="post">
          <div class="start offset-md-1"><h2>Geting Started</h2><h6>Choose your preferences</h6></div>
          <div class="form-group">

                 <select class="form-control col-4 offset-md-1" id="sel1" name="city">
                   <option value="Bangalore">Bangalore</option>
                   <option value="Chennai">Chennai</option>
                   <option value="Mumbai">Mumbai</option>
                   <option value="Delhi">Delhi</option>
                 </select>
                 <select class="form-control col-4 offset-md-1" id="sel2" name="cuisine">
                   <option value="Indian">Indian</option>
                   <option value="Chinese">Chinese</option>
                   <option value="Italian">Italian</option>
                   <option value="Mexican">Mexican</option>
                 </select>
                 <select class="form-control col-4 offset-md-1" id="sel3" name="rating">
                   <option value="2">2.0 stars</option>
                   <option value="3">3.0 stars</option>
                   <option value="4">4.0 stars</option>
                   <option value="5">5.0 stars</option>
                 </select>
                 <select class="form-control col-4 offset-md-1" id="sel4" name="type">
                   <option value="Wedding">Wedding</option>
                   <option value="Graduation">Graduation</option>
                   <option value="Birthday">Birthday</option>
                   <option value="Get-together Party">Friends Party</option>
                 </select>
                 <input class="form-control col-4 offset-md-1" id="date" type="date" name="eventday">
          </div>
          <button type="submit" onclick="listings()" class="btn btn-secondary col-1 offset-md-1">Submit</button>
          </form>
        </div>

        <footer class="py-3 bg-dark">
          <div class="container-fluid">
            <p class="m-0 text-center text-white">cookbuk v0.0.1</p>
          </div>
        </footer>

        </div>

  </body>
</html>
