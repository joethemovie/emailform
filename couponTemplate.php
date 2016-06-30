<!DOCTYPE html>
<html>
  <head>
    <?php
      $name = trim($_POST["name"]);
      $email = trim($_POST["email"]);
      $phone = trim($_POST["phone"]);
    ?>
    <meta charset="utf-8">
    <title>coupon</title>
    <style media="screen">
      #container {
        padding: 30px 0;
        width: 60%;
        text-align: center;
        font-family: Helvetica, sans-serif;
        color: #ffffff;
        font-size: 16px;
        background-image: url("http://i.imgur.com/0cwqVmR.png");
        background-size: 100%;
        background-repeat: no-repeat;
      }
      #price {
        font-size: 50px;
        font-weight: 700;
      }
      #RS {
        font-size: 20px;
        line-height: 30px;
      }
      #last {
        padding: 0 30px 0px 30px;
      }
      #terms {

        font-size: 10px;
        line-height: 1;
      }
    </style>
  </head>
  <body>
    <div id="container">
      <p><span id="RS">Ramsey Subaru</span><br>
        905 Route 17 South, Ramsey, NJ 07446<br>
        tel: 201.327.0070
      </p>

      <h2>Savings Certificate</h2>
      <p>
        for <br>
        <span id="RS"><?php echo $name ?></span>
      </p>
      <p id="last">
        <span id="price">$500 OFF</span><br>
        <strong>A NEW OR USED VEHICLE</strong>
        <br><br><span id="terms">This offer cannot be combined with any other advertised specials. Offer is good all day Saturday and Monday July 4th between the hours of 9am and 2 pm. NO EXCEPTIONS WILL BE MADE. Up to managers discretion on Orders. Offer not valid on existing deals. Limit one savings certificate per vehicle purchase. <br>Not responsible for typographical errors.</span>
      </p>
    </div>
  </body>
</html>
