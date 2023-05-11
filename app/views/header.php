<html>

<head>
  <title><?= $pageTitle ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/x3dom/x3dom.css">
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="navbar-brand" href="./index.php">3D Viewer</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
            Models
          </a>
          <div class="dropdown-menu">
            <?php foreach ($x3d_defs as $def) : ?>
              <a class="dropdown-item" href="./model.php?id=<?= $def['id'] ?>"><?= $def['title'] ?></a>
            <?php endforeach ?>
          </div>
        </li>
      </ul>
    </nav>
  </header>
  <main class="container">