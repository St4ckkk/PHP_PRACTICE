<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome <?php echo $row_session['username']?></title>

  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@docsearch/css@3"
    />

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <?php 
      include ('session.php');
    ?>
</head>
  <style>
    h1 {
      text-align: center;
      font-size: 2rem;
    }
  </style>
<body>

    <div class="container-fluid">
      <div class="row">
        <div class="col-6">
         <label class="form-control">
          Hello : <span class="text-primary">
            <?php 
              $row_session['username']
            
            ?>
          </span>
         </label>
         
        </div>
        <div class="col-6">

        </div>
      </div>
    </div>
  

</body>

</html>