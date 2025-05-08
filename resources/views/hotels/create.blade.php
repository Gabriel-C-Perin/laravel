<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Adicionar Hotel</title>
</head>
<body>
    <h1>Adicionar Novo Hotel</h1>
    <form action="/hotels" method="POST">
        @csrf
        <div>
            <label>Nome:</label>
            <input type="text" name="nome" required>
        </div>
        <div>
            <label>Cidade:</label>
            <input type="text" name="cidade" required>
        </div>
        <div>
            <label>País:</label>
            <input type="text" name="pais" required>
        </div>
        <div>
            <label>Estrelas:</label>
            <input type="number" name="estrelas" min="1" max="5" required>
        </div>
        <div>
            <label>Valor da Diária:</label>
            <input type="number" name="diaria" required>
        </div>
        <div>
            <label>Comodidades:</label>
            <textarea name="comodidades"></textarea>
        </div>
        <button type="submit">Salvar</button>
    </form>
    <a href="{{ route('hotels.index') }}">Voltar</a>
</body>
</html>