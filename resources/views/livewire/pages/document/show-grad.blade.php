<div class="flex flex-col items-center justify-center overflow-scroll">
    <div class="relative w-[21cm] h-[29.7cm] flex flex-col bg-[#efeccb] m-[15px] mb-0 shadow-lg shadow-[(0, 0, 0, 0.5)] border-2 border-dashed border-black">
        {{-- * Head Compartment --}}
        <livewire:pages.ui.dochead />
        {{-- * Body Compartment --}}
        <div class="flex flex-col justify-between px-4 mx-auto ">
            <div class="grid items-end grid-cols-3 ">
                <div> </div>
                <div class="items-center text-center">
                    <h2 class="text-xl font-semibold text-center">تأييد تخرج </h2>
                    <h2 class="text-xl font-semibold text-center">الى/من يمهمه الامر</h2>
                    {{-- @if ($selected)
                        رقم التسلسل : <span class="font-semibold text-center "> {{ $student->id }}</span>
                    @endif --}}
                </div>
                @if ($student->gender == 1)
                <img src="{{ asset($student->image_path) }}" alt="" class="p-1 mx-auto mt-10 border-2 border-gray-900 rounded-sm w-36 h-36">
                @else
                <img src="{{ asset($student->image_path) }}" alt="" class="p-1 mx-auto mt-10 border-2 border-gray-900 rounded-sm w-36 h-36">
                @endif
            </div>
            <div class="flex mx-[100px]">
                <div class="mt-20 text-md">نؤيد لكم ان <span class="font-semibold"> {{ $student->name_ar }}</span>
                    <span class="text-lg">
                        @if ($student->gender == 1)
                        الملصقة
                        @else
                        الملصق
                        @endif
                        @if ($student->gender == 1)
                        صورتها
                        @else
                        صورته
                        @endif
                        اعلاه هو
                        @if ($student->gender == 1)
                        احدى
                        @else
                        احد
                        @endif
                        @if ($student->gender == 1)
                        خريجات
                        @else
                        خريجي
                        @endif
                        كليتنا للعام الدراسي
                        @if ($student->unid->graduation_year == 1)
                        2014-2015
                        @elseif($student->unid->graduation_year == 2)
                        2015-2016
                        @elseif($student->unid->graduation_year == 3)
                        2016-2017
                        @elseif($student->unid->graduation_year == 4)
                        2017-2018
                        @elseif($student->unid->graduation_year == 5)
                        2018-2019
                        @elseif($student->unid->graduation_year == 6)
                        2019-2020
                        @elseif($student->unid->graduation_year == 7)
                        2020-2021
                        @elseif($student->unid->graduation_year == 8)
                        2021-2022
                        @elseif($student->unid->graduation_year == 9)
                        2022-2023
                        @elseif($student->unid->graduation_year == 10)
                        2023-2024
                        @elseif($student->unid->graduation_year == 11)
                        2024-2025
                        @elseif($student->unid->graduation_year == 12)
                        2025-2026
                        @elseif($student->unid->graduation_year == 13)
                        2026-2027
                        @elseif($student->unid->graduation_year == 14)
                        2027-2028
                        @elseif($student->unid->graduation_year == 15)
                        2028-2029
                        @elseif($student->unid->graduation_year == 16)
                        2029-2030
                        @endif
                        (
                        @if ($student->unid->round == 0)
                        الدور الاول
                        @elseif($student->unid->round == 1)
                        الدور الثاني
                        @else
                        الدور الثالث
                        @endif
                        )
                        , قد
                        @if ($student->gender == 1)
                        منحت
                        @else
                        منح
                        @endif
                        شهادة بكالوريوس العلوم في تكنولوجيا المعلومات/ علوم
                        الحاسوب/
                        @if ($student->unid->type == 0)
                        الدراسة الصباحية
                        @else
                        الدراسة المسائية
                        @endif
                        في الفصل الدراسي للعام اعلاه ,ولا يعتبر هذا التأييد وثيقة تخرج
                        @if ($selected)
                        لحين صدور الامر الجامعي الخاص بخريجي الدور على قسمه
                        @endif
                        وبناء على طلبه زود بهذا التأييد .
                    </span>
                </div>
            </div>
            <div class="flex mx-auto mt-20 text-lg"> مع التقدير</div>

        </div>
        {{-- * Tail Compartment --}}
        <livewire:pages.ui.doc-tail2 />
        <img class="absolute opacity-[30%] z-0 h-[575px] top-[25%] left-[13.8%]" src="/img/it.svg" alt="water Mark">
    </div>
</div>