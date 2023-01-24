<div class="">
    <div class=" text-xl mr-2 px-9   text-white bg-[#071F63] py-4 flex justify-between items-center">
        <div>
            الخريجيين
        </div>
        <div class="flex flex-col justify-between gap-2">
            <livewire:pages.ui.search />
            <livewire:pages.ui.filter-students class="" />
        </div>
    </div>

    <div class="inline-block min-w-full overflow-hidden align-middle bg-white rounded-bl-lg rounded-br-lg">
        <table class="min-w-full text-center">
            <thead>
                <tr class=" bg-[#FFC657]">
                    <th class="px-6 py-3 border-b-2 border-gray-300  leading-4 text-[#071F63] tracking-wider">#</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300  text-sm leading-4 text-[#071F63] tracking-wider">
                        الاسم </th>
                    <th class="px-6 py-3 border-b-2 border-gray-300  text-sm leading-4 text-[#071F63] tracking-wider">سنة
                        التخرج </th>
                    <th class="px-6 py-3 border-b-2 border-gray-300  text-sm leading-4 text-[#071F63] tracking-wider">
                        القسم</th>
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
                            <!-- student name -->
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
                            @if ($student->unid->department->id == 1)
                                علوم الحاسوب
                            @else
                                نظم المعلومات
                            @endif
                        </td>

                        <td
                            class="px-6 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">
                            @if ($student->gender == 0)
                                ذكر
                            @else
                                انثى
                            @endif
                        </td>
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
        <!-- <div class="mt-4 sm:flex-1 sm:flex sm:items-center sm:justify-between work-sans">
         <div>
            <p class="text-sm leading-5 text-blue-700">
               Showing
               <span class="font-medium">1</span>
               to
               <span class="font-medium">200</span>
               of
               <span class="font-medium">2000</span>
               results
            </p>
         </div>
         <div>
            <nav class="relative z-0 inline-flex shadow-sm">
               <div>
                  <a href="#" class="relative inline-flex items-center px-2 py-2 text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-l-md hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500" aria-label="Previous" v-on:click.prevent="changePage(pagination.current_page - 1)">
                     <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                     </svg>
                  </a>
               </div>
               <div>
                  <a href="#" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-blue-700 transition duration-150 ease-in-out bg-white border border-gray-300 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 hover:bg-tertiary">
                     1
                  </a>
                  <a href="#" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-blue-600 transition duration-150 ease-in-out bg-white border border-gray-300 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 hover:bg-tertiary">
                     2
                  </a>
                  <a href="#" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-blue-600 transition duration-150 ease-in-out bg-white border border-gray-300 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 hover:bg-tertiary">
                     3
                  </a>
               </div>
               <div v-if="pagination.current_page < pagination.last_page">
                  <a href="#" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-r-md hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500" aria-label="Next">
                     <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                     </svg>
                  </a>
               </div>
            </nav>
         </div>
      </div> -->
    </div>
</div>
