@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Precisamos que você valide o seu email</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Reenviamos um email para você com o link de validação.
                        </div>
                    @endif

                    Antes de utilizar a aplicação, favor validar o seu email.
                    <br>
                    Caso não tenha recebido o email com o link de verificação, clique no link a seguir para receber um novo email,
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Clique aqui</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
