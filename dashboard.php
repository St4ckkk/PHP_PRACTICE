<?php
include('C:/xampp/htdocs/LOGIN_REGISTRATION/databases/dbcon.php');
include('C:/xampp/htdocs/LOGIN_REGISTRATION/includes/session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome <?php echo $row_session['username']; ?></title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
</head>
<style>
  h1 {
    text-align: center;
    font-size: 2rem;
  }
</style>

<body>

  <div class="container-fluid d-flex justify-content-center align-items-center">
    <div class="row">
      <div class="col-lg-12 mt-5">
        <label class="form-control">
          Hello : <span class="text-primary">
            <?php 
            echo $row_session['username'];
            ?>
          </span>
        </label>
      </div>
      <div class="col-6">
  <div class="card">
    <div class="card-header">
      Your Profile
    </div>
    <div class="card-body">
      <h5 class="card-title"></h5>
      <p class="card-text">
      <?php
        if (!empty($row_session['ufile'])) {
          echo '<img src="/LOGIN_REGISTRATION/img/' . $row_session['ufile'] . '" alt="User Profile Picture" class="img-fluid">';
        }
      ?>
      </p>
      
    </div>
  </div>
</div>

    </div>
  </div>

</body

</html>
