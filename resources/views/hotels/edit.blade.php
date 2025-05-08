<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Hotel</title>
</head>
<body>
    <h1>Editar Hotel</h1>
    <form action="{{ route('hotels.update', $hotel->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Nome:</label>
            <input type="text" name="nome" value="{{ $hotel->nome }}" required>
        </div>
        <div>
            <label>Cidade:</label>
            <input type="text" name="cidade" value="{{ $hotel->cidade }}" required>
        </div>
        <div>
            <label>País:</label>
            <input type="text" name="pais" value="{{ $hotel->pais }}" required>
        </div>
        <div>
            <label>Estrelas:</label>
            <input type="number" name="estrelas" value="{{ $hotel->estrelas }}" min="1" max="5" required>
        </div>
        <div>
            <label>Valor da Diária:</label>
            <input type="number" name="diaria" step="0.01" value="{{ $hotel->diaria }}" required>
        </div>
        <div>
            <label>Comodidades:</label>
            <textarea name="comodidades">{{ $hotel->comodidades }}</textarea>
        </div>
        <button type="submit">Atualizar</button>
    </form>
    <a href="{{ route('hotels.index') }}">Voltar</a>
</body>
</html>