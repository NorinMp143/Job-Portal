<?php
  //Including Database configuration file.
  include "db.php";
  //Getting value of "search" variable from "script.js".
  if (isset($_POST['jobsearch'])) {
    //Search box value assigning to $Name variable.
    $value = $_POST['jobsearch'];
    array_walk( $value, function (&$value, $key) {
      $value = " skillset LIKE '%$value%'";
    });
    $new = implode(' OR', $value );
    //Search query.
    $Query = "SELECT * FROM jobs WHERE $new";
    //Query execution
    $ExecQuery = MySQLi_query($con, $Query);
    // Fetching result from database.
    while ($Result = MySQLi_fetch_array($ExecQuery)) {
      echo '<div class="job">';
        echo '<h3>'.$Result['job_title'].'</h3>';
        echo '<h5>'.$Result['job_description'].'</h5>';
        echo '<h5><b>Company</b> : '.$Result['company_name'].'</h5>';
        echo '<h5><b>Salary</b> :'.$Result['min_salary'].' - '.$Result['max_salary'].'</h5>';
        echo '<h5><b>Job Published</b> : '.$Result['job_published_date'].'</h5>';
        echo '<h5><b>Last Date to Apply</b> : '.$Result['last_apply_date'].'</h5>';
      echo '</div>';
    }
  }

?>