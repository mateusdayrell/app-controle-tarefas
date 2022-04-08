Bem vindo ao controle tarefas

@auth
    <h1>Você está autenticado</h1>
    <p>ID: {{ Auth::user()->id }}</p>
    <p>Nome: {{ Auth::user()->name }}</p>
    <p>Email: {{ Auth::user()->email }}</p>
@endauth

@guest
    Olá visitante
@endguest