<div class="input-field">
    <input type="text" name="descricao" value="{{ isset($registro->descricao) ? $registro->descricao : '' }}">
    <label>Descrição</label>
</div>

<div class="input-field">
    <input type="text" name="id" value="{{ isset($registro->id) ? $registro->id : '' }}">
    <label>Codigo de Barras</label>
</div>

<div class="input-field">
    <input type="text" name="material" value="{{ isset($registro->material) ? $registro->material : '' }}">
    <label>Material</label>
</div>

<div class="input-field">
    <input type="text" name="medidas" value="{{ isset($registro->medidas) ? $registro->medidas : '' }}">
    <label>Medidas</label>
</div>

<div class="input-field">
    <input type="text" name="origem" value="{{ isset($registro->origem) ? $registro->origem : '' }}">
    <label>Origem</label>
</div>

<div class="input-field">
    <input type="text" name="peso" value="{{ isset($registro->peso) ? $registro->peso : '' }}" >
    <label>Peso</label>
</div>

<div class="input-field">
    <input type="text" name="precaucao" value="{{ isset($registro->precaucao) ? $registro->precaucao : '' }}" >
    <label>Precaucões</label>
</div>

<div class="input-field">
    <input type="text" name="valor" value="{{ isset($registro->valor) ? $registro->valor : '' }}" >
    <label>Valor</label>
</div>

<div class="file-field input-field">
    <div class="btn blue">
        <span>Imagem</span>
        <input type="file" name="imagem">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>

@if(isset($registro->imagem))
<div class="input-field">
    <img width="120" src="{{ asset($registro->imagem)}}"/>
</div>
@endif

<div class="">
    <p>
        <input type="checkbox" id="test5" name="publicado" {{ isset($registro->publicado) &&  $registro->publicado == 'sim' ? 'checked' : ''}} value="true">
        <label for="test5">Publicar?</label>
    </p>
    <br><br>
</div>