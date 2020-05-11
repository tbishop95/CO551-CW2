<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   if (isset($_SESSION['id'])) {

      echo template("templates/partials/header.php");
      echo template("templates/partials/nav.php");

      // layout and form
      $data['content'] = <<<EOD
      <h2 style="text-align:center; font-family: Avenir;">Add New Student</h2>
      <form name="frmdetails" action="confirmstudent.php" method="post">
      <div class="row">
        <div class="col-sm-4" style=""></div>
        <div class="col-sm-2" style="background-color:#2D5EB5; color: #FFF; font-family: Avenir; padding: 5px;">Student Identification Number :</div>
        <div class="col-sm-2" "><input name="txtstudentid" type="text"  value="" /></div>
      </div>
      <div class="row">
        <div class="col-sm-4" style=""></div>
        <div class="col-sm-2" style="background-color:#2D5EB5; color: #FFF; font-family: Avenir; padding: 5px;">Password :</div>
        <div class="col-sm-2" "><input name="txtpwd" type="text"  value="" /></div>
      </div>
      <div class="row">
        <div class="col-sm-4" style=""></div>
        <div class="col-sm-2" style="background-color:#2D5EB5; color: #FFF; font-family: Avenir; padding: 5px;">First Name :</div>
        <div class="col-sm-2" "><input name="txtfirstname" type="text"  value="" /></div>
      </div>
      <div class="row">
        <div class="col-sm-4" style=""></div>
        <div class="col-sm-2" style="background-color:#2D5EB5; color: #FFF; font-family: Avenir; padding: 5px;">Surname :</div>
        <div class="col-sm-2" "><input name="txtlastname" type="text"  value="" /></div>
      </div>
      <div class="row">
        <div class="col-sm-4" style=""></div>
        <div class="col-sm-2" style="background-color:#2D5EB5; color: #FFF; font-family: Avenir; padding: 5px;">D.O.B :</div>
        <div class="col-sm-2" "><input name="txtdob" type="text" value="" /></div>
      </div>
      <div class="row">
        <div class="col-sm-4" style=""></div>
        <div class="col-sm-2" style="background-color:#2D5EB5; color: #FFF; font-family: Avenir; padding: 5px;">Number and Street :</div>
        <div class="col-sm-2" "><input name="txthouse" type="text" value="" /></div>
      </div>
      <div class="row">
        <div class="col-sm-4" style=""></div>
        <div class="col-sm-2" style="background-color:#2D5EB5; color: #FFF; font-family: Avenir; padding: 5px;">Town :</div>
        <div class="col-sm-2" "><input name="txttown" type="text" value="" /></div>
      </div>
      <div class="row">
        <div class="col-sm-4" style=""></div>
        <div class="col-sm-2" style="background-color:#2D5EB5; color: #FFF; font-family: Avenir; padding: 5px;">County :</div>
        <div class="col-sm-2" "><input name="txtcounty" type="text" value="" /></div>
      </div>
      <div class="row">
        <div class="col-sm-4" style=""></div>
        <div class="col-sm-2" style="background-color:#2D5EB5; color: #FFF; font-family: Avenir; padding: 5px;">Country :</div>
        <div class="col-sm-2" "><input name="txtcountry" type="text" value="" /></div>
      </div>
      <div class="row">
        <div class="col-sm-4" style=""></div>
        <div class="col-sm-2" style="background-color:#2D5EB5; color: #FFF; font-family: Avenir; padding: 5px;">Postcode :</div>
        <div class="col-sm-2" "><input name="txtpostcode" type="text" value="" /></div>
      </div>
      <div class="row">
        <div class="col-sm-4" style=""></div>
        <div class="col-sm-2" style=""></div>
        <div class="col-sm-2" "><input type="submit" value="Save" name="submit"/></div>
      </div>
      </div>
      </form>
EOD;
      echo template("templates/default.php", $data);

   } else {
      header("Location: index.php");
   }
   echo template("templates/partials/footer.php");

?>