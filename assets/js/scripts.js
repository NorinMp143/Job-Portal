var yourskills = [];

//Getting value from "ajax.php".
function fill(Value) {
  // add skill to the your skills array
  yourskills.push(Value)
  // remove duplicate values
  yourskills = [...new Set(yourskills)];
  let html = "";
  yourskills.forEach(skill => {
    html += "<div class='skill'>"+skill+"</div>";
  });

  $('.skillbox').html(html);
  //Hiding "display" div in "index.php" file.
  $('#display').hide();
}

$(document).ready(function() {
  
  //On pressing a key on "Search box" in "index.php" file. This function will be called.
  $("#search").keyup(function() {
      //Assigning search box value to javascript variable named as "name".
      var name = $('#search').val();
      //Validating, if "name" is empty.
      if (name == "") {
          //Assigning empty value to "display" div in "index.php" file.
          $("#display").html("");
      }
      //If name is not empty.
      else {
          //AJAX is called.
          $.ajax({
              //AJAX type is "Post".
              type: "POST",
              //Data will be sent to "ajax.php".
              url: "ajax.php",
              //Data, that will be sent to "ajax.php".
              data: {
                  //Assigning value of "name" into "search" variable.
                  search: name
              },
              //If result found, this funtion will be called.
              success: function(html) {
                  //Assigning result to "display" div in "index.php" file.
                  $("#display").html(html).show();
              }
          });
      }
  });

  // function for searching the jobs
  $('.searchjob .btn').on('click',function(){
    //Validating, if "yourskills" is empty.
    if (yourskills.length == 0) {
      //Assigning empty value to "job" div in "index.php" file.
      $("#jobs").html("");
    }
    //If yourskills is not empty.
    else {
      //AJAX is called.
      $.ajax({
          //AJAX type is "Post".
          type: "POST",
          //Data will be sent to "jobs.php".
          url: "jobs.php",
          //Data, that will be sent to "jobs.php".
          data: {
              //Assigning value of "name" into "search" variable.
              jobsearch: yourskills
          },
          //If result found, this funtion will be called.
          success: function(html) {
              //Assigning result to "display" div in "index.php" file.
              $("#jobs").html(html).show();
          }
      });
    }
  })
});