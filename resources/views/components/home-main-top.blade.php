<article class="main-top-container">
    <div class="main-top">
        <div class="bullets-slider-container">
            <!--bullets slider component attached-->
            <div class="bullets-slider">
                <div class="carousel relative ">
                    <div class="carousel-inner relative overflow-hidden bullets-slider">
                        <!--Slide 1-->
                        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                        <div class="carousel-item absolute opacity-0 w-full h-full" >
                            <div class="block h-full w-full bg-indigo-500 text-white text-5xl text-center rounded-2xl">
                                <img src="images/maintop-1.jpg" alt="product img" class="rounded-lg">

                            </div>
                        </div>
                        <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-5xl font-bold text-gray-200	 transform hover:translate-x-0.5 rounded-full e leading-tight text-center z-9 inset-y-0 right-0 my-auto">‹</label>
                        <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-5xl font-bold text-gray-200	transform hover:translate-x-0.5	 rounded-full  leading-tight text-center z-9 inset-y-0 left-0 my-auto">›</label>

                        <!--Slide 2-->
                        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                        <div class="carousel-item absolute opacity-0 w-full h-full" >
                            <div class="block h-full w-full bg-orange-500 text-white text-5xl text-center">
                                <img src="images/maintop-2.jpg" alt="product img" class="rounded-lg">
                            </div>
                        </div>
                        <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-5xl font-bold text-gray-200  transform hover:translate-x-0.5  rounded-full   leading-tight text-center z-9 inset-y-0 right-0 my-auto">‹</label>
                        <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-5xl font-bold text-gray-200  transform hover:translate-x-0.5  rounded-full  leading-tight text-center z-9 inset-y-0 left-0 my-auto">›</label>

                        <!--Slide 3-->
                        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                        <div class="carousel-item absolute opacity-0 w-full h-full">
                            <div class="block h-full w-full bg-green-500 text-white text-5xl text-center">
                                <img src="images/maintop-3.jpg" alt="product img" class="rounded-lg">

                            </div>
                        </div>
                        <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-5xl font-bold text-gray-200 transform hover:translate-x-0.5 rounded-full  leading-tight text-center z-9 inset-y-0 right-0 my-auto">‹</label>
                        <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-5xl font-bold text-gray-200 transform hover:translate-x-0.5 rounded-full leading-tight text-center z-9 inset-y-0 left-0 my-auto">›</label>

                        <!-- Add additional indicators for each slide-->
                        <ol class="carousel-indicators">
                            @for($i=01;$i<=3;$i++)
                                <li class="inline-block mr-3">
                                    <label for="carousel-{{$i}}" class="carousel-bullet cursor-pointer block text-4xl text-white transform hover:scale-125">•</label>
                                </li>
                            @endfor

                        </ol>

                    </div>
                </div>

            </div>
        </div>
        <div class="main-top-sides">
            <div class="side">
                <a href="side product page">
                    <img src="images/maintop-topside.gif" alt="product gif">
                </a>
            </div>
            <div class="side">
                <a href="side product page">
                    <img src="images/maintop-bottomside.jpg" alt="product gif">
                </a>
            </div>
        </div>
    </div>
</article>
