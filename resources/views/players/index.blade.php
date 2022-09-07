<x-app-layout>
    <x-slot name="header">
        <x-application-logo/>
    </x-slot>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-3 lg:mx-12">
        <div class="relative lg:inline-flex bg-white rounded-xl lg:left-16">
            <x-category-dropdown/>
        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex bg-white rounded-xl px-3 py-1 lg:left-16">
            <form method="GET" action="/players">
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                <input type="text"
                       name="search"
                       placeholder="Pretraži igrače"
                       class="bg-transparent placeholder-black font-semibold text-sm"
                       value="{{ request('search') }}">
            </form>
        </div>

        <div class="relative flex lg:inline-flex bg-white rounded-xl px-3 py-2 bg-gray-500 text-white hover:bg-gray-700 lg:left-16">
            <a href="dashboard/register">Registriraj novog igrača</a>
        </div>
    </div>

    @foreach($players as $player)
        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <a class="text-xl hover:text-blue-600" href="/players/{{ $player->slug }}">
                            {{ $player->name }} {{ $player->surname }}
                        </a>

                        <span class="text-xs px-3 py-1 border border-blue-600 rounded-full text-blue-600 font-semibold mx-2 hover:text-blue-800">
                            <a href="/players?category={{ $player->category->slug }}">{{ $player->category->name }}</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{ $players->links() }}
</x-app-layout>
