<?php
require_once __DIR__ . '/vendor/autoload.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $name = htmlspecialchars($_POST['name']);
    $bio = htmlspecialchars($_POST['bio']);
    $dataNascimento = htmlspecialchars($_POST['dataNascimento']);
    $idade = htmlspecialchars($_POST['idade']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $experiences = $_POST['experience'];
    $education = htmlspecialchars($_POST['education']);
    $educationText = htmlspecialchars($_POST['education-text']);
    $skillsText = htmlspecialchars($_POST['skills-text']);

    // Cria o conteúdo do currículo
    $html = "
    <h1>Currículo de $name</h1>
    <p><strong>Bio:</strong> $bio</p>
    <p><strong>Data de Nascimento:</strong> $dataNascimento</p>
    <p><strong>Idade:</strong> $idade</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Telefone:</strong> $phone</p>
    <p><strong>Gênero:</strong> $gender</p>
    <h2>Experiências Profissionais:</h2>";

    if (!empty($experiences)) {
        $html .= "<ul>";
        foreach ($experiences as $experience) {
            $html .= "<li>" . htmlspecialchars($experience) . "</li>";
        }
        $html .= "</ul>";
    } else {
        $html .= "<p>Sem experiências profissionais listadas.</p>";
    }

    $html .= "
    <h2>Formação Acadêmica:</h2>
    <p><strong>Instituição:</strong> $education</p>
    <p><strong>Descrição:</strong> $educationText</p>
    <h2>Habilidades:</h2>
    <p>$skillsText</p>";

    // Inicializa o mPDF e gera o PDF
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML($html);
    $mpdf->Output('Curriculo.pdf', 'I'); // 'I' para abrir no navegador, 'D' para download

} else {
    echo "<p>Método de requisição inválido.</p>";
}
?>
