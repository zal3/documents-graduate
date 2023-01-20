<div class="">
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
               <div class=" rounded-lg bg-[#FFC657] p-3 grid justify-between grid-cols-3  items-center ">
                  <div class=" grid grid-cols-2 items-start  mr-9">
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
                  <div class=" flex justify-center " id="button">
                     <button class=" mx-auto transition duration-150 ease-in-out hover:bg-blue-900  bg-[#071F63] rounded text-white px-4 sm:px-8 py-2 text-xs sm:text-sm" onclick="modalHandler(true)">اضافة مادة </button>
                  </div>
                  <!-- dont refresh model -->

                  <form  wire:submit.prevent="add"> 
                  @csrf
                  <div   class="py-12 bg-black bg-opacity-70 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0" id="modal">
                        <div  class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
                           <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                              <div class="w-full flex justify-start text-gray-600 text-lg font-bold my-3">
                              </div>
                              <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4 "> اضافة مادة
                              </h1>
                              <label for="name" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">اسم المادة باللغة العربية </label>
                              <input id="name" wire:model="name_ar" class="px-3 mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="" />
                              <label for="name" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">اسم المادة باللغة الانكليزية </label>
                              <input id="name" wire:model="name_en" class="px-3 mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="" />
                              <label for="name" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">الوحدة </label>
                              <input type="number" min="1" max="4" wire:model="unit" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="" />
                              <div class="flex justify-between ">
                                 <div>
                                    <label for="email2" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">المرحلة </label>
                                    <select wire:model="stage" class="w-48 mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="">
                                       <option value="0">المرحلة </option>
                                       <option value="1">الاولى </option>
                                       <option value="2"> الثانية</option>
                                       <option value="3"> الثالثة</option>
                                       <option value="4"> الرابعة</option>
                                    </select>
                                 </div>
                                 <div>
                                    <label for="email2" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">الكورس </label>
                                    <select wire:model="course" class="w-48 mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="">
                                       <option value="0">الكورس</option>
                                       <option value="1">الاول</option>
                                       <option value="2"> الثاني</option>
                                    </select>
                                 </div>


                              </div>
                              <div class="flex items-center justify-start gap-5 w-full">
                                 <button type="submit" class=" transition duration-150 ease-in-out hover:bg-blue-900  bg-[#071F63] rounded text-white px-8 py-2 text-sm">اضافة</button>
                                 <button class=" ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm" onclick="modalHandler()">الغاء</button>
                              </div>
                              <!-- <button class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600" onclick="modalHandler()" aria-label="close modal" role="button">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <line x1="18" y1="6" x2="6" y2="18" />
                                    <line x1="6" y1="6" x2="18" y2="18" />
                                 </svg>
                              </button> -->
                           </div>
                        </div>
                     </div>
                  </form>
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
<script>
   let modal = document.getElementById("modal");

   function modalHandler(val) {
      if (val) {
         fadeIn(modal);
      } else {
         fadeOut(modal);
      }
   }

   function fadeOut(el) {
      el.style.opacity = 1;
      (function fade() {
         if ((el.style.opacity -= 0.1) < 0) {
            el.style.display = "none";
         } else {
            requestAnimationFrame(fade);
         }
      })();
   }

   function fadeIn(el, display) {
      el.style.opacity = 0;
      el.style.display = display || "flex";
      (function fade() {
         let val = parseFloat(el.style.opacity);
         if (!((val += 0.2) > 1)) {
            el.style.opacity = val;
            requestAnimationFrame(fade);
         }
      })();
   }
</script>