<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>

</head>

<body>
    <!-- START NAVBAR -->
    <nav class="fixed w-full bg-white" style="z-index:99">
        <div class="bg-gray-200 py-2">
            <div class="flex justify-between container mx-auto px-4">
                <div class="flex items-center">
                    <ul class="flex content-center">
                        <li>
                            <a href="https://www.facebook.com/pg/Yumyums.gallery/" class="text-gray-600 hover:text-black transition duration-300 ease-in-out px-2  block">
                                <svg style="max-height:15px; min-height:15px; height: 100%;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-facebook-f fa-w-10">
                                    <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" class=""></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/yumyums.gallery/" class="text-gray-600 hover:text-black  transition duration-300 ease-in-out px-2  block">
                                <svg style="max-height:15px; min-height:15px; height: 100%;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-instagram fa-w-14">
                                    <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" class=""></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="flex items-center">
                    <ul class="flex content-center">
                        <li class="inline-block flex items-center text-gray-600 mr-3">
                            <svg style="min-height: 15px; height:15px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-envelope fa-w-16">
                                <path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z" class=""></path>
                            </svg>
                            <span class="ml-2 text-sm ">154 Av the good, New York </span>
                        </li>
                        <li class="inline-block flex items-center text-gray-600">
                            <svg style="min-height: 15px; height:15px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-phone-alt fa-w-16">
                                <path fill="currentColor" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z" class=""></path>
                            </svg>
                            <span class="ml-2 text-sm ">Phone: +124 548 698 254</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- START Main header -->
        <div class="py-4">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-4 gap-6">
                    <div class="col-span-1">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.jpg" alt="">
                    </div>
                    <div class="col-span-2 flex items-center font-semibold justify-center ">
                        <ul>
                            <li class="inline-block"><a class="text-gray-600 hover:text-gray-800 transition duration-300 ease-in-out px-2" href="#">Home</a></li>
                            <li class="inline-block"><a class="text-gray-600 hover:text-gray-800 transition duration-300 ease-in-out px-2" href="#">Services</a></li>
                            <li class="inline-block"><a class="text-gray-600 hover:text-gray-800 transition duration-300 ease-in-out px-2" href="#">Products</a></li>
                            <li class="inline-block"><a class="text-gray-600 hover:text-gray-800 transition duration-300 ease-in-out px-2" href="#">Team</a></li>
                            <li class="inline-block"><a class="text-gray-600 hover:text-gray-800 transition duration-300 ease-in-out px-2" href="#">Blog</a></li>
                            <li class="inline-block"><a class="text-gray-600 hover:text-gray-800 transition duration-300 ease-in-out px-2" href="#">Success Partners</a></li>
                            <li class="inline-block"><a class="text-gray-600 hover:text-gray-800 transition duration-300 ease-in-out px-2" href="#">Contact Us</a></li>

                        </ul>
                    </div>
                    <div class="col-span-1 flex items-center justify-end">
                        <a href="#" class="bg-secondary px-4 py-2 text-white hover:bg-gray-800 transition duration-500 ease-in-out font-semibold text-sm"> REQUEST A QUOTE </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Main header -->
    </nav>
    <!-- END NAVBAR -->