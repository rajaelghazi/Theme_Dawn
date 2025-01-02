<div x-data="{
    menuItems: [
        { name: 'Bags', dropdown: [{ name: 'Handbags', url: 'shop/handbags' }, { name: 'Backpacks', url: 'shop/backpacks' }] },
        { name: 'Shoes', dropdown: [{ name: 'Sneakers', url: 'shop/sneakers' }, { name: 'Boots', url: 'shop/boots' }] },
        { name: 'Lookbook', dropdown: null, url: 'shop/lookbook' }
    ],
    openDropdown: null, // Tracks which dropdown is open
    showSearch: false, // Controls the visibility of the search input
    searchQuery: '' // Holds the value of the search input
}"
    class="flex flex-row justify-between items-center sticky z-10 top-0 border-b px-52 py-5 bg-white"
    @click.outside="openDropdown = null">

    <!-- Logo Section -->
    <div class="flex flex-row items-center">
        <div class="mr-0">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-9">
        </div>

        <!-- Menu Section -->
        <div x-show="!showSearch" class="flex space-x-6">
            <template x-for="(item, index) in menuItems" :key="index">
                <div class="relative">
                    <a :href="item.url ? '/' + item.url : '#'"
                        class="text-[#4d4d4d] hover:text-black flex items-center space-x-1"
                        @click="openDropdown === index ? openDropdown = null : openDropdown = index">
                        <span x-text="item.name" class="hover:underline text-[.9rem]"></span>
                        <template x-if="item.dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="h-3 w-3 transition-transform duration-300"
                                :class="{ 'rotate-180': openDropdown === index }">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </template>
                    </a>

                    <template x-if="item.dropdown && openDropdown === index">
                        <div
                            class="absolute top-full left-0 mt-2 w-48 bg-white border border-gray-200 shadow-lg rounded-md py-2 z-20">
                            <template x-for="dropdownItem in item.dropdown" :key="dropdownItem.name">
                                <a :href="dropdownItem.url"
                                    class="block px-4 py-2 text-[.9rem] hover:bg-gray-100 hover:text-black hover:underline"
                                    x-text="dropdownItem.name" @click="openDropdown = null">
                                </a>
                            </template>
                        </div>
                    </template>
                </div>
            </template>
        </div>
    </div>

    <div x-show="showSearch" class="absolute inset-0 flex items-center justify-center bg-white z-10">
        <div class="flex items-center space-x-2 border border-gray-300 p-2 rounded-md w-1/3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 text-gray-500">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>

            <input type="text" x-model="searchQuery" placeholder="Search..." class="w-full focus:outline-none">

            <button @click="showSearch = false; searchQuery = ''" class="text-gray-500 hover:text-black">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <div x-show="!showSearch" class="flex space-x-6 items-center">
        <div @click="showSearch = true" class="cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
        </div>

        <div>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                </svg>
            </a>
        </div>
    </div>
</div>
