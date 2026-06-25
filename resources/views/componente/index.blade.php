<div>
    <form action="{{ route('componente.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="hora_inicio">Hora Início</label>
        <input type="text" name="hora_inicio" id="hora_inicio">

        <label for="hora_fim">Hora Fim</label>
        <input type="text" name="hora_fim" id="hora_fim">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>

    <table border="1">
        <tr>
            <td>Nome do Componente</td>
            <td>Hora Início</td>
            <td>Hora Fim</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($componentes)
                @foreach($componentes as $componente)
                    <tr>
                        <td>
                            <h3>{{ $componente->nome }}</h3>
                        </td>
                        <td>{{ $componente->hora_inicio }}</td>
                        <td>{{ $componente->hora_fim }}</td>
                        <td>
                            <form action="{{ route('componente.remove', ['id' => $componente->id]) }}" method="GET">
                                @csrf
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('componente.atualizar', ['id' => $componente->id]) }}" method="GET">
                                @csrf
                                <button type="submit">Atualizar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>
</div>
