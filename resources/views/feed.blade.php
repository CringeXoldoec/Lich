
<h2>Оставить отзыв</h2>
<form action="{{ route('feedbacks.store') }}" method="POST">
    @csrf
    <textarea name="descript" rows="3" required></textarea>
    <button type="submit">Отправить</button>
</form>

<h1>Все отзывы отзывы</h1>

@if(count($feedbacks) === 0)
    <p>Вы еще не оставили ни одного отзыва.</p>
@else
    <table class="table">
        <thead>
            <tr>
                <th>Текст отзыва</th>
                <th>Дата создания</th>
            </tr>
        </thead>
        <tbody>
            @foreach($feedbacks as $feedback)
                <tr>
                    <td>{{ $feedback->descript }}</td>
                    <td>{{ $feedback->created_at->format('d M Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
