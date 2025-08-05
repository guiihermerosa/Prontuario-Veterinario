function showSection(id) {
    document.querySelectorAll('.section').forEach(sec => sec.classList.remove('active'));
    document.getElementById(id).classList.add('active');
}

// Carregar agendamentos via AJAX
function carregarAgendamentos() {
    fetch('listar_agendamentos.php')
        .then(res => res.json())
        .then(data => {
            let html = '<ul>';
            data.forEach(ag => {
                html += `<li><strong>Animal:</strong> ${ag.animal_id} | <strong>Data:</strong> ${ag.data} | <strong>Hora:</strong> ${ag.hora} | <strong>Motivo:</strong> ${ag.motivo}</li>`;
            });
            html += '</ul>';
            document.getElementById('agendamentos-list').innerHTML = html;
        });
}

// Buscar histórico do animal
function buscarHistorico(event) {
    event.preventDefault();
    const animalId = document.getElementById('hist_animal_id').value;
    fetch(`historico_animal.php?animal_id=${animalId}`)
        .then(res => res.json())
        .then(data => {
            let html = '<ul>';
            data.forEach(item => {
                html += `<li><strong>Consulta:</strong> ${item.consulta} | <strong>Exame:</strong> ${item.exame} | <strong>Vacina:</strong> ${item.vacina}</li>`;
            });
            html += '</ul>';
            document.getElementById('historico-list').innerHTML = html;
        });
}

document.addEventListener('DOMContentLoaded', function() {
    carregarAgendamentos(); // Carrega agendamentos ao carregar a página
});