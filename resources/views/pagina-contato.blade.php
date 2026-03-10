<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contato</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand" href="{{route('index')}}">Escola Técnica</a>

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="{{route('index')}}">Início</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{route('cursos')}}">Cursos</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{route('sobre')}}">Sobre</a>
</li>

<li class="nav-item">
<a class="nav-link active" href="{{route('contato')}}">Contato</a>
</li>

</ul>

</div>
</nav>

<div class="container my-5">

<h1 class="text-center mb-4">Contato</h1>

<div class="row justify-content-center">

<div class="col-md-6">

<form>

<div class="mb-3">
<label class="form-label">Nome</label>
<input type="text" class="form-control">
</div>

<div class="mb-3">
<label class="form-label">Email</label>
<input type="email" class="form-control">
</div>

<div class="mb-3">
<label class="form-label">Mensagem</label>
<textarea class="form-control" rows="4"></textarea>
</div>

<button class="btn btn-primary">Enviar</button>

</form>

</div>

</div>

</div>

</body>
</html>