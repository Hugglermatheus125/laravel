<div>
    <form action="{{ route('aluno.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <button type="submit">Salvar</button>
    </form>
</div>
