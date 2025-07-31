<div class="h-[10rem]"></div>
<div class="container mx-[5%]">
    <div class="my-5">
        <div id="date-range-picker" date-rangepicker class="flex items-center">
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-[#B66878]" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                    </svg>
                </div>
                <input id="datepicker-range-start" name="start" type="text"
                    class="bg-gray-50 border-2 border-[#FF77A2] text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 "
                    placeholder="Select date start">
            </div>
            <span class="mx-4 text-[#B66878]">To</span>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-[#B66878]" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                    </svg>
                </div>
                <input id="datepicker-range-end" name="end" type="text"
                    class="bg-gray-50 border-2 border-[#FF77A2] text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                    placeholder="Select date end">
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-2 aladin-regular">
        <div class="w-full">
            <a href="#" class="block p-[10%] bg-white border-2 border-[#FF77A2] rounded-lg shadow-sm hover:bg-gray-100">
                <h5 class="mb-2 text-4xl font-bold tracking-tight text-[#B66878]">Total Produk</h5>
                <p class="aladin-regular text-xl text-[#B66878]">500 Produk</p>
            </a>
        </div>
        <div class="w-full">
            <a href="#" class="block p-[10%] bg-white border-2 border-[#FF77A2] rounded-lg shadow-sm hover:bg-gray-100">
                <h5 class="mb-2 text-4xl font-bold tracking-tight text-[#B66878]">Total Pesanan</h5>
                <p class="aladin-regular text-xl text-[#B66878]">90 Pesanan</p>
            </a>
        </div>
        <div class="w-full">
            <a href="#" class="block p-[10%] bg-white border-2 border-[#FF77A2] rounded-lg shadow-sm hover:bg-gray-100">
                <h5 class="mb-2 text-4xl font-bold tracking-tight text-[#B66878]">Total Pelanggan</h5>
                <p class="aladin-regular text-xl text-[#B66878]">300 Pelanggan</p>
            </a>
        </div>
        <div class="w-full">
            <a href="#" class="block p-[10%] bg-white border-2 border-[#FF77A2] rounded-lg shadow-sm hover:bg-gray-100">
                <h5 class="mb-2 text-4xl font-bold tracking-tight text-[#B66878]">Penghasilan</h5>
                <p class="aladin-regular text-xl text-[#B66878]">Rp 2.000.000</p>
            </a>
        </div>
    </div>
    <div  class="my-5">
        <div class="w-full bg-white rounded-lg shadow-sm p-4 md:p-6 border-2 border-[#FF77A2]">
            <div class="flex justify-between pb-4 mb-4 border-b border-[#FF77A2]">
                <div class="flex items-center">
                    <div>
                        <h5 class="leading-none text-3xl font-bold text-[#B66878] pb-1 aladin-regular">Grafik Penghasilan</h5>
                    </div>
                </div>
            </div>
            <div id="column-chart"></div>
            <div class="grid grid-cols-1 items-center border-[#FF77A2] border-t justify-between">
                <div class="flex justify-between items-center pt-5">
                </div>
            </div>
        </div>
    </div>
</div>
