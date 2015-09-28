<?php

  include("includes/dbinfo.php");

  $db_con = mysqli_connect($server, $user_name, $password, $database);

  if (db_con) {
    $clubs_sql = "SELECT * FROM Team ORDER BY PersonId ASC";
    $clubs_result = mysqli_query($db_con, $clubs_sql);

    while ($clubs_field = mysqli_fetch_array($clubs_result)) {
      echo "<div class=\"col-lg-4 col-sm-6 text-center\">";
          echo "<img class=\"img-circle img-responsive img-center\" src=\"" . $clubs_field['PersonImage'] . "\" alt=\"\">";
          echo "<h3>";
            echo utf8_encode($clubs_field['Name']);
            echo utf8_encode("<p><small>" . $clubs_field['Job'] . "</small></p>");
          echo "</h3>";
      echo "</div>";

    }

    mysqli_close($db_con);
  } else {
    echo "<p>Database not dound</p>";
  }

?>
