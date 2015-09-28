<?php

  include("includes/dbinfo.php");

  $db_con = mysqli_connect($server, $user_name, $password, $database);

  if (mysqli_connect_errno()){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  if (db_con) {
    $projects_sql = "SELECT * FROM projects ORDER BY Club ASC";
    $projects_result = mysqli_query($db_con, $projects_sql);

    while ($projects_field = mysqli_fetch_array($projects_result)) {
      echo "<tr>";
        echo "<td><a target=\"_blank\" href=\"http://projetos.omirbrasil.org.br/exibe_projetos.php?ID_PROJETO=" . $projects_field['ProjectId'] . "\">" . $projects_field['ProjectId'] . "</a></td>";
        echo utf8_encode("<td>" . $projects_field['Title'] . "</td>");
        echo utf8_encode("<td>" . $projects_field['AvenueA'] . "</td>");
        echo utf8_encode("<td>" . $projects_field['AvenueB'] . "</td>");
        echo utf8_encode("<td>" . $projects_field['Club'] . "</td>");
        echo utf8_encode("<td>" . $projects_field['Status'] . "</td>");
      echo "</tr>";
    }

    mysqli_close($db_con);
  } else {
    echo "<p>Database not dound</p>";
  }

?>
