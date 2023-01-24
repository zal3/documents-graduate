<div class="">

    <div class=" text-xl mr-2 px-9   text-white bg-[#071F63] py-4 flex justify-between items-center">
        <div>
            خريجي قسم تكنولوجيا المعلومات </div>
        <div class="flex justify-between gap-3">
            <livewire:pages.ui.search />
        </div>
    </div>

    <div class="inline-block min-w-full overflow-hidden align-middle bg-white rounded-bl-lg rounded-br-lg">
        <table class="min-w-full text-center">
            <thead>
                <tr class=" bg-[#FFC657]">
                    <th class="px-6 py-3 border-b-2 border-gray-300  leading-4 text-[#071F63] tracking-wider">#</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300  text-sm leading-4 text-[#071F63] tracking-wider">
                        الاسم </th>
                    <!-- <th class="px-6 py-3 border-b-2 border-gray-300  text-sm leading-4 text-[#071F63] tracking-wider"> الجنس </th> -->
                    <th class="px-6 py-3 border-b-2 border-gray-300  text-sm leading-4 text-[#071F63] tracking-wider">سنة
                        التخرج </th>
                    <!-- <th class="px-6 py-3 border-b-2 border-gray-300  text-sm leading-4 text-[#071F63] tracking-wider">المعدل</th> -->
                    <!-- <th class="px-6 py-3 border-b-2 border-gray-300  text-sm leading-4 text-[#071F63] tracking-wider"> القسم</th> -->
                    <th class="px-6 py-3 border-b-2 border-gray-300  text-sm leading-4 text-[#071F63] tracking-wider">
                        الجنس</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300  text-sm leading-4 text-[#071F63] tracking-wider">
                        الدور </th>

                    <th class="px-6 py-3 border-b-2 border-gray-300  text-sm leading-4 text-[#071F63] tracking-wider">
                        نوع الدراسة </th>
                    <th class="px-6 py-3 border-b-2 border-gray-300"></th>
                </tr>
            </thead>
            <tbody class="bg-white p-9">
                @foreach ($students as $index => $student)
                    <tr class="bg-white p-9">
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <div class="flex items-center">
                                <div>
                                    <div class="text-sm leading-5 text-gray-800">{{ $loop->index + 1 }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <div class="text-sm leading-5 text-blue-900">{{ $student->name_ar }}</div>
                        </td>
                        <td
                            class="px-6 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">
                            @if ($student->unid->graduation_year == 0)
                                2014-2015
                            @elseif($student->unid->graduation_year == 1)
                                2015-2016
                            @elseif($student->unid->graduation_year == 2)
                                2016-2017
                            @elseif($student->unid->graduation_year == 3)
                                2017-2018
                            @elseif($student->unid->graduation_year == 4)
                                2018-2019
                            @elseif($student->unid->graduation_year == 5)
                                2019-2020
                            @elseif($student->unid->graduation_year == 6)
                                2020-2021
                            @elseif($student->unid->graduation_year == 7)
                                2021-2022
                            @elseif($student->unid->graduation_year == 8)
                                2022-2023
                            @elseif($student->unid->graduation_year == 9)
                                2023-2024
                            @elseif($student->unid->graduation_year == 10)
                                2024-2025
                            @elseif($student->unid->graduation_year == 11)
                                2025-2026
                            @elseif($student->unid->graduation_year == 12)
                                2026-2027
                            @elseif($student->unid->graduation_year == 13)
                                2027-2028
                            @elseif($student->unid->graduation_year == 14)
                                2028-2029
                            @elseif($student->unid->graduation_year == 15)
                                2029-2030
                            @endif
                        </td>

                        <td
                            class="px-6 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">
                            {{ $student->gender == 0 ? 'ذكر' : 'أنثى' }}</td>
                        <!-- //if stage -->
                        <td
                            class="px-6 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">
                            <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                <span aria-hidden
                                    class="absolute inset-0 @if ($student->unid->round == 0) bg-green-200 @elseif($student->unid->round == 1) bg-red-200 @else bg-gray-200 @endif opacity-50 rounded-full"></span>

                                <span class="relative text-xs">
                                    @if ($student->unid->round == 0)
                                        الاول
                                    @elseif($student->unid->round == 1)
                                        الثاني
                                    @else
                                        الثالث
                                    @endif
                                </span>


                        </td>
                        <td
                            class="px-6 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">
                            <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                <span aria-hidden
                                    class="absolute inset-0 @if ($student->unid->type == 0) bg-green-200 @else bg-red-200 @endif opacity-50 rounded-full"></span>

                                <span class="relative text-xs">{{ $student->unid->type == 1 ? ' مسائي' : ' صباحي ' }}
                                </span>
                        </td>
                        <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap border-b border-gray-500">
                            <a href="{{ route('profile-graduate', $student->id) }}"
                                class="px-5 py-2 border-[#071F63] border text-[#071F63] rounded transition duration-300 hover:bg-[#071F63]  hover:text-white focus:outline-none">عرض
                                التفاصيل </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
