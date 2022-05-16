<html>

  <head> 

   <title>AAVHAN Complaint Portal</title>

  </head>

  <body> 

    <style type="text/css">

      

      body {

        font-family: 'Avenir';

            size: 12px;

      };

    </style>

   

   <?php

     $display="";

     $username = $_POST['username'];

     $complaint_detail = $_POST['complaint_detail'];

     $complaint_date   = $_POST['complaint_date'];



   if(isset($_POST['submit'])) {

      $display .= "<h2> Complaint Details </h2>";

      $display .= "Complaint User Name  : " .

                  strtoupper($username) ."<br/>";

      $display .= "Complaint Detail : " . 

                  strtoupper($complaint_detail)."<br/>";

      $display .= "Complaint Date   : " . 

                    strtoupper($complaint_date)."<br />";

    }



if (isset($_POST['clear'])) {

   $username ="";

   $complaint_detail ="";

   $complaint_date ="";

   $display ="";

   } 

 ?>   

    <h2> Complaint Portal | AAVHAN '22 </h2>

<form method="post">

   <p>Username: <input type="text" name="username"

    value="<?php echo $username; ?>" autofocus

    ></p>

   <p>Complaint Detail: <input type="text" name="complaint_detail"

    value="<?php echo $complaint_detail; ?>"></p>

   <p>Complaint Date: <input type="text" name="complaint_date" 

    value="<?php echo $complaint_date; ?>"></p>

   <input type="submit" name="submit" value="Submit" />

   &nbsp;&nbsp;&nbsp;

   <input type="submit" name="clear" value="Clear" />

</form>

  <?php
    echo $display;
   ?> 

 </body>

 </html>