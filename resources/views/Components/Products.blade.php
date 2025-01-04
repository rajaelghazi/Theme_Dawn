<div class="flex flex-col justify-center items-center mx-auto max-w-6xl sm:px-6 lg:px-5 px-5 py-10">
    <div class=" lg:text-4xl text-3xl font-normal text-center ">
        Obsessive Attention. Intelligent Effort.
    </div>
    <div class="mt-5 lg:text-base text-[.85rem] text-[#4d4d4d] text-center">
        Functional handbags made of luxurious materials to improve people's lives in small but mighty ways.
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-4 md:grid-cols-3 gap-2 w-full mt-11">
        <x-ui.product :images="['images/product1.jpg', 'images/product11.jpg']" link="/product" name="Small Convertible Flex Bag" originPrice="540" Price="350.79"
            :onSale="true" :soldout="false" :colors="['#D1D5DB', '#1E3A8A']" />

        <x-ui.product :images="['images/product2.jpg', 'images/product22.jpg']" link="/product" name="Pleated Heel Mule" originPrice="350.79" Price="360.8"
            :onSale="false" :soldout="true" :colors="['#F4A300', '#1E3A8A', '#6B7280']" />

        <x-ui.product :images="['images/product3.jpg', 'images/product33.jpg']" link="/product" name="Louise Slide Sandal" originPrice="550" Price="320.34"
            :onSale="true" :soldout="false" onSale :colors="[]"/>

        <x-ui.product :images="['images/product4.jpg', 'images/product44.jpg']" link="/product" name="Studio Bag" originPrice="350.79" Price="360.8"
            :onSale="false" :soldout="false" soldout :colors="['#4B5563', '#4B4F54', '#D2691E']" />

        <x-ui.product :images="['images/product5.jpg', 'images/product55.jpg']" link="/product" name="JHelix" originPrice="350.79" Price="360.8"
            :onSale="true" :soldout="false" :colors="['#8B4513']" />

        <x-ui.product :images="['images/product1.jpg', 'images/product11.jpg']" link="/product" name="Small Convertible Flex Bag" originPrice="350.79"
            Price="360.8" :onSale="false" :soldout="false" :colors="[]" />

        <x-ui.product :images="['images/product2.jpg', 'images/product22.jpg']" link="/product" name="Pleated Heel Mule" originPrice="350.79" Price="300"
            :onSale="true" :soldout="true" soldout :colors="['#D1D5DB', '#A0522D', '#8B4513']" />

        <x-ui.product :images="['images/product3.jpg', 'images/product33.jpg']" link="/product" name="Louise Slide Sandal" originPrice="550" Price="320.34"
            :onSale="false" :soldout="true" onSale :colors="['#9CA3AF']"/>

    </div>
</div>
