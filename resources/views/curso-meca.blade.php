<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Curso de Mecatrônica</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand" href="{{ route('index') }}">Escola Técnica</a>

<div class="collapse navbar-collapse">
<ul class="navbar-nav ms-auto">

<li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Início</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('cursos') }}">Cursos</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('sobre') }}">Sobre</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('contato') }}">Contato</a></li>

</ul>
</div>

</div>
</nav>

<section class="bg-light p-5 text-center">

<div class="container">

<h1 class="display-5">Curso Técnico em Mecatrônica</h1>

<p class="lead">
Curso que integra mecânica, eletrônica e programação para desenvolver sistemas automatizados e robótica industrial.
</p>

<img src="https://picsum.photos/900/400?random=201" class="img-fluid rounded mt-3">

</div>

</section>

<div class="container my-5">

<div class="row g-4 align-items-center">

<div class="col-md-6">

<h3>Sobre o curso</h3>

<p>
O curso técnico em Mecatrônica prepara profissionais para atuar
na automação industrial, manutenção de máquinas e desenvolvimento
de sistemas automatizados.
</p>

<p>
Os alunos aprendem conceitos de eletrônica, programação e
robótica aplicados à indústria moderna.
</p>

</div>

<div class="col-md-6">

<div class="card shadow p-4">

<h4>Informações do Curso</h4>

<ul class="list-group list-group-flush">

<li class="list-group-item">Duração: 2 anos</li>
<li class="list-group-item">Modalidade: Presencial</li>
<li class="list-group-item">Área: Tecnologia Industrial</li>
<li class="list-group-item">Mercado: Indústrias e automação</li>

</ul>

</div>

</div>

</div>

</div>

<div class="container my-5">

<h2 class="text-center mb-4">Grade Curricular</h2>

<div class="row g-4 text-center">

<div class="col-md-3"><div class="card p-3">Eletrônica</div></div>
<div class="col-md-3"><div class="card p-3">Robótica</div></div>
<div class="col-md-3"><div class="card p-3">Automação Industrial</div></div>
<div class="col-md-3"><div class="card p-3">Programação de Sistemas</div></div>

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