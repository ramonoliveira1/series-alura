<x-layout title="Cadastro de Usuario">
    <form method="post" class="mt-2">
        @csrf
        <div class="form-group">
            <label class="form-label" for="name">Nome</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>

        <div class="form-group">
            <label class="form-label" for="email">E-mail</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>

        <div class="form-group">
            <label class="form-label" for="password">Senha</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <button class="btn btn-primary mt-4" type="submit">Cadastre-se</button>

        <a href="{{ route('login') }}" class="btn btn-secondary mt-4 ml-4">Voltar</a>

    </form>

</x-layout>
