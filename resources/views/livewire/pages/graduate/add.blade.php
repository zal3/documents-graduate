<div>
    <div class=" text-xl mr-2 px-9  text-white bg-[#071F63] py-4">
        <h1>
            أضافة خريج
        </h1>

    </div>
    <form wire:submit.prevent="add" class="container mx-auto px-16 py-12">
        <div class="flex gap-3 items-center">
            <div class="rounded-lg w-16  border border-indigo-600">
                <!-- <img src="{{ asset($student->image_path ?? 'img/ava.png') }}" class="w-16 h-16 rounded-lg" alt=""> -->
                <img src="{{ asset('img/ava.png') }}" alt="" class="w-16 h-16 rounded-lg">
            </div>
            <!-- <p class="font-semibold text-xl ">اضافة صورة الخريج</p> -->
            <div class="  flex justify-center   rounded-md">
                <div class="space-y-1 text-center">
                    <label class="w-full flex flex-col items-center px-2 py-6  @if ($image_path) bg-primary-700 text-black @else bg-white text-primary-700 @endif rounded-lg tracking-wide   cursor-pointer hover:bg-primary-700 hover:text-black">
                        <div wire:target="image_path">
                        </div>
                        <span class="mt-2 text-base leading-normal">
                            @if ($image_path)
                            تم اختيار الصورة
                            @else
                            اضافة صورة الخريج
                            @endif
                        </span>
                        <input wire:model.lazy="image_path" type="file" class="hidden" />
                    </label>
                    @error('image_path')
                    <span class="error text-red-600 bg-primary-100 rounded-lg py-1 px-2 text-xs">لم
                        يتم تحميل
                        الصورة</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="flex flex-cols-2  mt-6 mx-auto items center">
            <div class=" flex flex-col gap-6 mt-6 mx-auto items center">
                {{-- label1 --}}
                <div class="flex flex-col gap-2">
                    <label for="name_ar" class=" text-sm  ">الأسم الرباعي بالعربية</label>
                    <input id="name_ar" type="text" required wire:model.lazy="name_ar" class="   bg-white w-96   text-sm text-gray-900  rounded-lg border-2 border-gray-400 hover:border-[#FFC657] " />
                    <!-- @error('name_ar')
                <span class="text-red-600">{{ $message }}</span>
                @enderror -->
                </div>
                {{-- label2 --}}
                <div class="flex flex-col gap-2">
                    <label for="name_en" class=" text-sm ">الأسم الرباعي بالأنجليزية</label>
                    <input id="name_en" type="text" required wire:model.lazy="name_en" class="  bg-white   text-sm text-gray-900  rounded-lg border-2 border-gray-400 hover:border-[#FFC657] " />
                    <!-- @error('name_en')
                <span class="text-red-600">{{ $message }}</span>
                @enderror -->
                </div>
                <div class="flex flex-col">
                    <label name="gender" for="gender" class="text-sm text-gray-900 ">الجنس</label>
                    <select id="gender" required wire:model.lazy="gender" class="bg-white border   border-gray-500 text-gray-900 text-sm rounded-lg ">
                        <option value="">إختر الجنس</option>
                        <option value="1">أنثى</option>
                        <option value="0">ذكر</option>
                    </select>
                    <!-- @error('gender')
                <span class="text-red-600">{{ $message }}</span>
                @enderror -->
                </div>
            </div>

            <div class=" grid grid-cols-2 gap-6 px-20  mt-6  mb-10">
                {{-- Select --}}

                {{-- Select --}}
                <div class="flex flex-col">
                    <label for="round" class="    text-sm text-gray-900 ">الدور</label>
                    <select id="round" wire:model.lazy="round" required class="bg-white border   border-gray-500  text-gray-900 text-sm rounded-lg ">
                        <option value="">إختر الدور</option>
                        <option value="0">الأول</option>
                        <option value="1">الثاني</option>
                        <option value="2">الثالث</option>
                    </select>
                    <!-- @error('round')
                <span class="text-red-600">{{ $message }}</span>
                @enderror -->
                </div>

                <div class="flex flex-col ">
                    <label for="graduation_year" class="text-sm text-gray-900 ">سنة التخرج</label>
                    <select id="graduation_year" wire:model.lazy="graduation_year" required class="bg-white border border-gray-500  text-gray-900 text-sm rounded-lg ">
                        <option value="">إختر سنة التخرج</option>
                        <option value="0">2014-2015</option>
                        <option value="1">2015-2016</option>
                        <option value="2">2016-2017</option>
                        <option value="3">2017-2018</option>
                        <option value="4">2018-2019</option>
                        <option value="5">2019-2020</option>
                        <option value="6">2020-2021</option>
                        <option value="7">2021-2022</option>
                        <option value="8">2022-2023</option>
                        <option value="9">2023-2024</option>
                        <option value="10">2024-2025</option>
                        <option value="11">2025-2026</option>
                        <option value="12">2026-2027</option>
                        <option value="13">2027-2028</option>
                        <option value="14">2028-2029</option>
                        <option value="15">2029-2030</option>
                    </select>
                    <!-- @error('graduation_year')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror -->
                </div>

                <!-- <div class="flex flex-col">
                <label for="sequence" class="text-sm text-gray-900 ">التسلسل</label>
                <select id="sequence" wire:model.lazy="sequence" class="bg-white border  border-gray-500 h-10  text-gray-900 text-sm rounded-lg ">
                    <option value="0">إختر التسلسل</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select> -->
                <!-- @error('sequence')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror -->
                <!-- </div> -->

                <div class="flex flex-col ">
                    <label for="department" class="text-sm text-gray-900 ">القسم</label>
                    <select id="department" required wire:model.lazy="department_id" class="bg-white border   border-gray-500  text-gray-900 text-sm rounded-lg ">
                        <option value="">إختر القسم</option>
                        <option value="1">علوم الحاسوب</option>
                        <option value="2">نظم المعلومات الحاسوبية</option>
                    </select>
                    <!-- @error('department')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror -->
                </div>

                <div class="flex flex-col">
                    <label for="type" class="text-sm text-gray-900 ">الدراسة</label>
                    <select id="type" required wire:model.lazy="type" class=" bg-white border border-gray-500  text-gray-900 text-sm rounded-lg ">
                        <option value="">إختر الدراسة</option>
                        <option value="0">الصباحية </option>
                        <option value="1">المسائية</option>
                    </select>
                    <!-- @error('type')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror -->
                </div>
                <div class="flex flex-col">
                    <label for="average" class=" text-sm text-gray-900 ">المعدل</label>
                    <input type="text" id="average" wire:model.lazy="average" class=" bg-white  text-sm text-gray-900  rounded-lg border-1 border-gray-400 " placeholder="إدخل المعدل" />
                    <!-- @error('average')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror -->
                </div>
                <!-- المعدل كتابه  -->
                <div class="flex flex-col">
                    <label for="average_written" class=" text-sm text-gray-900 ">المعدل كتابة</label>
                    <input type="text" id="average_written" wire:model.lazy="average_written" class=" bg-white  text-sm text-gray-900  rounded-lg border-1 border-gray-400 " placeholder="إدخل المعدل كتابة" />
                    <!-- @error('average_written')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror -->

                </div>

            </div>
        </div>
        <!-- enter student subjects degree here -->
        <button id="filterHome" data-dropdown-toggle="dropdownFilterHome" data-dropdown-placement="bottom-end" class="p-2 py-1 duration-150 ease-in delay-75 rounded-lg  text-gray-600 hover:text-gray-900">
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
                <span>اضافة درجات الطالب</span>
        </button>
        <!-- <div id="dropdownFilterHome" class="hidden right-46 left-0 "> -->
            <div class="flex flex-col mb-10">
                <div class="flex flex-col gap-4 items-center justify-center ">
                    <div class="flex justify-between gap-56">
                        <div class="">السنة الاولى - الفصل الاول </div>
                        <div class="">السنة الاولى - الفصل الثاني </div>
                    </div>
                    <div class="flex justify-between ">
                        <div class="relative overflow-x-auto border ">
                            <table class="w-full text-sm text-left text-center text-gray-500 dark:text-gray-400">
                                <thead class="text-lg uppercase text-gray-700 font-bold">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                            المادة </th>
                                        <th scope="col" class="px-6 py-3">
                                            الوحدة </th>
                                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                            الدرجة </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subjects0 as $subject )
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium font-bold text-gray-600 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            {{$subject->name_ar }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$subject->unit }}
                                        </td>
                                        <td class="  bg-gray-50 dark:bg-gray-800">

                                            <input type="text" wire:model.lazy="degree0.{{$subject->id}}" class=" bg-white w-14 h-10 text-sm text-gray-900  rounded-lg border-1 border-gray-400 " placeholder=" " />
                                        </td>
                                        @endforeach
                                </tbody>
                            </table>

                        </div>
                        
                        <div class="relative overflow-x-auto border ">
                            <table class="w-full text-sm text-left text-center text-gray-500 dark:text-gray-400">
                                <thead class="text-lg uppercase text-gray-700 font-bold">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                            المادة </th>
                                        <th scope="col" class="px-6 py-3">
                                            الوحدة </th>
                                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                            الدرجة </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subjects1 as $subject )
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium font-bold text-gray-600 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            {{$subject->name_ar }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$subject->unit }}
                                        </td>
                                        <td class="  bg-gray-50 dark:bg-gray-800">

                                            <input type="text" wire:model.lazy="degree1.{{$subject->id}}" class=" bg-white w-14 h-10 text-sm text-gray-900  rounded-lg border-1 border-gray-400 " placeholder=" " />

                                        </td>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
            <div class="flex flex-col mb-10">
                <div class="flex flex-col gap-4 items-center justify-center ">
                    <div class="flex justify-between gap-56">
                        <div class="">السنة الثانية - الفصل الاول </div>
                        <div class="">السنة الثانية - الفصل الثاني </div>
                    </div>
                    <div class="flex justify-between ">
                        <div class="relative overflow-x-auto border ">
                            <table class="w-full text-sm text-left text-center text-gray-500 dark:text-gray-400">
                                <thead class="text-lg uppercase text-gray-700 font-bold">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                            المادة </th>
                                        <th scope="col" class="px-6 py-3">
                                            الوحدة </th>
                                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                            الدرجة </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subjects2 as $subject )
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium font-bold text-gray-600 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            {{$subject->name_ar }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$subject->unit }}
                                        </td>
                                        <td class="  bg-gray-50 dark:bg-gray-800">
                                            <input type="text" wire:model.lazy="degree2.{{$subject->id}}" class=" bg-white w-14 h-10 text-sm text-gray-900  rounded-lg border-1 border-gray-400 " placeholder=" " />
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="relative overflow-x-auto border ">
                            <table class="w-full text-sm text-left text-center text-gray-500 dark:text-gray-400">
                                <thead class="text-lg uppercase text-gray-700 font-bold">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                            المادة </th>
                                        <th scope="col" class="px-6 py-3">
                                            الوحدة </th>
                                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                            الدرجة </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subjects3 as $subject )
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium font-bold text-gray-600 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            {{$subject->name_ar }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$subject->unit }}
                                        </td>
                                        <td class="  bg-gray-50 dark:bg-gray-800">
                                            <input type="text" wire:model.lazy="degree3.{{$subject->id}}" class=" bg-white w-14 h-10 text-sm text-gray-900  rounded-lg border-1 border-gray-400 " placeholder=" " />
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
            <div class="flex flex-col mb-10">
                <div class="flex flex-col gap-4 items-center justify-center ">
                    <div class="flex justify-between gap-56">
                        <div class="">السنة الثالثة - الفصل الاول </div>
                        <div class="">السنة الثالثة - الفصل الثاني </div>
                    </div>
                    <div class="flex justify-between ">
                        <div class="relative overflow-x-auto border ">
                            <table class="w-full text-sm text-left text-center text-gray-500 dark:text-gray-400">
                                <thead class="text-lg uppercase text-gray-700 font-bold">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                            المادة </th>
                                        <th scope="col" class="px-6 py-3">
                                            الوحدة </th>
                                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                            الدرجة </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subjects4 as $subject )
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium font-bold text-gray-600 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            {{$subject->name_ar }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$subject->unit }}
                                        </td>
                                        <td class="  bg-gray-50 dark:bg-gray-800">
                                            <input type="text" wire:model.lazy="degree4.{{$subject->id}}" class=" bg-white w-14 h-10 text-sm text-gray-900  rounded-lg border-1 border-gray-400 " placeholder=" " />
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="relative overflow-x-auto border ">
                            <table class="w-full text-sm text-left text-center text-gray-500 dark:text-gray-400">
                                <thead class="text-lg uppercase text-gray-700 font-bold">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                            المادة </th>
                                        <th scope="col" class="px-6 py-3">
                                            الوحدة </th>
                                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                            الدرجة </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subjects5 as $subject )
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium font-bold text-gray-600 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            {{$subject->name_ar }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$subject->unit }}
                                        </td>
                                        <td class="  bg-gray-50 dark:bg-gray-800">
                                            <input type="text" wire:model.lazy="degree5.{{$subject->id}}" class=" bg-white w-14 h-10 text-sm text-gray-900  rounded-lg border-1 border-gray-400 " placeholder=" " />
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
            <div class="flex flex-col mb-10">
                <div class="flex flex-col gap-4 items-center justify-center ">
                    <div class="flex justify-between gap-56">
                        <div class="">السنة الرابعة - الفصل الاول </div>
                        <div class="">السنة الرابعة - الفصل الثاني </div>
                    </div>
                    <div class="flex justify-between ">
                        <div class="relative overflow-x-auto border ">
                            <table class="w-full text-sm text-left text-center text-gray-500 dark:text-gray-400">
                                <thead class="text-lg uppercase text-gray-700 font-bold">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                            المادة </th>
                                        <th scope="col" class="px-6 py-3">
                                            الوحدة </th>
                                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                            الدرجة </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subjects6 as $subject )
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium font-bold text-gray-600 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            {{$subject->name_ar }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$subject->unit }}
                                        </td>
                                        <td class="  bg-gray-50 dark:bg-gray-800">
                                            <input type="text" wire:model.lazy="degree6.{{$subject->id}}" class=" bg-white w-14 h-10 text-sm text-gray-900  rounded-lg border-1 border-gray-400 " placeholder=" " />
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="relative overflow-x-auto border ">
                            <table class="w-full text-sm text-left text-center text-gray-500 dark:text-gray-400">
                                <thead class="text-lg uppercase text-gray-700 font-bold">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                            المادة </th>
                                        <th scope="col" class="px-6 py-3">
                                            الوحدة </th>
                                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                            الدرجة </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subjects7 as $subject )
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium font-bold text-gray-600 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            {{$subject->name_ar }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$subject->unit }}
                                        </td>
                                        <td class="  bg-gray-50 dark:bg-gray-800">
                                            <input type="text" wire:model.lazy="degree7.{{$subject->id}}" class=" bg-white w-14 h-10 text-sm text-gray-900  rounded-lg border-1 border-gray-400 " placeholder=" " />
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>



        <!-- </div> -->

        <button type="submit" class="flex px-16 mx-auto text-center  py-2 text-white rounded-md  bg-[#071F63] ">
            إضافة
        </button>
    </form>
</div>