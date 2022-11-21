<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
</head>

<body>
    <div class="container">
        <br>
        <p class="h1 d-flex justify-content-center">My Favorite Movies</p>
        <br>
        <!-- form for add movie -->
        <form class="row g-3" id="add_movie_form">
            <!-- movie name input -->
            <div class="col">
                <input type="text" class="form-control" name="movie_name" placeholder="Movie Title" aria-label="Movie Title" required>
            </div>
            <!-- movie rating input -->
            <div class="col">
                <input type="text" class="form-control" name="movie_rating" placeholder="Rate The Movie From 0 to 10" aria-label="Rate The Movie From 0 to 10" pattern="[0-9]{1}" title="Rate The Movie From 0 to 10" required>
            </div>
            <!-- add movie button -->
            <div class="col">
                <button type="submit" class="btn btn-primary">Add Movie</button>
            </div>
        </form>
        <br>
        <!-- show alert  -->
        <div id="alert_message">

        </div>
        <br>
        <!-- table for show movie data -->
        <table class="table display" id="table_id">
            <thead>
                <tr>
                    <th scope="col">Movie Name</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody id="data">
                <!-- dynamic add movie data -->
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script src="js/script.js"></script>
</body>

</html>