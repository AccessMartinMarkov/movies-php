<?php

require 'library/functions.php';

$movies = getMovies();


?>

<?php require 'layout/header.php' ?>

  <section class="content">

    <div class="content-title">
      <h1>Movies Home Page</h1>
    </div>


    <div class="content-body">
      <div class="container">
        <div class="row">
          <?php foreach ($movies as $movie) { ?>

            <div class="col-md-4">
              <div class="card mx-auto">
                <img src="<?php echo $movie['image'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $movie['title'] ?></h5>
                  <p class="card-text">Genre: <?php echo $movie['genre'] ?></p>
                  <a href="#" class="btn btn-primary">See movie</a>
                </div>
              </div>
            </div>

          <?php } ?>
        </div>
      </div>
    </div>

  </section>

<?php require 'layout/footer.php'; ?>


