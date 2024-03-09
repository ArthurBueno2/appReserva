@extends('layout')
@section('content')

<section class="container mt-5">
    <form class="row g-3" method="Post" action="{{route('envia-banco-funcionario')}}">
@csrf
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Gustavo" >
        </div>

        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Email:</label>
            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="gusta.nengue@gmail.com">
        </div>

        <div class="col-12">
            <label for="inputAddress" class="form-label">Telefone:</label>
            <input type="fone" class="form-control" id="inputFone" name="fone" placeholder="11 111111111">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</section>

@endsection