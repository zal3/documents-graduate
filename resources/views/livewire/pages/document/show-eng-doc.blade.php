<div class="flex flex-col items-center justify-center overflow-scroll">
    <div
        class="relative w-[21cm] h-[29.7cm] flex flex-col bg-[#efeccb] m-[15px] mb-0 shadow-lg shadow-[(0, 0, 0, 0.5)] border-2 border-dashed border-black">
        {{-- * Head Compartment --}}
        <livewire:pages.ui.dochead />

        {{-- * Body Compartment --}}
        <div class="flex flex-col justify-between px-4 mx-auto ">
            <div class="grid items-end grid-cols-3 ">
                <div> </div>
                <div class="items-center text-center">
                    <h2 class="text-xl font-semibold text-center">graduation document </h2>
                    <h2 class="text-xl font-semibold text-center">
                        To/whom it may concern </h2>
                    @if ($selected)
                        Serial Number: <span class="font-semibold text-center "> {{ $student->id }}</span>
                    @endif
                </div>
                @if ($student->gender == 1)
                    <img src="{{ asset($student->image_path) }}" alt=""
                        class="p-1 mx-auto mt-10 border-2 border-gray-900 rounded-sm w-36 h-36">
                @else
                    <img src="{{ asset($student->image_path) }}" alt=""
                        class="p-1 mx-auto mt-10 border-2 border-gray-900 rounded-sm w-36 h-36">
                @endif
            </div>
            <div class="flex mx-[100px]">
                <div class="left-0 mt-20 text-left text-md">
                    We support you that
                    <span class="font-semibold"> {{ $student->name_en }}</span>
                    <span class="text-lg text-left">
                        whose picture is pasted above

                        is one of our college graduates for the academic year
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
                            the first round
                        @elseif($student->unid->round == 1)
                            the second round
                        @else
                            the third round
                        @endif
                        )
                        who was awarded a Bachelor of Science degree in information technology / computer science /
                        @if ($student->unid->type == 0)
                            Morning study
                        @else
                            Evening study
                        @endif
                        according to the university order number
                        (
                        {{ $student->unid->number }} ) On the date of
                        {{ date('Y-m-d') }}
                        @if ($average > 0)
                            with a grade of (
                            @if ($average <= 50)
                                Weak
                            @elseif($average <= 60)
                                Acceptable
                            @elseif($average <= 70)
                                middle
                            @elseif($average <= 80)
                                good
                            @elseif($average <= 90)
                                very good
                            @elseif($average <= 100)
                                Excellent
                            @endif ) and a graduation rate of ( {{ number_format($average, 2) }} )
                        @endif
                    </span>
                </div>
            </div>
        </div>

        {{-- * Tail Compartment --}}
        @if (!$selected2)
            <livewire:pages.ui.doc-tail1 :selected2="$selected2" />
        @endif
        {{-- * WaterMark Compartment --}}
        <img class="absolute opacity-[20%] z-0 h-[575px] top-[25%] left-[13.8%]" src="/img/it.svg" alt="water Mark">
    </div>

    {{-- * Second Page --}}
    @if ($selected2)
        <div
            class="relative w-[21cm] h-[29.7cm] flex flex-col bg-[#efeccb] m-[15px] mb-0 shadow-lg shadow-[(0, 0, 0, 0.5)] border-2 border-dashed border-black">
            <div class="flex flex-col justify-between px-4 mx-auto text-[12px] ">
                <div class="flex">
                    <livewire:pages.ui.doctable :student_id="$student_id" />
                </div>

                {{-- * Tail Compartment --}}
                <div class="flex">
                    <livewire:pages.ui.doc-tail1 :selected2="$selected2" />
                </div>
            </div>

            {{-- * WaterMark Compartment --}}
            <img class="absolute opacity-[20%] z-0 h-[575px] top-[25%] left-[13.8%]" src="/img/it.svg" alt="water Mark">
        </div>
    @endif
</div>
