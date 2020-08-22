<!-- START NEWS -->
<section class="py-12 bg-gray-100">
    <div class="container mx-auto px-4">
        <div class="text-center py-8 mb-8">
            <h2 class="text-4xl">News, Updates & Tricks</h2>
        </div>
        <div class="grid lg:grid-cols-3 gap-6">
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <div class="max-w-2xl mx-auto bg-white overflow-hidden shadow-md rounded-lg">
                    <img class="w-full h-64 object-cover" src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Article">

                    <div class="p-6">
                        <div>
                            <a href="#" class="block text-gray-800 font-semibold text-2xl mt-2 hover:text-gray-600 hover:underline">Secure strong revenue growth</a>
                            <p class="text-sm text-gray-600 mt-2">Sed odio orci, fringilla nec dolor et, euismod auctor mauris. Curabitur semper dui diam, nec accumsan mauris consequat sed. Interdum et malesuada fames ac ante…</p>
                        </div>

                        <div class="mt-4">
                            <div class="flex items-center justify-between">
                                <a href="#" class="px-2 py-1 bg-gray-800 text-white text-xs font-bold uppercase rounded hover:bg-gray-700 focus:outline-none focus:bg-gray-700">READ MORE</a>

                                <span class="mx-1 text-gray-600 text-xs">21 SEP 2015</span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>

        </div>
    </div>
</section>
<!-- END NEWS -->