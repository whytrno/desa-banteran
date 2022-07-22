<div x-data="{terlaksana: true, mendatang: false}" class="px-5 md:px-[50px] lg:px-[120px] py-5 md:py-14 space-y-10 w-full h-full">
    <div class="flex border-b border-[#C4C4C4] md:text-2xl lg:text-3xl space-x-10 pb-8 relative">
        <button @click="terlaksana = true, mendatang = false" class="text-[#182126]">Terlaksana</button>
        <button @click="mendatang = true, terlaksana = false" class="text-[#C4C4C4] hover:text-[#182126]">Mendatang</button>
        <div x-show="terlaksana" class="w-10 md:w-14 h-2 absolute -bottom-1 -left-7 md:-left-3 lg:left-0 bg-green-500">
        </div>
        <div x-show="mendatang" class="w-10 md:w-14 h-2 absolute -bottom-1 left-[5.5rem] md:left-36 lg:left-[11.5rem] bg-green-500">
        </div>
    </div>
    <div x-show="terlaksana">
        <div class="grid grid-cols-3 gap-5 md:gap-14 py-8 md:px-10 lg:px-14 border-b border-[#C4C4C4]">
            <div class="col-span-3 md:col-span-1">
                <h1 class="text-md md:text-xl">#01 Berita Terlaksana</h1>
            </div>
            <div class="space-y-6 col-span-3 md:col-span-1">
                <h1 class="text-xl">Vaksinasi Covid-19</h1>
                <p>
                    The subsidiary of Holding Perkebunan Nusantara in Riau, PT Perkebunan Nusantara V, has
                    reforested
                    the protected forest of Bukit Suligi, now the majority of the area covered has changed its
                    function.
                </p>
            </div>
            <div class="md:justify-self-end col-span-3 md:col-span-1">
                <img class="h-[50h] md:h-[25vh] w-full object-cover" src="assets/img/program/program-desa-1.jpg" alt="">
            </div>
        </div>
        <div class="grid grid-cols-3 gap-5 md:gap-14 py-8 md:px-10 lg:px-14 border-b border-[#C4C4C4]">
            <div class="col-span-3 md:col-span-1">
                <h1 class="text-md md:text-xl">#01 Berita Terlaksana</h1>
            </div>
            <div class="space-y-6 col-span-3 md:col-span-1">
                <h1 class="text-xl">Vaksinasi Covid-19</h1>
                <p>
                    The subsidiary of Holding Perkebunan Nusantara in Riau, PT Perkebunan Nusantara V, has
                    reforested
                    the protected forest of Bukit Suligi, now the majority of the area covered has changed its
                    function.
                </p>
            </div>
            <div class="md:justify-self-end col-span-3 md:col-span-1">
                <img class="h-[50h] md:h-[25vh] w-full object-cover" src="assets/img/program/program-desa-1.jpg" alt="">
            </div>
        </div>
        <div class="grid grid-cols-3 gap-5 md:gap-14 py-8 md:px-10 lg:px-14 border-b border-[#C4C4C4]">
            <div class="col-span-3 md:col-span-1">
                <h1 class="text-md md:text-xl">#01 Berita Terlaksana</h1>
            </div>
            <div class="space-y-6 col-span-3 md:col-span-1">
                <h1 class="text-xl">Vaksinasi Covid-19</h1>
                <p>
                    The subsidiary of Holding Perkebunan Nusantara in Riau, PT Perkebunan Nusantara V, has
                    reforested
                    the protected forest of Bukit Suligi, now the majority of the area covered has changed its
                    function.
                </p>
            </div>
            <div class="md:justify-self-end col-span-3 md:col-span-1">
                <img class="h-[50h] md:h-[25vh] w-full object-cover" src="assets/img/program/program-desa-1.jpg" alt="">
            </div>
        </div>
    </div>

    <div x-show="mendatang">
        <div class="grid grid-cols-3 gap-5 md:gap-14 py-8 md:px-10 lg:px-14 border-b border-[#C4C4C4]">
            <div class="col-span-3 md:col-span-1">
                <h1 class="text-md md:text-xl">#01 Berita Mendatang</h1>
            </div>
            <div class="space-y-6 col-span-3 md:col-span-1">
                <h1 class="text-xl">Vaksinasi Covid-19</h1>
                <p>
                    The subsidiary of Holding Perkebunan Nusantara in Riau, PT Perkebunan Nusantara V, has
                    reforested
                    the protected forest of Bukit Suligi, now the majority of the area covered has changed its
                    function.
                </p>
            </div>
            <div class="md:justify-self-end col-span-3 md:col-span-1">
                <img class="h-[50h] md:h-[25vh] w-full object-cover" src="assets/img/program/program-desa-1.jpg" alt="">
            </div>
        </div>
        <div class="grid grid-cols-3 gap-5 md:gap-14 py-8 md:px-10 lg:px-14 border-b border-[#C4C4C4]">
            <div class="col-span-3 md:col-span-1">
                <h1 class="text-md md:text-xl">#01 Berita Mendatang</h1>
            </div>
            <div class="space-y-6 col-span-3 md:col-span-1">
                <h1 class="text-xl">Vaksinasi Covid-19</h1>
                <p>
                    The subsidiary of Holding Perkebunan Nusantara in Riau, PT Perkebunan Nusantara V, has
                    reforested
                    the protected forest of Bukit Suligi, now the majority of the area covered has changed its
                    function.
                </p>
            </div>
            <div class="md:justify-self-end col-span-3 md:col-span-1">
                <img class="h-[50h] md:h-[25vh] w-full object-cover" src="assets/img/program/program-desa-1.jpg" alt="">
            </div>
        </div>
        <div class="grid grid-cols-3 gap-5 md:gap-14 py-8 md:px-10 lg:px-14 border-b border-[#C4C4C4]">
            <div class="col-span-3 md:col-span-1">
                <h1 class="text-md md:text-xl">#01 Berita Mendatang</h1>
            </div>
            <div class="space-y-6 col-span-3 md:col-span-1">
                <h1 class="text-xl">Vaksinasi Covid-19</h1>
                <p>
                    The subsidiary of Holding Perkebunan Nusantara in Riau, PT Perkebunan Nusantara V, has
                    reforested
                    the protected forest of Bukit Suligi, now the majority of the area covered has changed its
                    function.
                </p>
            </div>
            <div class="md:justify-self-end col-span-3 md:col-span-1">
                <img class="h-[50h] md:h-[25vh] w-full object-cover" src="assets/img/program/program-desa-1.jpg" alt="">
            </div>
        </div>
    </div>
</div>