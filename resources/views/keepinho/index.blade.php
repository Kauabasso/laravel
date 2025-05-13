<h1>Keepinho</h1>

<p>Seja bem-vindo ao Keepinho, o seu assistente pessoal</p>
<hr>
@if($errors->any())
<div style="color:red">
<h3>ERRO!</h3>
</div>

@endif
<form action="{{ route('keep.gravar') }}" method="post">
    @csrf
    <input type="text" name="titulo" placeholder="Título da nota">
    <br>
    <textarea name="texto" placeholder="escreva" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="Gravar nota">
</form>
<hr>
@foreach ($notas as $nota)
    <div style="border:1px dashed green; padding: 2px">
        {{ $nota->texto }}
        <br>
        <a href="{{ route('keep.editar', $nota->id) }}">Editar</a>
        <form action="{{route('keep.apagar',$nota->id) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Excluir">
        </form>
    </div>


@endforeach