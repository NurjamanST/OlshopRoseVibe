<div class="h-[9rem]"></div>
<div class="mx-[5%]">
    <div class="aladin-regular text-2xl text-center mb-6 text-[#FF77A2]">Tambahkan Produk dan Tingkatkan Penjualan!!
    </div>
    <div class="flex flex-col mx-[10%]">
		<form action="<?= base_url("KelolaProduk/prosesinput")?>" method="POST" enctype="multipart/form-data">
            <!-- Nama Produk -->
            <div>
                <div class="mb-6">
                    <input type="text" id="default-input"
                        class="bg-white border-2 border-[#FF77A2] text-gray-900 alike-regular text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Masukan Nama Produk" required name="name_product">
                </div>
            </div>
            <!-- Harga Produk -->
            <div>
                <div class="mb-6">
                    <input type="text" id="default-input"
                        class="bg-white border-2 border-[#FF77A2] text-gray-900 alike-regular text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Masukan Harga" required name="price_product">
                </div>
            </div>
            <!-- Deskripsi Produk -->
            <div class="mb-4">
                <textarea id="message" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 alike-regular bg-white border-2 border-[#FF77A2] focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Deskripsi Produk" required name="description_product"></textarea>
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
                        <input id="dropzone-file" type="file" class="hidden" required name="images_product" />
                    </label>
                </div>
            </div>
            <!-- Stok Produk -->
			<div class="mt-4 mb-4 w-full flex justify-center flex items-center justify-between">
				<label for="bedrooms-input" class="bg-[#FBA2AB] block px-2 py-1 h-11 text-2xl font-medium text-white aladin-regular rounded-s-lg">Stok</label>
				<div class="relative flex items-center max-w-[11rem]">
					<button type="button" id="decrement-button" data-input-counter-decrement="bedrooms-input" class="bg-[#FBA2AB] hover:bg-gray-200 p-3 h-11 focus:ring-gray-100 focus:ring-2 focus:outline-none">
						<svg class="w-3 h-3 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
						</svg>
					</button>

					<input type="text" id="bedrooms-input" data-input-counter data-input-counter-min="1" aria-describedby="helper-text-explanation" class="bg-[#FBA2AB] border-x-0 border-[#FBA2AB] p-3 h-11 font-medium text-center text-gray-900 text-md focus:ring-blue-500 focus:border-blue-500 block w-full" placeholder="" value="3" required name="stock_product"/>
					
					<button type="button" id="increment-button" data-input-counter-increment="bedrooms-input" class="bg-[#FBA2AB] hover:bg-gray-200 rounded-e-lg p-3 h-11 focus:ring-gray-100 focus:ring-2 focus:outline-none">
						<svg class="w-3 h-3 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
						</svg>
					</button>
				</div>
			</div>
            <!-- Button Tambah Produk -->
            <div class="text-center mb-3">
				<input type="submit" value="Tambah Produk" class="text-white bg-[#FF77A2] hover:bg-[#B66878] font-medium rounded-3xl text-xl aladin-regular w-full sm:w-[24%] px-5 py-2.5">
            </div>
        </form>
    </div>
</div>
