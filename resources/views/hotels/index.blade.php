<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listagem de Hotéis</title>
</head>
<body>
    <h1>Listagem de Hotéis</h1>
    <a href="{{ route('hotels.create') }}">Adicionar Novo Hotel</a>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Cidade</th>
                <th>País</th>
                <th>Estrelas</th>
                <th>Valor da Diária</th>
                <th>Comodidades</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hotels as $hotel)
            <tr>
                <td>{{ $hotel->id }}</td>
                <td>{{ $hotel->nome }}</td>
                <td>{{ $hotel->cidade }}</td>
                <td>{{ $hotel->pais }}</td>
                <td>{{ $hotel->estrelas }}</td>
                <td>{{ $hotel->diaria }}</td>
                <td>{{ $hotel->comodidades }}</td>
                <td>
                    <a href="{{ route('hotels.edit', $hotel->id) }}">Editar</a>
                    <form action="{{ route('hotels.destroy', $hotel->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Remover</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>