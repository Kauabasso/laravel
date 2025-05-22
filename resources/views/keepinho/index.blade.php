<h1>💡Keepinho</h1>

<p>Seja bem-vindo ao Keepinho, o seu assistente pessoal</p>
<hr>
<a href="{{ route('keep.lixeira') }}">🗑️ Lixeira</a>
<hr>
@if($errors->any())
<div style="color:red">
<h3>ERRO!</h3>
<ul>
    @foreach ($errors->all() as $err)
    <li>{{ $err }}</li>
    @endforeach
</ul>
</div>

@endif
<form action="{{ route('keep.gravar') }}" method="post">
    @csrf
    <input type="text" name="titulo" placeholder="Título da nota" value="{{ old('titulo') }}"><!--recupera os dados antigos caso de ERRO-->
    <br>
    <textarea name="texto" placeholder="escreva aqui..." cols="30" rows="10">{{ old('texto') }}</textarea>
    <br>
    <input type="submit" value="Gravar nota">
</form>
<hr>
@foreach ($notas as $nota)
    <div style="border:1px dashed green; padding: 2px">
    <p><strong>{{ $nota->titulo }}</strong></p>
        {{ $nota->texto }}
        <br>
        <a href="{{ route('keep.editar', $nota->id) }}">Editar</a>
        <form action="{{route('keep.apagar',$nota->id) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Excluir">
        </form>
    </div>
    <br>


@endforeach