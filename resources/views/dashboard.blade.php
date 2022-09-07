<x-app-layout>
    <x-slot name="header">
        <x-application-logo/>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Aktualna sezona: Sezona 2022./2023.
                </div>
            </div>
        </div>
    </div>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a class="hover:text-blue-600" href="/players">Pregled igrača</a>
                </div>
            </div>
        </div>
    </div>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="overflow-x-auto relative">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    Datum
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Kategorija
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Domaćin
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Rezultat
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Gost
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="bg-white border-b">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    28.08.2022
                                </th>
                                <td class="py-4 px-6">
                                    <a href="/players?category=u17" class="hover:text-gray-800">U17</a>
                                </td>
                                <td class="py-4 px-6">
                                    PPD Zagreb
                                </td>
                                <td class="py-4 px-6">
                                    28:25
                                </td>
                                <td class="py-4 px-6">
                                    RK Dubrava
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    29.08.2022
                                </th>
                                <td class="py-4 px-6">
                                    <a href="/players?category=u15" class="hover:text-gray-800">U15</a>
                                </td>
                                <td class="py-4 px-6">
                                    PPD Zagreb
                                </td>
                                <td class="py-4 px-6">
                                    20:18
                                </td>
                                <td class="py-4 px-6">
                                    RK Sisak
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    29.08.2022
                                </th>
                                <td class="py-4 px-6">
                                    <a href="/players?category=u13" class="hover:text-gray-800">U13</a>
                                </td>
                                <td class="py-4 px-6">
                                    PPD Zagreb
                                </td>
                                <td class="py-4 px-6">
                                    30:20
                                </td>
                                <td class="py-4 px-6">
                                    RK Sesvete
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    30.08.2022
                                </th>
                                <td class="py-4 px-6">
                                    <a href="/players?category=u11" class="hover:text-gray-800">U11</a>
                                </td>
                                <td class="py-4 px-6">
                                    PPD Zagreb
                                </td>
                                <td class="py-4 px-6">
                                    22:21
                                </td>
                                <td class="py-4 px-6">
                                    RK Pavleki
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    03.09.2022
                                </th>
                                <td class="py-4 px-6">
                                    <a href="/players?category=u17" class="hover:text-gray-800">U17</a>
                                </td>
                                <td class="py-4 px-6">
                                    RK Dugo selo
                                </td>
                                <td class="py-4 px-6">
                                    20:29
                                </td>
                                <td class="py-4 px-6">
                                    PPD Zagreb
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    03.09.2022
                                </th>
                                <td class="py-4 px-6">
                                    <a href="/players?category=u15" class="hover:text-gray-800">U15</a>
                                </td>
                                <td class="py-4 px-6">
                                    PPD Zagreb
                                </td>
                                <td class="py-4 px-6">
                                    35:19
                                </td>
                                <td class="py-4 px-6">
                                    RK Gorica
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    04.09.2022
                                </th>
                                <td class="py-4 px-6">
                                    <a href="/players?category=u13" class="hover:text-gray-800">U13</a>
                                </td>
                                <td class="py-4 px-6">
                                    PPD Zagreb
                                </td>
                                <td class="py-4 px-6">
                                    24:22
                                </td>
                                <td class="py-4 px-6">
                                    RK Maksimir pastela
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    04.09.2022
                                </th>
                                <td class="py-4 px-6">
                                    <a href="/players?category=u11" class="hover:text-gray-800">U11</a>
                                </td>
                                <td class="py-4 px-6">
                                    RK Sisak
                                </td>
                                <td class="py-4 px-6">
                                    26:26
                                </td>
                                <td class="py-4 px-6">
                                    PPD Zagreb
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    01.10.2022
                                </th>
                                <td class="py-4 px-6">
                                    <a href="/players?category=u13" class="hover:text-gray-800">U13</a>
                                </td>
                                <td class="py-4 px-6">
                                    PPD Zagreb
                                </td>
                                <td class="py-4 px-6">
                                    -
                                </td>
                                <td class="py-4 px-6">
                                    RK Sesvete
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    02.10.2022
                                </th>
                                <td class="py-4 px-6">
                                    <a href="/players?category=u11" class="hover:text-gray-800">U11</a>
                                </td>
                                <td class="py-4 px-6">
                                    RK Sesvete
                                </td>
                                <td class="py-4 px-6">
                                    -
                                </td>
                                <td class="py-4 px-6">
                                    PPD Zagreb
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    02.10.2022
                                </th>
                                <td class="py-4 px-6">
                                    <a href="/players?category=u17" class="hover:text-gray-800">U17</a>
                                </td>
                                <td class="py-4 px-6">
                                    RK Zagorica
                                </td>
                                <td class="py-4 px-6">
                                    -
                                </td>
                                <td class="py-4 px-6">
                                    PPD Zagreb
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    02.10.2022
                                </th>
                                <td class="py-4 px-6">
                                    <a href="/players?category=u15" class="hover:text-gray-800">U15</a>
                                </td>
                                <td class="py-4 px-6">
                                    PPD Zagreb
                                </td>
                                <td class="py-4 px-6">
                                    -
                                </td>
                                <td class="py-4 px-6">
                                    RK Rugvica
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
