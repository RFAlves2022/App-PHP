<?php

include_once "header.php";
include_once "sessao-login.php";

?>


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

<main class="justify-content-center">

    <div class="container ml-3">
        <h1 class="d-flex justify-content-center mt-3">Painel</h1>

        <table class="table table-bordered mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Profissão</th>
                    <th scope="col">E-mail</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once "conexao.php";

                $sql = "SELECT * FROM tb_users";
                $resultado = $conexao->query($sql);

                if ($resultado->num_rows > 0) {
                    // Saída dos dados de cada linha
                    while ($row = $resultado->fetch_assoc()) {
                        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["profissao"] . "</td><td>" . $row["email"] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>0 resultados</td></tr>";
                }
                $conexao->close();
                ?>
            </tbody>
        </table>
    </div>

</main>
