<div>
    <div class="grid items-center grid-cols-5 gap-2 mt-1 text-sm">
        <!-- سنه التخرج -->
        <select wire:model.lazy="graduation_year"
            class="text-sm text-gray-900 bg-white border border-gray-500 rounded-lg w-36 ">
            <option value="">إختر سنة التخرج</option>
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
        <!-- القسم -->
        <select wire:model.lazy="department_id"
            class="text-sm text-gray-900 bg-white border border-gray-500 rounded-lg w-36 ">
            <option value="">إختر القسم</option>
            <option value=" 1">علوم الحاسوب</option>
            <option value=" 2 ">نظم المعلومات الحاسوبية</option>
        </select>
        <!-- الدور -->
        <select wire:model.lazy="round" required
            class="text-sm text-gray-900 bg-white border border-gray-500 rounded-lg w-36 ">
            <option value="">إختر الدور</option>
            <option value=" 1 ">الأول</option>
            <option value=" 2 ">الثاني</option>
            <option value=" 3 ">الثالث</option>
        </select>
        <!-- نوع الدراسة -->
        <select wire:model.lazy="type" class="text-sm text-gray-900 bg-white border border-gray-500 rounded-lg w-36 ">
            <option value="">إختر الدراسة</option>
            <option value=" 0 ">الصباحية</option>
            <option value=" 1 ">المسائية</option>
        </select>
    </div>
</div>
