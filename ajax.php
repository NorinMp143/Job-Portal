<?php
  //Including Database configuration file.
  include "db.php";
  //Getting value of "search" variable from "script.js".
  if (isset($_POST['search'])) {
    //Search box value assigning to $Name variable.
    $Name = $_POST['search'];
    //Search query.
    $Query = "SELECT skillset FROM jobs";
    //Query execution
    $ExecQuery = MySQLi_query($con, $Query);
    // variable for storing all skills
    $allSkills = array();
    //Fetching result from database.
    while ($Result = MySQLi_fetch_array($ExecQuery)) {
      // split the array and merge with previous array of skills
      $allSkills = array_merge($allSkills,explode(",",$Result['skillset']));
    }
    // remove the dublicate values from array and handle the array index
    $skillset = array_values(array_unique($allSkills));
    echo "<ul>";
    for($i=0;$i<count($skillset);$i++){
      if(stristr($skillset[$i],$Name)){
      ?>
      <li onclick="fill('<?php echo $skillset[$i];?>')"><?php echo $skillset[$i];?></li>
      <?php
      }
    }
    
    echo "</ul>";
  }

?>