<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sobre</title>

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
<a class="nav-link active" href="{{route('sobre')}}">Sobre</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{route('contato')}}">Contato</a>
</li>

</ul>

</div>
</nav>

<div class="container my-5">

<h1 class="text-center mb-4">Sobre a Escola</h1>

<div class="row align-items-center">

<div class="col-md-6">
<img src="https://picsum.photos/600/400?random=9" class="img-fluid rounded">
</div>

<div class="col-md-6">
<p>
Nossa escola foi fundada com o objetivo de oferecer ensino técnico de qualidade.
</p>

<p>
Ao longo dos anos formamos diversos profissionais capacitados
para atuar em diferentes áreas do mercado.
</p>

<p>
Nosso compromisso é unir teoria e prática para preparar nossos alunos
para os desafios do mundo profissional.
</p>

</div>

</div>

</div>

</body>
</html>