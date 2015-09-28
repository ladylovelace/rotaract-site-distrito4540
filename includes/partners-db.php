<?php

  include("includes/dbinfo.php");

  $db_con = mysqli_connect($server, $user_name, $password, $database);

  if (db_con) {
    $partners_sql = "SELECT * FROM partners ORDER BY PartnerId ASC";
    $partners_result = mysqli_query($db_con, $partners_sql);

  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

    while ($partners_field = mysqli_fetch_array($partners_result)) {
      echo "<div class=\"col-xs-6 text-center\">";
          echo "<img class=\"img-rounded img-responsive img-center\" src=\"" . $partners_field['PartnerImage'] . "\" alt=\"\">";
          /**echo "<h3>";
            echo utf8_encode($partners_field['Name']);
            echo utf8_encode("<p><small>" . $clubs_field['Job'] . "</small></p>");
          echo "</h3>";*/
      echo "</div>";

    }

    mysqli_close($db_con);
  } else {
    echo "<p>Database not dound</p>";
  }

?>
