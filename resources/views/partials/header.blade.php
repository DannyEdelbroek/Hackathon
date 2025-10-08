<header class="absolute inset-x-0 top-0 z-50 bg-gray-900">
    <nav aria-label="Global" class="flex items-center justify-between p-6 lg:px-8">
        <!-- Logo -->
        <div class="flex lg:flex-1">
            <a href="/" class="text-xl font-semibold text-white">Webshop</a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="flex lg:hidden">
            <button type="button" command="show-modal" commandfor="mobile-menu"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-200">
                <span class="sr-only">Open main menu</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"
                    class="size-6">
                    <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="/events" class="text-xl font-semibold text-white hover:text-pink-500">Home</a>
            <a href="/stands" class="text-xl font-semibold text-white hover:text-pink-500">Stands</a>
            
        </div>

       
    </nav>
</header>

<!-- MOBILE MENU -->
<el-dialog>
    <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
        <div tabindex="0" class="fixed inset-0 z-[9999] focus:outline-none">
            <el-dialog-panel
                class="fixed inset-y-0 right-0 z-[9999] w-full overflow-y-auto bg-gray-900 p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-100/10">

                <!-- Mobile Menu Header -->
                <div class="flex items-center justify-between">
                    <a href="/" class="text-xl font-semibold text-white">Webshop</a>
                    <button type="button" command="close" commandfor="mobile-menu"
                        class="-m-2.5 rounded-md p-2.5 text-gray-200">
                        <span class="sr-only">Close menu</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            aria-hidden="true" class="size-6">
                            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <!-- Mobile Navigation Links -->
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-white/10">
                        <div class="space-y-2 py-6">
                            <a href="/"
                                class="-mx-3 block rounded-lg px-4 py-2 text-lg font-semibold text-white hover:bg-white/5 hover:text-[var(--color-accent)]">Home</a>
                            <a href="/Shop"
                                class="-mx-3 block rounded-lg px-3 py-2 text-lg font-semibold text-white hover:bg-white/5 hover:text-[var(--color-accent)]">Shop</a>
                        </div>
                        
                    </div>
                </div>

            </el-dialog-panel>
        </div>
    </dialog>
</el-dialog>

@push('scripts')
    <!-- TailwindPlus Elements -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
@endpush
