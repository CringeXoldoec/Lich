<form action="{{route('request.store')}}"
method="POST"
>
    @csrf
    <input name="course" placeholder="Название курса">
    <input type="date" name="date" placeholder="День">
    <select name="payment_metod">
        <option name="card" value="card">Картой</option>
        <option name="cash" value="cash">Наличкой</option>
    </select>
    <button type="submit">Отправить</button>

</form>

@if(session()->has('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
@endif


@if(\Illuminate\Support\Facades\Auth::check())
    @if(\Illuminate\Support\Facades\Auth::user()->role === 'admin')
        <a href="/admin">Админ панель</a>
    @endif
@endif

<a href="{{ route('list') }}">Посмотреть заявки</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Выход</button>
</form>

