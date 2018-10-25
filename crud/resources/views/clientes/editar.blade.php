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
        <form action="{{ route('clients.update',$cliente->id) }}" method="POST">
          {{ method_field('PATCH') }}
          {{ csrf_field() }}
           
          <div class="form-group">
              <label for="name">Nome:</label>
          <input type="text" class="form-control" id="name" name="name" value="{{$cliente->name}}">
              
          
          
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$cliente->email}}">
            
            <label for="age">Idade:</label>
            <input type="number" class="form-control" id="age" name="age" value="{{$cliente->age}}">
            
          </div>
          <button type="submit" class="btn btn-primary">Salvar</button>
          </form>
        </div>
      </div>
</div>
@endsection