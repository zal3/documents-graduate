<div>
    <form wire:submit.prevent="add">
        @csrf
        <div class="absolute top-0 bottom-0 left-0 right-0 z-10 py-12 transition duration-150 ease-in-out bg-black bg-opacity-70" id="modal">
            <div class="container w-11/12 max-w-lg mx-auto md:w-2/3">
                <div class="relative px-5 py-8 bg-white border border-gray-400 rounded shadow-md md:px-10">
                    <div class="flex justify-start w-full my-3 text-lg font-bold text-gray-600">
                    </div>
                    <h1 class="mb-4 font-bold leading-tight tracking-normal text-gray-800 font-lg "> اضافة مادة
                    </h1>
                    <label for="name" class="text-sm font-bold leading-tight tracking-normal text-gray-800">اسم المادة
                        باللغة العربية </label>
                    <input id="name" wire:model="name_ar" required class="flex items-center w-full h-10 px-3 pl-3 mt-2 mb-5 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-indigo-700" placeholder="" />
                    <label for="name" class="text-sm font-bold leading-tight tracking-normal text-gray-800">اسم
                        المادة باللغة الانكليزية </label>
                    <input id="name" wire:model="name_en" required class="flex items-center w-full h-10 px-3 pl-3 mt-2 mb-5 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-indigo-700" placeholder="" />
                    <label for="name" class="text-sm font-bold leading-tight tracking-normal text-gray-800">الوحدة
                    </label>
                    <input type="number" min="1" max="4" wire:model="unit" required class="flex items-center w-full h-10 pl-3 mt-2 mb-5 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-indigo-700" placeholder="" />
                    <div class="flex justify-between ">
                        <div>
                            <label for="email2" class="text-sm font-bold leading-tight tracking-normal text-gray-800">المرحلة </label>
                            <select wire:model="stage" required class="flex items-center w-48 w-full h-10 pl-3 mt-2 mb-5 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-indigo-700" placeholder="">
                                <option value="0">المرحلة </option>
                                <option value="1">الاولى </option>
                                <option value="2"> الثانية</option>
                                <option value="3"> الثالثة</option>
                                <option value="4"> الرابعة</option>
                            </select>
                        </div>
                        <div>
                            <label for="email2" class="text-sm font-bold leading-tight tracking-normal text-gray-800">الكورس </label>
                            <select wire:model="course" required class="flex items-center w-48 w-full h-10 pl-3 mt-2 mb-5 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-indigo-700" placeholder="">
                                <option value="0">الكورس</option>
                                <option value="1">الاول</option>
                                <option value="2"> الثاني</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex items-center justify-start w-full gap-5">
                        <button type="submit" class=" transition duration-150 ease-in-out hover:bg-blue-900  bg-[#071F63] rounded text-white px-8 py-2 text-sm">اضافة</button>
                        <a href="{{ route('information-subject') }}" class="px-8 py-2 ml-3 text-sm text-gray-600 transition duration-150 ease-in-out bg-gray-100 border rounded  hover:border-gray-400 hover:bg-gray-300">
                            الغاء
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>