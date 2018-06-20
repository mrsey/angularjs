<!DOCTYPE html>
<html lang="en">
<head>
  <title>First Angular App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#">Angular JS</a>

    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <h2 class="text-center">BMI Calculation</h2>
    <div class="row" style="background: #e0ecff">
     <div class="col-md-4">
     </div>
     <div class="col-md-5">

      <div ng-app=""  style="margin-top: 10px">
        <div class="col-md-12">
          <label>Weight: </label>
          <input type="text" class="form-control" name="" ng-model="weight" ><br>
          <select ng-model="measure1" class="form">
            <option></option>
            <option>KG</option>
            <option>G</option>
          </select>
        </div>
        <div class="col-md-12">
          <label>Height: </label>
          <input type="text" class="form-control" name="" ng-model="height"><br>
          <select ng-model="measure2" class="form">
            <option></option>
            <option>M</option>
            <option>CM</option>
            <option>DM</option>
          </select>
          <br>
          <p> Your Weight is : {{weight + " " + measure1}}</p>
          <p> Your Height is : {{height + " " + measure2}}</p>
        </div>


      </div>

    </div>
  </div>
</div>
</body>
</html>
