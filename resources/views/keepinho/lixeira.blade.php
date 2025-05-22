<h1>💡Keepinho</h1>
<h2>🗑️Lixeira</h2>
<hr>
@if (session('sucesso'))
<div>{{ session('sucesso') }}</div>
@endif

@foreach ($notas as $nota)
    <div style="border:1px dashed green; padding: 2px">
    <p><strong>{{ $nota->titulo }}</strong></p>
        {{ $nota->texto }}
        <br>
        <a href="{{ route('keep.restaurar', $nota->id) }}">♻️ Restaurar</a>
    </div>
<hr>
@endforeach
<a href="{{ route('keep') }}">↩️ Voltar para o início</a>