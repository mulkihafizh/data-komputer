<div class="navigation">
    <span class="absolute lg:hidden text-white text-4xl top-5 left-10 cursor-pointer side-toggler" onclick="openSidebar()"
        class="z-index:-1;">
        <i class="bi bi-filter-left px-2 rounded-md"></i>
    </span>
    <div
class="sidebar fixed min-h-screen h-full top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-primary-color">
        <div class="text-gray-100 text-xl">
            <div class="p-2.5 text-3xl mt-1 flex items-center text-blue-300">
                <a href="/" class="flex items-center">
                    <i class="bi bi-bar-chart-steps"></i>
                    <h1 class=" text-gray-200 text-[15px] ml-3">Data Komputer</h1>
                    <i class="bi bi-x cursor-pointer ml-28 lg:hidden side-toggler"></i>
                </a>
            </div>
            <div class="my-2 bg-gray-600 h-[1px]"></div>
        </div>

        <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <i class="bi bi-building"></i>
            <a href="/room">
                <span class="text-[15px] ml-4 text-gray-200 ">Rooms</span>
            </a>
        </div>
        <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <i class="bi bi-display"></i>
            <a href="/computer">
                <span class="text-[15px] ml-4 text-gray-200 ">Computers</span>
            </a>
        </div>
        <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <i class="bi bi-box-seam"></i>
            <a href="/brand">
                <span class="text-[15px] ml-4 text-gray-200 ">Brands</span>
            </a>
        </div>
        {{-- <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <i class="bi bi-lightning"></i>
            <span class="text-[15px] ml-4 text-gray-200 ">Status</span>
        </div> --}}
        <div class="my-4 bg-gray-600 h-[1px]"></div>
    </div>

    <script src="{{ asset('assets/js/main.js') }}"></script>

</div>
