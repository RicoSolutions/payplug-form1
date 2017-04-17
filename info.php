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
</head>
<body>

   <section id="contact">
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-md-offset-3">

                <h1>PayPlug retrieve Payment Form</h1>


                <p>Send payment details via the Form below</p>

                <form method="post" action="retrieve_payment.php" name="retrieve_payment" role="form" onsubmit="return checkForm(this);">

                  echo "<div class='col-md-6 col-md-offset-3'>Order ID: $payment_id</div>";
                  echo "<div class='col-md-6 col-md-offset-3'>Amount: $amount €</div>";
                  echo "<div class='col-md-6 col-md-offset-3'>Payment status: $is_paid</div>";
                  echo "<div class='col-md-6 col-md-offset-3'>Currency: $currency</div>";

                    </form>



            </div>



         </div>

      </div>

   </section>

</body>
</html>
