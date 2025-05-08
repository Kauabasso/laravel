<h1>Keepinho</h1>
<form method="post" action="{{ route('keep.editarGravar') }}">
    <!--Altera para método PUT -->
    @method('PUT')
    @csrf

    <input type="hidden" name="id" value="{{ $voo->id }}">
    <input name="origem" cols="30" rows="10"> {{$voo->origem}}</>
    <input name="destino" cols="30" rows="10"> {{$voo->destino}}</>
    <input type="date" name="data" cols="30" rows="10"> {{$voo->data}}</>
    <input name="companhia" cols="30" rows="10"> {{$voo->companhia}}</>
    <input name="numero_voo" cols="30" rows="10"> {{$voo->numero_voo}}</>
    <input type="number" name="preco" cols="30" rows="10"> {{$voo->preco}}</>
    <br>
    <input type="submit" value="Editar nota">
</form>
<hr>

