<div class=" countener
grid max-w-screen-xl grid-cols-1 gap-8 px-8 py-20 m-auto rounded-lg md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 dark:bg-gray-800 dark:text-gray-100">
    <div class="flex flex-col justify-between items-center">
        <div class="">
            <h2 class="text-4xl font-bold leading-tight lg:text-5xl mt-4">وحدة وثائق التخرج</h2>
        </div>
        <img src="{{ asset('img/home/5853.jpg') }}" alt="Contact" class="w-full mt-12 lg:mt-16">
    </div>
    <div class="flex flex-col justify-between items-center  mt-0 ">
        <div>
            <img src="{{ asset('img/home/college.png') }}" alt="Contact" class="w-full ">

        </div>
        <div>
            <span calss="text-3xl font-bold">
                لخريجي كلية علوم الحاسوب و تكنولوجيا
                المعلومات جامعة البصرة</span>
        </div>
        <div>
            <!-- الصفحةالرئيسية -->
            <div class="svg-wrapper">
                <svg height="40" width="140" xmlns="http://www.w3.org/2000/svg">
                    <rect id="shape" height="40" width="140" />
                    <div id="text">
                        <a href=""><span class="spot text-lg mt-1">الصفحةالرئيسية</span> </a>
                    </div>
                </svg>
            </div>
            <!-- المطورين -->
            <div class="svg-wrapper">
                <svg height="40" width="140" xmlns="http://www.w3.org/2000/svg">
                    <rect id="shape" height="40" width="140" />
                    <div id="text">
                        <a href=""><span class="spot text-lg mt-1">المطورين</span> </a>
                    </div>
                </svg>
            </div>
            <!-- حول -->
            <div class="svg-wrapper">
                <svg height="40" width="140" xmlns="http://www.w3.org/2000/svg">
                    <rect id="shape" height="40" width="140" />
                    <div id="text">
                        <a href=""><span class="spot text-lg mt-1">حول الموقع</span> </a>
                    </div>
                </svg>
            </div>
        </div>
        <!-- الدخول -->
        <a href="{{ route('login') }}" type="button"  class="mb-12 text-white text-center w-full p-3 text-sm font-bold tracking-wide uppercase rounded-full border bg-[#1E458A] dark:bg-violet-400 dark:text-gray-900"> الدخول</a>
    </div>
</div>

<style scoped>
    .spot {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
    }

    .svg-wrapper {
        margin-top: 0;
        position: relative;
        width: 150px;
        height: 40px;
        display: inline-block;
        border-radius: 3px;
        margin-left: 5px;
        margin-right: 5px
    }

    #shape {
        stroke-width: 6px;
        fill: transparent;
        stroke: #1E458A;
        stroke-dasharray: 85 400;
        stroke-dashoffset: -220;
        transition: 1s all ease;
    }


    #text {
        margin-top: -35px;
        text-align: center;
    }

    #text a {
        color: black;
        text-decoration: none;
        font-weight: 300;
        font-size: 1.6em;
    }


    .svg-wrapper:hover #shape {
        stroke-dasharray: 50 0;
        stroke-width: 3px;
        stroke-dashoffset: 0;
        stroke: #1E458A;
    }
</style>