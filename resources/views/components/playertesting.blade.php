@props(['testing'])

<x-showplayer>
    <p class="text-xs">Testiranje uneseno u sustav: <time>{{ $testing->created_at->format('d.m.Y') }}</time></p>
    <x-showgrades>
        <div>Brzina</div>
        <div>Agilnost</div>
        <div>Fleksibilnost</div>
        <div>Jakost</div>
        <div>Izdržljivost</div>
    </x-showgrades>
    <x-showgrades>
        <div>{{ $testing->speed }}</div>
        <div>{{ $testing->agility }}</div>
        <div>{{ $testing->flexibility }}</div>
        <div>{{ $testing->strength }}</div>
        <div>{{ $testing->endurance }}</div>
    </x-showgrades>
</x-showplayer>
