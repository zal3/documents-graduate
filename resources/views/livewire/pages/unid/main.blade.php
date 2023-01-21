<div  class="mt-11 pr-14 pl-5">
    <table class=" -mr-64 text-sm text-center text-gray-500">
        <div class=" text-xl  text-center -mr-64 text-white bg-[#071F63] py-3">
            الرقم الجامعي
            <thead class="max-w-screen-2xl text-md text-gray-700  bg-[#FFC657]">
                <tr>
                    <th scope="col" class="py-3 text-white px-3">
                        الرقم ىالجامعي
                    </th>
                    <th scope="col" class="py-3 text-white px-3">
                        تاريخ الاصدار
                    </th>
                    <th scope="col" class="py-3 text-white px-3">
                        الدراسة
                    </th>
                    <th scope="col" class="py-3 text-white px-3">
                        الكورس
                    </th>
                    <th scope="col" class="py-3 text-white px-3">
                        القسم
                    </th>
                    <th scope="col" class="py-3 text-white px-3">
                        سنة التخرج
                    </th>
                    {{-- <th scope="col" class="py-3 text-white px-3">
                        عدد الطلاب
                    </th> --}}
                    {{-- <th scope="col" class="py-3 text-white px-3"></th>
                    <th scope="col" class="py-3 text-white px-3"></th>
                    <th scope="col" class="py-3 text-white px-3"></th>
                    <th scope="col" class="py-3 text-white px-3"></th>
                    <th scope="col" class="py-3 text-white px-3"></th>
                    <th scope="col" class="py-3 text-white px-3"></th>
                    <th scope="col" class="py-3 text-white px-3"></th>
                    <th scope="col" class="py-3 text-white px-3"></th>
                    <th scope="col" class="py-3 text-white px-3"></th>
                    <th scope="col" class="py-3 text-white px-3"></th>
                    <th scope="col" class="py-3 text-white px-3"></th>
                    <th scope="col" class="py-3 text-white px-3"></th>
                    <th scope="col" class="py-3 text-white px-3"></th> --}}
                    {{-- <th scope="col" class="py-3 text-white px-3"></th> --}}
                    <th scope="col" class="py-3 text-white px-3"></th>
                    {{-- <th></th>
                    <th></th> 
                    <th></th>
                    <th></th>--}}
                    <th></th>
                    <th></th>
                    <th></th>


                </tr>
            </thead>

            <!-- {{-- <label for="name_en"
            class="absolute text-2xl text-[#000]  duration-300 transform -translate-y-4 px-1 scale-75 mt-52 mr-64 z-10 origin-[0] right-2.5 "
            dir="ltr">الأسم الرباعي بالأنجليزية</label><br>
        <input id="name_en" type="text" wire:model.lazy="name_en"
            class=" absolute bg-white  -translate-y-4  mt-64 mr-80  origin-[0] right-1 w-96 h-10 text-sm text-gray-900  rounded-lg border-1 border-gray-400  focus:ring-blue-500 focus:border-blue-500 block"
             placeholder="الإسم الرباعي بالإنجليزية" />
        @error('name_en')
            <span class="text-red-600">{{ $message }}</span>
        @enderror --}} -->

            <tbody>
                <tr class="bg-white border-b text-sm">

                   

                </tr>
            </tbody>

            <tfoot>
                <tr class="bg-white border-b text-sm">
                    <td class="py-3 px-3">
                        {{-- <label for="subject" class="text-2xl text-[#000]">  </label> --}}
                        <input id="order_university" type="text" wire:model.lazy="order_university"
                            class="bg-white text-sm text-gray-900 rounded-lg border-1 border-gray-500 focus:ring-blue-500 focus:border-blue-500 block "
                             placeholder="" />
                        <!-- @error('order_university')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror -->
                    </td>

                    <td class="py-3 px-3">
                        {{-- <label for="year"class="text-2xl text-[#000]">  </label><br> --}}
                        <input id="date" type="text" wire:model.lazy="date"
                            class="bg-white text-sm text-gray-900  rounded-lg border-1 border-gray-500 focus:ring-blue-500 focus:border-blue-500 block "
                             placeholder="" />
                        <!-- @error('date')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror -->
                    </td>

                    <td class="py-3 px-3">
                        {{-- <label for="degree" class="text-2xl text-[#000]">  </label><br> --}}
                        <input id="study_type" type="text" wire:model.lazy="study_type"
                            class="bg-white text-sm text-gray-900  rounded-lg border-1 border-gray-500  focus:ring-blue-500 focus:border-blue-500 block "
                             placeholder=" " />
                        <!-- @error('study_type')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror -->
                    </td>

                    <td class="py-3 px-3">
                        {{-- <label for="semester" class="text-2xl text-[#000]">  </label><br> --}}
                        <input id="graduation_semester" type="text" wire:model.lazy="graduation_semester"
                            class="bg-white text-sm text-gray-900  rounded-lg border-1 border-gray-500  appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                             placeholder=" " />
                        <!-- @error('graduation_semester')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror -->
                    </td>

                    <td class="py-3 px-3">
                        {{-- <label for="semester" class="text-2xl text-[#000]">  </label><br> --}}
                        <input id="department" type="text" wire:model.lazy="department"
                            class="bg-white text-sm text-gray-900  rounded-lg border-1 border-gray-500  appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                             placeholder=" " />
                        <!-- @error('department')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror -->
                    </td>

                    <td class="py-3 px-3">
                        {{-- <label for="semester" class="text-2xl text-[#000]">  </label><br> --}}
                        <input id="study_year" type="text" wire:model.lazy="study_year"
                            class="bg-white text-sm text-gray-900  rounded-lg border-1 border-gray-500  appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                             placeholder=" " />
                        <!-- @error('study_year')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror -->
                    </td>

                    <td class="py-3 px-3">
                    
                        <input id="students_num" type="text" wire:model.lazy="students_num"
                            class="bg-white text-sm text-gray-900  rounded-lg border-1 border-gray-500  appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                             placeholder=" " />
                        <!-- @error('students_num')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror -->
                    </td>

                </tr>
            </tfoot>
        </div>
    </table>

    {{-- <button type="button" wire:click="showGradeModal"
    class="py-2 px-2 text-base text-white focus:outline-none  rounded-lg border bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-400 focus:z-1 focus:ring-1 ">إضافة
    مادة</button> --}}

    <div  class="flex">
        <button type="button" wire:click="addUniversityId"
            class="absolute   scale-75  -mr-56 z-10  py-2 px-16 w-52 h-14 text-2xl font-medium text-white focus:outline-none rounded-lg border bg-yellow-400 hover:bg-yellow-500 focus:ring-[#071F63] focus:z-10 focus:ring-4 ">
            حفظ
        </button>
    </div>

</div>



