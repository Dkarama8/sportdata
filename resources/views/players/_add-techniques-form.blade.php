<form method="POST" action="/players/{{ $player->slug }}/techniques/save" class="mb-5 border border-gray-200 p-4 rounded-xl mt-3">
    @csrf
    <header class="font-bold mb-1">
        {{ Auth::user()->name }} - {{ Auth::user()->head_coach }}
    </header>

    <div class="lg:grid lg:grid-cols-5 gap-3">
        <x-form.field>
            <x-form.label name="Hvatanje / dodavanje"/>

            <select name="catch_pass" class="rounded-xl w-full">
                <option value="{{ old('catch_pass') }}">{{ old('catch_pass') }}</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>

            <x-form.error name="catch_pass"/>
        </x-form.field>

        <x-form.field>
            <x-form.label name="Dribling"/>

            <select name="dribble" class="rounded-xl w-full">
                <option value="{{ old('dribble') }}">{{ old('dribble') }}</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>

            <x-form.error name="dribble"/>
        </x-form.field>

        <x-form.field>
            <x-form.label name="Individualna taktika"/>

            <select name="tactics_individual" class="rounded-xl w-full">
                <option value="{{ old('tactics_individual') }}">{{ old('tactics_individual') }}</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>

            <x-form.error name="tactics_individual"/>
        </x-form.field>

        <x-form.field>
            <x-form.label name="Grupna taktika"/>

            <select name="tactics_group" class="rounded-xl w-full">
                <option value="{{ old('tactics_group') }}">{{ old('tactics_group') }}</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>

            <x-form.error name="tactics_group"/>
        </x-form.field>

        <x-form.field>
            <x-form.label name="Kolektivna taktika"/>

            <select name="tactics_colective" class="rounded-xl w-full">
                <option value="{{ old('tactics_colective') }}">{{ old('tactics_colective') }}</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>

            <x-form.error name="tactics_colective"/>
        </x-form.field>
    </div>

    <div class="flex justify-end mt-2">
        <x-button>Dodaj</x-button>
    </div>

</form>
