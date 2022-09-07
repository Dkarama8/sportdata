@props(['comment'])

<article class="bg-gray-200 rounded-xl px-2">
    <header class="mt-5">
        <div class="font-bold">{{ $comment->user->name }} - {{ $comment->user->head_coach }}</div>
        <p class="text-xs">Komentar napisan <time>{{ $comment->created_at->format('d.m.Y') }}</time></p>
    </header>

    <p class="mt-3">
        {{ $comment->body }}
    </p>
</article>
