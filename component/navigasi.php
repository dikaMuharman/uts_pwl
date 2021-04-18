<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="index.php">My App</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarTogglerDemo01"
          aria-controls="navbarTogglerDemo01"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?hal=about-us">About Us</a>
            </li>
          </ul>
          <div class="dropdown">
            <?php if(!isset($_SESSION['member'])): ?>
            <a class="btn btn-light" href="index.php?hal=login">Login</a>
            <?php else: ?>
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              <?=$_SESSION['member']['fullname']?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="index.php?hal=data-pegawai">Data pegawai</a></li>
              <li><a class="dropdown-item" href="index.php?hal=tambah-data">Tambah data</a></li>
              <li><a class="dropdown-item" href="component/logout.php">logout</a></li>
            </ul>
            <?php endif; ?>
        </div>
      </div>
    </nav>