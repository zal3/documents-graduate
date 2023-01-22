<div>
    <form wire:submit.prevent="add">
        @csrf
        <div class="py-12 bg-black bg-opacity-70 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0" id="modal">
            <div class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
                <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                    <div class="w-full flex justify-start text-gray-600 text-lg font-bold my-3">
                    </div>
                    <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4 "> اضافة مادة
                    </h1>
                    <label for="name" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">اسم المادة باللغة العربية </label>
                    <input id="name" wire:model="name_ar" class="px-3 mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="" />
                    <label for="name" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">اسم المادة باللغة الانكليزية </label>
                    <input id="name" wire:model="name_en" class="px-3 mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="" />
                    <label for="name" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">الوحدة </label>
                    <input type="number" min="1" max="4" wire:model="unit" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="" />
                    <div class="flex justify-between ">
                        <div>
                            <label for="email2" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">المرحلة </label>
                            <select wire:model="stage" class="w-48 mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="">
                                <option value="0">المرحلة </option>
                                <option value="1">الاولى </option>
                                <option value="2"> الثانية</option>
                                <option value="3"> الثالثة</option>
                                <option value="4"> الرابعة</option>
                            </select>
                        </div>
                        <div>
                            <label for="email2" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">الكورس </label>
                            <select wire:model="course" class="w-48 mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="">
                                <option value="0">الكورس</option>
                                <option value="1">الاول</option>
                                <option value="2"> الثاني</option>
                            </select>
                        </div>


                    </div>
                    <div class="flex items-center justify-start gap-5 w-full">
                        <button type="submit" class=" transition duration-150 ease-in-out hover:bg-blue-900  bg-[#071F63] rounded text-white px-8 py-2 text-sm">اضافة</button>
                        <a href="{{ route('science-subject') }}" class=" ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm">
                            الغاء
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>