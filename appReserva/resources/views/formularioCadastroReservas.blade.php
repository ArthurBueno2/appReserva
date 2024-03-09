@extends('layout')
@section('content')

<section class="container mt-5">
    <form class="row g-3" method="Post" action="{{route('envia-banco-reserva')}}">
@csrf
        <div class="col-md-4">
            <label for="inputEmail4" class="form-label">ID do Cliente:</label>
            <input type="number" class="form-control" id="inputIdCliente" name="idCliente" placeholder="1234" >
        </div>

        <div class="col-md-4">
            <label for="inputPassword4" class="form-label">ID do Funcionário:</label>
            <input type="number" class="form-control" id="inputIdFuncionario" name="idFuncionario" placeholder="1234">
        </div>

        <div class="col-4">
            <label for="inputAddress" class="form-label">ID do Quarto:</label>
            <input type="number" class="form-control" id="inputIdQuarto" name="idQuarto" placeholder="1234">
        </div>

        <div class="col-4">
            <label for="inputAddress" class="form-label">Telefone:</label>
            <input type="fone" class="form-control" id="inputFone" name="fone" placeholder="11 111111111">
        </div>

        <div class="col-md-8">
            <label for="inputPassword4" class="form-label">Email:</label>
            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="gusta.nengue@gmail.com">
        </div>
        
        <div class="form-check">
            <input class="form-check-input" type="radio" name="situacao" id="situacaoPendente" checked>
            <label class="form-check-label" value="Pendente">
                Pendente
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="situacao" id="situacaoPago">
             <label class="form-check-label" value="Pago">
                Pago
            </label>
        </div>

        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Email:</label>
            <input type="date" class="form-control" id="dataEntrada" name="dataEntrada" placeholder="gusta.nengue@gmail.com">
        </div>

        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Email:</label>
            <input type="date" class="form-control" id="dataSaida" name="dataSaida" placeholder="gusta.nengue@gmail.com">
        </div>
        
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</section>

@endsection