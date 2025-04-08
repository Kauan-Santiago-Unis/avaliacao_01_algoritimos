<?php
$palestrantes = [
    [
        "nome" => "João Silva",
        "confirmado" => true,
        "foto" => "/img/Joao_Silva.jpg",
        "descricao" => "Especialista em tecnologia e inovação, com vasta experiência em startups."
    ],
    [
        "nome" => "Maria Oliveira",
        "confirmado" => false,
        "foto" => "/img/Maria_Oliveira.jpg",
        "descricao" => "Engenheira de Software focada em soluções para o futuro."
    ],
    [
        "nome" => "Carlos Souza",
        "confirmado" => true,
        "foto" => "/img/Carlos_Souza.jpg",
        "descricao" => "Palestrante renomado com expertise em inteligência artificial e machine learning."
    ],
    [
        "nome" => "Ana Pereira",
        "confirmado" => false,
        "foto" => "/img/Ana_Pereira.jpg",
        "descricao" => "Profissional de TI que vem inovando na área de cibersegurança."
    ]
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento ETech 2026</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-3 h5">
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

<main>
    <section id="evento" class="mb-5 fundo-evento mt-5">
        <div class="container box-evento">
            <article>
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center text-white"><b>Evento ETech 2026</b></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <p class="text-center"><strong>Data:</strong> 15 de Agosto de 2026</p>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <p class="text-center"><strong>Local:</strong> Centro de Convenções de São Paulo</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="mt-2 text-center">
                            O Evento ETech 2026 é uma oportunidade imperdível para conhecer as inovações tecnológicas que transformarão o futuro.
                            Venha participar deste encontro repleto de palestras, workshops e networking de alto nível!
                        </p>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <div class="container">
        <section id="palestrantes" class="mb-5">
            <h2 class="text-center">Palestrantes</h2>
            <div id="carouselPalestrantes" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $active = "active";
                    foreach ($palestrantes as $palestrante) {
                        echo "<div class='carousel-item $active'>";
                        echo "<div class='row justify-content-center align-items-center'>";
                        echo "<div class='col-md-4 text-center'>";
                        echo "<img src='".$palestrante['foto']."' class='d-block w-100 rounded' alt='".$palestrante['nome']."'>";
                        echo "</div>";
                        echo "<div class='col-md-6'>";
                        echo "<h3>".$palestrante['nome']."</h3>";
                        echo "<p>".$palestrante['descricao']."</p>";
                        if (!$palestrante['confirmado']) {
                            echo "<span class='badge badge-dark'>Em Breve</span>";
                        }
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        $active = "";
                    }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#carouselPalestrantes" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselPalestrantes" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
        </section>

        <section id="contato" class="mb-5">
            <h2 class="text-center">Contato</h2>
            <p class="text-center">
                Para mais informações, entre em contato: <a href="mailto:contato@etech2026.com">contato@etech2026.com</a>
            </p>
        </section>
    </div>
</main>

<footer class="bg-dark py-3">
    <div class="container text-center">
        <p class="text-muted mb-0">© 2026 Evento ETech. Todos os direitos reservados.</p>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>
