<?php
require $_SERVER['DOCUMENT_ROOT']."../project-ajc/auth/auth.php";
?>
<!-- Nav Head -->
<nav class="navbar navbar-expand-lg bd-indigo-400 navbar-dark py-3">
    <!-- Content -->
        <div class="container-fluid">
            <!-- Brand -->
            <h1 class="navbar-brand fs-1 ms-3">BoonRaksa System</h1>
            <!-- menu -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav w-100 justify-content-end">
                    <li class="nav-item dropdown ml-auto">
                        <a class="nav-link dropdown-toggle h5 text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
