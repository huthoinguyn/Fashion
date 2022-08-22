<!-- content -->
<div id="content" class="max-w-screen-xl mx-auto">
    <!-- Category -->
    <div class="cate-wrap grid grid-cols-3 h-[1000px] gap-7 py-10">
        <div class="item1 cate-item row-span-5">
            <img src="./imgs/category-image-01.jpg" alt="" class="ct-image" />
            <a href="" class="cate-btn">Dresses</a>
        </div>
        <div class="item2 cate-item col-start-2 row-start-1 row-span-4">
            <img src="./imgs/category-image-02.jpg" alt="" class="ct-image" />
            <a href="" class="cate-btn">Watches</a>
        </div>
        <div class="item3 cate-item row-span-5">
            <img src="./imgs/category-image-03.jpg" alt="" class="ct-image" />
            <a href="" class="cate-btn">Bags</a>
        </div>
        <div class="item4 cate-item row-span-5">
            <img src="./imgs/category-image-04.jpg" alt="" class="ct-image" />
            <a href="" class="cate-btn">Sunglasses</a>
        </div>
        <div class="item5 cate-item row-start-5 col-start-2 row-span-6">
            <img src="./imgs/category-image-05.jpg" alt="" class="ct-image" />
            <a href="" class="cate-btn">Footerwear</a>
        </div>
        <div class="item6 cate-item row-span-5 flex justify-center items-center flex-col bg-[url('./imgs/category-image-06.webp')] bg-cover bg-no-repeat h-full px-[60px]">
            <h3 class="text-3xl uppercase text-gray-900 leading-9 font-medium text-center pb-2">
                SIGN UP & GET 20% OFF
            </h3>
            <p class="text-base text-gray-400 leading-6 font-normal text-center">
                Be the frist to know about the latest fashion news and get
                exclu-sive offers
            </p>
            <a href="./html/form.php" class="ct-button text-base px-14 py-2 mt-6">sign up</a>
        </div>
    </div>
    <!-- Feature Product -->
    <?php include('pages/element/featured.php') ?>
    <!-- Our Blog -->
    <div class="our-blog h-[100vh] pt-[94px] pb-[65px]">
        <h3 class="title uppercase font-semibold text-center pb-[60px] leading-9 text-3xl">
            our blog
        </h3>
        <div class="blog-list h-[495px] grid grid-cols-3 gap-7">
            <div class="blog-item">
                <div class="overflow-hidden">
                    <img src="./imgs/blog-image-01.jpg" class="hover:scale-125 transition-all duration-300 ease-in-out cursor-pointer" alt="" />
                </div>
                <div class="body text-left py-3 px-1">
                    <h4 class="pb-2">
                        <a href="" class="text-base font-normal leading-6 hover:text-pri">
                            Black Friday Guide: Best Sales & Discount Codes
                        </a>
                    </h4>
                    <p class="text-sm font-normal leading-6 text-gray-400">
                        By <span class="text-gray-500">Nancy Ward</span> on
                        <span class="text-gray-500">July 22, 2017</span>
                    </p>
                    <p class="text-sm font-normal leading-6 text-gray-400 pt-4">
                        Duis ut velit gravida nibh bibendum commodo. Sus-pendisse
                        pellentesque mattis augue id euismod. Inter-dum et malesuada
                        fames
                    </p>
                </div>
            </div>
            <div class="blog-item">
                <div class="overflow-hidden">
                    <img src="./imgs/blog-image-02.jpg" class="hover:scale-125 transition-all duration-300 ease-in-out cursor-pointer" alt="" />
                </div>
                <div class="body text-left py-3 px-1">
                    <h4 class="pb-2">
                        <a href="" class="text-base font-normal leading-6 hover:text-pri">
                            Black Friday Guide: Best Sales & Discount Codes
                        </a>
                    </h4>
                    <p class="text-sm font-normal leading-6 text-gray-400">
                        By <span class="text-gray-500">Nancy Ward</span> on
                        <span class="text-gray-500">July 22, 2017</span>
                    </p>
                    <p class="text-sm font-normal leading-6 text-gray-400 pt-4">
                        Duis ut velit gravida nibh bibendum commodo. Sus-pendisse
                        pellentesque mattis augue id euismod. Inter-dum et malesuada
                        fames
                    </p>
                </div>
            </div>
            <div class="blog-item">
                <div class="overflow-hidden">
                    <img src="./imgs/blog-image-03.webp" class="hover:scale-125 transition-all duration-300 ease-in-out cursor-pointer" alt="" />
                </div>
                <div class="body text-left py-3 px-1">
                    <h4 class="pb-2">
                        <a href="" class="text-base font-normal leading-6 hover:text-pri">
                            Black Friday Guide: Best Sales & Discount Codes
                        </a>
                    </h4>
                    <p class="text-sm font-normal leading-6 text-gray-400">
                        By <span class="text-gray-500">Nancy Ward</span> on
                        <span class="text-gray-500">July 22, 2017</span>
                    </p>
                    <p class="text-sm font-normal leading-6 text-gray-400 pt-4">
                        Duis ut velit gravida nibh bibendum commodo. Sus-pendisse
                        pellentesque mattis augue id euismod. Inter-dum et malesuada
                        fames
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Follow us -->
    <div class="follow-us pt-5 flex flex-col">
        <h3 class="title uppercase font-semibold text-center pb-[60px] leading-9 text-3xl">
            @ FOLLOW US ON INSTAGRAM
        </h3>
        <div class="follow-list flex w-[100vw] h-[300px] relative left-[calc(-50vw_+_50%)] overflow-hidden">
            <!-- item 1 -->
            <div class="follow-item relative w-[20vw] h-full bg-[url('./imgs/follow-image-01.jpg')] bg-cover bg-no-repeat cursor-pointer overflow-hidden">
                <div class="blur absolute inset-0 scale-125 bg-black opacity-0 transition-all duration-300 ease-in-out"></div>
                <div class="favorite pl-8 pt-7 text-gray-300 transition-all duration-300 ease-in-out -translate-x-[150%] -translate-y-[150%] flex items-center text-sm">
                    <span class="material-symbols-outlined"> favorite </span>
                    <span class="ml-2"> 39 </span>
                </div>
                <div class="content text-sm absolute left-0 right-0 bottom-0 translate-y-[150%] pl-10 pr-6 pb-8 transition-all duration-300 ease-in-out">
                    <p class="text-gray-300 mb-4">
                        Nullam scelerisque, lacus sed consequat laoreet, dui enim
                        iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare
                        tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget
                        metus elit.
                    </p>
                    <span class="text-gray-300">Photo by @huthoine</span>
                </div>
            </div>
            <!-- item 2 -->
            <div class="follow-item relative w-[20%] h-full bg-[url('./imgs/follow-image-02.jpg')] bg-cover bg-no-repeat cursor-pointer overflow-hidden">
                <div class="blur absolute inset-0 scale-125 bg-black opacity-0 transition-all duration-300 ease-in-out"></div>
                <div class="favorite pl-8 pt-7 text-gray-300 transition-all duration-300 ease-in-out -translate-x-[150%] -translate-y-[150%] flex items-center">
                    <span class="material-symbols-outlined"> favorite </span>
                    <span class="ml-2"> 39 </span>
                </div>
                <div class="content text-sm absolute left-0 right-0 bottom-0 translate-y-[150%] pl-10 pr-6 pb-8 transition-all duration-300 ease-in-out">
                    <p class="text-gray-300 mb-4">
                        Nullam scelerisque, lacus sed consequat laoreet, dui enim
                        iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare
                        tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget
                        metus elit.
                    </p>
                    <span class="text-gray-300">Photo by @huthoine</span>
                </div>
            </div>
            <!-- item 3 -->
            <div class="follow-item relative w-[20%] h-full bg-[url('./imgs/follow-image-03.jpg')] bg-cover bg-no-repeat cursor-pointer overflow-hidden">
                <div class="blur absolute inset-0 scale-125 bg-black opacity-0 transition-all duration-300 ease-in-out"></div>
                <div class="favorite pl-8 pt-7 text-gray-300 transition-all duration-300 ease-in-out -translate-x-[150%] -translate-y-[150%] flex items-center">
                    <span class="material-symbols-outlined"> favorite </span>
                    <span class="ml-2"> 39 </span>
                </div>
                <div class="content text-sm absolute left-0 right-0 bottom-0 translate-y-[150%] pl-10 pr-6 pb-8 transition-all duration-300 ease-in-out">
                    <p class="text-gray-300 mb-4">
                        Nullam scelerisque, lacus sed consequat laoreet, dui enim
                        iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare
                        tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget
                        metus elit.
                    </p>
                    <span class="text-gray-300">Photo by @huthoine</span>
                </div>
            </div>
            <!-- item 4 -->
            <div class="follow-item relative w-[20%] h-full bg-[url('./imgs/follow-image-04.jpg')] bg-cover bg-no-repeat cursor-pointer overflow-hidden">
                <div class="blur absolute inset-0 scale-125 bg-black opacity-0 transition-all duration-300 ease-in-out"></div>
                <div class="favorite pl-8 pt-7 text-gray-300 transition-all duration-300 ease-in-out -translate-x-[150%] -translate-y-[150%] flex items-center">
                    <span class="material-symbols-outlined"> favorite </span>
                    <span class="ml-2"> 39 </span>
                </div>
                <div class="content text-sm absolute left-0 right-0 bottom-0 translate-y-[150%] pl-10 pr-6 pb-8 transition-all duration-300 ease-in-out">
                    <p class="text-gray-300 mb-4">
                        Nullam scelerisque, lacus sed consequat laoreet, dui enim
                        iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare
                        tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget
                        metus elit.
                    </p>
                    <span class="text-gray-300">Photo by @huthoine</span>
                </div>
            </div>
            <!-- item 5 -->
            <div class="follow-item relative w-[20%] h-full bg-[url('./imgs/follow-image-05.jpg')] bg-cover bg-no-repeat cursor-pointer overflow-hidden">
                <div class="blur absolute inset-0 scale-125 bg-black opacity-0 transition-all duration-300 ease-in-out"></div>
                <div class="favorite pl-8 pt-7 text-gray-300 transition-all duration-300 ease-in-out -translate-x-[150%] -translate-y-[150%] flex items-center">
                    <span class="material-symbols-outlined"> favorite </span>
                    <span class="ml-2"> 39 </span>
                </div>
                <div class="content text-sm absolute left-0 right-0 bottom-0 translate-y-[150%] pl-10 pr-6 pb-8 transition-all duration-300 ease-in-out">
                    <p class="text-gray-300 mb-4">
                        Nullam scelerisque, lacus sed consequat laoreet, dui enim
                        iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare
                        tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget
                        metus elit.
                    </p>
                    <span class="text-gray-300">Photo by @huthoine</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Service -->
    <div class="pt-[64px] pb-[48px] w-[100vw] relative left-[calc(-50vw_+_50%)] overflow-hidden grid grid-cols-3">
        <div class="p-4 flex flex-col items-center border-r">
            <p class="text-lg leading-7 font-normal">Free Delivery Worldwide</p>
            <a href="" class="title text-sm"> Click here for more info </a>
        </div>
        <div class="p-4 flex flex-col items-center border-r">
            <p class="text-lg leading-7 font-normal">Free Delivery Worldwide</p>
            <a href="" class="title text-sm"> Click here for more info </a>
        </div>
        <div class="p-4 flex flex-col items-center">
            <p class="text-lg leading-7 font-normal">Free Delivery Worldwide</p>
            <a href="" class="title text-sm"> Click here for more info </a>
        </div>
    </div>
</div>