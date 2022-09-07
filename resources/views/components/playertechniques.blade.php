@props(['technique'])

<x-showplayer>
    <p class="text-xs">Testiranje uneseno u sustav: <time>{{ $technique->created_at->format('d.m.Y') }}</time></p>
    <x-showgrades>
        <div>Hvatanje / dodavanje</div>
        <div>Dribling</div>
        <div>Individualna taktika</div>
        <div>Grupna taktika</div>
        <div>Kolektivna taktika</div>
    </x-showgrades>
    <x-showgrades>
        <div>{{ $technique->catch_pass }}</div>
        <div>{{ $technique->dribble }}</div>
        <div>{{ $technique->tactics_individual }}</div>
        <div>{{ $technique->tactics_group }}</div>
        <div>{{ $technique->tactics_colective }}</div>
    </x-showgrades>
</x-showplayer>
