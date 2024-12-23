<h2>Регистрация</h2>

<form action="{{ route('auth.register') }}" method="POST">
    @csrf
    <input type="text" id="login" name="login" placeholder="логин"required>
    @if($errors->has('login'))
        <span class="error">{{ $errors->first('login') }}</span>
    @endif
    <input type="password" id="password" name="password" required placeholder="пароль">
    @if($errors->has('password'))
        <span class="error">{{ $errors->first('password') }}</span>
    @endif

    <input type="text" id="full_name" name="full_name" required placeholder="ФИО">
    @if($errors->has('full_name'))
        <span class="error">{{ $errors->first('full_name') }}</span>
    @endif
    <input type="tel" id="phone" name="phone" required placeholder="телефон">
    @if($errors->has('phone'))
        <span class="error">{{ $errors->first('phone') }}</span>
    @endif
    <input type="email" id="email" name="email" required placeholder="почта">
    @if($errors->has('email'))
        <span class="error">{{ $errors->first('email') }}</span>
    @endif


    <button type="submit">Зарегистрироваться</button>
</form>
