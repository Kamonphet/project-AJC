<nav class="navbar  navbar-expand-md navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Boonraksa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav w-100 justify-content-end">
        <li class="nav-item dropdown ml-auto">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo "{$_SESSION['firstname']} ({$_SESSION['role']})";?>
            </a>
            <div class="dropdown-menu dropdown-menu-md-end" aria-labelledby="navbarDropdown">
              <?php
                if ($_SESSION['role']=='admin'){
                  echo "
                    <a class='dropdown-item' href='http://localhost:8080/phpmyadmin/index.php' target='_blank'>DB</a>
                    <a class='dropdown-item' href='https://www.037hdmovie.com/' target='_blank'>Wish</a>
                  ";
                }
              ?>
              <a class='dropdown-item' href='https://supreme.swu.ac.th/portal/index.php' target="_blank">Into SUPREME</a>
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../auth/logout.php">Logout</a>
            </div>
        </li>
      </ul>
    </div>
  </div>
</nav>