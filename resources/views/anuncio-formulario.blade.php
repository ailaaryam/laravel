


<form action="{{ route('anuncio-store') }}" method="post">
    @csrf
    <input type="hidden" name="id" value={{$anuncio->id ?? old('id')}}>

    <label for="titulo">Titulo:</label>
    <input type="text" name="titulo" id="titulo"  value={{$anuncio->titulo ?? old('titulo')}}>

    <label for="descricao">Descrição</label>
    <input type="text" name="descricao" id="descricao" value={{$anuncio->descricao ?? old('descricao')}}>

    <label for="preco">Preço</label>
    <input type="text" name="preco" id="preco" value={{$anuncio->preco ?? old('preco')}}>

    <label for="data_publicacao">Data da publicação:</label>
    <input type="text" name="data_publicacao" id="data_publicacao" value={{$anuncio->data_publicacao ?? old('data_publicacao')}}>

    <label for="cor">Cor</label>
    <input type="text" name="cor" id="cor" value={{$anuncio->cor ?? old('cor')}}>

    <button type="submit">Cadastrar</button>
</form>
