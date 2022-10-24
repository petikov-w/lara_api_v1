<div class="card m-2" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{ $article['title'] ?? NULL}}</h5>
        <p class="card-text">{{ rtrim(mb_strimwidth($article['body'], 0, 60)) . '...' ?? NULL }}</p>
        <a href="{{ route('article', ['article' => $article['id']]) }}" class="btn btn-primary">Подробнее...</a>
    </div>
</div>
