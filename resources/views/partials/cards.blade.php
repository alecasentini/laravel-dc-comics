@foreach ($comics as $comic)

<div class="flip-card">
    <a href="{{ route('comics.show', $comic->id) }}">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            </div>
            <div class="flip-card-back">
                <p>{{ $comic['series'] }}</p>
                <p>{{ $comic['type'] }}</p>
                <p>{{ $comic['price'] }}</p>
            </div>
        </div>
    </a>

</div>
@endforeach