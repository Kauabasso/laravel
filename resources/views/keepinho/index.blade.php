<h1>Keepinho</h1>

<p>Seja bem-vindo ao Keepinho, o seu assistente pessoal</p>
<hr>
<form action="{{ route('keep.gravar') }}" method="post">
    @csrf
    <label for="">Origem</label>
    <input type="text" name="origem" cols="30" rows="10">
    <br>
    <label for="">destino:</label>
    <input type="text" name="destino" cols="30" rows="10">
    <br>
    <label for="">data:</label>
    <input type="date" name="data" cols="30" rows="10">
    <br>
    <label for="">Companhia aérea:</label>
    <input type="text" name="companhia" cols="30" rows="10">
    <br>
    <label for="">Número do voo:</label>
    <input type="text" name="numero_voo" cols="30" rows="10">
    <br>
    <label for="">Preço:</label>
    <input type="number" name="preco" cols="30" rows="10">
    <br>
    <input type="submit" value="Gravar nota">
</form>
<hr>
@foreach ($voos as $voo)
    <div style="border:1px dashed green; padding: 2px">
        {{ $voo->origem }}
        <br>
        <a href="{{ route('keep.editar', $voo->id) }}">Editar</a>
    </div>
@endforeach
