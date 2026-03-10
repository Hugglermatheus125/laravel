<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Início</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand" href="{{route('index')}}">Escola Técnica</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">
<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link active" href="{{route('index')}}">Início</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{route('cursos')}}">Cursos</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{route('sobre')}}">Sobre</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{route('contato')}}">Contato</a>
</li>

</ul>
</div>

</div>
</nav>

<section class="bg-light p-5 text-center">
<div class="container">

<h1 class="display-4">Bem-vindo à Escola Técnica</h1>

<p class="lead">
Formando profissionais qualificados para o mercado de trabalho através de cursos técnicos modernos e práticos.
</p>

<img src="https://picsum.photos/900/400?random=1" class="img-fluid rounded mt-3">

</div>
</section>

<div class="container my-5">

<h2 class="text-center mb-4">Destaques</h2>

<div class="row g-4">

<div class="col-md-4">
<div class="card">
<img src="https://picsum.photos/400/250?random=2" class="card-img-top">
<div class="card-body">
<h5>Infraestrutura Moderna</h5>
<p>Laboratórios equipados para prática profissional.</p>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card">
<img src="https://picsum.photos/400/250?random=3" class="card-img-top">
<div class="card-body">
<h5>Professores Experientes</h5>
<p>Docentes com experiência no mercado de trabalho.</p>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card">
<img src="https://picsum.photos/400/250?random=4" class="card-img-top">
<div class="card-body">
<h5>Preparação Profissional</h5>
<p>Ensino focado nas demandas reais das empresas.</p>
</div>
</div>
</div>

</div>

</div>

<footer class="bg-dark text-white text-center p-4">
<p>© 2026 Escola Técnica</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>