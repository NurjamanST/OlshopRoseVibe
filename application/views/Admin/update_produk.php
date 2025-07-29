<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="flex flex-wrap items-center justify-between mx-auto p-4">
        <div>
            <a href="<?= base_url('KelolaProduk') ?>"
                class="flex items-center gap-2 text-[#B66878] bg-white font-medium rounded-lg text-sm px-5 py-2.5"
                type="button">
                <!-- ditambahin flex items-center gap-2 supaya text "Kembali" sejajar dengan icon kembali -->
                <img src="<?= base_url('Assets/Kembali.png') ?>" alt="" class="h-6 w-6">
                <span class="text-[#B66878] aladin-regular text-xl">Kembali</span>
            </a>
        </div>
        <div class="items-center justify-between w-[40%] " id="navbar-sticky">
            <form class="mx-auto">
                <div class="relative">
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
<div class="h-[9rem]"></div>
<div class="mx-[5%]">
    <div class="aladin-regular text-2xl text-center mb-6 text-[#FF77A2]">Edit Produk
    </div>
    <div class="flex flex-col mx-[10%]">
        <form action="" method="post">
            <!-- Nama Produk -->
            <div>
                <div class="mb-6">
                    <input type="text" id="default-input"
                        class="bg-white border-2 border-[#FF77A2] text-gray-900 alike-regular text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Masukan Nama Produk">
                </div>
            </div>
            <!-- Harga Produk -->
            <div>
                <div class="mb-6">
                    <input type="text" id="default-input"
                        class="bg-white border-2 border-[#FF77A2] text-gray-900 alike-regular text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Masukan Harga">
                </div>
            </div>
            <!-- Deskripsi Produk -->
            <div class="mb-4">
                <textarea id="message" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 alike-regular bg-white border-2 border-[#FF77A2] focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Deskripsi Produk"></textarea>
            </div>
            <!-- Upload Gambar -->
            <div class="w-full flex justify-center">
                <!-- membuat isi di dalamnya otomatis berada di tengah horizontal -->
                <div class="w-[50%]">
                    <label for="dropzone-file"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-[#FF77A2] cursor-pointer bg-white">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-2 text-[#949292]" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                            <p class="mb-2 text-lg text-[#949292] alike-regular"><span class="font-semibold">Upload
                                    File</span>
                            </p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div>
            </div>
            <!-- Stok Produk -->
            <div class="mt-4 mb-4 w-full flex justify-center flex items-center justify-between">
                <div
                    class="block w-55 p-2 bg-[#FBA2AB] border border-gray-200 rounded-xl shadow-sm flex items-center content-center">
                    <span class="aladin-regular text-white text-xl ml-4 mr-10">Stok</span>
                    <svg class="w-6 h-6 text-gray-800 mr-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14m-7 7V5" />
                    </svg>
                    <span class="aladin-regular text-xl mr-6">0</span>
                    <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14" />
                    </svg>
                </div>
            </div>
            <!-- Button Tambah Produk -->
            <div class="text-center mb-3">
                <button type="submit"
                    class="text-white bg-[#FF77A2] hover:bg-[#B66878] font-medium rounded-3xl text-xl aladin-regular w-full sm:w-[24%] px-5 py-2.5">Tambah
                    Produk</button>
            </div>
        </form>
    </div>
</div>