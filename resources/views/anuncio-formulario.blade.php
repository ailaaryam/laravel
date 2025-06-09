<form action="{{ route('anuncio-store') }}" method="post">
    @csrf
    <label for="titulo">Titulo:</label>
    <input type="text" name="titulo" id="titulo">

    <label for="descricao">Descrição</label>
    <input type="text" name="descricao" id="descricao">

    <label for="preco">Preço</label>
    <input type="text" name="preco" id="preco">

    <label for="data_publicacao">Data da publicação:</label>
    <input type="text" name="data_publicacao" id="data_publicacao">

    <button type="submit">Cadastrar</button>
</form>