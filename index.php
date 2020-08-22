<?php get_header(); ?>
<!-- START hero -->
<section class="bg-gray bg-cover bg-center bg-top bg-no-repeat h-screen xx relative" style="background-image: url('http://themes.webdevia.com/factory/wp-content/uploads/2016/06/quality.jpg');">
    <div class="container mx-auto px-5 h-full flex items-center justify-center relative" style="z-index:9">
        <div class="text-center text-white">
            <span class="font-bold"> THE ULTIMATE GOAL</span>
            <h1 class="lg:text-6xl font-bold "> Supplying The World <br> With High Quality <br> Pricessed Food </h1>
            <a href="#" class="bg-secondary px-4 py-2 text-white hover:bg-gray-800 transition duration-500 ease-in-out font-semibold text-sm mt-4 inline-block"> READ MORE </a>
        </div>

    </div>
</section>
<!-- END hero -->
<!-- START CARD -->
<section class="py-4">
    <div class="container px-4 mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <div class="card">
                    <img style="width:100%" loading="lazy" src="https://picsum.photos/375/200.webp?random=<?php echo $i ?>.webp" alt="">
                    <h4 class="text-xl font-semibold py-4 hr-bb relative">Agricultural Engineering</h4>
                    <p class="text-sm text-gray-500">As the world's largest green and clean egerngy specialist of the printing and typesetting industry. Lorem has been the industry.</p>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
<!-- END CARD -->

<!-- START iconscard -->
<section class="py-12">
    <div class="container px-4 mx-auto">
        <div class="text-center py-8 mb-8">
            <h2 class="text-4xl">We Offer First Class Services</h2>
            <h3 class="text 2xl">You’ve got covered by the professionals</h3>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="col-span-2 flex items-center">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <?php for ($i = 0; $i < 4; $i++) : ?>
                        <div class="">
                            <svg class="h-8 text-secondary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="briefcase" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-briefcase fa-w-16">
                                <path fill="currentColor" d="M320 336c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h416c25.6 0 48-22.4 48-48V288H320v48zm144-208h-80V80c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48 48v48H48c-25.6 0-48 22.4-48 48v80h512v-80c0-25.6-22.4-48-48-48zm-144 0H192V96h128v32z" class=""></path>
                            </svg>
                            <h4 class="text-xl font-semibold py-2">Investment</h4>
                            <p class="text-sm text-gray-600">For your future est ornare, tempus velit vitae, sodales nunc. Nulla sed posuere est. Quisque et porttitor nice.</p>
                        </div>
                    <?php endfor; ?>
                </div>

            </div>
            <div class="col=span-1">
                <img class="w-full" src="https://picsum.photos/375/375.webp" alt="">
            </div>
        </div>
    </div>
</section>
<!-- END iconscard -->

<!-- START bgSection -->
<section class="bg-gray bg-center bg-no-repeat bg-cover py-24" style="background: url('http://themes.webdevia.com/factory/wp-content/uploads/2016/06/quality.jpg');">
    <div class="container mx-auto px-4 py-24">
        <div class="grid lg:grid-cols-2 gap-6">
            <div></div>
            <div>
                <h3 class="text-5xl text-white font-bold py-4">Quality is our first priority</h3>
                <p class="text-white font-semibold ">Investing in business is easy if you know the rules uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="text-white my-4 inline-block bg-orange px-4 py-2 hover:bg-black transition duration-300 ease-in-out" href="#">GET THE OFFER </a>
            </div>
        </div>
    </div>
</section>
<!-- END gbSection -->




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

<!-- START GAllery -->
<section class="py-12 bg-black text-white">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-3 gap-6">
            <div class="col-span-3 lg:col-span-1">
                <h3 class="pb text-3xl font-semibold">Here is Our Gallery</h3>
                <hr style="border-bottom: 4px solid #db4436;" class="text-secondary border-solid w-16 inline-block border-t-0 ">
                <p class="mt-2">Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam doloremque laudantium, totam rem aperiam.</p>
            </div>
            <div class="col-span-3 lg:col-span-2">
                <div class="grid grid-cols-4 gap-2">
                    <?php for ($i = 0; $i < 8; $i++) : ?>
                        <img style="width:100%" loading="lazy" src="https://picsum.photos/375/200.webp?random=<?php echo $i ?>.webp" alt="">
                    <?php endfor; ?>

                </div>
            </div>
        </div>
    </div>
</section>



<!-- START partnerts -->
<section class="py-8">
    <div class="grid grid-cols-2 lg:grid-cols-6">
        <?php for ($i = 0; $i < 12; $i++) : ?>

            <div>
                <div class="relative">
                    <a class="hovercard" href="#">
                        <img style="width: 100%;" src="http://inetwork-me.com/wp-content/uploads/2019/05/logo.png" alt="">
                        <div class="absolute text-white w-full h-full top-0 flex items-end p-4 opacity-0 " style="z-index: 10; background-color: #106eaa94;">
                            <div><b>INETWORK ME</b>
                                <br>
                                <span>EGYPT</span></div>

                        </div>
                    </a>

                </div>
            </div>
        <?php endfor; ?>

    </div>
</section>
<!-- END partnerts -->



<!-- START Categories -->
<section class="py-8 bg-black px-4">
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-2">
        <?php for ($i = 0; $i < 8; $i++) : ?>
            <div class="overflow-hidden rounded">
                <a href="#">
                    <img class="transform  scale-100 hover:scale-125 transition duration-500 ease-in-out" style="width:100%" loading="lazy" src="https://picsum.photos/450/700.webp?random=<?php echo $i ?>.webp" alt="">
                </a>

            </div>
        <?php endfor; ?>

    </div>
</section>
<!-- END Categories -->


<!-- START Services -->
<section class="py-40">
    <div class="container mx-auto px-5">
        <div class="grid grid-cols-3 gap-12">
            <div class="col-span-3 lg:col-span-2">
                <?php for ($i = 0; $i < 4; $i++) : ?>
                    <div class="shadow-lg border border-gray-100 relative mb-16">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="hidden lg:block col-span-1">
                                <img class="transform -translate-y-6 translate-x-6 rounded" src="http://industify.frenify.com/1/wp-content/uploads/2018/08/aerospace.jpg" alt="">
                            </div>
                            <div class="col-span-3 lg:col-span-2 flex items-start">
                                <div class="p-8 mb-8 lg:mb-0">
                                    <span class="font-semibold text-xl mb-4 block">Aerospace and Defense</span>
                                    <p class="text-gray-700">Our manufacturing services provide assurance to clients that their people, processes, and products are as safe and efficient as possible. From logistics and compliance, to</p>

                                </div>
                                <a class="absolute bottom-0 right-0 bg-black text-white font-semibold py-2 px-6 hover:bg-secondary transition duration-300 ease-in-out" href="#"> READ MORE </a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>

            </div>
            <div class="col-span-3 lg:col-span-1">
                <div class="text-white bg-orange rounded overflow-hidden mb-8">
                    <h3 class="p-8 font-semibold sidebartitle relative" style="background-color: #f2654e;">FULL LIST OF SERVICES</h3>
                    <div class="px-8 py-8">
                        <ul> <?php for ($i = 0; $i < 8; $i++) : ?>

                                <li>
                                    <a class="listlink relative block mb-4" href="#"> Aerospace and Defense </a>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>

                <div>
                    <h3 class="py-8 font-semibold hr-bb relative">Company Presentation</h3>
                    <ul>
                        <li>
                            <a href="#" class="flex items-center bg-black text-white hover:bg-gray-800 p-4 rounded mb-4 transition duration-300 ease-in-out">
                                <svg class="h-6" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-download" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-file-download fa-w-12">
                                    <path fill="currentColor" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm76.45 211.36l-96.42 95.7c-6.65 6.61-17.39 6.61-24.04 0l-96.42-95.7C73.42 337.29 80.54 320 94.82 320H160v-80c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v80h65.18c14.28 0 21.4 17.29 11.27 27.36zM377 105L279.1 7c-4.5-4.5-10.6-7-17-7H256v128h128v-6.1c0-6.3-2.5-12.4-7-16.9z" class=""></path>
                                </svg>
                                <span class="inline-block ml-4">Download.PDF</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center bg-black text-white hover:bg-gray-800 p-4 rounded mb-4 transition duration-300 ease-in-out">
                                <svg class="h-6" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-download" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-file-download fa-w-12">
                                    <path fill="currentColor" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm76.45 211.36l-96.42 95.7c-6.65 6.61-17.39 6.61-24.04 0l-96.42-95.7C73.42 337.29 80.54 320 94.82 320H160v-80c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v80h65.18c14.28 0 21.4 17.29 11.27 27.36zM377 105L279.1 7c-4.5-4.5-10.6-7-17-7H256v128h128v-6.1c0-6.3-2.5-12.4-7-16.9z" class=""></path>
                                </svg>
                                <span class="inline-block ml-4">Download.PDF</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center bg-black text-white hover:bg-gray-800 p-4 rounded mb-4 transition duration-300 ease-in-out">
                                <svg class="h-6" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-download" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-file-download fa-w-12">
                                    <path fill="currentColor" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm76.45 211.36l-96.42 95.7c-6.65 6.61-17.39 6.61-24.04 0l-96.42-95.7C73.42 337.29 80.54 320 94.82 320H160v-80c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v80h65.18c14.28 0 21.4 17.29 11.27 27.36zM377 105L279.1 7c-4.5-4.5-10.6-7-17-7H256v128h128v-6.1c0-6.3-2.5-12.4-7-16.9z" class=""></path>
                                </svg>
                                <span class="inline-block ml-4">Download.PDF</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- END Services -->



<!-- START TEAM -->
<section class="py-12">
    <div class="container mx-auto px-5">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
            <?php for ($i = 0; $i < 8; $i++) : ?>
                <div>
                    <div class="overflow-hidden relative" style="height: 300px; ">
                        <img class="transform object-cover  w-full scale-100 hover:scale-110 transition duration-500 ease-in-out" style=" height: 300px;" src="http://industify.frenify.com/1/wp-content/uploads/2019/06/11.jpg" alt="">
                        <div class="flex items-center absolute bottom-0 justify-center w-full p-4 text-white" style="background-color: #0000009e;">
                            <ul class="flex content-center">
                                <li>
                                    <a href="https://www.facebook.com/pg/Yumyums.gallery/" class="text-gray-500 hover:text-white transition duration-300 ease-in-out px-2  block">
                                        <svg style="max-height:15px; min-height:15px; height: 100%;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-facebook-f fa-w-10">
                                            <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" class=""></path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/yumyums.gallery/" class="text-gray-500 hover:text-white  transition duration-300 ease-in-out px-2  block">
                                        <svg style="max-height:15px; min-height:15px; height: 100%;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-instagram fa-w-14">
                                            <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" class=""></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center py-4 ">
                        <span class="block font-semibold  text-gray-900">ALAN MICHAELIS</span>
                        <span class="block font-semibold text-gray-500 text-sm">CHIEF EXECUTIVE</span>
                    </div>
                </div>

            <?php endfor; ?>

        </div>
    </div>
</section>
<!-- END TEAM -->
<?php get_footer(); ?>