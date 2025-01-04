<div x-data="{
    selectedImageIndex: 0,
    images: [
        'images/product11.jpg',
        'images/product12.jpg',
        'images/product13.jpg',
        'images/product14.jpg',
        'images/product11.jpg',
        'images/product12.jpg',
        'images/product13.jpg',
        'images/product14.jpg',
    ],
    selectImage(index) {
        this.selectedImageIndex = index;
    },
}" class="relative w-full h-full lg:px-0 lg:mb-0">

    <!-- Main Image -->
    <div class="relative mb-[20px]">
        <img :src="images[selectedImageIndex]" alt="Selected Product Image" class="w-full lg:h-[670px] object-cover">
    </div>

    <!-- Thumbnails -->
    <div class="relative overflow-x-auto scrollbar-hide" dir="rtl">
        <div class="imageCarousel flex gap-5 select-none">
            <template x-for="(image, index) in images" :key="index">
                <div class="relative flex-shrink-0" @click="selectImage(index)">
                    <img :src="image" :alt="'Product Image ' + (index + 1)"
                        class="lg:w-[100px] lg:h-[123.19px] w-[80px] h-[103.19px] cursor-pointer object-cover transition-opacity duration-200"
                        :class="{
                            'opacity-100': selectedImageIndex === index,
                            'opacity-60': selectedImageIndex !== index
                        }">
                </div>
            </template>
        </div>
    </div>
</div>
