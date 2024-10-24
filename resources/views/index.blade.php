<div>
    <form action="{{ route('prev.show') }}" method="POST">
        <p>Предложение:</p>
        <input type="text" name="text">
        <button type="submit">Отправить</button>
</form>
<h2>Предложения</h2>
<ul style="list-style: none;">
@foreach($previews as $preview)
    <li>
        <p>{{ $preview->text }} </p>
        <p>{{ $preview->spec }} </p>
        <p>{{ $preview->status }} </p>
        @if ($preview->status == 'на рассмотрении')
        <button type="submit">Принять</button><button type="submit">Отклонить</button>
        @endif
</li>
@endforeach
</ul>
</div>