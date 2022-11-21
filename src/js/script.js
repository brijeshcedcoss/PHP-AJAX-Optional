$(document).ready(function () {
  // for show data
  display();

  //   add movie
  $("#add_movie_form").submit(function (e) {
    e.preventDefault();
    // send form data
    let data = $(this).serialize();
    let currenct_element = $(this);
    $.ajax({
      type: "post",
      url: "php-script/add_movie.php",
      data: data,
      success: function (response) {
        if (response == 1) {
          // if movie added
          let msg = `<div class="alert alert-success" role="alert">
                Movie Added!
           </div>`;
          $("#alert_message").html(msg);
          //   show alert
          currenct_element.trigger("reset");
          display();
          //   after 2 sec remove automatic
          setTimeout(() => $("#alert_message").html(""), 2000);
        }
      },
    });
  });

  //   delete movie
  $(document).on("click", ".delete_movie", function () {
    let movie_id = $(this).data("id");
    $.ajax({
      type: "post",
      url: "php-script/delete_movie.php",
      data: { movie_id: movie_id },
      success: function (response) {
        if (response == 1) {
          //    if movie deleted
          let msg = `<div class="alert alert-danger" role="alert">
                  Movie Deleted!
             </div>`;
          //   show alert
          $("#alert_message").html(msg);
          display();
          //   after 2 sec remove automatic
          setTimeout(() => $("#alert_message").html(""), 2000);
        }
      },
    });
  });
});

// display function for movie
function display() {
  $.ajax({
    type: "get",
    url: "php-script/show_movies.php",
    dataType: "json",
    success: function (response) {
      let data = "";
      //   check if data not null
      if (response != null && response != "") {
        response.forEach((element, index) => {
          data += `<tr>
            <td>${element.movie_name}</td>
            <td>${element.movie_rating}</td>
            <td><button type="button" data-id="${index}" class="btn btn-danger delete_movie">Delete</button></td>
        </tr>`;
        });
        // show movies
        $("#data").html(data);
        // for initiliaze datatable
        $("#table_id").DataTable();
      }
    },
  });
}
