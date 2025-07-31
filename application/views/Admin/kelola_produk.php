<div class="h-[9rem]"></div>
<div class="mx-[5%]">
    <div class="text-4xl text-[#FF77A2] aladin-regular text-center mb-6">Kelola Produk RoseVibe</div>
    <div class="text-right mb-5">
        <a href="<?= base_url('KelolaProduk/addproduct') ?>" type="button"
            class="py-3 px-7 me-2 mb-2 text-xl font-medium text-white aladin-regular focus:outline-none bg-[#FF77A2] rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-[#FF77A2] focus:z-10 focus:ring-4 focus:ring-gray-100">
			Tambah Produk
		</a>
    </div>
        <?php
		if ($produk == 0) { ?>
			<div class="flex flex-col text-center justify-center items-center mx-8 px-8 my-[10%]">
				<div>
					<img src="<?= base_url("Assets/AddBasket.png")?>" alt="Add Basket" class="w-50 justify-center">
				</div>
				<div class="text-[#FF77A2] aladin-regular text-4xl">Belum Terdapat Produk!</div>
				<div class="text-[#FF77A2] aladin-regular text-3xl">Tambahkan Produk dan Mulai Penjualan</div>
			</div>
		<?php } else {
			# Data Terisi ?>		
			<div class="grid grid-cols-3 gap-4 my-8">
				<?php foreach ($produk as $prod) { ?>
					<div class="w-full bg-white border-3 border-[#B66878] rounded-lg shadow-sm p-5">
						<a href="#">
							<img class="border-2 border-[#B66878] rounded-lg rounded-t-lg"
								src="<?= base_url('Assets/').$prod->images_product; ?>" alt="product image" />
						</a>
						<div class="mt-3">
							<!-- row 1 -->
							<div class="flex items-center justify-between">
								<div class="flex items-center content-center">
									<img src="<?= base_url('Assets/DollarCoin.png'); ?>" alt="">
									<p class="text-2xl amiri-regular">Rp <?= number_format($prod->price_product, 0,',','.'); ?></p>
								</div>
								<div class="flex items-center content-center">
									<p class="text-lg amiri-regular">4,5</p>
									<img src="<?= base_url('Assets/Star.png'); ?>" alt="">
								</div>
							</div>
							<!-- row 2 -->
							<a href="#">
								<h5 class="text-2xl font-semibold amiri-regular tracking-tight text-gray-900">
									<?= $prod->name_product; ?>
								</h5>
							</a>
							<!-- Row 3 -->
							<div class="flex items-center justify-between mt-5">
								<div>
									<p class="text-base acme-regular text-center">
										<?= $prod->stock_product; ?>
									</p>
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
		<?php } ?>
</div>
