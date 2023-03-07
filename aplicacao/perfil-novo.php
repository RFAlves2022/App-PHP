<?php include_once "header.php" ?>

<main style="margin-left: 10px;">
    <h1>Novo perfil</h1>
    <br>
    <form method="post" action="criar-perfil.php" enctype="multipart/form-data">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome">
        <br>

        <label for="email">E-Mail:</label><br>
        <input type="email" name="email">
        <br>

        <label for="profissao">Profissão:</label><br>
        <input type="text" name="profissao">
        <br>

        <label for="descricao">Descrição:</label><br>
        <textarea name="descricao"></textarea>
        <br>

        <label for="instagram">Instagram:</label><br>
        <input type="text" name="instagram">
        <br>

        <label for="twitter">Twitter:</label><br>
        <input type="text" name="twitter">
        <br>

        <label for="facebook">Facebook:</label><br>
        <input type="text" name="facebook">
        <br>

        <label for="linkedin">LinkedIn:</label><br>
        <input type="text" name="linkedin">
        <br>

        <label for="youtube">Youtube:</label><br>
        <input type="text" name="youtube">
        <br>

        <label for="senha">Senha:</label><br>
        <input type="password" name="senha">
        <br>

        <label for="foto-perfil">Foto de perfil</label><br>
        <input type="file" name="foto-perfil">
        <br>

        <div class="row mt-1">
            <div class="col-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="fundo" id="fundo1" value="img/fundo01.jpg"
                        checked>
                    <label class="form-check-label" for="fundo1">
                        Imagem de fundo 01
                        <img src="img/fundo01.jpg" class="img-fluid">
                    </label>
                </div>
            </div>

            <div class="col-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="fundo" id="fundo2" value="img/fundo02.jpg">
                    <label class="form-check-label" for="fundo2">
                        Imagem de fundo 02
                        <img src="img/fundo02.jpg" class="img-fluid">
                    </label>
                </div>
            </div>

            <div class="col-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="fundo" id="fundo3" value="img/fundo03.jpg">
                    <label class="form-check-label" for="fundo3">
                        Imagem de fundo 03
                        <img src="img/fundo03.jpg" class="img-fluid">
                    </label>
                </div>
            </div>

            <div class="col-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="fundo" id="fundo4" value="img/fundo04.jpg">
                    <label class="form-check-label" for="fundo4">
                        Imagem de fundo 04
                        <img src="img/fundo04.jpg" class="img-fluid">
                    </label>
                </div>
            </div>

        </div>

        <button type="submit">Salvar</button>
    </form>
</main>