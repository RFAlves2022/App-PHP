<?php

include_once "header.php";
include_once "sessao-login.php";

?>

<!--
<a href="logout.php">
   <?php echo $_SESSION["usuario"]; ?> [ Sair ]
</a>
-->

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="#">
                <img src="imagens/logo-gif.gif" height="70" alt="MDB Logo" loading="lazy" />
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="perfil-painel.php">Painel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="perfil-novo.php">Adicionar novo</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">
            <!-- Icon -->
            <a class="text-reset me-3" href="imagens/profile icon.png">
                <i class="fas fa-shopping-cart"></i>
            </a>

            <a href="logout.php">
                <img src="imagens/profile icon.png" class="rounded-circle" height="25"
                    alt="Black and White Portrait of a Man" loading="lazy" />
                <?php echo $_SESSION["usuario"]; ?> [ Sair ]
            </a>

            </a>

        </div>
    </div>
    <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->