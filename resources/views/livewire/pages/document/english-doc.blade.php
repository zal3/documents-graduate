<div class=" bg-[#FFFFFF] h-screen">
    <div class=" " >
        <p class="font-semibold -mr-32 pt-10 mb-4 text-3xl text-[#000]">وثيقة تخرج باللغة الأنجليزية</p>
        <hr class=" max-w-6xl h-0.5 -mr-32 bg-gray-400  md:my-2 rounded-md border-0">
    </div>
    <form  method="POST">
        @csrf
        <div class="relative">
            <div>
                <label for=""
                    class="absolute text-2xl text-[#000]  duration-300 transform -translate-y-4 scale-75 mt-24 -mr-44 z-10 origin-[0] right-2.5 "
                    dir="ltr">الأسم الرباعي بالأنجليزية</label><br>

                <input type="text" name="student_name" wire:model="query" {{-- wire:keydown.escape="resetFunc" 
                    wire:keydown.tab="resetFunc" --}} wire:keydown.Arrow-up="decrementHighlight"
                    wire:keydown.Arrow-down="incrementHighlight" wire:keydown.enter="selectStudent" list="students"
                    for="students"
                    class="form-input absolute bg-white py-4 -translate-y-4 mt-28 -mr-28  origin-[0] right-1 w-96  h-10  text-sm text-gray-900  rounded-lg border-1 border-gray-400 focus:ring-blue-500 focus:border-blue-500 block"
                     placeholder=" " />


                <!-- @if (!empty($query))
                    <div wire:click="resetFunc"></div>
                    @if (!empty($students))
                        <div>
                            <datalist id="students" >
                            @foreach ($students as $i => $student)
                                
                                    <!-- <option onclick="setQuery({{ $student['name_en'] }})" value="  {{ $student['name_en'] }} "> -->

                            @endforeach
                        </datalist>
                        </div>
                    @endif
                @endif --> -->


            </div>

            <div>
                <ul>
                    <li>
                        <!-- {{-- get sequence from database --}} -->

                        <!-- {{-- @foreach ($students as $student)
                            @if ($student['sequence'] == 1)
                                <div
                                    class="flex items-center pl-4 rounded absolute -translate-y-4  scale-75 mt-48 -mr-36 z-10 origin-[0] right-2.5">
                                    <label class="py-4 ml-2 w-full mr-5 font-medium text-gray-900 text-2xl">وثيقة مع
                                        تسلسل</label>
                                    <input type="checkbox" value="" name="bordered-checkbox"
                                        class="   w-7 h-7  text-[#FFC657] bg-[#FFC657] rounded border-[#071F63] focus:ring-[#071F63]">

                                </div>
                            @endif
                            
                        @endforeach --}} -->

                        <!-- {{-- @foreach ($students as $student) --}}
                            <div
                                class="flex items-center pl-4 rounded absolute -translate-y-4  scale-75 mt-48 -mr-36 z-10 origin-[0] right-2.5">
                                <label class="py-4 ml-2 w-full mr-5 font-medium text-gray-900 text-2xl">وثيقة مع
                                    تسلسل</label>
                                <input  wire:click="seq" type="checkbox" type="checkbox" value="" name="bordered-checkbox"
                                    class="   w-7 h-7  text-[#FFC657] bg-[#FFC657] rounded border-[#071F63] focus:ring-[#071F63]">

                            </div>
                        {{-- @endforeach --}} -->

                    </li>

                    {{-- <li>
                    <div
                        class="flex items-center pl-6 rounded absolute -translate-y-4  scale-75 mt-64 -mr-36 z-10 origin-[0] right-2.5">
                        <label class="ml-2  w-full mr-5 font-medium text-gray-900 text-2xl">وثيقة مع درجات</label>
                        <input checked="" type="checkbox" value="" name="bordered-checkbox"
                            class="   w-7 h-7  text-[#FFC657] bg-[#FFC657] rounded border-[#071F63] focus:ring-[#071F63]">

                    </div>
                </li> --}}
                </ul>
            </div>


            <button type="submit"
                class="absolute -translate-y-4  scale-75   -mr-28 z-10 origin-[0] -right-2 py-2 px-16  mb-2 mt-80 text-2xl  font-medium text-white focus:outline-none  rounded-lg border bg-yellow-400 hover:bg-yellow-500 focus:ring-[#071F63] focus:z-10 focus:ring-4 ">طباعة</button>
        </div>
    </form>
</div>
</div>

