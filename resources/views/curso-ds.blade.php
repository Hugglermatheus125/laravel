<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Curso de Desenvolvimento de Sistemas</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand" href="{{ route('index') }}">Escola Técnica</a>

<ul class="navbar-nav ms-auto">
<li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Início</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('cursos') }}">Cursos</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('sobre') }}">Sobre</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('contato') }}">Contato</a></li>
</ul>

</div>
</nav>

<section class="bg-light p-5 text-center">

<div class="container">

<h1 class="display-5">Curso Técnico em Desenvolvimento de Sistemas</h1>

<p class="lead">
Curso voltado para programação, desenvolvimento web,
banco de dados e criação de sistemas digitais.
</p>

<img src="https://picsum.photos/900/400?random=401" class="img-fluid rounded mt-3">

</div>

</section>

<div class="container my-5">

<div class="row g-4 align-items-center">

<div class="col-md-6">

<h3>Sobre o curso</h3>

<p>
O curso técnico em Desenvolvimento de Sistemas prepara
o aluno para atuar na área de tecnologia desenvolvendo
aplicações web, sistemas empresariais e bancos de dados.
</p>

<p>
Durante a formação os alunos aprendem lógica de programação,
desenvolvimento web e arquitetura de sistemas.
</p>

</div>

<div class="col-md-6">

<div class="card shadow p-4">

<h4>Informações do Curso</h4>

<ul class="list-group list-group-flush">

<li class="list-group-item">Duração: 2 anos</li>
<li class="list-group-item">Modalidade: Presencial</li>
<li class="list-group-item">Área: Tecnologia da Informação</li>
<li class="list-group-item">Mercado: Empresas de tecnologia</li>

</ul>

</div>

</div>

</div>

</div>

<div class="container my-5">

<h2 class="text-center mb-4">Grade Curricular</h2>

<div class="row g-4 text-center">

<div class="col-md-3"><div class="card p-3">Lógica de Programação</div></div>
<div class="col-md-3"><div class="card p-3">Banco de Dados</div></div>
<div class="col-md-3"><div class="card p-3">Desenvolvimento Web</div></div>
<div class="col-md-3"><div class="card p-3">Programação Orientada a Objetos</div></div>

</div>

</div>

<div class="container text-center my-5">

<a href="{{ route('cursos') }}" class="btn btn-secondary me-3">← Voltar para cursos</a>
<a href="{{ route('contato') }}" class="btn btn-primary">Inscreva-se</a>

</div>

<footer class="bg-dark text-white text-center p-4">
<p class="mb-0">© 2026 Escola Técnica</p>
</footer>

</body>
</html>