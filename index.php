<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Container principal -->
    <div class="container">
        <!-- Conteúdo principal -->
        <div class="content">
            <!-- Título -->
            <h1>Gerador de<br>Currículo</h1>
            <!-- Ícone de pessoas -->
            <div class="people-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.78 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM11.5 7a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z" />
                </svg>
            </div>
            <!-- Parágrafo -->
            <p>Se deseja criar o currículo perfeito,<br>você esta no lugar certo.</p>
            <!-- Botão Criar Currículo -->
            <button type="button" onclick="criarCurriculo()" class="btn btn-primary btn-block">Criar Currículo</button>
        </div>
    </div>

    <script src="js\scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>