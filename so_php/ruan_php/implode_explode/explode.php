<?php
    foreach (file("livros.txt") as $livro) {
        list($titulo, $autor) = explode (",", $livro);
?>
    <p> Titulo: <?= $titulo ?>, Autor: <?= $autor ?> </p>
<?php
    }
?>