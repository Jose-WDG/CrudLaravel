<head>
    <link rel="stylesheet" href="../css/app.css">
    <script src="../js/app.js"></script>
  </head>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('clients.index') }}">LARAVEL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>     
          </ul>
        </div>
      </nav>
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
      