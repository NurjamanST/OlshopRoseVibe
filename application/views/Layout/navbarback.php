<nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200">
    <div class="flex flex-wrap items-center justify-between mx-auto p-4">
        <div>
            <a href="<?= base_url('KelolaProduk') ?>"
                class="flex items-center gap-2 text-[#B66878] bg-white font-medium rounded-lg text-sm px-5 py-2.5"
                type="button">
                <!-- data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
                aria-controls="drawer-navigation" -->
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
