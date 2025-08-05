<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Clínica Veterinária - Prontuário</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1 class="fade-in">Clínica Veterinária</h1>
        <nav>
            <button onclick="showSection('consultas')">Marcar Consulta</button>
            <button onclick="showSection('agendamentos')">Ver Agendamentos</button>
            <button onclick="showSection('animais')">Cadastrar Animal</button>
            <button onclick="showSection('proprietarios')">Cadastrar Proprietário</button>
            <button onclick="showSection('historico')">Histórico</button>
            <button onclick="showSection('exames')">Registrar Exame</button>
            <button onclick="showSection('vacinas')">Registrar Vacina</button>
            <button onclick="showSection('procedimentos')">Registrar Procedimento</button>
        </nav>
    </header>
    <main>
        <section id="consultas" class="section active">
            <h2>Marcar Consulta</h2>
            <form method="POST" action="marcar_consulta.php" class="slide-in">
                <label>Animal ID: <input type="number" name="animal_id" required></label>
                <label>Data: <input type="date" name="data" required></label>
                <label>Hora: <input type="time" name="hora" required></label>
                <label>Descrição: <textarea name="descricao" required></textarea></label>
                <button type="submit">Agendar</button>
            </form>
        </section>

        <section id="agendamentos" class="section">
            <h2>Agendamentos</h2>
            <div id="agendamentos-list" class="fade-in"></div>
        </section>

        <section id="animais" class="section">
            <h2>Cadastrar Animal</h2>
            <form method="POST" action="cadastrar_animal.php" class="slide-in">
                <label>Nome: <input type="text" name="nome" required></label>
                <label>Espécie: <input type="text" name="especie" required></label>
                <label>Raça: <input type="text" name="raca"></label>
                <label>Idade: <input type="number" name="idade"></label>
                <label>Peso: <input type="number" step="0.01" name="peso"></label>
                <label>Data de Nascimento: <input type="date" name="data_nascimento"></label>
                <label>Proprietário ID: <input type="number" name="proprietario_id"></label>
                <button type="submit">Cadastrar</button>
            </form>
        </section>

        <section id="proprietarios" class="section">
            <h2>Cadastrar Proprietário</h2>
            <form method="POST" action="cadastrar_proprietario.php" class="slide-in">
                <label>Nome: <input type="text" name="nome" required></label>
                <label>Telefone: <input type="text" name="telefone"></label>
                <label>Email: <input type="email" name="email"></label>
                <label>Endereço: <input type="text" name="endereco"></label>
                <button type="submit">Cadastrar</button>
            </form>
        </section>

        <section id="historico" class="section">
            <h2>Histórico do Animal</h2>
            <form onsubmit="buscarHistorico(event)" class="slide-in">
                <label>Animal ID: <input type="number" id="hist_animal_id" required></label>
                <button type="submit">Buscar</button>
            </form>
            <div id="historico-list" class="fade-in"></div>
        </section>

        <section id="exames" class="section">
            <h2>Registrar Exame</h2>
            <form method="POST" action="registrar_exame.php" class="slide-in">
                <label>Animal ID: <input type="number" name="animal_id" required></label>
                <label>Tipo: <input type="text" name="tipo" required></label>
                <label>Data: <input type="date" name="data" required></label>
                <label>Resultado: <textarea name="resultado"></textarea></label>
                <button type="submit">Registrar</button>
            </form>
        </section>

        <section id="vacinas" class="section">
            <h2>Registrar Vacina</h2>
            <form method="POST" action="registrar_vacina.php" class="slide-in">
                <label>Animal ID: <input type="number" name="animal_id" required></label>
                <label>Nome: <input type="text" name="nome" required></label>
                <label>Data: <input type="date" name="data" required></label>
                <label>Próxima Vacina: <input type="date" name="proxima_vacina"></label>
                <button type="submit">Registrar</button>
            </form>
        </section>

        <section id="procedimentos" class="section">
            <h2>Registrar Procedimento</h2>
            <form method="POST" action="registrar_procedimento.php" class="slide-in">
                <label>Animal ID: <input type="number" name="animal_id" required></label>
                <label>Tipo: <input type="text" name="tipo" required></label>
                <label>Data: <input type="date" name="data" required></label>
                <label>Descrição: <textarea name="descricao"></textarea></label>
                <button type="submit">Registrar</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Clínica Veterinária</p>
    </footer>
    <script src="assets/js/script.js"></script>
</body>
</html>