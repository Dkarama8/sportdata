<x-dropdown-category>
    <x-slot name="trigger">
        <button class="py-3 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 flex lg:inline-flex">
            {{ isset($currentCategory) ? $currentCategory->name : 'Kategorije' }}

            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;"/>
        </button>
    </x-slot>

    <x-dropdown-citem href="/players?{{ http_build_query(request()->except('category', 'page')) }}"
                      :active="request()->routeIs('players')">Svi igrači
    </x-dropdown-citem>

    @foreach($categories as $category)
        <x-dropdown-citem
            href="/players?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
            :active='request()->is("categories/{$category->slug}")'
        >{{ ucwords($category->name) }}</x-dropdown-citem>
    @endforeach
</x-dropdown-category>
