<div class="flex mt-5 space-x-5">

    <!-- Navigation Links -->
    <x-button>
        <a href="/players/{{ $player->slug }}">
            Generalni podaci
        </a>
    </x-button>

    <x-button>
        <a href="/players/{{ $player->slug }}/techniques">
            Tehnika
        </a>
    </x-button>

    <x-button>
        <a href="/players/{{ $player->slug }}/testing">
            Testiranja
        </a>
    </x-button>

    <x-button>
        <a href="/players/{{ $player->slug }}/edit">Uredi podatke</a>
    </x-button>


    <form method="POST" action="/players/{{ $player->slug }}">
        @csrf
        @method('DELETE')
        <x-button class="bg-red-600 hover:bg-red-800" onclick="return confirm('Želite li obrisati igrača?')">
            Izbriši
        </x-button>
    </form>
</div>
