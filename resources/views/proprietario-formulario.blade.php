<form action="{{ route('proprietario-store') }}" method="post">
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome">

    <label for="cpf">CPF:</label>
    <input type="text" name="cpf" id="cpf">

    <label for="telefone">Telefone:</label>
    <input type="text" name="telefone" id="telefone">

    <label for="email">E-mail:</label>
    <input type="text" name="email" id="email">

    <button type="submit">Cadastrar</button>
</form>