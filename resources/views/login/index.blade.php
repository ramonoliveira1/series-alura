<x-layout title="Login">
    <form action="{{ route('signin') }}" method="post" class="mt-2">
        @csrf
        <div class="form-group">
            <label class="form-label" for="email">E-mail</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
            <label class="form-label" for="password">Senha</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <button class="btn btn-primary mt-4" type="submit">Entrar</button>

        <a href="{{ route('register') }}" class="btn btn-secondary mt-4 ml-4">Cadastre-se</a>

    </form>

</x-layout>
