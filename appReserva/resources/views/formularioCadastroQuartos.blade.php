@extends('layout')
@section('content')

<section class="container mt-5">
    <form class="row g-3" method="Post" action="{{route('envia-banco-quarto')}}">
@csrf
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Número do quarto:</label>
            <input type="number" class="form-control" id="inputNum" name="numero" placeholder="1, 2, 3..." >
        </div>
        
        <div class="col-6">
            <label for="inputAddress" class="form-label">Valor:</label>
            <input type="number" class="form-control" id="inputValue" name="valor" placeholder="1234">
        </div>

        <div class="col-md-12">
            <label for="inputPassword4" class="form-label">Tipo:</label>
            <input type="text" class="form-control" id="inputType" name="tipo" placeholder="suíte">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</section>

@endsection