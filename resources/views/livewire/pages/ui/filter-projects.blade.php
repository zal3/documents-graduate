<div>
    <button id="filterHome" data-dropdown-toggle="dropdownFilterHome" data-dropdown-placement="bottom"
        class="p-2 py-1 text-gray-600 duration-150 ease-in delay-75 rounded-lg hover:text-gray-900">
        <i class="text-xl fa-solid fa-filter"></i>
    </button>
    <div id="dropdownFilterHome" class="hidden rounded-lg ">
        <div>
            <div class="grid grid-cols-2 gap-2 ">
                <select wire:model="stage"
                    class="py-2 text-sm border border-gray-900  focus:border-gray-500 focus:bg-white focus:ring-0">
                    <option value="0">المرحلة </option>
                    <option value="1">الاولى </option>
                    <option value="2"> الثانية</option>
                    <option value="3"> الثالثة</option>
                    <option value="4"> الرابعة</option>
                </select>
                <select wire:model="course"
                    class="py-2 text-sm border border-gray-900  focus:border-gray-500 focus:bg-white focus:ring-0">
                    <option value="0">الكورس</option>
                    <option value="1">الاول</option>
                    <option value="2"> الثاني</option>
                </select>
            </div>
        </div>
    </div>
</div>
