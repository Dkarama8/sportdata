<x-app-layout>
    <x-slot name="header">
        <x-application-logo/>
    </x-slot>

    <article>
        <div class="px-3 mt-3 hover:text-blue-600">
            <a href="/players">
                < Povratak na pregled igrača
            </a>
        </div>

        <div>
            <x-showplayer>
                <h1 class="text-3xl mb-1">{{ $player->name }}
                    {{ $player->surname }}
                </h1>

                <span class="text-xs px-3 py-1 border border-blue-600 rounded-full text-blue-600 font-semibold hover:text-blue-800">
                    <a href="/players?category={{ $player->category->slug }}">{{ $player->category->name }}</a>
                </span>

                @include('players.player-nav')
            </x-showplayer>

            <x-showplayer>
                <h1 class="text-xl mt-3 border-b border-gray-200">Pozicija na terenu</h1>
                <x-showcomp>
                    <div>Primarna: {{ $player->primary_position }}</div>
                    <div>Sekundarna: {{ $player->secondary_position }}</div>
                </x-showcomp>
            </x-showplayer>

            <x-showplayer>
                <h2 class="text-xl mt-3 border-b border-gray-200">Osnovni podaci</h2>
                <x-showcomp>
                    <div>Visina: {{ $player->height }}cm</div>
                    <div>Težina: {{ $player->weight }}kg</div>
                    <div>Dominantna ruka: {{ $player->dominant_hand }}</div>
                </x-showcomp>
                <x-showcomp>
                    <date>Datum rođenja: {{ $player->day_of_birth }}</date>
                    <div>Godine: {{ $player->years }}</div>
                    <div>Registracija u klubu: <time>{{ $player->created_at->format('d.m.Y') }}</time></div>
                </x-showcomp>
            </x-showplayer>

            <x-showplayer>
                <h2 class="text-xl mt-3 border-b border-gray-200">Više detalja</h2>
                <x-showcomp>
                    <div>Visina majke: {{ $player->mother_height }}cm</div>
                    <div>Visina oca: {{ $player->father_height }}cm</div>
                    <div>Broj telefona: {{ $player->phone_number }}</div>
                </x-showcomp>
                <x-showcomp>
                    <date>OIB: {{ $player->oib }}</date>
                    <div>Prvi sport: {{ $player->first_sport }}</div>
                    <div>Škola: {{ $player->school }}</div>
                </x-showcomp>
                <x-showcomp>
                    <date>Adresa: {{ $player->address }}</date>
                </x-showcomp>
            </x-showplayer>

            <section>
                <x-showplayer>
                    <h3 class="text-xl border-b border-gray-200">Komentari</h3>

                    @include('players._add-comment-form')

                    @foreach($player->comments as $comment)
                        <x-playercomment :comment="$comment"/>
                    @endforeach
                </x-showplayer>
            </section>
        </div>
    </article>
</x-app-layout>
