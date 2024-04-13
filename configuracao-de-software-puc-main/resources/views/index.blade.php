<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
</head>
<body>
    <h1>Cadastro de Clientes</h1>

    <section>
        <h2>Registrar Cliente</h2>
        <form method="POST" action="{{ route('clients.store') }}">
            @csrf
            <input type="text" name="name" placeholder="Nome" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="date_of_birth" placeholder="Data de Nascimento" onfocus="(this.type='date')">
            <input type="tel" name="phone_number" placeholder="Telefone" required>
            <input type="text" name="address" placeholder="Endereço" required>
            <button type="submit" class="">Registrar</button>
        </form>
    </section>

    <section>
        <h2>Lista de Clientes</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->email }}</td>
                        <td>
                            <button onclick="window.location.href='{{ route('clients.edit', $client->id) }}'">Editar</button>
                            <form method="POST" action="{{ route('clients.destroy', $client->id) }}" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>

<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #f4f4f4;
}

h1 {
    color: #333;
    font-size: 24px;
}

h2 {
    text-align: center;
    font-size: 18px
}

section {
    background-color: white;
    border-radius: 5px;
    padding: 20px;
    margin: 10px;
    width: 350px;
}

input[type="text"],
input[type="email"],
input[type="password"],
input[type="date"],
input[type="tel"] {
    width: calc(100% - 22px);
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #0056b3;
    color: white;
    border: none;
    margin-bottom: 10px;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #004494;
}

div {
    background-color: #e9e9e9;
    margin: 10px 0;
    padding: 10px;
    border-radius: 5px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
    font-size: 14px;
}

th {
    background-color: #f4f4f4;
}

tbody tr:nth-child(odd) {
    background-color: #e9e9e9;
}

</style>