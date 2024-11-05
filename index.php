<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Demo</title>
  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Datatables -->
  <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">
</head>

<body>
  <header>
    <h1 class="text-center p-3">Hello World!</h1>
    <!-- navbar -->
    <?php include "includes/navbar.php"; ?>
    <!-- ./navbar -->
  </header>

  <div class="container mt-4">
    <?php include "konten.php"; ?>
  </div>

  <footer>
    <div class="text-bg-dark p-3 text-center mt-5">
      Pemrograman Web 1 @ <?= date("Y") ?>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="assets/jquery-3.7.1.js"></script>
  <script src="assets/datatables/dataTables.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <script>
    new DataTable('#example');
  </script>
</body>

</html>