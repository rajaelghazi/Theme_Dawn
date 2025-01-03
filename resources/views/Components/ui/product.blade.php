@props(['images', 'link', 'name', 'Price', 'originPrice' => null, 'onSale' => false, 'soldout' => false, 'colors' => []])

<a href="{{ $link }}" class="block relative group">
    <div class="relative overflow-hidden">
        <img src="{{ asset($images[0]) }}" alt="{{ $name }}"
            class="w-full h-64 object-cover transition-opacity duration-300 group-hover:opacity-0">
        @if (count($images) > 1)
            <img src="{{ asset($images[1]) }}" alt="{{ $name }}"
                class="w-full h-64 object-cover absolute inset-0 opacity-0 transition-all duration-300 group-hover:opacity-100">
        @endif

        @if ($onSale)
            <span
                class="absolute bottom-2 left-2 px-3 py-1 text-xs font-medium text-white bg-blue-500 rounded-full m-2">
                Sale
            </span>
        @endif
        @if ($soldout)
            <span
                class="absolute bottom-2 left-2 px-3 py-1 text-xs font-medium text-white bg-gray-700 rounded-full m-2">
                Sold Out
            </span>
        @endif
    </div>

    <div class="py-4">
        <span
            class="text-[.8rem] font-normal text-gray-800 hover:text-[#4d4d4d] group-hover:underline">{{ $name }}</span>
        <div class="flex flex-row justify-start items-start mt-2">
            @if ($originPrice)
                <span class="text-[.9rem] font-normal text-[#4d4d4d] ">
                    <span class="line-through">${{ $originPrice }}</span> <span>&nbsp;</span>
                </span>
            @endif
            <span class="text-[.9rem] font-medium text-[#4d4d4d]">${{ $Price }}</span>
        </div>

        @if (!empty($colors))
            <div class="flex gap-2 mt-2">
                @foreach ($colors as $color)
                    <div class="w-4 h-4 rounded-full" style="background-color: {{ $color }}"></div>
                @endforeach
            </div>
        @endif
    </div>

</a>
