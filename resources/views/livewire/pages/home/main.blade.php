<div class="grid max-w-screen-xl grid-cols-1 gap-8 px-8 py-20 m-auto rounded-lg countener md:grid-cols-2 md:px-12 lg:px-16 xl:px-32">
    <div class="flex flex-col items-center justify-between">
        <div class="">
            <h2 class="mt-4 text-4xl font-bold leading-tight lg:text-5xl">وحدة وثائق التخرج</h2>
        </div>
        <img src="{{ asset('img/home/5853.jpg') }}" alt="Contact" class="w-full mt-12 lg:mt-16">
    </div>
    <div class="flex flex-col items-center justify-between mt-0 ">
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
                        <a href="{{ route('document') }}"><span class="mt-1 text-lg spot">الصفحةالرئيسية</span> </a>
                    </div>
                </svg>
            </div>

            <!-- المطورين -->
            <div class="svg-wrapper">
                <svg height="40" width="140" xmlns="http://www.w3.org/2000/svg">
                    <rect id="shape" height="40" width="140" />
                    <div id="text">
                        <a href=""><span class="mt-1 text-lg spot">المطورين</span> </a>
                    </div>
                </svg>
            </div>
            <!-- حول -->
            <div class="svg-wrapper">
                <svg height="40" width="140" xmlns="http://www.w3.org/2000/svg">
                    <rect id="shape" height="40" width="140" />
                    <div id="text">
                        <a href=""><span class="mt-1 text-lg spot">حول الموقع</span> </a>
                    </div>
                </svg>
            </div>
        </div>
        <!-- الدخول -->
        <a href="{{ route('login') }}" type="button" class="mb-12 text-white text-center w-full p-3 text-sm font-bold tracking-wide uppercase rounded-full border bg-[#1E458A]"> الدخول</a>
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