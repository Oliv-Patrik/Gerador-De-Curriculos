<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crie seu Currículo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\curriculoStyles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>Preencha as informações abaixo para criar o seu currículo</h1>
            <img src="icon/user-icon.png" alt="Ícone de usuário" class="people-icon no-print">
            <form action="processar_curriculo.php" method="post" id="curriculoForm">
                <div class="form-group">
                    <label for="name">Informe seu nome completo:</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Seu nome completo" required>
                </div>
                <div class="form-group">
                    <label for="bio">Bio:</label>
                    <textarea id="bio" name="bio" class="form-control" placeholder="Fale um pouco sobre você"></textarea>
                </div>
                <div class="form-group">
                    <label for="dataNascimento">Informe sua data de nascimento:</label>
                    <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required>
                </div>
                <div class="form-group">
                    <label for="idade">Idade:</label>
                    <input type="text" class="form-control" id="idade" name="idade" readonly>
                </div>
                <div class="form-group">
                    <label for="email">Informe seu E-mail:</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="seu@email.com" required>
                </div>
                <div class="form-group">
                    <label for="phone">Informe seu número de contato:</label>
                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="(XX) XXXX-XXXX" required>
                </div>
                <div class="form-group">
                    <label for="gender">Informe seu gênero:</label>
                    <select id="gender" name="gender" class="form-control">
                        <option value="">Selecione</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                        <option value="Outro">Outro</option>
                    </select>
                </div>
                <div class="form-group experience">
                    <label for="experience">Informe a sua experiência:</label>
                    <textarea class="form-control" name="experience[]" placeholder="Descreva sua experiência profissional"></textarea>
                    <button type="button" class="btn btn-secondary mt-2 no-print" id="addExperience">Adicionar Experiência</button>
                    <div id="experienceContainer"></div>
                </div>
                <div class="form-group education">
                    <label for="education">Informe sua Formação acadêmica:</label>
                    <input type="text" id="education" name="education" class="form-control" placeholder="Nome da instituição">
                    <textarea id="education-text" name="education-text" class="form-control" placeholder="Descreva sua formação acadêmica"></textarea>
                </div>
                <div class="form-group skills">
                    <label for="skills">Informe suas habilidades:</label>
                    <textarea id="skills-text" name="skills-text" class="form-control" placeholder="Liste suas habilidades"></textarea>
                </div>
                <button type="button" id="gerarCurriculoBtn" class="btn btn-primary btn-lg btn-block no-print">Gerar Currículo</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
