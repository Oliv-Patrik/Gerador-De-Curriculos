function criarCurriculo() {
  window.location.href = "curriculo.php"; // Substitua "nova_tela.html" com o nome da tela que você deseja redirecionar 
}

document.addEventListener('DOMContentLoaded', function () {
  $(document).ready(function () {
    // Calcula a idade com base na data de nascimento
    $('#dataNascimento').on('change', function () {
      var dataNascimento = new Date($(this).val());
      var hoje = new Date();
      var idade = hoje.getFullYear() - dataNascimento.getFullYear();

      // Calcula a diferença em meses
      var meses = hoje.getMonth() - dataNascimento.getMonth();

      // Se a diferença de meses for negativa ou se for o mesmo mês mas o dia atual for menor que o dia de nascimento, reduz a idade em 1
      if (meses < 0 || (meses === 0 && hoje.getDate() < dataNascimento.getDate())) {
        idade--;
      }
      $('#idade').val(idade);
    });
  });

  // Código para adicionar novas experiências
  const addExperienceBtn = document.getElementById('addExperience');
  const experienceContainer = document.getElementById('experienceContainer');

  addExperienceBtn.addEventListener('click', function () {
    const newField = document.createElement('textarea');
    newField.name = 'experiencia[]';
    newField.placeholder = 'Experiência Profissional';
    newField.classList.add('form-control', 'mt-2');
    experienceContainer.appendChild(newField);
  });

  // Envia o formulário e gera o currículo
  $('#gerarCurriculoBtn').click(function () {
    $('#curriculoForm').submit();
    setTimeout(function () {
      window.print();
    }, 1000);
  });
});
