@extends('clientes.layout')


@section('conteudo')
      <div class="row">
          <div class="col-md-12 text-center">
            <h1>Detalhes do Cliente</h1>
          </div>
        </div>
<div class="container">
  <div class="row">
      <table class="table table-striped">
          <thead class="thead-dark">
          <tr>
          <th scope="col">id</th>
          <th scope="col">Nome</th>
          <th scope="col">email</th>
          <th scope="col">idade</th>
          <th scope="col">ações</th>
          </tr>
          </thead>
          <tbody>
            <tr scope="row">
              <td>{{$cliente->id}}</td>
              <td>{{ $cliente->name }}</td>
              <td>{{$cliente->email}}</td>
              <td>{{$cliente->age}}</td>
              <td></td>
            </tr>
          </tbody>
        </table>
  </div>
</div>
@endsection