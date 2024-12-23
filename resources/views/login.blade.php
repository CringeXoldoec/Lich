<form action="{{ route('login.post') }}" method="POST">
    @csrf
    <input type="text" placeholder="Логин" name="login" value="{{ old('login') }}" required>
    <input type="password" placeholder="Пароль" name="password" required>
    <button type="submit">Вход</button>
</form>
