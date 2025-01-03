@extends('layouts.app')
@section('content')
    <div class="bg-white">
        <div class="pb-16 pt-6 sm:pb-24">
            <nav aria-label="Breadcrumb" class="mx-auto max-w-6xl sm:px-6 lg:px-5 px-5">
                <ol role="list" class="flex items-center space-x-4">
                    <li>
                        <div class="flex items-center">
                            <a href="#" class="mr-4 text-sm font-medium text-gray-900">Home</a>
                            <svg viewBox="0 0 6 20" aria-hidden="true" class="h-5 w-auto text-gray-300">
                                <path d="M4.878 4.34H3.551L.27 16.532h1.327l3.281-12.19z" fill="currentColor" />
                            </svg>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <a href="#" class="mr-4 text-sm font-medium text-gray-900">Bags</a>
                            <svg viewBox="0 0 6 20" aria-hidden="true" class="h-5 w-auto text-gray-300">
                                <path d="M4.878 4.34H3.551L.27 16.532h1.327l3.281-12.19z" fill="currentColor" />
                            </svg>
                        </div>
                    </li>

                    <li class="text-sm">
                        <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">
                            Small Convertible Flex Bag
                        </a>
                    </li>
                </ol>
            </nav>
            <div class="mt-8 mx-auto max-w-6xl sm:px-6 lg:px-5 px-5">
                <div class="lg:grid lg:auto-rows-min lg:grid-cols-12 lg:gap-x-8">
                    <div class="lg:col-span-5 lg:col-start-8">
                        <div class="flex justify-between">
                            <h1 class="text-2xl font-medium text-gray-900">Small Convertible Flex Bag</h1>
                        </div>

                        <div class="mt-4 flex items-center">
                            <span class="text-[1.5rem] font-normal text-[#4d4d4d] ">
                                <span class="line-through">$540</span> <span>&nbsp;$350.79</span>
                            </span>

                            <span
                                class="ml-2 px-3 py-1 text-xs font-medium text-white bg-blue-500 rounded-full m-2">Sale</span>
                        </div>
                    </div>

                    <div class="mt-8 lg:col-span-7 lg:col-start-1 lg:row-span-3 lg:row-start-1 lg:mt-0">
                        <h2 class="sr-only">Images</h2>

                        <div class="grid grid-cols-1 lg:grid-cols-3 lg:grid-rows-3 lg:gap-5">
                            <img src="{{ 'images/product1.jpg' }}"
                                alt=""
                                class=" lg:col-span-3 lg:row-span-3">
                            <img src="{{ 'images/product11.jpg' }}"
                                alt="Side "
                                class="hidden  lg:block">
                            <img src="{{ 'images/product11.jpg' }}"
                                alt="" class="hidden  lg:block">
                            <img src="{{ 'images/product11.jpg' }}"
                                alt="" class="hidden  lg:block">
                            <img src="{{ 'images/product11.jpg' }}"
                                alt="" class="hidden  lg:block">
                        </div>
                    </div>

                    <div class="mt-8 lg:col-span-5">
                        <div class="mb-4">
                            <div class=" text-[#747474] leading-7 lg:text-base text-[.85rem]">
                                A versatile origami-inspired bag that converts from shoulder to wrist or clutch. Made of
                                smooth leather, it fits essentials like a phone, wallet, and 300ml bottle.
                            </div>
                        </div>
                        <form>
                            <div>
                                <h2 class="text-sm font-medium text-gray-900">Color</h2>

                                <fieldset aria-label="Choose a color" class="mt-2">
                                    <div class="flex items-center gap-x-3">
                                        <label aria-label="Black"
                                            class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-900 focus:outline-none">
                                            <input type="radio" name="color-choice" value="Black" class="sr-only">
                                            <span aria-hidden="true"
                                                class="size-8 rounded-full border border-black/10 bg-[#8B4513]"></span>
                                        </label>
                                        <label aria-label="Heather Grey"
                                            class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-none">
                                            <input type="radio" name="color-choice" value="Heather Grey" class="sr-only">
                                            <span aria-hidden="true"
                                                class="size-8 rounded-full border border-black/10 bg-[#A0522D]"></span>
                                        </label>
                                    </div>
                                </fieldset>
                            </div>

                            <div class=" mt-4">
                                <div class="mb-2 text-[#747474] lg:text-xs text-[.65rem] w-auto">
                                    Quantity
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
                                class="mt-8 flex w-full items-center justify-center bg-black px-8 py-3 text-base font-medium text-white  hover:scale-105 ">
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
