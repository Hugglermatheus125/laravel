<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Curso de Administração</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand" href="{{ route('index') }}">Escola Técnica</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">
<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="{{ route('index') }}">Início</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{ route('cursos') }}">Cursos</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{ route('sobre') }}">Sobre</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{ route('contato') }}">Contato</a>
</li>

</ul>
</div>

</div>
</nav>

<!-- HERO -->
<section class="bg-light p-5 text-center">

<div class="container">

<h1 class="display-5">Curso Técnico em Administração</h1>

<p class="lead">
Formação voltada para gestão empresarial, organização de processos
e desenvolvimento de estratégias de negócio.
</p>

<img src="https://picsum.photos/900/400?random=101" class="img-fluid rounded mt-3">

</div>

</section>

<!-- CONTEÚDO -->
<div class="container my-5">

<div class="row g-4 align-items-center">

<div class="col-md-6">

<h3>Sobre o curso</h3>

<p>
O curso técnico em Administração prepara o aluno para atuar
em empresas de diversos setores, auxiliando na gestão
de processos administrativos, planejamento financeiro
e organização empresarial.
</p>

<p>
Durante a formação o estudante desenvolve habilidades
de liderança, planejamento estratégico e empreendedorismo.
</p>

</div>

<div class="col-md-6">

<div class="card shadow p-4">

<h4>Informações do Curso</h4>

<ul class="list-group list-group-flush">

<li class="list-group-item">Duração: 2 anos</li>
<li class="list-group-item">Modalidade: Presencial</li>
<li class="list-group-item">Área: Gestão e Negócios</li>
<li class="list-group-item">Mercado: Empresas, comércio e bancos</li>

</ul>

</div>

</div>

</div>

</div>

<!-- DISCIPLINAS -->
<div class="container my-5">

<h2 class="text-center mb-4">Grade Curricular</h2>

<div class="row g-4 text-center">

<div class="col-md-3">
<div class="card p-3">Gestão Empresarial</div>
</div>

<div class="col-md-3">
<div class="card p-3">Marketing</div>
</div>

<div class="col-md-3">
<div class="card p-3">Contabilidade</div>
</div>

<div class="col-md-3">
<div class="card p-3">Empreendedorismo</div>
</div>

</div>

</div>

<!-- BOTÕES -->
<div class="container text-center my-5">

<a href="{{ route('cursos') }}" class="btn btn-secondary me-3">
← Voltar para cursos
</a>

<a href="{{ route('contato') }}" class="btn btn-primary">
Inscreva-se
</a>

</div>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center p-4">
<p class="mb-0">© 2026 Escola Técnica</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>