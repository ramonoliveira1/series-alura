<x-layout title="Episodios" :mensagem-sucesso="$mensagemSucesso">
    <form action="" method="post">
        @csrf
        <ul class="list-group">
            @foreach ($episodes as $episode)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                        Episodio {{ $episode->number }}

                    <input @if($episode->watched) checked @endif type="checkbox" name="episodes[]" value="{{ $episode->id }}">
                </li>
            @endforeach
        </ul>

        <button class="btn btn-primary my-3">Salvar</button>
    </form>
</x-layout>
