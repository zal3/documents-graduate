<div>
    <div class=" text-xl  text-center  text-white bg-[#071F63] py-3">
        أضافة خريج
    </div>
    <form class="container mx-auto px-16 py-12">
        <div class="flex gap-3 items-center">
            <div class="rounded-lg w-16  border border-indigo-600">
                <img src="{{ asset('img/ava.png') }}" alt="" class="w-16 h-16 rounded-lg">
            </div>
            <p class="font-semibold text-xl ">اضافة صورة الخريج</p>
        </div>
        <div class="grid grid-cols-2 gap-6 w-3/4 mt-6 mx-auto items center">
            {{-- label1 --}}
            <div class="flex flex-col">
                <label for="name_ar" class=" text-sm  ">الأسم الرباعي بالعربية</label>
                <input id="name_ar" type="text" wire:model.lazy="name_ar" class="   bg-white   text-sm text-gray-900  rounded-lg border-1 border-gray-400   " placeholder="الإسم الرباعي بالعربية" />
                <!-- @error('name_ar')
                <span class="text-red-600">{{ $message }}</span>
                @enderror -->
            </div>
            {{-- label2 --}}
            <div class="flex flex-col">
                <label for="name_en" class=" text-sm ">الأسم الرباعي بالأنجليزية</label>
                <input id="name_en" type="text" wire:model.lazy="name_en" class="  bg-white   text-sm text-gray-900  rounded-lg border-1 border-gray-400  " placeholder="الإسم الرباعي بالإنجليزية" />
                <!-- @error('name_en')
                <span class="text-red-600">{{ $message }}</span>
                @enderror -->
            </div>
        </div>

        <div class=" grid grid-cols-3 gap-6 px-40 py-10">
            {{-- Select --}}
            <div class="flex flex-col">
                <label name="gender" for="gender" class="text-sm text-gray-900 ">الجنس</label>
                <select id="gender" wire:model.lazy="gender" class="bg-white border   border-gray-500 text-gray-900 text-sm rounded-lg ">
                    <option value="0">إختر الجنس</option>
                    <option value="1">أنثى</option>
                    <option value="2">ذكر</option>
                </select>
                <!-- @error('gender')
                <span class="text-red-600">{{ $message }}</span>
                @enderror -->
            </div>
            {{-- Select --}}
            <div class="flex flex-col">
                <label for="round" class="    text-sm text-gray-900 ">الدور</label>
                <select id="round" wire:model.lazy="round" class="bg-white border   border-gray-500  text-gray-900 text-sm rounded-lg ">
                    <option value="0">إختر الدور</option>
                    <option value="1">الأول</option>
                    <option value="2">الثاني</option>
                    <option value="3">الثالث</option>
                </select>
                <!-- @error('round')
                <span class="text-red-600">{{ $message }}</span>
                @enderror -->
            </div>

            <div class="flex flex-col ">
                <label for="graduation_year" class="text-sm text-gray-900 ">سنة التخرج</label>
                <select id="graduation_year" wire:model.lazy="graduation_year" class="bg-white border border-gray-500  text-gray-900 text-sm rounded-lg ">
                    <option value="0">إختر سنة التخرج</option>
                    <option value="1">2014-2015</option>
                    <option value="2">2015-2016</option>
                    <option value="3">2016-2017</option>
                    <option value="4">2017-2018</option>
                    <option value="5">2018-2019</option>
                    <option value="6">2019-2020</option>
                    <option value="7">2020-2021</option>
                    <option value="8">2021-2022</option>
                    <option value="9">2022-2023</option>
                    <option value="10">2023-2024</option>
                    <option value="11">2024-2025</option>
                    <option value="12">2025-2026</option>
                    <option value="13">2026-2027</option>
                    <option value="14">2027-2028</option>
                    <option value="15">2028-2029</option>
                    <option value="16">2029-2030</option>
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
                <select id="department" wire:model.lazy="department" class="bg-white border   border-gray-500  text-gray-900 text-sm rounded-lg ">
                    <option value="0">إختر القسم</option>
                    <option value="1">علوم الحاسوب</option>
                    <option value="2">نظم المعلومات الحاسوبية</option>
                </select>
                <!-- @error('department')
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
            <div class="flex flex-col">
                <label for="study_type" class="text-sm text-gray-900 ">الدراسة</label>
                <select id="study_type" wire:model.lazy="study_type" class=" bg-white border border-gray-500  text-gray-900 text-sm rounded-lg ">
                    <option value="0">إختر الدراسة</option>
                    <option value="1">الصباحية</option>
                    <option value="2">المسائية</option>
                </select>
                <!-- @error('study_type')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror -->
            </div>
        </div>
        <button  wire:click="submitForm" class="flex px-16 mx-auto text-center  py-2 text-white rounded-md  bg-[#071F63] ">
                    حفظ
                </button>
    </form>
</div>