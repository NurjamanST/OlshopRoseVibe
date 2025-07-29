<div class="h-[9rem]"></div>
<div class="mx-[5%]">
    <div class="text-2xl text-[#FF77A2] aladin-regular text-center mb-6">Kelola Produk RoseVibe</div>
    <div class="text-right mb-5">
        <a href="<?= base_url('TambahProduk') ?>" type="button"
            class="py-2 px-5 me-2 mb-2 text-lg font-medium text-white aladin-regular focus:outline-none bg-[#FF77A2] rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-[#FF77A2] focus:z-10 focus:ring-4 focus:ring-gray-100">Tambah
            Produk</a>
    </div>
    <div class="grid grid-cols-3 gap-4">
        <?php
        for ($i = 0; $i < 6; $i++) { ?>
            <div class="w-full bg-white border-3 border-[#B66878] rounded-lg shadow-sm p-5">
                <a href="#">
                    <img class="border-2 border-[#B66878] rounded-lg rounded-t-lg"
                        src="<?= base_url('Assets/Lipstik.jpeg'); ?>" alt="product image" />
                </a>
                <div class="mt-3">
                    <!-- row 1 -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center content-center">
                            <img src="<?= base_url('Assets/DollarCoin.png'); ?>" alt="">
                            <p class="text-2xl amiri-regular">Rp50.000</p>
                        </div>
                        <div class="flex items-center content-center">
                            <p class="text-lg amiri-regular">4,5</p>
                            <img src="<?= base_url('Assets/Star.png'); ?>" alt="">
                        </div>
                    </div>
                    <!-- row 2 -->
                    <a href="#">
                        <h5 class="text-2xl font-semibold amiri-regular tracking-tight text-gray-900">Lipstik Matte-01 Miss
                            Rose</h5>
                    </a>
                    <!-- Row 3 -->
                    <div class="flex items-center justify-between mt-5">
                        <div>
                            <p class="text-base acme-regular text-center">98</p>
                            <span class="text-xl amiri-regular text-gray-900">Stok</span>
                        </div>
                        <div class="flex items-center content-center">
                            <img src="<?= base_url('Assets/Edit.png'); ?>" alt="">
                            <img src="<?= base_url('Assets/TrashCan.png'); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>