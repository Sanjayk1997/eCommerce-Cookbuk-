<?php
$city = $_POST['city'];
$cuisine = $_POST['cuisine'];
$rating = $_POST['rating'];
$event = $_POST['type'];
$date = $_POST['eventday'];


$servername = "localhost";
$username = "username";
$password = "";
$db = "caterers";


$getdata = new mysqli($servername, $username, $password, $db);

$resname = array();
$rescui = array();
$resrate = array();
$resid = array();

$input = "SELECT * FROM $city WHERE cuisine = '$cuisine' AND rating = '$rating'";
$result = $getdata->query($input);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $resid[] = $row['id'];
      $resname[] = $row['name'];
      $rescui[] = $row['cuisine'];
      $resrate[] = $row['rating'];
    }
  }

  $resid_json = json_encode($resid);
  $resname_json = json_encode($resname);
  $rescui_json = json_encode($rescui);
  $resrate_json = json_encode($resrate);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/listings.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </head>


  <body>
    <div class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
      <a class="navbar-brand" href="#">Cookbuk</a>
    </div>

  <div class="container-fluid param sticky-top">
    <h3 class="offset-md-1"> You are looking at a list of</h3>
      <p class="offset-md-1" id="Location"></p>
      <p id="Rating"></p>
      <p id="Cuisine"></p>
      <p id="Event"></p>
      <p id="Date"></p>
  </div>

  <div class="container-fluid midpage">
        <div class="card-deck">
          <div id="1" class="card" >
            <img id="cc1" class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title" id="ctt1">John Doe</h4>
              <p class="card-text" id="ct1"></p>
              <p class="rating" id="c1"></p>
              <a href="details.php" class="btn btn-primary">Check it Out</a>
            </div>
          </div>

          <div class="card" id="2">
            <img id="cc2" class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title" id="ctt2">John Doe</h4>
                <p class="card-text" id="ct2"></p>
                <p class="rating" id="c2"></p>
                <a href="details.php" class="btn btn-primary">Check it Out</a>
            </div>
          </div>

          <div class="card" id="3">
            <img id="cc3" class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title" id="ctt3">John Doe</h4>
                <p class="card-text" id="ct3"></p>
                <p class="rating" id="c3"></p>
                <a href="details.php" class="btn btn-primary">Check it Out</a>
            </div>
          </div>
          <div class="card" id="4">
            <img id="cc4" class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title" id="ctt4">John Doe</h4>
                <p class="card-text" id="ct4"></p>
                <p class="rating" id="c4"></p>
                <a href="details.php" class="btn btn-primary">Check it Out</a>
            </div>
          </div>
        </div>

        <div class="card-deck">
          <div class="card" id="5" >
            <img id="cc5" class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
              <div class="card-body">
                  <h4 class="card-title" id="ctt5">John Doe</h4>
                  <p class="card-text" id="ct5"></p>
                  <p class="rating" id="c5"></p>
                  <a href="details.php" class="btn btn-primary">Check it Out</a>
              </div>
            </div>

          <div class="card" id="6" >
              <img id="cc6" class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
              <div class="card-body">
                    <h4 class="card-title" id="ctt6">John Doe</h4>
                    <p class="card-text" id="ct6"></p>
                    <p class="rating" id="c6"></p>
                    <a href="details.php" class="btn btn-primary">Check it Out</a>
                </div>
          </div>

          <div class="card" id="7" >
              <img id="cc7" class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
              <div class="card-body">
                    <h4 class="card-title" id="ctt7">John Doe</h4>
                    <p class="card-text" id="ct7"></p>
                    <p class="rating" id="c7"></p>
                    <a href="details.php" class="btn btn-primary">Check it Out</a>
              </div>
          </div>
          <div class="card" id="8" >
            <img id="cc8" class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
            <div class="card-body" >
                <h4 class="card-title" id="ctt8">John Doe</h4>
                <p class="card-text" id="ct8"></p>
                <p class="rating" id="c8"></p>
                <a href="details.php" class="btn btn-primary">Check it Out</a>
            </div>
          </div>
        </div>



          <div class="card-deck" >
              <div class="card" id="9">
                <img id="cc9" class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
                  <div class="card-body">
                      <h4 class="card-title" id="ctt9">John Doe</h4>
                      <p class="card-text" id="ct9"></p>
                      <p class="rating" id="c9"></p>
                      <a href="details.php" class="btn btn-primary">Check it Out</a>
                </div>
                </div>

                <div class="card" id="10">
                  <img id="cc10" class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
                  <div class="card-body">
                    <h4 class="card-title" id="ctt10">John Doe</h4>
                    <p class="card-text" id="ct10"></p>
                    <p class="rating" id="c10"></p>
                    <a href="details.php" class="btn btn-primary">Check it Out</a>
                  </div>
                </div>

                <div class="card"  id="11">
                  <img id="cc11" class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
                  <div class="card-body" >
                    <h4 class="card-title" id="ctt11">John Doe</h4>
                    <p class="card-text" id="ct11"></p>
                    <p class="rating" id="c11"></p>
                    <a href="details.php" class="btn btn-primary">Check it Out</a>
                  </div>
            </div>
            <div class="card" id="12">
              <img id="cc12" class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
              <div class="card-body">
                  <h4 class="card-title" id="ctt12">John Doe</h4>
                  <p class="card-text" id="ct12"></p>
                  <p class="rating" id="c12"></p>
                  <a href="details.php" class="btn btn-primary">Check it Out</a>
              </div>
            </div>
          </div>
          </div>
        </div>
        </div>
      </div>

      <footer class="py-3 bg-dark">
        <div class="container-fluid">
          <p class="m-0 text-center text-white">cookbuk v0.0.1</p>
        </div>
      </footer>
  </body>

  <script>
    var city = '<?php echo $city; ?>';
    var cuisine = '<?php echo $cuisine; ?>';
    var rating = '<?php echo $rating; ?>';
    var type = '<?php echo $event; ?>';
    var date = '<?php echo $date; ?>';
    document.getElementById('Location').innerHTML += 'Caterers in '+city+',';
    document.getElementById('Rating').innerHTML += 'with an average rating of '+rating+'&#9733;,';
    document.getElementById('Cuisine').innerHTML += 'serving '+cuisine+' cuisine,';
    document.getElementById('Event').innerHTML += ' for an occassion of '+type;
    document.getElementById('Date').innerHTML += ' on '+date;
    var resname = JSON.parse('<?php echo $resname_json; ?>');
    var rescui = JSON.parse('<?php  echo $rescui_json;?>');
    var resrate = JSON.parse('<?php echo $resrate_json ?>');
    var resid = JSON.parse('<?php echo $resid_json ?>');
  </script>
  <script src="js/listings.js"></script>

</html>
