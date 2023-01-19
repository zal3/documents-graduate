<div class=" ">

   <div class=" text-xl mr-2 px-9   text-white bg-[#071F63] py-4 flex justify-between items-center">
      <div>
         مواد قسم علوم الحاسوب </div>
      <div class="flex justify-between gap-3">
         <svg width="18" height="18" class="w-4 lg:w-auto" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.11086 15.2217C12.0381 15.2217 15.2217 12.0381 15.2217 8.11086C15.2217 4.18364 12.0381 1 8.11086 1C4.18364 1 1 4.18364 1 8.11086C1 12.0381 4.18364 15.2217 8.11086 15.2217Z" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M16.9993 16.9993L13.1328 13.1328" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
         </svg>
         <div class="bg-white w-40 h-6 rounded ">
            
         </div>
      </div>
   </div>
   <div class="align-middle inline-block min-w-full  overflow-hidden bg-white    rounded-bl-lg rounded-br-lg">
      <table class="min-w-full text-center">
         <thead>
            <tr class=" ">
               <div class=" bg-[#FFC657] p-3">

                  <div class=" rounded-lg ">
                     <div>
                        <div class="grid grid-cols-6 items-start  mr-9">
                           <select wire:model="stage" class=" py-2 w-40    border border-gray-900 focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                              <option value="0">المرحلة </option>
                              <option value="1">الاولى </option>
                              <option value="2"> الثانية</option>
                              <option value="3"> الثالثة</option>
                              <option value="4"> الرابعة</option>
                           </select>
                           <select wire:model="course" class=" py-2 w-40  border border-gray-900 focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                              <option value="0">الكورس</option>
                              <option value="1">الاول</option>
                              <option value="2"> الثاني</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               </th>
            </tr>
         </thead>
         <tbody class="bg-white p-9">
            @foreach ($subjects as $index => $subject )
            <tr class="bg-white p-9">
               <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                  <div class="flex items-center">
                     <div>
                        <div class="text-sm leading-5 text-gray-800">{{$loop->index + 1}}</div>
                     </div>
                  </div>
               </td>
               <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                  <div class="text-sm leading-5 text-blue-900">{{$subject->name_ar}}</div>
               </td>

            </tr>
            @endforeach
         </tbody>
      </table>
   </div>
</div>