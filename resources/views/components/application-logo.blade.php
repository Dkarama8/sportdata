<div class="grid grid-cols-2">
<a href="{{ route('dashboard') }}">
    <img src="{{URL::asset('/images/noblogo-sm.png')}}" alt="SPORTDATA">
</a>
<p class="mt-2 text-right text-gray-500 text-sm">Datum: {{ now()->format('d.m.Y') }}</p>
</div>
