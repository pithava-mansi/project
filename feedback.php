<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Page</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <?php include 'css.php';?>
</head>
<body>
<?Php include 'menu.php';?>
<div class="container mt-5 ">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="card">
        <div class="card-header text text-dark">
          <h3>Feedback</h3>
        </div>
        <div class="card-body text text-dark">
          <form method="post" action="">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary m-3">Submit Feedback</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'js.php';?>
</body>
</html>
