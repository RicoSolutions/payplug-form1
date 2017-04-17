<?php
// define variables and set to empty values
$firstname = $lastname = $email = $amount = $customerid = $shipping = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $lastname = test_input($_POST["lastname"]);
  $email = test_input($_POST["email"]);
  $amount = test_input($_POST["amount"]);
  $customerid = test_input($_POST["customerid"]);
  $shipping = test_input($_POST["shipping"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



<!DOCTYPE html>
<html>
<head>
  <title>PayPlug Simple Payment Form</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="main.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">

        <section>

          <h1><i class="fa fa-eur fa-pull-left fa-border fa-spin"></i>PayPlug Payment Form</h1>


          <p>Send payment details via the Form below</p>



          <form method="post" action="payment.php" name="index" role="form" onsubmit="return checkForm(this);">

            <div class="form-group">
              <label for="firstname">Firstname:</label>
              <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Your firstname" required autocomplete="on">
            </div>

            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Your lastname" required autocomplete="on">
            </div>

            <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Your email" required autocomplete="on">
            </div>

            <div class="form-group">
              <label for="amount">Amount:</label>
              <input type="number" class="form-control" id="amount" name="amount" placeholder="The amount you want to pay" required autocomplete="on">
            </div>

            <div class="form-group">
              <label for="customerid">Your customer id: (This value belongs to the "metadatas")</label>
              <input type="text" class="form-control" id="customerid" name="customerid" placeholder="Type any customer id" required autocomplete="on">
            </div>

            <div class="form-group">
              <label for="shipping">Shipping information: (This value belongs to the "metadatas")</label>
              <textarea class="form-control" rows="2" id="shipping" name="shipping" placeholder="Please provide any shipping information" required autocomplete="on"></textarea>
            </div>

            <div class="checkbox">
              <label for="checkbox">
                <input type="checkbox" name="savecard" id="savecard" autocomplete="off"><strong>Save my card (optional)</strong>
              </label>
              <br /> If you check this box, this means you allow the merchant to store a token
              (<a href="https://en.wikipedia.org/wiki/Tokenization_(data_security)" target="_blank">more information</a>) of your card details for future
              payments.
              <br />
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" name="check" required autocomplete="off">I am human
              </label>
            </div>

            <button type="submit" class="btn btn-default" id="submit">Submit</button>

          </form>

        </section>

      </div>



    </div>

  </div>


</body>

<br /><br /><br /><br />

<footer>
  <div>
    <a href="https://www.payplug.com " target="_blank ">
      <!--Center the image and make it responsive by the use of class="center-block img-responsive" -->
      <img src="https://s3-eu-west-1.amazonaws.com/payplug-badges/en/badge_wide.png " class="center-block img-responsive " width="500px " border="0 "/>
    </a>
  </div>
</footer>
</html>
