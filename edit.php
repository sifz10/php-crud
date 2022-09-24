<?php
include_once("config.php");
$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($mysqli, $query);
$user = $result->fetch_assoc();
?>

<html>
<head>
	<title>Homepage - Edit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<?php
$err = [];
?>
<body>
  <div class="container">
    <div class="row mt-5">
      <?php if (isset($_GET['err'])): ?>
        <div class="alert alert-danger">
          <?php echo $_GET['err'] ?>
        </div>
      <?php endif; ?>
      <?php if (isset($_GET['success'])): ?>
        <div class="alert alert-success">
          <?php echo $_GET['success'] ?>
        </div>
      <?php endif; ?>
      <h4>User Details (<?php echo $user['name'] ?>)</h4>
      <div class="col-md-12" style="border: 1px black solid">
        <div class="row">
          <a href="index.php" type="button" class="btn btn-primary mb-3 " name="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
            Refresh
          </a>
          <div class="col-md-12">
            <form class="" action="update.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
              <label for="">Name</label>
              <input type="text" class="form-control mb-2" name="full_name" value="<?php echo $user['name']; ?>">
              <label for="">Email</label>
              <input type="text" class="form-control mb-2" name="email" value="<?php echo $user['email']; ?>">
              <label for="">Age</label>
              <input type="number" class="form-control mb-2" name="age" value="<?php echo $user['age']; ?>">
              <label for="">Password</label>
              <input type="password" class="form-control mb-2" name="password" value="<?php echo $user['password']; ?>">
              <button type="submit" class="btn btn-primary"> Update </button>
            </form>

          </div>
        </div>

      </div>
    </div>
  </div>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
