<?php
require_once './assets/class/Session.php';
require_once './assets/class/Post.php';
require_once './assets/class/User.php';

$session = new Session();
$post = new Post();

if ($session->getSession('user') === "") {
    header('Location: index.html');
    exit;
} else {
?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/style/styles.css">
        <title></title>
    </head>
    <body>
        <header></header>
        <main style="width: 450px;">
            <h1 class="titulo">Sua Postagem</h1>
            <label class="textoFinal"><?php echo $post->getPost('titulo'); ?></label>
            <blockquote>
               <q>
                    <?php echo $post->getPost('texto'); ?>
                </q>
            </blockquote>
            <span><?php echo $post->getPost('autor') ?></span>
            <form style="margin-top: 0px;" action="./index.html">
                <button style="width: 40%;" class="botao" type="submit">Inicio</button>
            </form>
        </main>
        <footer>

        </footer>
    </body>

    </html>
<?php
    $session->destroy();
}
