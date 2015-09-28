<?php

  include("includes/dbinfo.php");

  $db_con = mysqli_connect($server, $user_name, $password, $database);

  if (mysqli_connect_errno()){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  if (db_con) {
    $clubs_sql = "SELECT * FROM clubs ORDER BY Name ASC";
    $clubs_result = mysqli_query($db_con, $clubs_sql);

    while ($clubs_field = mysqli_fetch_array($clubs_result)) {

      echo "<div class=\"panel panel-default\">";
        echo "<div class=\"panel-heading\">";
          echo "<h3 class=\"panel-title\">";
            echo "<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse" . $clubs_field['ClubId'] . "\">";
              echo utf8_encode($clubs_field['Name']);
            echo "</a>";
          echo "</h3>";
        echo "</div>";

        echo "<div id=\"collapse" . $clubs_field['ClubId'] . "\" class=\"panel-collapse collapse\">";
          echo "<div class=\"panel-body\">";
            echo "<div class=\"col-sm-8\">";
              echo "<h3>Informações</h3>";
              echo "<p><i class=\"fa fa-globe\"></i> <a target=\"_blank\" href=\"" . $clubs_field['Website'] . "\">" . $clubs_field['Website'] . "</a></p>";
              echo "<p><i class=\"fa fa-envelope-o\"></i> <a target=\"_blank\" href=\"mailto:	" . $clubs_field['Email'] . "\">" . $clubs_field['Email'] . "</a></p>";
              echo utf8_encode("<p><i class=\"fa fa-facebook-square\"></i> <a target=\"_blank\" href=\"" . $clubs_field['Facebook'] . "\">" . $clubs_field['Facebook'] . "</a></p>");
              echo "<p><i class=\"fa fa-phone \"></i> " . $clubs_field['PhoneNumber'] . "</p>";
              echo "<p>Reuniões:</p>";
              echo utf8_encode("<p><i class=\"fa fa-clock-o \"></i> " . $clubs_field['MeetingTime'] . "</p>");
              echo utf8_encode( "<p><i class=\"fa fa-location-arrow \"></i> " . $clubs_field['MeetingAdress'] . "</p>");
            echo "</div>";

            echo "<div class=\"col-sm-4\">";
              echo "<h3>Presidente</h3>";
              echo "<div class=\"col-sm-12\">";
                echo "<img class=\"img-circle img-responsive img-center\" src=\""  . $clubs_field['PresidentImage'] .  "\" alt=\"\">";
              echo "</div>";
              echo utf8_encode("<h3><small>" . $clubs_field['PresidentName'] . "</small></h3>");
            echo "</div>";

          echo "</div>";
        echo "</div>";
      echo "</div> <!-- /.panel -->";

    }

    mysqli_close($db_con);
  } else {
    echo "<p>Database not dound</p>";
  }

?>
