<div>
    <div class=" text-xl mr-2 px-9  text-white bg-[#071F63] py-4">
        <h1>
            تعديل خريج
        </h1>

    </div>
    <form wire:submit.prevent="edit" class="container px-16 py-12 mx-auto">
        <div class="flex items-center gap-3">
            <div class="w-16 border border-indigo-600 rounded-lg">
                <!-- <img src="{{ asset($student->image_path ?? 'img/ava.png') }}" class="w-16 h-16 rounded-lg" alt=""> -->
                <img src="{{ asset('img/ava.png') }}" alt="" class="w-16 h-16 rounded-lg">
            </div>
            <!-- <p class="text-xl font-semibold ">اضافة صورة الخريج</p> -->
            <div class="flex justify-center rounded-md ">
                <div class="space-y-1 text-center">
                    <label
                        class="w-full flex flex-col items-center px-2 py-6  @if ($image_path) bg-primary-700 text-black @else bg-white text-primary-700 @endif rounded-lg tracking-wide   cursor-pointer hover:bg-primary-700 hover:text-black">
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
                    <span class="px-2 py-1 text-xs text-red-600 rounded-lg error bg-primary-100">لم
                        يتم تحميل
                        الصورة</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="grid mx-auto mt-6  grid-cols-2 w-3/4 gap-4 m-4 items-center">
            <div class="flex flex-col gap-2">
                <label for="name_ar" class="text-sm ">الأسم الرباعي بالعربية</label>
                <input id="name_ar" type="text" required wire:model.lazy="name_ar" class="   bg-white w-96   text-sm text-gray-900  rounded-lg border-2 border-gray-400 hover:border-[#FFC657] " />
            </div>
           
            <div class="flex flex-col">
                <label name="gender" for="gender" class="text-sm text-gray-900 ">الجنس</label>
                <select id="gender" required wire:model.lazy="gender" class="text-sm text-gray-900 bg-white border border-gray-500 rounded-lg ">
                    <option value="">إختر الجنس</option>
                    <option value="1">أنثى</option>
                    <option value="0">ذكر</option>
                </select>
            </div>
            <div class="flex flex-col gap-2">
                <label for="name_en" class="text-sm ">الأسم الرباعي بالأنجليزية</label>
                <input id="name_en" type="text" required wire:model.lazy="name_en" class="  bg-white   text-sm text-gray-900  rounded-lg border-2 border-gray-400 hover:border-[#FFC657] " />
            </div>
            <div>
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">
                     الامر الجامعي </label>
                </label>
                <div class="flex  gap-2">
                    <input wire:model="search" type="text" class="block  p-2 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder=" اختر الامر الجامعي ">
                    @if ($search)
                    <select wire:model="unid_id" class="border border-gray-300 px-9 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="" selected>اختر الامر الجامعي </option>
                        @foreach ($unids as $unid)
                        <option value="{{$unid->id}}">{{$unid->number}}</option>
                        @endforeach
                    </select>
                    @endif
                </div>
            </div>
        </div>



        <button type="submit" class="flex px-16 mx-auto text-center  py-2 text-white rounded-md  bg-[#071F63] ">
تعديل        </button>
    </form>
</div>
