<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pay with braintree</title>

    <!-- links
    https://www.youtube.com/watch?v=dUAk5kwKfjs
    https://sandbox.braintreegateway.com/merchants/rq87x24nqc5dwt6z/home
    https://developers.braintreepayments.com/reference/request/transaction/sale/php#examples -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://js.braintreegateway.com/js/braintree-2.32.1.min.js"></script>

    <script type="text/javascript">
      $.ajax({
        url: "token.php",
        type: "get",
        dataType: "json",
        success: function(data) {
            braintree.setup(data, 'dropin', { container: 'dropin-container'})
        }
      });
    </script>


    <style>
      label.heading{
        font-weight: 600;
      }
      .payment-form {
        width: 300px;
        margin-left: auto;
        margin-right: auto;
        padding: 10px;
        border: 1px #333 solid;
      }
    </style>
  </head>
  <body style="text-align:center; margin-top:100px">
    <form class="payment-form" action="payment.php" method="post">
      <label for="firstName" class="heading">First Name</label>
      <br>
      <input type="text" name="firstName" id="firstName">
      <br><br>
      <label for="lastName" class="heading">Last Name</label>
      <br>
      <input type="text" name="lastName" id="lastName">
      <br><br>
      <label for="amount" class="heading">Amout (USD)</label>
      <br>
      <input type="text" name="amount" id="amount">
      <br><br>
      <div class="" id="dropin-container"></div>
      <br><br>
      <button type="submit">Pay with Braintree</button>
    </form>

  </body>
</html>
