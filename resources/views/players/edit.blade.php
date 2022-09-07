<x-app-layout>
    <x-slot name="header">
        <x-application-logo/>
    </x-slot>

    <div class="px-3 mt-3 hover:text-blue-600">
        <a href="/players/{{ $player->slug }}">
            < Povratak na igrača
        </a>
    </div>

    <main class="max-w mx-auto mt-5 bg-white p-6 rounded-xl">
        <h1 class="text-center font-bold text-xl">Uredi podatke za igrača: {{ $player->name }} {{ $player->surname }}</h1>

        <form method="POST" action="/players/{{ $player->slug }}" enctype="multipart/form-data" class="mt-10 lg:grid lg:grid-cols-2 gap-8">
            @csrf
            @method('PATCH')

            <x-form.input name="ime">
                <input class="border border-gray-400 p-2 w-full rounded-xl"
                       type="text"
                       name="name"
                       id="name"
                       value="{{ $player->name }}"
                       required
                >
            </x-form.input>
            <x-form.input name="prezime">
                <input class="border border-gray-400 p-2 w-full rounded-xl"
                       type="text"
                       name="surname"
                       id="surname"
                       value="{{ $player->surname }}"
                       required
                >
            </x-form.input>
            <x-form.input name="kratica imena i prezimena (prva dva/tri slova imena i prezimena)">
                <input class="border border-gray-400 p-2 w-full rounded-xl"
                       type="text"
                       name="slug"
                       id="slug"
                       value="{{ $player->slug }}"
                       required
                >
            </x-form.input>

            <x-form.field>
                <x-form.label name="primarna pozicija"/>

                <select name="primary_position" class="rounded-xl w-full">
                    <option value="{{ $player->primary_position }}">{{ $player->primary_position }}</option>
                    <option value="Lijevo krilo">Lijevo krlio</option>
                    <option value="Lijevi vanjski">Lijevi vanjski</option>
                    <option value="Srednji vanjski">Srednji vanjski</option>
                    <option value="Desni vanjski">Desni vanjski</option>
                    <option value="Desno krilo">Desno krlio</option>
                    <option value="Pivot">Pivot</option>
                    <option value="Golman">Golman</option>
                </select>

                <x-form.error name="primary_position"/>
            </x-form.field>

            <x-form.field>
                <x-form.label name="sekundarna pozicija"/>

                <select name="secondary_position" class="rounded-xl w-full">
                    <option value="{{ $player->secondary_position }}">{{ $player->secondary_position }}</option>
                    <option value="Lijevo krilo">Lijevo krlio</option>
                    <option value="Lijevi vanjski">Lijevi vanjski</option>
                    <option value="Srednji vanjski">Srednji vanjski</option>
                    <option value="Desni vanjski">Desni vanjski</option>
                    <option value="Desno krilo">Desno krlio</option>
                    <option value="Pivot">Pivot</option>
                    <option value="Golman">Golman</option>
                    <option value="Nema pozicije">Nema pozicije</option>
                </select>

                <x-form.error name="secondary_position"/>
            </x-form.field>

            <x-form.field>
                <x-form.label name="dominantna ruka"/>

                <select name="dominant_hand" class="rounded-xl w-full">
                    <option value="{{ $player->dominant_hand }}">{{ $player->dominant_hand }}</option>
                    <option value="Lijeva">Lijeva</option>
                    <option value="Desna">Desna</option>
                </select>

                <x-form.error name="dominant_hand"/>
            </x-form.field>

            <x-form.input name="visina">
                <input class="border border-gray-400 p-2 w-full rounded-xl"
                       type="number"
                       name="height"
                       id="height"
                       value="{{ $player->height }}"
                       required
                >
            </x-form.input>
            <x-form.input name="težina">
                <input class="border border-gray-400 p-2 w-full rounded-xl"
                       type="number"
                       name="weight"
                       id="weight"
                       value="{{ $player->weight }}"
                       required
                >
            </x-form.input>
            <x-form.input name="datum rođenja">
                <input class="border border-gray-400 p-2 w-full rounded-xl"
                       type="date"
                       name="day_of_birth"
                       id="day_of_birth"
                       value="{{ $player->day_of_birth }}"
                       required
                >
            </x-form.input>

            <x-form.field>
                <x-form.label name="godine"/>

                <select name="years" class="rounded-xl w-full">
                    <option value="{{ $player->years }}">{{ $player->years }}</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                </select>

                <x-form.error name="years"/>
            </x-form.field>

            <x-form.field>
                <x-form.label name="kategorija"/>

                <select name="category_id" id="category_id" class="rounded-xl w-full">
                    @foreach(\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}"
                                {{ old('category_id', $player->category_id) == $category->id ? 'selected' : ''}}
                        >{{ $category->name }}</option>
                    @endforeach
                </select>

                <x-form.error name="category"/>
            </x-form.field>

            <x-form.input name="visina majke">
                <input class="border border-gray-400 p-2 w-full rounded-xl"
                       type="number"
                       name="mother_height"
                       id="mother_height"
                       value="{{ $player->mother_height }}"
                       required
                >
            </x-form.input>

            <x-form.input name="visina oca">
                <input class="border border-gray-400 p-2 w-full rounded-xl"
                       type="number"
                       name="father_height"
                       id="father_height"
                       value="{{ $player->father_height }}"
                       required
                >
            </x-form.input>

            <x-form.input name="oib">
                <input class="border border-gray-400 p-2 w-full rounded-xl"
                       type="number"
                       name="oib"
                       id="oib"
                       value="{{ $player->oib }}"
                       required
                >
            </x-form.input>

            <x-form.input name="broj telefona">
                <input class="border border-gray-400 p-2 w-full rounded-xl"
                       type="number"
                       name="phone_number"
                       id="phone_number"
                       value="{{ $player->phone_number }}"
                       required
                >
            </x-form.input>

            <x-form.input name="prvi sport">
                <input class="border border-gray-400 p-2 w-full rounded-xl"
                       type="text"
                       name="first_sport"
                       id="first_sport"
                       value="{{ $player->first_sport }}"
                       required
                >
            </x-form.input>

            <x-form.input name="škola">
                <input class="border border-gray-400 p-2 w-full rounded-xl"
                       type="text"
                       name="school"
                       id="school"
                       value="{{ $player->school }}"
                       required
                >
            </x-form.input>

            <x-form.input name="adresa">
                <input class="border border-gray-400 p-2 w-full rounded-xl"
                       type="text"
                       name="address"
                       id="address"
                       value="{{ $player->address }}"
                       required
                >
            </x-form.input>

            <x-form.field>
                <x-button>
                    Napravi izmjene
                </x-button>
            </x-form.field>
        </form>
    </main>
</x-app-layout>
