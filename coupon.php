

<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>Ramsey Subaru Coupon</title>
    <style media="screen">
      body {
        font-family: Helvetica, sans-serif;
        font-size: 16px;
      }
      #theButton {
        width: 500px;
        height: 40px;
        border-radius: 0px;
        font-size: 18px;
        background-color: #20609F;
        border: 0px;
        color: #ffffff;
        margin-top: 10px;
      }
      #name {
        width: 440px;
        height: 20px;
      }
      #email {
        width: 440px;
        height: 20px;
      }
      #phone {
        width: 440px;
        height: 20px;
      }
      #theButton:hover {
          background-color: #174c80;
      }
    </style>
  </head>
  <body>
    <link rel="stylesheet" href="master.css" media="screen" title="no title" charset="utf-8">

                        <form method="post" action="couponTemplate.php">
                        <table style="line-spacing:10px;cell-padding:10px;">
                        <tr>
                            <th style="padding: 10px 0;"><label for="name">Name</label></th>
                            <td><input type="text" id="name" name="name" /></td>
                        </tr>
                        <tr>
                            <th style="padding: 10px 0;"><label for="email">Email</label></th>
                            <td><input type="text" id="email" name="email" /></td>
                        </tr>
                        <tr>
                            <th style="padding: 10px 0;"><label for="phone">Phone</label></th>
                            <td><input type="text" id="phone" name="phone" /></td>
                        </tr>

                      </table>

                <div class="actionButtons" style="text-align:left;">
                  <input id="theButton" type="submit" value="Send" />
                </div>

            </form>
            <?php
          mail('joethemovie@gmail.com', 'Coupon Generated', $name.' '.$POST["email"]);
        ?>
            <!-- /#page-content-wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

  </body>
</html>
