<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cursos</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand" href="{{ url('/') }}">Escola Técnica</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">
<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="{{ url('/') }}">Início</a>
</li>

<li class="nav-item">
<a class="nav-link active" href="{{ url('/cursos') }}">Cursos</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{ url('/sobre') }}">Sobre</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{ url('/contato') }}">Contato</a>
</li>

</ul>
</div>

</div>
</nav>

<!-- TÍTULO -->
<section class="bg-light p-5 text-center">
<div class="container">
<h1 class="display-5">Nossos Cursos</h1>
<p class="lead">
Conheça nossas formações técnicas e escolha seu futuro profissional.
</p>
</div>
</section>

<!-- CARDS -->
<div class="container my-5">

<div class="row g-4">

<!-- Desenvolvimento de Sistemas -->
<div class="col-md-6 col-lg-3">
<div class="card h-100">

<img src="https://picsum.photos/400/250?random=11" class="card-img-top">

<div class="card-body">
<h5 class="card-title">Desenvolvimento de Sistemas</h5>

<p class="card-text">
Aprenda programação, banco de dados, desenvolvimento web e aplicativos.
</p>

<a href="{{ route('ds') }}" class="btn btn-primary">
Ver curso
</a>

</div>
</div>
</div>

<!-- Administração -->
<div class="col-md-6 col-lg-3">
<div class="card h-100">

<img src="https://picsum.photos/400/250?random=12" class="card-img-top">

<div class="card-body">
<h5 class="card-title">Administração</h5>

<p class="card-text">
Formação voltada para gestão empresarial e empreendedorismo.
</p>

<a href="{{ route('adm') }}" class="btn btn-primary">
Ver curso
</a>

</div>
</div>
</div>

<!-- Meio Ambiente -->
<div class="col-md-6 col-lg-3">
<div class="card h-100">

<img src="https://picsum.photos/400/250?random=13" class="card-img-top">

<div class="card-body">
<h5 class="card-title">Meio Ambiente</h5>

<p class="card-text">
Estude sustentabilidade, preservação ambiental e gestão de recursos naturais.
</p>

<a href="{{ route('ma') }}" class="btn btn-primary">
Ver curso
</a>

</div>
</div>
</div>

<!-- Mecatrônica -->
<div class="col-md-6 col-lg-3">
<div class="card h-100">

<img src="https://picsum.photos/400/250?random=14" class="card-img-top">

<div class="card-body">
<h5 class="card-title">Mecatrônica</h5>

<p class="card-text">
Integra mecânica, eletrônica e programação para automação industrial.
</p>

<a href="{{ route('meca') }}" class="btn btn-primary">
Ver curso
</a>

</div>
</div>
</div>

</div>

</div>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center p-4">
<p class="mb-0">© 2026 Escola Técnica</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>