@extends('layouts.app')
@section('content')
    <div class="bg-white relative flex flex-col lg:mb-11 mb-7 mx-auto max-w-6xl sm:px-6 lg:px-5 px-5">
        <div class="relative pt-6 sm:pb-24">
            <nav aria-label="Breadcrumb" class="">
                <ol role="list" class="flex items-center space-x-4">
                    <li>
                        <div class="flex items-center">
                            <a href="#" class="lg:mr-4 mr-2 text-sm font-medium text-gray-900">Home</a>
                            <svg viewBox="0 0 6 20" aria-hidden="true" class="h-5 w-auto text-gray-300">
                                <path d="M4.878 4.34H3.551L.27 16.532h1.327l3.281-12.19z" fill="currentColor" />
                            </svg>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <a href="#" class="lg:mr-4 mr-2 text-sm font-medium text-gray-900">Handbags</a>
                            <svg viewBox="0 0 6 20" aria-hidden="true" class="h-5 w-auto text-gray-300">
                                <path d="M4.878 4.34H3.551L.27 16.532h1.327l3.281-12.19z" fill="currentColor" />
                            </svg>
                        </div>
                    </li>

                    <li>
                        <a href="#" aria-current="page" class="text-sm font-medium text-gray-500 hover:text-gray-600">
                            Small Convertible Flex Bag
                        </a>
                    </li>
                </ol>
            </nav>
            <div class="mt-8 lg:mb-0 mb-11 w-full">
                <div class="mt-8 flex lg:flex-row flex-col lg:items-start  w-full">

                    <x-Images />

                    <div class=" lg:w-[50%] w-full lg:pl-10 lg:mt-0 mt-11">
                        <div class="mb-8">
                            <div class="flex justify-between">
                                <h1 class="text-4xl text-gray-900">Small Convertible Flex Bag</h1>
                            </div>

                            <div class="mt-4 flex items-center w-full justify-start gap-3">
                                <span class="text-[1.5rem] font-normal line-through text-[#4d4d4d] ">
                                    $540
                                </span>

                                <span class="text-[1.5rem] font-normal text-[#4d4d4d] ">
                                    $350.79
                                </span>

                                <span class="px-3 py-1 text-xs font-medium text-white bg-gray-700 rounded-full">
                                    Sold Out
                                </span>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class=" text-[#747474] leading-7 lg:text-base text-[.85rem]">
                                A versatile origami-inspired bag that converts from shoulder to wrist or clutch. Made of
                                smooth leather, it fits essentials like a phone, wallet, and 300ml bottle.
                            </div>
                        </div>
                        <form>
                            <div>
                                <h2 class="mb-2 text-[#747474] lg:text-sm text-[.75rem] w-auto font-medium ">Colors :</h2>

                                <fieldset aria-label="Choose a color" class="mt-2" x-data="{ selectedColor: '' }">
                                    <div class="flex items-center gap-x-3">
                                        <label aria-label="Black"
                                            class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-900 focus:outline-none">
                                            <span aria-hidden="true"
                                                class="color-option size-8 rounded-full border border-black/10 bg-[#D1D5DB]"
                                                :class="{ 'border-black border-2 p-1': selectedColor === 'Black' }"
                                                @click="selectedColor = 'Black'">
                                            </span>
                                        </label>

                                        <label aria-label="Heather Grey"
                                            class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-none">
                                            <span aria-hidden="true"
                                                class="color-option size-8 rounded-full border border-black/10 bg-[#1E3A8A]"
                                                :class="{ 'border-black border-2 p-1': selectedColor === 'Heather Grey' }"
                                                @click="selectedColor = 'Heather Grey'">
                                            </span>
                                        </label>
                                    </div>
                                </fieldset>

                            </div>

                            <div class=" mt-4">
                                <div class="mb-2 text-[#747474] lg:text-sm text-[.75rem] w-auto font-medium">
                                    Quantity :
                                </div>
                                <div
                                    class=" flex flex-row justify-center items-center py-[2px] border border-[#747474] w-[140px] ">

                                    <button type="button" class=" h-full text-[30px] text-black font-normal transition-all"
                                        onclick="decreaseQuantity()">
                                        -
                                    </button>

                                    <input type="number" id="quantity" readonly
                                        class="flex items-center w-20 pr-5 pl-8 h-full text-[16px] font-normal text-black text-center outline-none"
                                        value="1" min="1" aria-label="Quantity" onchange="validateQuantity()">

                                    <button type="button" class=" h-full text-[28px] text-black font-normal transition-all"
                                        onclick="increaseQuantity()">
                                        +
                                    </button>

                                </div>
                            </div>

                            <button type="submit"
                                class="mt-8 flex w-full items-center justify-center bg-black px-8 py-3 text-base font-normal text-white  hover:bg-[#000000d2] ">
                                Add to cart
                            </button>
                        </form>

                        <div class="mt-10">
                            <div class=" text-[#747474] leading-7 lg:text-base text-[.85rem]">

                                Our architectural, origami inspired shoulder bag, now has a new dimension. It can be
                                converted into a wrist bag just with a quick move. The shoulder strap can easily be
                                removed, so you can slung it from your wrist or use as a clutch. It has plenty of room
                                inside for your essentials including a large phone, small wallet, and 300 ml water
                                bottle. Made from smooth leather and has a suede top with two-way zip fastening.
                                Interior features two slip pockets.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col relative">

            <div class="lg:text-2xl text-xl font-normal text-left lg:mb-11 mb-8">
                You may also like
            </div>

            <div x-data="{
                currentSlide: 0,
                slides: [
                    { images: ['images/product1.jpg', 'images/product11.jpg'], link: '/product', name: 'Small Convertible Flex Bag', originPrice: '540', price: '350.79', onSale: true, soldout: false, colors: ['#D1D5DB', '#1E3A8A', ] },
                    { images: ['images/product2.jpg', 'images/product22.jpg'], link: '/product', name: 'Pleated Heel Mule', originPrice: '350.79', price: '360.8', onSale: false, soldout: true, colors: ['#F4A300', '#1E3A8A', '#6B7280'] },
                    { images: ['images/product3.jpg', 'images/product33.jpg'], link: '/product', name: 'Louise Slide Sandal', originPrice: '550', price: '320.34', onSale: true, soldout: false, colors: [] },
                    { images: ['images/product4.jpg', 'images/product44.jpg'], link: '/product', name: 'Studio Bag', originPrice: '350.79', price: '360.8', onSale: false, soldout: false, colors: ['#4B5563', '#4B4F54', '#D2691E'] },
                    { images: ['images/product5.jpg', 'images/product55.jpg'], link: '/product', name: 'JHelix', originPrice: '350.79', price: '360.8', onSale: true, soldout: false, colors: ['#8B4513', ] },
                    { images: ['images/product1.jpg', 'images/product11.jpg'], link: '/product', name: 'Small Convertible Flex Bag', originPrice: '350.79', price: '360.8', onSale: false, soldout: false, colors: [] },
                    { images: ['images/product2.jpg', 'images/product22.jpg'], link: '/product', name: 'Pleated Heel Mule', originPrice: '350.79', price: '300', onSale: true, soldout: true, colors: ['#D1D5DB', '#A0522D', '#8B4513'] },
                    { images: ['images/product3.jpg', 'images/product33.jpg'], link: '/product', name: 'Louise Slide Sandal', originPrice: '550', price: '320.34', onSale: false, soldout: true, colors: ['#9CA3AF'] },
                ],
                slideWidth() {
                    if (window.innerWidth >= 1024) {
                        return 25; // 100% / 4 = 25%
                    } else if (window.innerWidth >= 768) {
                        return 50; // 100% / 2 = 50%
                    } else {
                        return 100; // 100% / 1 = 100%
                    }
                },
                nextSlide() {
                    // If the currentSlide is the last product, reset to the first product
                    console.log(this.currentSlide, this.slides.length)
                    if (this.currentSlide < this.slides.length - 4) {
                        this.currentSlide++;
            
                    } else {
                        this.currentSlide = 0; // Loop back to the first slide
                    }
                },
                prevSlide() {
                    // If the currentSlide is the first product, loop back to the last product
                    if (this.currentSlide > 0) {
                        this.currentSlide--;
                    } else {
                        this.currentSlide = this.slides.length - 4; // Loop to the last slide
                    }
                },
            
            }" class="relative w-full overflow-hidden">
                <div class="flex transition-transform duration-500 ease-in-out"
                    :style="`transform: translateX(-${currentSlide * slideWidth()}%)`">

                    <template x-for="(slide, index) in slides" :key="index">
                        <div class="w-1/2 md:w-1/3 lg:w-1/4 flex-shrink-0 p-2 select-none">
                            <a :href="slide.link" class="block relative group">
                                <div class="relative overflow-hidden">
                                    <img :src="slide.images[0]" :alt="slide.name"
                                        class="w-full h-64 object-cover transition-opacity duration-300 group-hover:opacity-0">
                                    <img x-show="slide.images.length > 1" :src="slide.images[1]" :alt="slide.name"
                                        class="w-full h-64 object-cover absolute inset-0 opacity-0 transition-all duration-300 group-hover:opacity-100">

                                    <template x-if="slide.onSale">
                                        <span
                                            class="absolute bottom-2 left-2 px-3 py-1 text-xs font-medium text-white bg-blue-500 rounded-full m-2">
                                            Sale
                                        </span>
                                    </template>
                                    <template x-if="slide.soldout">
                                        <span
                                            class="absolute bottom-2 left-2 px-3 py-1 text-xs font-medium text-white bg-gray-700 rounded-full m-2">
                                            Sold Out
                                        </span>
                                    </template>
                                </div>

                                <div class="py-4">
                                    <span
                                        class="text-sm font-normal text-gray-800 hover:text-gray-600 group-hover:underline"
                                        x-text="slide.name"></span>
                                    <div class="flex flex-row justify-start items-start mt-2">
                                        <template x-if="slide.originPrice">
                                            <span class="text-sm font-normal text-gray-500 line-through"
                                                x-text="'$' + slide.originPrice"></span>
                                        </template>
                                        <span class="text-sm font-medium text-gray-800 ml-2"
                                            x-text="'$' + slide.price"></span>
                                    </div>

                                    <div class="flex gap-2 mt-2">
                                        <template x-for="color in slide.colors" :key="color">
                                            <div class="w-4 h-4 rounded-full" :style="{ backgroundColor: color }"></div>
                                        </template>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </template>

                </div>

                <button
                    class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white text-base shadow-md text-black p-2 w-10 h-10 rounded-full hover:bg-[#eaeaea] hover:text-[#4d4d4d] z-20"
                    @click="prevSlide">
                    &#10094;
                </button>
                <button
                    class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white text-base shadow-md text-black p-2 w-10 h-10 rounded-full hover:bg-[#eaeaea] hover:text-[#4d4d4d] z-20"
                    @click="nextSlide">
                    &#10095;
                </button>
            </div>

        </div>
    </div>
@endsection

<script>
    function validateQuantity() {
        const input = document.getElementById("quantity");
        if (input.value < 1) {
            input.value = 1;
        }
    }

    function decreaseQuantity() {
        const quantityInput = document.getElementById('quantity');
        let currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    }

    function increaseQuantity() {
        const quantityInput = document.getElementById('quantity');
        let currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
    }
</script>
