@extends('clientes.layout')


@section('conteudo')
  <div class="row">
   <div class="col-md-12 text-center">
     <h1>Lista de clientes</h1>
   </div>
 </div>
  
 <div class="container">
  
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
        @forelse($clientes as $client)
        <tr scope="row">
          <td>{{$client->id}}</td>
        <td><a href="{{ route('clients.show',$client->id) }}"> {{ $client->name }} </a></td>
          <td>{{$client->email}}</td>
          <td>{{$client->age}}</td>
          <td>
            <a href="{{ route('clients.edit',$client->id) }}" class="btn btn-warning"> editar</a>
          </td>
          <td>
          <form action="{{ route('clients.destroy',$client->id)}}" method="POST">
             
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              <button type="submit" class="btn btn-danger" onclick=" return confirm('Tem certeza que deseja remover o cliente?')">Deletar</button>
            </form>
            
        </tr>
          
        @empty
          <tr><td>Nenhum cliente cadastrado</td></tr>
        @endforelse
      </tbody>
    </table>
  <button type="button" class="btn btn-dark"><a href="{{ route('clients.create') }}" style="color:#fff;">Criar cliente</a></button>
</div>
@endsection