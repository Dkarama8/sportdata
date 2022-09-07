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
                <h1 class="text-xl mt-3 border-b border-gray-200">Testiranja</h1>

                <h2 class="text-sm mt-3">Ocijene od 1 do 10</h2>

                @foreach($player->testing as $testing)
                    <x-playertesting :testing="$testing"/>
                @endforeach

                @include('players._add-testing-form')
            </x-showplayer>
        </div>
    </article>
</x-app-layout>
