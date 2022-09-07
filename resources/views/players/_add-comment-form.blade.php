<form method="POST" action="/players/{{ $player->slug }}/comments" class="mb-5 border border-gray-200 p-4 rounded-xl mt-3">
    @csrf
    <header class="font-bold mb-1">
        {{ Auth::user()->name }} - {{ Auth::user()->head_coach }}
    </header>

    <div>
        <textarea
            name="body"
            class="w-full text-sm focus:outline-none focus:ring rounded-xl"
            rows="2"
            placeholder="Napiši komentar za ovog igrača"
            required></textarea>
    </div>

    <div class="flex justify-end">
        <x-button>Objavi</x-button>
    </div>

</form>
