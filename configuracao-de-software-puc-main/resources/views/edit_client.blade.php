<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Clientes</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <h1>Editar Cliente</h1>

    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nome:</label>
        <input type="text" 
               id="name" 
               name="name" 
               value="{{ $client->name }}" 
               required>

        <label for="email">Email:</label>
        <input type="email" 
               id="email" 
               name="email" 
               value="{{ $client->email }}" 
               required>

        <label for="date_of_birth">Data de Nascimento:</label>
        <input type="date" 
               id="date_of_birth" 
               name="date_of_birth" 
               value="{{ date('Y-m-d', strtotime($client->date_of_birth)) }}" 
               required>

        <label for="telefone">Telefone:</label>
        <input type="tel" 
               id="phone_number" 
               name="phone_number" 
               value="{{ $client->phone_number }}" 
               required>

        <label for="endereco">Endereço:</label>
        <input type="text" 
               id="address" 
               name="address" 
               value="{{ $client->address }}"
               required>

        <button type="submit">Atualizar</button>
        <button type="button" onclick="history.back();">Voltar</button>
    </form>
</body>
</html>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 20px;
}

h1 {
    color: #333;
    text-align: center;
    font-size: 24px;
}

form {
    background-color: white;
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin: 10px 0 5px;
    font-size: 14px;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 8px;
    margin: 5px 0 5px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="date"] {
    width: 100%;
    padding: 8px;
    margin: 5px 0 5px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="tel"] {
    width: 100%;
    padding: 8px;
    margin: 5px 0 5px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

button {
    display: block;
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    background-color: #0056b3;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #003d7a;
}
</style>