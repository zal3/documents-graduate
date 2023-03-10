<div class="text-white flex flex-col gap-[10px] justify-between  pt-5 fixed top-0 bottom-0 lg:right-0 w-[220px] bg-[#1E458A]">
    <div class="">
        <div class="pr-3 leading-9 text-gray-100 hover:bg-black hover:bg-opacity-30">
            <a href="{{ route('home') }}" class=" lg:right-0 pr-2.5 mt-1 flex items-center">
                <div class="pl-3">
                    <svg width="30" height="20" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M469.666 216.45L271.078 33.749a34 34 0 0 0-47.062.98L41.373 217.373L32 226.745V496h176V328h96v168h176V225.958ZM248.038 56.771c.282 0 .108.061-.013.18c-.125-.119-.269-.18.013-.18ZM448 464H336V328a32 32 0 0 0-32-32h-96a32 32 0 0 0-32 32v136H64V240L248.038 57.356c.013-.012.014-.023.024-.035L448 240Z" />
                    </svg>
                </div>
                <h1 class="lg:right-0 text-gray-200 text-[15px] ml-2">الصفحة الرئيسية</h1>
            </a>
        </div>
        <div class="leading-9 text-gray-100 hover:bg-black pr-3 hover:bg-opacity-30 {{ request()->is('document') ? '!bg-black !bg-opacity-30' : '' }}">
            <a href="{{ route('document') }}" class="lg:right-0 pr-2.5 mt-1 flex items-center">
                <div class="pl-3">
                    <svg width="34" height="19" viewBox="0 0 512 512">
                        <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M416 221.25V416a48 48 0 0 1-48 48H144a48 48 0 0 1-48-48V96a48 48 0 0 1 48-48h98.75a32 32 0 0 1 22.62 9.37l141.26 141.26a32 32 0 0 1 9.37 22.62Z" />
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 56v120a32 32 0 0 0 32 32h120" />
                    </svg>
                </div>
                <h1 class="lg:right-0 text-gray-200 text-[15px] ml-2">الوثائق</h1>
            </a>
        </div>
        <div class="leading-9 text-gray-100 hover:bg-black  pr-3 hover:bg-opacity-30 {{ request()->is('unid') ? '!bg-black !bg-opacity-30' : '' }}">
            <a href="{{ route('unid') }}" class="lg:right-0 pr-2.5 mt-1 flex items-center">
                <div class="pl-3">
                    <svg width="34" height="19" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M5 21q-.825 0-1.413-.587Q3 19.825 3 19V5q0-.825.587-1.413Q4.175 3 5 3h11l5 5v11q0 .825-.587 1.413Q19.825 21 19 21Zm0-2h14V9h-3q-.425 0-.712-.288Q15 8.425 15 8V5H5Zm3-2h8q.425 0 .712-.288Q17 16.425 17 16t-.288-.713Q16.425 15 16 15H8q-.425 0-.713.287Q7 15.575 7 16t.287.712Q7.575 17 8 17Zm0-8h3q.425 0 .713-.288Q12 8.425 12 8t-.287-.713Q11.425 7 11 7H8q-.425 0-.713.287Q7 7.575 7 8t.287.712Q7.575 9 8 9Zm0 4h8q.425 0 .712-.288Q17 12.425 17 12t-.288-.713Q16.425 11 16 11H8q-.425 0-.713.287Q7 11.575 7 12t.287.712Q7.575 13 8 13ZM5 5v4v-4v14Z" />
                    </svg>
                </div>
                <h1 class="lg:right-0 text-gray-200 text-[15px] ml-2">الأمر الجامعي</h1>
            </a>
        </div>
        <div class="leading-9 text-gray-100 hover:bg-black pr-3 hover:bg-opacity-30 @if (request()->is('graduate') || request()->is('graduate/add')) !bg-black !bg-opacity-30 @endif">
            <button class="flex items-center text-[15px] font-normal rounded-lg transition duration-75 group" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                <svg width="34" height="19" viewBox="0 0 16 16">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.25 9.25V6L8 2.75L1.75 6L8 9.25l3.25-1.5v3.5c0 1-1.5 2-3.25 2s-3.25-1-3.25-2v-3.5" />
                </svg>
                <span class="flex-1 ml-1 mr-3 whitespace-nowrap" sidebar-toggle-item> الخريجين</span>
                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <ul id="dropdown-example" class="hidden py-4 mr-5 space-y-2">
                <li>
                    <a href="{{ route('graduate') }}" class="flex items-center w-full text-sm text-gray-400 group hover:text-white focus:text-white">
                        الخريجين </a>
                </li>

                <li>
                    <a href="{{ route('add-graduate') }}" class="flex items-center w-full text-sm font-normal text-gray-400 group hover:text-white focus:text-white">
                        أضافة</a>
                </li>
            </ul>
        </div>
        <div class="leading-9 text-gray-100 hover:bg-black pr-3 hover:bg-opacity-30 @if (request()->is('department/science-subject') ||
                    request()->is('department/science-student') ||
                    request()->is('department/information-student') ||
                    request()->is('department/information-subject')) !bg-black !bg-opacity-30 @endif">
            <button class="flex items-center text-[15px] font-normal rounded-lg transition duration-75 group" aria-controls="dropdown-examplee" data-collapse-toggle="dropdown-examplee">

                <svg width="34" height="19" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M5 23.7q-.825 0-1.413-.588Q3 22.525 3 21.7v-14q0-.825.587-1.413Q4.175 5.7 5 5.7h8.925l-2 2H5v14h14v-6.95l2-2v8.95q0 .825-.587 1.412q-.588.588-1.413.588Zm7-9Zm4.175-8.425l1.425 1.4l-6.6 6.6V15.7h1.4l6.625-6.625l1.425 1.4l-6.625 6.625q-.275.275-.637.438q-.363.162-.763.162H10q-.425 0-.712-.287Q9 17.125 9 16.7v-2.425q0-.4.15-.763q.15-.362.425-.637Zm4.275 4.2l-4.275-4.2l2.5-2.5q.6-.6 1.438-.6q.837 0 1.412.6l1.4 1.425q.575.575.575 1.4T22.925 8Z" />
                </svg>
                <span class="flex-1 ml-1 mr-3 whitespace-nowrap" sidebar-toggle-item>الأقسام العلمية</span>
                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <ul id="dropdown-examplee" class="hidden py-4 mr-5 space-y-2">
                <li>
                    <div class=" lg:right-0">
                        <button class="flex items-center text-sm text-gray-400 transition duration-75 group hover:text-white focus:text-white" aria-controls="dropdown-exampleee" data-collapse-toggle="dropdown-exampleee">
                            <span class="flex-1 ml-1 mr-3 whitespace-nowrap" sidebar-toggle-item>
                                علوم الحاسوب </span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-exampleee" class="hidden py-4 mr-5 space-y-2">
                            <li>
                                <a href="{{ route('science-subject') }}" class="flex items-center w-full text-sm text-gray-400 group hover:text-white focus:text-white">
                                    المناهج </a>
                            </li>
                            <li>
                                <a href="{{ route('science-student') }}" class="flex items-center w-full text-sm font-normal text-gray-400 group hover:text-white focus:text-white">
                                    الخريجيين</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class=" lg:right-0">
                        <button class="flex items-center text-sm text-gray-400 transition duration-75 group hover:text-white focus:text-white" aria-controls="dropdown-exampleeee" data-collapse-toggle="dropdown-exampleeee">
                            <span class="flex-1 ml-1 mr-3 whitespace-nowrap" sidebar-toggle-item>تكنولوجيا
                                المعلومات</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-exampleeee" class="hidden py-4 mr-5 space-y-2">
                            <li>
                                <a href="{{ route('information-subject') }}" class="flex items-center w-full text-sm text-gray-400 group hover:text-white focus:text-white">
                                    المناهج </a>
                            </li>
                            <li>
                                <a href="{{ route('information-student') }}" class="flex items-center w-full text-sm font-normal text-gray-400 group hover:text-white focus:text-white">
                                    الخريجيين</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="leading-9 text-gray-100 hover:bg-black pr-3 hover:bg-opacity-30 {{ request()->is('developers') ? '!bg-black !bg-opacity-30' : '' }}">
            <a href="{{ route('developers') }}" class=" lg:right-0 pr-2.5 mt-1 flex items-center">
                <div class="pl-3">
                    <svg width="30" height="20" viewBox="0 0 108 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M64.5 6L33.653 61.5246C32.7345 63.1779 33.3064 65.2621 34.94 66.215V66.215C36.6205 67.1953 38.7783 66.6055 39.7265 64.9067L72.3234 6.5039C73.2545 4.83574 72.6787 2.72923 71.0285 1.76663V1.76663C69.3559 0.790946 67.2091 1.35591 66.2334 3.02851L64.5 6Z" fill="white" />
                        <path d="M24 20.5L10.5339 33.9661C10.2391 34.2609 10.2391 34.7391 10.5339 35.0339L24 48.5C25.3807 49.8807 25.3807 52.1193 24 53.5V53.5C22.6193 54.8807 20.3807 54.8807 19 53.5L1.317 35.817C0.589641 35.0896 0.58964 33.9104 1.317 33.183L19 15.5C20.3807 14.1193 22.6193 14.1193 24 15.5V15.5C25.3807 16.8807 25.3807 19.1193 24 20.5V20.5Z" fill="white" />
                        <path d="M83.5 48.5L96.9661 35.0339C97.2609 34.7391 97.2609 34.2609 96.9661 33.9661L83.5 20.5C82.1193 19.1193 82.1193 16.8807 83.5 15.5V15.5C84.8807 14.1193 87.1193 14.1193 88.5 15.5L106.183 33.183C106.91 33.9104 106.91 35.0896 106.183 35.817L88.5 53.5C87.1193 54.8807 84.8807 54.8807 83.5 53.5V53.5C82.1193 52.1193 82.1193 49.8807 83.5 48.5V48.5Z" fill="white" />
                    </svg>

                </div>
                <h1 class="lg:right-0 text-gray-200 text-[15px] ml-2">المطورين</h1>
            </a>
        </div>
        <div class="leading-9 text-gray-100 hover:bg-black pr-3 hover:bg-opacity-30 {{ request()->is('about') ? '!bg-black !bg-opacity-30' : '' }}">
            <a href="{{ route('about') }}" class="lg:right-0 pr-2.5 mt-1 flex items-center">
                <div class="pl-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="23" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12.025 16q-.6 0-1.012-.425q-.413-.425-.363-1q.075-1.05.5-1.825q.425-.775 1.35-1.6q1.025-.9 1.562-1.563q.538-.662.538-1.512q0-1.025-.687-1.7Q13.225 5.7 12 5.7q-.8 0-1.362.337q-.563.338-.913.838q-.35.5-.862.675q-.513.175-.988-.025q-.575-.25-.787-.825q-.213-.575.087-1.075Q7.9 4.5 9.125 3.75T12 3q2.625 0 4.038 1.463q1.412 1.462 1.412 3.512q0 1.25-.537 2.138q-.538.887-1.688 2.012q-.85.8-1.2 1.3t-.475 1.15q-.1.625-.525 1.025q-.425.4-1 .4ZM12 22q-.825 0-1.412-.587Q10 20.825 10 20q0-.825.588-1.413Q11.175 18 12 18t1.413.587Q14 19.175 14 20q0 .825-.587 1.413Q12.825 22 12 22Z" />
                    </svg>
                </div>
                <h1 class="lg:right-0 text-gray-200 text-[15px] ml-2">عنا</h1>
            </a>
        </div>
    </div>
    <button class="flex items-center gap-2 mr-6">
        <button class="flex items-center my-6" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
            <img src="{{ asset('img/thm2.png') }}" class="w-14 " alt="">
            <h1 class="mb-1 text-center">ثمينه محمد </h1>
        </button>
        <div id="dropdown" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" class="z-10 items-center hidden mr-6 bg-white divide-y divide-gray-100 rounded-md ">
            <form method="POST" action="{{ route('logout') }}" class="" x-data>
                @csrf
                <button type="submit" class="block px-4   py-2 w-full text-center text-blue-500 hover:bg-[#071F63]  rounded-md hover:text-white ">
                    تسجيل خروج </button>
            </form>
        </div>
    </button>
</div>