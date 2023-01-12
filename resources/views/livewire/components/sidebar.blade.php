<aside>
    <div>
        <div class="text-white pt-5 fixed top-0 bottom-0 lg:right-0 w-[220px] bg-[#1E458A]">
            <div class="text-gray-100 leading-9">
                <a href="{{ route('document') }}" class=" lg:right-0 pr-2.5 mt-1 flex items-center">
                    <div class="pl-3">
                        <svg width="30" height="15" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M469.666 216.45L271.078 33.749a34 34 0 0 0-47.062.98L41.373 217.373L32 226.745V496h176V328h96v168h176V225.958ZM248.038 56.771c.282 0 .108.061-.013.18c-.125-.119-.269-.18.013-.18ZM448 464H336V328a32 32 0 0 0-32-32h-96a32 32 0 0 0-32 32v136H64V240L248.038 57.356c.013-.012.014-.023.024-.035L448 240Z" />
                        </svg>
                    </div>
                    <h1 class="lg:right-0 text-gray-200 text-[15px] ml-2">الصفحة الرئيسية</h1>
                </a>
                <a href="{{ route('document') }}" class=" lg:right-0 pr-2.5 mt-1 flex items-center">
                    <div class="pl-3">
                        <svg width="30" height="15" viewBox="0 0 512 512">
                            <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M416 221.25V416a48 48 0 0 1-48 48H144a48 48 0 0 1-48-48V96a48 48 0 0 1 48-48h98.75a32 32 0 0 1 22.62 9.37l141.26 141.26a32 32 0 0 1 9.37 22.62Z" />
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 56v120a32 32 0 0 0 32 32h120" />
                        </svg>
                    </div>
                    <h1 class="lg:right-0 text-gray-200 text-[15px] ml-2">الوثائق</h1>
                </a>
                <a href="{{ route('unid') }}" class=" lg:right-0 pr-2.5 mt-1 flex items-center">
                    <div class="pl-3">
                        <svg width="30" height="15" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M5 21q-.825 0-1.413-.587Q3 19.825 3 19V5q0-.825.587-1.413Q4.175 3 5 3h11l5 5v11q0 .825-.587 1.413Q19.825 21 19 21Zm0-2h14V9h-3q-.425 0-.712-.288Q15 8.425 15 8V5H5Zm3-2h8q.425 0 .712-.288Q17 16.425 17 16t-.288-.713Q16.425 15 16 15H8q-.425 0-.713.287Q7 15.575 7 16t.287.712Q7.575 17 8 17Zm0-8h3q.425 0 .713-.288Q12 8.425 12 8t-.287-.713Q11.425 7 11 7H8q-.425 0-.713.287Q7 7.575 7 8t.287.712Q7.575 9 8 9Zm0 4h8q.425 0 .712-.288Q17 12.425 17 12t-.288-.713Q16.425 11 16 11H8q-.425 0-.713.287Q7 11.575 7 12t.287.712Q7.575 13 8 13ZM5 5v4v-4v14Z" />
                        </svg>
                    </div>
                    <h1 class="lg:right-0 text-gray-200 text-[15px] ml-2">الأمر الجامعي</h1>
                </a>
                <div class=" lg:right-0 pr-2.5 mt-1">
                    <button type="button" class="flex items-center text-[15px] font-normal rounded-lg transition duration-75 group hover:bg-[#FFC657]" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">

                        <svg width="30" height="16" viewBox="0 0 16 16">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.25 9.25V6L8 2.75L1.75 6L8 9.25l3.25-1.5v3.5c0 1-1.5 2-3.25 2s-3.25-1-3.25-2v-3.5" />
                        </svg>

                        <span class="flex-1 ml-1 mr-3 whitespace-nowrap" sidebar-toggle-item> الخريجين</span>

                        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>

                    </button>
                    <ul id="dropdown-example" class="hidden py-4 mr-5 space-y-2">
                        <li>
                            <a href="{{ route('graduate') }}" class="flex items-center w-full text-sm group text-gray-400 hover:text-white focus:text-white"> الخريجين </a>
                        </li>

                        <li>
                            <a href="{{ route('add-graduate') }}" class="flex items-center w-full text-sm font-normal group text-gray-400 hover:text-white focus:text-white"> أضافة</a>
                        </li>
                    </ul>
                </div>
                <div class=" lg:right-0 pr-2.5 mt-1">
                    <button type="button" class="flex items-center text-[15px] font-normal rounded-lg transition duration-75 group hover:bg-[#FFC657]" aria-controls="dropdown-examplee" data-collapse-toggle="dropdown-examplee">

                        <svg width="30" height="16" viewBox="0 0 16 16">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.25 9.25V6L8 2.75L1.75 6L8 9.25l3.25-1.5v3.5c0 1-1.5 2-3.25 2s-3.25-1-3.25-2v-3.5" />
                        </svg>

                        <span class="flex-1 ml-1 mr-3 whitespace-nowrap" sidebar-toggle-item>الأقسام العلمية</span>

                        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>

                    </button>
                    <ul id="dropdown-examplee" class="hidden py-4 mr-5 space-y-2">
                        <li>
                            <div class=" lg:right-0 ">
                                <button type="button" class="flex items-center  transition duration-75 group text-sm group text-gray-400 hover:text-white focus:text-white" aria-controls="dropdown-exampleee" data-collapse-toggle="dropdown-exampleee">

                                   

                                    <span class="flex-1 ml-1 mr-3 whitespace-nowrap" sidebar-toggle-item>علوم الحاسوب</span>

                                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>

                                </button>
                                <ul id="dropdown-exampleee" class="hidden py-4 mr-5 space-y-2">
                                    <li>
                                        <a href="{{ route('science-subject') }}" class="flex items-center w-full text-sm group text-gray-400 hover:text-white focus:text-white"> المناهج </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('science-student') }}" class="flex items-center w-full text-sm font-normal group text-gray-400 hover:text-white focus:text-white"> الخريجيين</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        
                        <li>
                            <div class=" lg:right-0 ">
                                <button type="button" class="flex items-center  transition duration-75 group text-sm group text-gray-400 hover:text-white focus:text-white" aria-controls="dropdown-exampleeee" data-collapse-toggle="dropdown-exampleeee">

                                   

                                    <span class="flex-1 ml-1 mr-3 whitespace-nowrap" sidebar-toggle-item>تكنولوجيا المعلومات</span>

                                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>

                                </button>
                                <ul id="dropdown-exampleeee" class="hidden py-4 mr-5 space-y-2">
                                    <li>
                                        <a href="{{ route('information-subject') }}" class="flex items-center w-full text-sm group text-gray-400 hover:text-white focus:text-white"> المناهج </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('information-student') }}" class="flex items-center w-full text-sm font-normal group text-gray-400 hover:text-white focus:text-white"> الخريجيين</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>