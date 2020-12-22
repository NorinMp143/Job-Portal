<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Portal : Home</title>
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-light bg-light">
      <span class="navbar-brand mb-0 h1">Job Portal</span>
    </nav>
  </header>
  
  <div class="container skill-searchbar">
    <label>Search skill and select to add your skills</label>
    <!-- Search box. -->
    <div class="searchbox">
      <input type="text" id="search" placeholder="Search" />
      <!-- Suggestions will be displayed in below div. -->
      <div id="display"></div>
    </div>
    <label><b>Ex: </b><i>nodejs, php, ui designer etc.</i></label>
  </div>

  <div class="container skill-searchbar">

    <label>Your skills</label>

    <!-- skill box. -->
    <div class="skillbox">
      <!-- Skills will be displayed here. -->
    </div>

    <div class="searchjob pt-5 pb-5">
      <a class="btn btn-primary">Search Jobs</a>
    </div>

  </div>

  <div class="container">
    <div class="row">
      <div class="col">
        <div class="jobs" id="jobs">
            <!-- display jobs related to your skills -->
        </div>
      </div>
    </div>
  </div>

  <script src="./assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="./assets/js/scripts.js"></script>
</body>
</html>