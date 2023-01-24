<div>
        <div class="grid grid-cols-5 items-center text-sm  gap-2 mt-1">
            <!-- سنه التخرج -->
            <select wire:model="graduation_year" class="text-sm w-36 text-gray-900 bg-white border border-gray-500 rounded-lg ">
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
            <!-- القسم -->
            <select wire:model="department_id" class="text-sm w-36 text-gray-900 bg-white border border-gray-500 rounded-lg ">
                <option value="">إختر القسم</option>
                <option value="1">علوم الحاسوب</option>
                <option value="2">نظم المعلومات الحاسوبية</option>
            </select>
            <!-- الدور -->
            <select  wire:model="round" required class="text-sm  w-36 text-gray-900 bg-white border border-gray-500 rounded-lg ">
                <option value="">إختر الدور</option>
                <option value="0">الأول</option>
                <option value="1">الثاني</option>
                <option value="2">الثالث</option>
            </select>
            <!-- نوع الدراسة -->
            <select   wire:model="type" class="text-sm w-36 text-gray-900 bg-white border border-gray-500 rounded-lg ">
                <option value="">إختر الدراسة</option>
                <option value="0">الصباحية </option>
                <option value="1">المسائية</option>
            </select>
        </div>
</div>