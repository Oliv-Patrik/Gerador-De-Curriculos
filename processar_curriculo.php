<?php
require_once __DIR__ . '/vendor/autoload.php';

use TCPDF;

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
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            body {
                font-family: 'Poppins', sans-serif;
                color: #fff;
            }

            .container {
                text-align: center;
                max-width: 800px;
                width: 100%;
                margin: 0 auto;
                padding: 20px;
            }

            h1 {
                font-size: 25rem;
                font-weight: bold;
                color: #CFFE00;
                margin-bottom: 20px;
            }

            p {
                font-size: 15rem;
                margin-bottom: 5px;
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                background: rgba(76, 1, 146, 0.8);
            }

            h2 {
                font-size: 25rem;
                font-weight: bold;
                color: #CFFE00;
                margin-bottom: 10px;
            }

            ul {
                list-style-type: none;
                padding-left: 20px;
            }

            li {
                margin-bottom: 5px;
            }
        </style>
    </head>
    <body>
        <div class='container'>
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
            <p>$skillsText</p>
         </div>          
    </body>
    </html>";

    // Inicializa o TCPDF e gera o PDF
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // Definindo informações do documento
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Seu Nome');
    $pdf->SetTitle('Currículo de ' . $name);
    $pdf->SetSubject('Currículo');
    $pdf->SetKeywords('TCPDF, PDF, currículo, exemplo');

    // Removendo cabeçalho e rodapé
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);

    // Definindo fonte padrão
    $pdf->SetFont('helvetica', '', 10);

    // Adicionando página
    $pdf->AddPage();

    // Definindo a cor de fundo
    $pdf->SetFillColor(76, 1, 146); // Cor roxa
    $pdf->Rect(0, 0, 210, 297, 'F'); // eenche a página inteirPra (A4: 210x297mm)

    // Definindo conteúdo HTML
    $pdf->writeHTML($html, true, false, true, false, '');

    // Gerando PDF
    $pdf->Output('Curriculo.pdf', 'I'); // 'I' para abrir no navegador, 'D' para download

} else {
    echo "<p>Método de requisição inválido.</p>";
}
