<!-- component -->
<section class="container mx-auto p-6 ">
    <div class="w-full mb-8 overflow-hidden ">
        <div class="w-full overflow-x-hidden overflow-y-hidden ">
            السنة الاولى
            <div class="flex mb-3 gap-2 justify-center items-center">
                <div class="flex flex-col  justify-center items-center">
                    الفصل الاول
                    <table class="w-full border border-black">
                        <thead>
                            <tr class="text-md border tracking-wide text-left text-black font-bold  uppercase border border-black">
                                <th class="px-4 py-1 border border-black">اسم المادة</th>
                                <th class="px-4 py-1 border border-black">الوحدة</th>
                                <th class="px-4 py-1 border border-black">الدرجة</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($subjects as $subject)
                            @if($subject->course == 1 && $subject->stage==1)
                            <tr class="text-black border border-black ">
                                <td class="px-4 py-1 border border-black">
                                    <div class="flex items-center text-md">
                                        <p class="text-md text-black font-bold">{{$subject->name_ar}}</p>
                                    </div>
                                </td>
                                <td class="px-4 py-1 text-md  border border-black">{{$subject->unit}}</td>
                                <td class="px-4 py-1 text-md border border-black">
                                    <!-- //degree  -->
                                    <span class="px-2 py-1  leading-tight   rounded-sm">
                                        @foreach($degree as $deg)
                                        @if($deg->subject_id == $subject->id)
                                        {{$deg->degree}}
                                        @endif
                                        @endforeach
                                    </span>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="flex flex-col  justify-center items-center">
                    الفصل الثاني
                    <table class="w-full border border-black">
                        <thead>
                            <tr class="text-md border tracking-wide text-left text-black font-bold  uppercase border border-black">
                                <th class="px-4 py-1 border border-black">اسم المادة</th>
                                <th class="px-4 py-1 border border-black">الوحدة</th>
                                <th class="px-4 py-1 border border-black">الدرجة</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($subjects as $subject)
                            @if($subject->course == 2 && $subject->stage==1)
                            <tr class="text-black border border-black ">
                                <td class="px-4 py-1 border border-black">
                                    <div class="flex items-center text-md">
                                        <p class="text-md text-black font-bold">{{$subject->name_ar}}</p>
                                    </div>
                                </td>
                                <td class="px-4 py-1 text-md  border border-black">{{$subject->unit}}</td>
                                <td class="px-4 py-1 text-md border border-black">
                                    <!-- //degree  -->
                                    <span class="px-2 py-1  leading-tight   rounded-sm">
                                        @foreach($degree as $deg)
                                        @if($deg->subject_id == $subject->id)
                                        {{$deg->degree}}
                                        @endif
                                        @endforeach
                                    </span>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            السنة الثانية
            <div class="flex mb-3 gap-2 justify-center items-center">
                <div class="flex flex-col  justify-center items-center">
                    الفصل الاول
                    <table class="w-full border border-black">
                        <thead>
                            <tr class="text-md border tracking-wide text-left text-black font-bold  uppercase border border-black">
                                <th class="px-4 py-1 border border-black">اسم المادة</th>
                                <th class="px-4 py-1 border border-black">الوحدة</th>
                                <th class="px-4 py-1 border border-black">الدرجة</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($subjects as $subject)
                            @if($subject->course == 1 && $subject->stage==2)
                            <tr class="text-black border border-black ">
                                <td class="px-4 py-1 border border-black">
                                    <div class="flex items-center text-md">
                                        <p class="text-md text-black font-bold">{{$subject->name_ar}}</p>
                                    </div>
                                </td>
                                <td class="px-4 py-1 text-md  border border-black">{{$subject->unit}}</td>
                                <td class="px-4 py-1 text-md border border-black">
                                    <!-- //degree  -->
                                    <span class="px-2 py-1  leading-tight   rounded-sm">
                                        @foreach($degree as $deg)
                                        @if($deg->subject_id == $subject->id)
                                        {{$deg->degree}}
                                        @endif
                                        @endforeach
                                    </span>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="flex flex-col  justify-center items-center">
                    الفصل الثاني
                    <table class="w-full border border-black">
                        <thead>
                            <tr class="text-md border tracking-wide text-left text-black font-bold  uppercase border border-black">
                                <th class="px-4 py-1 border border-black">اسم المادة</th>
                                <th class="px-4 py-1 border border-black">الوحدة</th>
                                <th class="px-4 py-1 border border-black">الدرجة</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($subjects as $subject)
                            @if($subject->course == 2 && $subject->stage==2)
                            <tr class="text-black border border-black ">
                                <td class="px-4 py-1 border border-black">
                                    <div class="flex items-center text-md">
                                        <p class="text-md text-black font-bold">{{$subject->name_ar}}</p>
                                    </div>
                                </td>
                                <td class="px-4 py-1 text-md  border border-black">{{$subject->unit}}</td>
                                <td class="px-4 py-1 text-md border border-black">
                                    <!-- //degree  -->
                                    <span class="px-2 py-1  leading-tight   rounded-sm">
                                        @foreach($degree as $deg)
                                        @if($deg->subject_id == $subject->id)
                                        {{$deg->degree}}
                                        @endif
                                        @endforeach
                                    </span>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            السنة الثالثة
            <div class="flex mb-3gap-2 items-center">
                <div class="flex flex-col  justify-center items-center">
                    الفصل الاول
                    <table class="w-full border border-black">
                        <thead>
                            <tr class="text-md border tracking-wide text-left text-black font-bold  uppercase border border-black">
                                <th class="px-4 py-1 border border-black">اسم المادة</th>
                                <th class="px-4 py-1 border border-black">الوحدة</th>
                                <th class="px-4 py-1 border border-black">الدرجة</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($subjects as $subject)
                            @if($subject->course == 1 && $subject->stage==3)
                            <tr class="text-black border border-black ">
                                <td class="px-4 py-1 border border-black">
                                    <div class="flex items-center text-md">
                                        <p class="text-md text-black font-bold">{{$subject->name_ar}}</p>
                                    </div>
                                </td>
                                <td class="px-4 py-1 text-md  border border-black">{{$subject->unit}}</td>
                                <td class="px-4 py-1 text-md border border-black">
                                    <!-- //degree  -->
                                    <span class="px-2 py-1  leading-tight   rounded-sm">
                                        @foreach($degree as $deg)
                                        @if($deg->subject_id == $subject->id)
                                        {{$deg->degree}}
                                        @endif
                                        @endforeach
                                    </span>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
               <div class="flex flex-col  justify-center items-center">
               الفصل الثاني
                <table class="w-full border border-black">
                    <thead>
                        <tr class="text-md border tracking-wide text-left text-black font-bold  uppercase border border-black">
                            <th class="px-4 py-1 border border-black">اسم المادة</th>
                            <th class="px-4 py-1 border border-black">الوحدة</th>
                            <th class="px-4 py-1 border border-black">الدرجة</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        @foreach ($subjects as $subject)
                        @if($subject->course == 2 && $subject->stage==3)
                        <tr class="text-black border border-black ">
                            <td class="px-4 py-1 border border-black">
                                <div class="flex items-center text-md">
                                    <p class="text-md text-black font-bold">{{$subject->name_ar}}</p>
                                </div>
                            </td>
                            <td class="px-4 py-1 text-md  border border-black">{{$subject->unit}}</td>
                            <td class="px-4 py-1 text-md border border-black">
                                <!-- //degree  -->
                                <span class="px-2 py-1  leading-tight   rounded-sm">
                                    @foreach($degree as $deg)
                                    @if($deg->subject_id == $subject->id)
                                    {{$deg->degree}}
                                    @endif
                                    @endforeach
                                </span>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
               </div>
            </div>
            السنة الرابعة
            <div class="flex mb-3 gap-2 items-center">
                <div class="flex flex-col  justify-center items-center">
                    الفصل الاول
                    <table class="w-full border border-black">
                        <thead>
                            <tr class="text-md border tracking-wide text-left text-black font-bold  uppercase border border-black">
                                <th class="px-4 py-1 border border-black">اسم المادة</th>
                                <th class="px-4 py-1 border border-black">الوحدة</th>
                                <th class="px-4 py-1 border border-black">الدرجة</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($subjects as $subject)
                            @if($subject->course == 1 && $subject->stage==4)
                            <tr class="text-black border border-black ">
                                <td class="px-4 py-1 border border-black">
                                    <div class="flex items-center text-md">
                                        <p class="text-md text-black font-bold">{{$subject->name_ar}}</p>
                                    </div>
                                </td>
                                <td class="px-4 py-1 text-md  border border-black">{{$subject->unit}}</td>
                                <td class="px-4 py-1 text-md border border-black">
                                    <!-- //degree  -->
                                    <span class="px-2 py-1  leading-tight   rounded-sm">
                                        @foreach($degree as $deg)
                                        @if($deg->subject_id == $subject->id)
                                        {{$deg->degree}}
                                        @endif
                                        @endforeach
                                    </span>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="flex flex-col  justify-center items-center">
                    الفصل الثاني
                    <table class="w-full border border-black">
                        <thead>
                            <tr class="text-md border tracking-wide text-left text-black font-bold  uppercase border border-black">
                                <th class="px-4 py-1 border border-black">اسم المادة</th>
                                <th class="px-4 py-1 border border-black">الوحدة</th>
                                <th class="px-4 py-1 border border-black">الدرجة</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($subjects as $subject)
                            @if($subject->course == 2 && $subject->stage==4)
                            <tr class="text-black border border-black ">
                                <td class="px-4 py-1 border border-black">
                                    <div class="flex items-center text-md">
                                        <p class="text-md text-black font-bold">{{$subject->name_ar}}</p>
                                    </div>
                                </td>
                                <td class="px-4 py-1 text-md  border border-black">{{$subject->unit}}</td>
                                <td class="px-4 py-1 text-md border border-black">
                                    <!-- //degree  -->
                                    <span class="px-2 py-1  leading-tight   rounded-sm">
                                        @foreach($degree as $deg)
                                        @if($deg->subject_id == $subject->id)
                                        {{$deg->degree}}
                                        @endif
                                        @endforeach
                                    </span>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>



        </div>
    </div>
</section>