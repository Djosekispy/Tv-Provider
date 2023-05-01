@extends('layouts.header')

@section('title','Criando seu pacote')

@section('content')


<div class="alert alert-info row ppaymentSection" role="alert">
     <div class="col-sm-6 col-md-4 col-lg-4">Canais Adicionados: <span id="canal">0</span></div>
     <div class="col-sm-6 col-md-4 col-lg-4">Total a Pagar: <span id="kz">0</span>  Kwanzas</div>
</div>


<div class="addSection text-light bg-dark" role="alert">
    <table class="table table-hover">
  <tbody>
    <form action="#" method="post">
        <button type="submit" class="btn btn-primary" role="button" style="float: right; margin:5px auto;">Contratar Plano</button>

 @foreach ($canais as $canal)
    <tr>
        <td>
        <div class="form-group">
            <input type="checkbox" name="channels[]" id="{{$canal->id}}" onkeydown="adicionar({{$canal->id}},{{$canal->price}})">
        </div>
        </td>
      <td>{{ $canal->name }} ({{$canal->price}})</td>
    </tr>
     @endforeach
    </form>

  </tbody>
</table>
</div>

<script>
function adicionar(id,preco){

  let valor = document.getElementById('kz').innerText;
  let canal = document.getElementById('canal').innerText;

  document.getElementById('kz').innerText = parseFloat(valor) + preco;
  document.getElementById('canal').innerText = parseFloat(canal) + 1;
}

</script>
@endsection
