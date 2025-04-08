<?php
// Array de palestrantes com nome e status de confirmação
$palestrantes = [
    ["nome" => "João Silva", "confirmado" => true],
    ["nome" => "Maria Oliveira", "confirmado" => false],
    ["nome" => "Carlos Souza", "confirmado" => true],
    ["nome" => "Ana Pereira", "confirmado" => false]
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento ETech 2026</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- CSS Personalizado -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- Cabeçalho com Navbar -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Evento ETech 2026</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#evento">Evento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#palestrantes">Palestrantes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#contato">Contato</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- Conteúdo Principal -->
<main class="">
    <!-- Seção de Informações do Evento -->
    <section id="evento" class="mb-5 fundo-evento">
        <article>
            <div class="box-evento">
                <h1 class="text-center text-white"><b>Evento ETech 2026</b></h1>
                <div class="box-descricao-evento">
                    <div class="box-linha">
                        <p class="text-center"><strong>Data:</strong> 15 de Agosto de 2026</p>
                        <p class="text-center"><strong>Local:</strong> Centro de Convenções de São Paulo</p>
                    </div>
                    <div class="box-linha">
                        <p class="mt-2 text-center">
                            O Evento ETech 2026 é uma oportunidade imperdível para conhecer as inovações tecnológicas que transformarão o futuro.
                            Venha participar deste encontro repleto de palestras, workshops e networking de alto nível!
                        </p>
                    </div>
                </div>
            </div>
        </article>
    </section>

    <!-- Seção de Palestrantes -->
    <section id="palestrantes" class="mb-5">
        <h2 class="text-center">Palestrantes Confirmados</h2>
        <ul class="list-group mt-3">
            <?php
            // Loop para exibir cada palestrante e aplicar a lógica condicional
            foreach ($palestrantes as $palestrante) {
                echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
                echo $palestrante['nome'];
                // Se o palestrante não estiver confirmado, exibe a mensagem "Em Breve!"
                if (!$palestrante['confirmado']) {
                    echo '<span class="badge badge-warning">Em Breve!</span>';
                }
                echo '</li>';
            }
            ?>
        </ul>
    </section>

    <!-- Seção de Contato -->
    <section id="contato" class="mb-5">
        <h2 class="text-center">Contato</h2>
        <p class="text-center">
            Para mais informações, entre em contato: <a href="mailto:contato@etech2026.com">contato@etech2026.com</a>
        </p>
    </section>
</main>

<!-- Rodapé -->
<footer class="bg-light py-3">
    <div class="container text-center">
        <p class="text-muted mb-0">© 2026 Evento ETech. Todos os direitos reservados.</p>
    </div>
</footer>

<!-- Scripts do Bootstrap e dependências -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Script personalizado (se necessário) -->
<script src="script.js"></script>
</body>
</html>
