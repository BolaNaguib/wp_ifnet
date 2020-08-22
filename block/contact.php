<!-- Start Contact  -->
<section class="py-8">
    <div class="container mx-auto px-4">
        <div class="mb-12">
            <iframe width="100%" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d513.3333745957857!2d31.341013807667913!3d30.05746291043607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583f9c3f5ad639%3A0x755e8b0d6e6135d0!2sINETWORK+Middle+East+LLC!5e0!3m2!1sen!2seg!4v1530127042703" allowfullscreen=""></iframe>
        </div>
        <div class="grid grid-cols-3 gap-6">
            <div class=" col-span-3 lg:col-span-1">
                <div class="forminput bg-gray-100 p-4">
                    <h3 class="font-semibold mb-4">Get In Touch With Us</h3>
                    <?php echo do_shortcode('[contact-form-7 id="8" title="Contact form 1"]') ?>

                </div>
            </div>
            <div class="col-span-3 lg:col-span-2">
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class="bg-black text-white rounded mb-4 overflow-hidden">
                        <div class="flex justify-between" style="background-color:#111422">
                            <h3 class="px-8 py-4 font-semibold inline-block">Washington Office</h3>
                            <div class=" inline-block bg-orange flex items-center px-4 text-white">
                                <svg class="h-6" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-map-marker-alt fa-w-12">
                                    <path fill="currentColor" d="M192 96c-52.935 0-96 43.065-96 96s43.065 96 96 96 96-43.065 96-96-43.065-96-96-96zm0 160c-35.29 0-64-28.71-64-64s28.71-64 64-64 64 28.71 64 64-28.71 64-64 64zm0-256C85.961 0 0 85.961 0 192c0 77.413 26.97 99.031 172.268 309.67 9.534 13.772 29.929 13.774 39.465 0C357.03 291.031 384 269.413 384 192 384 85.961 298.039 0 192 0zm0 473.931C52.705 272.488 32 256.494 32 192c0-42.738 16.643-82.917 46.863-113.137S149.262 32 192 32s82.917 16.643 113.137 46.863S352 149.262 352 192c0 64.49-20.692 80.47-160 281.931z" class=""></path>
                                </svg>
                            </div>

                        </div>
                        <div class="p-8">
                            <p><span>100-120 Ft.Drive NE, Washington, DC 20011</span><br>
                                <span>Phone: +1 202-415-7234</span><br>
                                <span>Email: <a href="mailto:w.industify@gmail.com">w.industify@gmail.com</a></span>
                            </p>
                        </div>
                    </div>
                <?php endfor; ?>

            </div>
        </div>
    </div>
</section>
<!-- End Contact  -->