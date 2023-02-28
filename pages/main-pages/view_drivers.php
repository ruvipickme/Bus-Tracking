<?php
require('config.php');
?>

<!DOCTYPE html>
<html>
<title>View Drivers</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<style>

  body {
  background-image:url("images/dark.jpg");
  height: 100%;
  opacity: 0.8;
  background-repeat: no-repeat;
  background-size: cover;
}

h2 {
  font-family: Tahoma, Verdana, sans-serif;
  margin-top: 30px;
  margin-bottom:50px;
  text-align:center;
  color: white;
  padding: 5px;
}
</style>
<body>
<u><h2>Driver Informations</h2>

<div class="container mt-3">
  <table class="table table-danger">
    <thead>
      <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Date Of Birth</th>
      <th>Mobile Number</th>
      <th>NIC Number</th>
      <th>vehicle Number</th>
      <th>vehicle Type</th>
      </tr>
    </thead>
  </table>
</div>

</body>
</html>