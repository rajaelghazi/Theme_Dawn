<div class="flex flex-row justify-center items-center gap-2 my-10 mx-52">
    <div class="relative group h-auto w-2/3">
        <a href="/bags">
            <img src="{{ asset('images/coll1.jpg') }}" alt="Bags"
                class="w-full h-auto object-cover transition-opacity duration-300 group-hover:opacity-80">
        </a>
        <div class="absolute bottom-4 left-4 text-white text-xl font-semibold group-hover:underline">
            <a href="/bags" class="flex justify-center items-center">Bags
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-5 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg></a>
        </div>
    </div>

    <div class="flex flex-col justify-center items-center h-auto gap-7 w-1/3">

        <div class="w-full">
            <x-ui.product :images="['images/product6.jpg', 'images/product55.jpg']" link="/product" name="Mini Eddy" originPrice="" Price="350.79"
                :onSale="false" :soldout="false" :colors="[]" />
        </div>

        <div class="relative group ">
            <a href="/shoes">
                <img src="{{ asset('images/coll2.jpg') }}" alt="Shoes"
                    class=" object-cover transition-opacity duration-300 group-hover:opacity-80">
            </a>
            <div class="absolute bottom-4 left-4 text-white text-xl font-semibold group-hover:underline">
                <a href="/shoes" class="flex justify-center items-center">Shoes
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5 ml-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
