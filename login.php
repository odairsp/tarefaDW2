<?php
require_once './assets/class/Session.php';
require_once './assets/class/Post.php';
require_once './assets/class/User.php';
require_once './assets/data/users.php';
$session = new Session();
$post = new Post();

if (
    empty($post->getPost('passwd')) || empty($post->getPost('login')) ||
    !exists($post->getPost('login'))
) {
    header('Location: index.html');
    exit;
} else {

    $user = new User(getUser($post->getPost('login')));

    if ($user->getPasswd() !== $post->getPost('passwd')) {
        header('Location: index.html');
        exit;
    }
    $session->setSession('user', $user);
?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/style/styles.css" />
        <title>Seu post</title>
        <style>
            div > img {
                width: auto;
                margin: 10px;
                border-radius: 50%;
            }

            main > p {
                width: 70%;
                margin: 10px;
                padding: 10px;
                text-align: left;
                font-size: 16px;
                border-top-left-radius: 50px;
                border-top-right-radius: 50px;
                border-bottom-left-radius: 50px;
                border-bottom-right-radius: 50px;
                box-shadow: 1px 1px 1px gray;
            }
            div{
                margin: 10px;
                border: 1px solid black;
            }

        </style>
    </head>

    <body>
        <header>

        </header>

        <main style="width: 450px;">
            <div>
                <img id="image" src=<?php echo "./assets/imagens/" . $user->getImage(); ?> width="200" height="200" alt="EU" />
            </div>
            <p><?php echo "Nome: " . $user->getName() ?></p>
            <p><?php echo "Email: " . $user->getEmail() ?></p>
            <p><?php echo "CPF: " . $user->getCpf() ?></p>
            <p><?php echo "Cidade: " . $user->getCity() ?></p>
            <h1> POSTAGEM </h1>
            <form action="text.php" method="post">
                <label>Título: </label><input type="text" name="titulo" id="titulo">
                <label>Texto: </label><textarea name="texto" id="texto" cols="30" rows="7"></textarea>
                <label style="margin-top: 30px;">Autor: </label><input type="text" name="autor" id="autor">
                <input style="width: 50%;" class="botao" type="submit" value="Enviar">
            </form>

        </main>
        <footer></footer>

    </body>

    </html>

<?php
}
