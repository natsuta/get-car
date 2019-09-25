<html>

<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>

<h2>Checkout Form</h2>
    <div class="container">
      <form action="">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
            <!-- reference from:https://fontawesome.com/icons -->
              <i class="fa fa-cc-visa" style="color:blue"></i>
              <i class="fa fa-cc-mastercard" style="color:gary"></i>
              <i class="fa fa-cc-amex" style="color:blue"></i>              
            </div>
            <p>Name on Card:
            <br>
            <input type="text" id="cname" name="cardname" placeholder="Card Name"></p>
            <p>Credit card number:
            <br>
            <input type="text" id="ccnum" name="cardnumber" placeholder="Card Number"></p>
            <p>Expired Month:
            <br>
            <input type="text" id="expmonth" name="expmonth" placeholder="Expired Month"></p>
            <div class="row">
              <div class="col-50">
                <p>Expired Year:
                <br>
                <input type="text" id="expyear" name="expyear" placeholder="Expired Year"></p>
              </div>
              <div class="col-50">
                <p>CVV:
                <br>
                <input type="text" id="cvv" name="cvv" placeholder="CVV Code"></p>
              </div>
            </div>
          </div>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>

</body>
</html>
