<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <div class="container">
    <title>Edit</title>
</head>

<body>
  <div class="container">
    <h1>Edit Profile</h1>
    <form>
      <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label">Edit name</label>
        <div class="col-md-8">
          <input type="text" class="form-control" name="name">
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label">Edit email</label>
        <div class="col-md-8">
          <input type="email" class="form-control" name="email">
        </div>
      </div>
      <div class="form-group row">
        <label for="phone" class="col-md-4 col-form-label">Edit phone</label>
        <div class="col-md-8">
          <input type="tel" class="form-control" name="phone">
        </div>
      </div>
      <div class="form-group row">
        <label for="address" class="col-md-4 col-form-label">Edit address</label>
        <div class="col-md-8">
          <input type="text" class="form-control" name="address">
        </div>
      </div>
      <a href="list.php" class="col-3 btn btn-primary offset-5">Save</a>
      <a href="list.php" class="col-3 btn btn-outline-secondary">Cancel</a>
    </form>
  </div>
</body>

</html>