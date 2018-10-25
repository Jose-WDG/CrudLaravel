@extends('clientes.layout')


@section('conteudo')
      <div class="container">
          <div class="row">
              <div class="col-md-12 text-center">
                <h1>Novo cliente</h1>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
              <form action="{{ route('clients.store') }}" method="POST">
                {{ csrf_field() }}
                 @include('clientes.form')
                </form>
              </div>
            </div>
      </div>
@endsection