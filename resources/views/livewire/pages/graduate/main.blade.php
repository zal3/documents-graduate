<div class=" ">
   <div class=" text-xl  text-center  text-white bg-[#071F63] py-3">
      الخريجيين
   </div>
   <div class=" text-xl  text-center  text-white bg-[#FFC657] py-3">
      <div class="align-middle inline-block w-full py-1 overflow-hidden  px-12">
         <div class="flex justify-between">
            <div class="inline-flex  w-4/12 px-2 lg:px-6 h-12 bg-transparent">
               <div class="flex flex-wrap items-stretch w-full h-full mb-6 relative">
                  <div class="flex">
                     <span class="flex items-center leading-normal bg-transparent rounded rounded-r-none border border-r-0 border-none lg:px-3 py-2 whitespace-no-wrap text-grey-dark text-sm">
                        <svg width="18" height="18" class="w-4 lg:w-auto" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M8.11086 15.2217C12.0381 15.2217 15.2217 12.0381 15.2217 8.11086C15.2217 4.18364 12.0381 1 8.11086 1C4.18364 1 1 4.18364 1 8.11086C1 12.0381 4.18364 15.2217 8.11086 15.2217Z" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M16.9993 16.9993L13.1328 13.1328" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </span>
                  </div>
                  <input type="text" class="flex-shrink flex-grow flex-auto leading-normal tracking-wide w-px flex-1 border border-none border-l-0 rounded rounded-l-none px-3 relative focus:outline-none text-xxs lg:text-xs lg:text-base text-gray-500 font-thin" placeholder="Search">
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="align-middle inline-block min-w-full  overflow-hidden bg-white   p-9 rounded-bl-lg rounded-br-lg">
      <table class="min-w-full text-center">
         <thead>
            <tr>
               <th class="px-6 py-3 border-b-2 border-gray-300  leading-4 text-[#071F63] tracking-wider">#</th>
               <th class="px-6 py-3 border-b-2 border-gray-300  text-sm leading-4 text-[#071F63] tracking-wider">الاسم </th>
               <!-- <th class="px-6 py-3 border-b-2 border-gray-300  text-sm leading-4 text-[#071F63] tracking-wider"> الجنس </th> -->
               <th class="px-6 py-3 border-b-2 border-gray-300  text-sm leading-4 text-[#071F63] tracking-wider">سنة التخرج </th>
               <!-- <th class="px-6 py-3 border-b-2 border-gray-300  text-sm leading-4 text-[#071F63] tracking-wider">المعدل</th> -->
               <th class="px-6 py-3 border-b-2 border-gray-300  text-sm leading-4 text-[#071F63] tracking-wider"> القسم</th>
               <th class="px-6 py-3 border-b-2 border-gray-300  text-sm leading-4 text-[#071F63] tracking-wider"> الجنس</th>
               <th class="px-6 py-3 border-b-2 border-gray-300  text-sm leading-4 text-[#071F63] tracking-wider"> نوع الدراسة </th>
               <th class="px-6 py-3 border-b-2 border-gray-300"></th>
            </tr>
         </thead>
         <tbody class="bg-white">
            @foreach ($students as $index => $student )
            <tr>
               <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                  <div class="flex items-center">
                     <div>
                        <div class="text-sm leading-5 text-gray-800">{{$loop->index + 1}}</div>
                     </div>
                  </div>
               </td>
               <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                  <div class="text-sm leading-5 text-blue-900">{{$student->name_ar}}</div>
               </td>
               <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{$student->graduation_year}}</td>
               <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{$student->department->name_ar}}</td>

               <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-sm leading-5">{{$student->gender == 0 ? 'ذكر' : 'أنثى'}}</td>
               <!-- //if stage -->
               <!-- @if($student->department->stage == 0)
                  <span class="relative text-xs">اولى</span>
                  @elseif($student->department->stage == 1)
                  <span class="relative text-xs">ثانية</span>
                  @elseif($student->department->stage == 2)
                  <span class="relative text-xs">ثالثة</span>
                  @else
                  <span class="relative text-xs">رابعة</span>
                  @endif -->

               </td>
               <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                  <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                     <span aria-hidden class="absolute inset-0 @if($student->department->type == 1) bg-green-200 @else bg-red-200 @endif opacity-50 rounded-full"></span>

                     <span class="relative text-xs">{{ $student->department->type == 1 ? ' صباحي' : ' مسائي' }}
                     </span>
               </td>
               <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                  <button class="px-5 py-2 border-[#071F63] border text-[#071F63] rounded transition duration-300 hover:bg-[#071F63]  hover:text-white focus:outline-none">عرض التفاصيل </button>
               </td>
            </tr>
            @endforeach
         </tbody>
      </table>
      <div class="sm:flex-1 sm:flex sm:items-center sm:justify-between mt-4 work-sans">
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
                  <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="Previous" v-on:click.prevent="changePage(pagination.current_page - 1)">
                     <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                     </svg>
                  </a>
               </div>
               <div>
                  <a href="#" class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-blue-700 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 transition ease-in-out duration-150 hover:bg-tertiary">
                     1
                  </a>
                  <a href="#" class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-blue-600 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 transition ease-in-out duration-150 hover:bg-tertiary">
                     2
                  </a>
                  <a href="#" class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-blue-600 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 transition ease-in-out duration-150 hover:bg-tertiary">
                     3
                  </a>
               </div>
               <div v-if="pagination.current_page < pagination.last_page">
                  <a href="#" class="-ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="Next">
                     <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                     </svg>
                  </a>
               </div>
            </nav>
         </div>
      </div>
   </div>
</div>