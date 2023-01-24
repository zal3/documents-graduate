<div>
    <form wire:submit.prevent="add">
        @csrf
        <div class="py-12 bg-black bg-opacity-70 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0" id="modal">
            <div class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
                <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                    <div class="w-full flex justify-start text-gray-600 text-lg font-bold my-3">
                    </div>
                    <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4 "> اضافة امر جامعي
                    </h1>
                    <label for="name" class="text-gray-800 text-sm font-bold leading-tight tracking-normal"> الامر الجامعي </label>
                    <input id="name" wire:model="number" class="px-3 mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="" />
                    <label for="name" class="text-gray-800 text-sm font-bold leading-tight tracking-normal"> تاريخ الاصدار </label>
                    <input id="name" wire:model="date" type="date" class="px-3 mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="" />
                    <div class="grid grid-cols-2 justify-between ">
                        <div>
                            <!-- depatment -->
                            <label for="email2" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">القسم </label>
                            <select wire:model="department_id" class="w-48 mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="">
                                <option value="">إختر القسم</option>
                                <option value="1">علوم الحاسوب</option>
                                <option value="2">نظم المعلومات الحاسوبية</option>
                            </select>
                        </div>
                        <div>
                            <!--  type الدراسة   -->
                            <label for="email2" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">نوع الدراسة </label>
                            <select wire:model="type" class="w-48 mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="">
                                <option value="">الدراسة </option>
                                <option value="0">الصباحي</option>
                                <option value="1">المسائي</option>
                            </select>
                        </div>
                        <div>
                            <label for="email2" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">الدور </label>
                            <select wire:model="round" class="w-48 mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="">
                                <option value="">الدور</option>
                                <option value="0">الاول</option>
                                <option value="1"> الثاني</option>
                                <option value="2">الثالث</option>
                            </select>
                        </div>
                        <div>
                            <label for="email2" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">سنة التخرج </label>
                            <select wire:model="graduation_year" class="w-48 mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="">
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
                        </div>
                    </div>
                    <div class="flex items-center justify-start gap-5 w-full">
                        <button type="submit" class=" transition duration-150 ease-in-out hover:bg-blue-900  bg-[#071F63] rounded text-white px-8 py-2 text-sm">اضافة</button>
                        <a href="{{ route('unid') }}" class=" ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm">
                            الغاء
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>