<form method="POST" action="/players/{{ $player->slug }}/testing/save" class="mb-5 border border-gray-200 p-4 rounded-xl mt-3">
    @csrf
    <header class="font-bold mb-1">
        {{ Auth::user()->name }} - {{ Auth::user()->head_coach }}
    </header>

    <div class="lg:grid lg:grid-cols-5 gap-3">
        <x-form.field>
            <x-form.label name="Brzina"/>

            <select name="speed" class="rounded-xl w-full">
                <option value="{{ old('speed') }}">{{ old('speed') }}</option>
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

            <x-form.error name="speed"/>
        </x-form.field>

        <x-form.field>
            <x-form.label name="Agilnost"/>

            <select name="agility" class="rounded-xl w-full">
                <option value="{{ old('agility') }}">{{ old('agility') }}</option>
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

            <x-form.error name="agility"/>
        </x-form.field>

        <x-form.field>
            <x-form.label name="Fleksibilnost"/>

            <select name="flexibility" class="rounded-xl w-full">
                <option value="{{ old('flexibility') }}">{{ old('flexibility') }}</option>
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

            <x-form.error name="flexibility"/>
        </x-form.field>

        <x-form.field>
            <x-form.label name="Jakost"/>

            <select name="strength" class="rounded-xl w-full">
                <option value="{{ old('strength') }}">{{ old('strength') }}</option>
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

            <x-form.error name="strength"/>
        </x-form.field>

        <x-form.field>
            <x-form.label name="Izdržljivost"/>

            <select name="endurance" class="rounded-xl w-full">
                <option value="{{ old('endurance') }}">{{ old('endurance') }}</option>
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

            <x-form.error name="endurance"/>
        </x-form.field>
    </div>

    <div class="flex justify-end mt-2">
        <x-button>Dodaj</x-button>
    </div>

</form>
