<nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200 ">
    <div class="flex flex-wrap items-center justify-between mx-auto p-4">
        <div>
            <button class="flex items-center gap-2 text-[#B66878] bg-white font-medium rounded-lg text-sm px-5 py-2.5"
                type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
                aria-controls="drawer-navigation">
                <!-- ditambahin flex items-center gap-2 supaya text "Dashboard" sejajar dengan icon hamburger -->
                <svg class="w-6 h-6 text-[#B66878] " aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M18 6H6m12 4H6m12 4H6m12 4H6" />
                </svg>
                <span class="text-[#B66878] aladin-regular text-xl">Dashboard</span>
            </button>
        </div>
        <div class="items-center justify-between w-[40%] " id="navbar-sticky">
            <form class="mx-auto">
                <div class="relative">
                    <div class="absolute inset-y-0 end-0 flex items-center pe-3 pointer-events-none">
                        <!-- Ganti start-0 jadi end-0 dan ganti ps-3 jadi pe-3 -->
                        <svg class="w-4 h-4 text-gray-500 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-2 ps-10 text-sm text-gray-900 border border-[#FF77A2] rounded-4xl bg-gray-50 focus:ring-[#FF77A2] focus:border-[#FF77A2]"
                        placeholder=" " required />
                </div>
            </form>
        </div>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse items-center">
            <img src="<?= base_url('Assets/Logo.png') ?>" alt="RoseVibe"
                class="text-[#B66878] aladin-regular text-xl h-10 w-auto">
            <span class="text-[#B66878] aladin-regular text-xl">RoseVibe</span>
        </div>
    </div>
</nav>

<!-- drawer init and show -->
<div class="text-center">

</div>

<!-- drawer component -->
<div id="drawer-navigation"
    class="fixed top-0 left-0 z-40 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-[#FF77A2]"
    tabindex="-1" aria-labelledby="drawer-navigation-label">
    <div class="flex items-center justify-start pb-4 gap-4">
        <svg class="w-8 h-8 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                d="M18 6H6m12 4H6m12 4H6m12 4H6" />
        </svg>
        <h5 id="drawer-navigation-label"
            class="text-base font-semibold text-white uppercase alatsi-regular text-lg">
            Dashboard
        </h5>
        <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
            class="text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
    </div>
    <div class="py-4 overflow-y-auto">
        <ul class="space-y-2 font-medium">
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-white transition duration-75 rounded-lg group hover:bg-gray-100"
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <svg class="w-8 h-8 text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M10 21v-9m3-4H7.5a2.5 2.5 0 1 1 0-5c1.5 0 2.875 1.25 3.875 2.5M14 21v-9m-9 0h14v8a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-8ZM4 8h16a1 1 0 0 1 1 1v3H3V9a1 1 0 0 1 1-1Zm12.155-5c-3 0-5.5 5-5.5 5h5.5a2.5 2.5 0 0 0 0-5Z" />
                    </svg>
                    <span
                        class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap alatsi-regular text-xl">Produk</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                    <li>
                        <a href="<?= base_url("KelolaProduk")?>"
                            class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 :bg-gray-700 alatsi-regular text-lg">
							Kelola Produk
						</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-white rounded-lg  hover:bg-gray-100  group">
                    <svg class="w-8 h-8 text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-3 5h3m-6 0h.01M12 16h3m-6 0h.01M10 3v4h4V3h-4Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap alatsi-regular text-lg">Pesanan</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-white rounded-lg hover:bg-gray-100 group">
                    <svg class="w-8 h-8 text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="1"
                            d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap alatsi-regular text-lg">Pelanggan</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-white rounded-lg hover:bg-gray-100 group">
                    <svg class="w-8 h-8 text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="1"
                            d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap alatsi-regular text-lg">Rating & Ulasan</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-white rounded-lg hover:bg-gray-100 group">
                    <svg class="w-8 h-8 text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="1"
                            d="M10 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h2m10 1a3 3 0 0 1-3 3m3-3a3 3 0 0 0-3-3m3 3h1m-4 3a3 3 0 0 1-3-3m3 3v1m-3-4a3 3 0 0 1 3-3m-3 3h-1m4-3v-1m-2.121 1.879-.707-.707m5.656 5.656-.707-.707m-4.242 0-.707.707m5.656-5.656-.707.707M12 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap alatsi-regular text-lg">Pengaturan</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-white rounded-lg hover:bg-gray-100 group">
                    <svg class="w-8 h-8 text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M3 15v4m6-6v6m6-4v4m6-6v6M3 11l6-5 6 5 5.5-5.5" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap alatsi-regular text-lg">Laporan</span>
                </a>
            </li>
			<li>
                <a href="<?= base_url('Auth/Signout')?>"
                    class="flex items-center p-2 text-white rounded-lg hover:bg-gray-100 group">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"/>
					</svg>
                    <span class="flex-1 ms-3 whitespace-nowrap alatsi-regular text-lg">Sign Out</span>
                </a>
            </li>
        </ul>
    </div>
</div>
