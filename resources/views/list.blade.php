<h1>Ваши заявки</h1>

@if($requests->count() == 0)
    <p>У вас пока нет активных заявок.</p>
@else
    <table class="table">
        <thead>
            <tr>
                <th>Курс</th>
                <th>Дата</th>
                <th>Способ оплаты</th>
                <th>Дата создания</th>
            </tr>
        </thead>
        <tbody>
            @foreach($requests as $request)
                <tr>
                    <td>{{ $request->course }}</td>
                    <td>{{ $request->date }}</td>
                    <td>{{ $request->payment_metod }}</td>
                    <td>{{ $request->created_at->format('d M Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $requests->links() }}
@endif

<a href="{{ route('feedbacks') }}">Оставить отзывы</a>



