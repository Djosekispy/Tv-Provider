@extends('layouts.header')

@section('title','Criando seu pacote')

@section('content')

<div class="addSection text-light bg-dark" role="alert">
    <table class="table table-hover">
  <tbody>
    <form action="{{route('criar-Plano')}}" method="post">
        @csrf
        <button type="submit" class="btn btn-primary" role="button" style="float: right; margin:5px auto;">Contratar Plano</button>
        <span id="preco-total"></span>
    
        @foreach ($canais as $canal)
        <tr>
            <td>
                <div class="form-group">
                    <input type="checkbox" name="channels[]" id="{{$canal->id}}" onclick="calcularPrecoTotal()" data-price="{{$canal->price}}">
                    <input type="text" value="MYPlan-<?php echo date('Y/m/d H:i:s'); ?>" name="name" style="display:none;">
                </div>
            </td>
            <td>{{ $canal->name }} ({{$canal->price}})</td>
        </tr>
        @endforeach
    
        <input type="text" id="preco" name="total_price" style="display:none;">
    </form>
  </tbody>
</table>
</div>

<script>

function calcularPrecoTotal() {
    const checkboxes = document.getElementsByName('channels[]');
    let precoTotal = 0;
    for (let i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            precoTotal += parseFloat(checkboxes[i].dataset.price);
        }
    }
    document.getElementById('preco-total').textContent = precoTotal.toFixed(2);
    document.getElementById('preco').value = precoTotal.toFixed(2);
}

window.onload = calcularPrecoTotal;
</script>
@endsection
