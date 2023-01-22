<div class="px-16 ">
    <div class="p-8 border border-gray-200 rounded-md bg-white shadow mt-20">
        <div class="grid grid-cols-1 md:grid-cols-3">
            <div class="grid grid-cols-3 text-center order-last md:order-first mt-20 md:mt-0">
                <div>
                    <!-- //tow number after point  -->
                    <p class="font-bold text-gray-700 text-xl"> {{ number_format($average, 2) }}</p>
                    <p class="text-gray-400">المعدل</p>
                </div>
                <div>
                    <p class="font-bold text-gray-700 text-xl">@if($student->type == 0) الاول @elseif ($student->type == 1) الثاني @else الثالث @endif</p>
                    <p class="text-gray-400">الدور</p>
                </div>
                <div>
                    <p class="font-bold text-gray-700 text-xl">@if($student->type == 0) صباحي @else مسائي @endif</p>
                    <p class="text-gray-400">الدراسة </p>
                </div>
            </div>
            <div class="relative">
                <div class="w-48 h-48 bg-indigo-100 mx-auto rounded-full shadow-2xl absolute inset-x-0 top-0 -mt-24 flex items-center justify-center text-indigo-500">
                    @if($student->image_path)
                    <img src="{{asset($student->image_path)}}" class="w-48 h-48 rounded-full">
                    @else
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                    @endif
                </div>
            </div>
            <div class="gap-3 flex justify-between mt-32 md:mt-0 md:justify-center">
                <a href="{{ route('edit-graduate' , ['id' => $student->id]) }}" class="text-white pm-2 pt-3 px-4 uppercase rounded bg-blue-400 hover:bg-blue-500 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5"> Edit</a>
                <!-- <button class="text-white py-2 px-4 uppercase rounded bg-blue-400 hover:bg-blue-500 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5"> Edit</button> -->
                <button wire:click="confirm({{ $student->id }})" class="text-white py-2 px-4 uppercase rounded bg-gray-700 hover:bg-gray-800 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5"> Delete</button>
            </div>
        </div>
        <div class="mt-20 text-center border-b pb-12">
            <h1 class="text-4xl font-medium text-gray-700">{{$student->name_ar}}<span class="font-light text-gray-500"></span></h1>
            <p class="font-light text-gray-600 mt-3">{{$student->name_en}}</p>
            <p class="mt-8 text-gray-500"> كلية تكنولوجيا المعلومات وعلوم الحاسوب</p>
            <p class="mt-2 text-gray-500">قسم {{$student->department->name_ar}}</p>
        </div>
        <div class="mt-12 flex flex-cols-2  justify-start">
            <div>
                <p class="text-gray-600  font-light px-2">الجنس: </p>
                <p class="text-gray-600  font-light px-2">سنة التخرج: </p>
                <p class="text-gray-600  font-light px-2"> النتيجة  : </p>
            </div>
            <div>
                <p class="text-gray-600  font-light px-2">{{$student->gender == 0 ? 'ذكر' : 'أنثى'}}</p>
                <p class="text-gray-600  font-light px-2"> @if($student->graduation_year == 0) 2014-2015 @elseif($student->graduation_year == 1) 2015-2016 @elseif($student->graduation_year == 2) 2016-2017 @elseif($student->graduation_year == 3) 2017-2018 @elseif($student->graduation_year == 4) 2018-2019 @elseif($student->graduation_year == 5) 2019-2020 @elseif($student->graduation_year == 6) 2020-2021 @elseif($student->graduation_year == 7) 2021-2022 @elseif($student->graduation_year == 8) 2022-2023 @elseif($student->graduation_year == 9) 2023-2024 @elseif($student->graduation_year == 10) 2024-2025 @elseif($student->graduation_year == 11) 2025-2026 @elseif($student->graduation_year == 12) 2026-2027 @elseif($student->graduation_year == 13) 2027-2028 @elseif($student->graduation_year == 14) 2028-2029 @elseif($student->graduation_year == 15) 2029-2030 @endif
                </p>
                <p class="text-gray-600  font-light px-2"> @if($average >= 50) ناجح @else  غير ناجح @endif</p>
            </div>

        </div>
    </div>
    <div class="p-8 border border-gray-200 rounded-md bg-white shadow mt-20">
        <div class="grid grid-cols-2 gap-9 md:grid-cols-2 ">
            <div class="flex flex-col gap-4 items-center justify-center ">
                <div class="">السنة الاولى - الفصل الاول </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-center text-gray-500 dark:text-gray-400">
                        <thead class="text-lg uppercase text-gray-700 font-bold">
                            <tr>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                    المادة </th>
                                <th scope="col" class="px-6 py-3">
                                    الوحدة </th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                    الدرجة </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($degrees as $index => $degree )

                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium font-bold text-gray-600 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    {{$degree->subject->name_ar}}
                                </th>
                                <td class="px-6 py-4">
                                    {{$degree->subject->unit }}
                                </td>

                                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                {{$degree->degree}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex flex-col gap-4 items-center justify-center">
                <div class="">السنة الاولى - الفصل الثاني </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-center text-gray-500 dark:text-gray-400">
                        <thead class="text-lg text-gray-700 uppercase text-gray-700 font-bold">
                            <tr>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                    المادة </th>
                                <th scope="col" class="px-6 py-3">
                                    الوحدة </th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                    الدرجة </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($degrees1 as $index => $degree )
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <th scope="row" class="font-bold px-6 py-4 font-medium text-gray-600 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    {{$degree->subject->name_ar}}
                                </th>
                                <td class="px-6 py-4">
                                   {{$degree->subject->unit }}
                                </td>
                                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                    {{$degree->degree}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="p-8 border border-gray-200 rounded-md bg-white shadow mt-20">
        <div class="grid grid-cols-2 gap-9 md:grid-cols-2 ">
            <div class="flex flex-col gap-4 items-center justify-center ">
                <div class="">السنة الثانية - الفصل الاول </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-center text-gray-500 dark:text-gray-400">
                        <thead class="text-lg uppercase text-gray-700 font-bold">
                            <tr>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                    المادة </th>
                                <th scope="col" class="px-6 py-3">
                                    الوحدة </th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                    الدرجة </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($degrees2 as $index => $degree )
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium font-bold text-gray-600 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    {{$degree->subject->name_ar}}
                                </th>
                                <td class="px-6 py-4">
                                   {{$degree->subject->unit }}
                                </td>
                                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                    {{$degree->degree}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex flex-col gap-4 items-center justify-center">
                <div class="">السنة الثانية - الفصل الثاني </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-center text-gray-500 dark:text-gray-400">
                        <thead class="text-lg text-gray-700 uppercase text-gray-700 font-bold">
                            <tr>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                    المادة </th>
                                <th scope="col" class="px-6 py-3">
                                    الوحدة </th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                    الدرجة </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($degrees3 as $index => $degree )
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <th scope="row" class="font-bold px-6 py-4 font-medium text-gray-600 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    {{$degree->subject->name_ar}}
                                </th>
                                <td class="px-6 py-4">
                                   {{$degree->subject->unit }}
                                </td>
                                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                    {{$degree->degree}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="p-8 border border-gray-200 rounded-md bg-white shadow mt-20">
        <div class="grid grid-cols-2 gap-9 md:grid-cols-2 ">
            <div class="flex flex-col gap-4 items-center justify-center ">
                <div class="">السنة الثالثة - الفصل الاول </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-center text-gray-500 dark:text-gray-400">
                        <thead class="text-lg uppercase text-gray-700 font-bold">
                            <tr>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                    المادة </th>
                                <th scope="col" class="px-6 py-3">
                                    الوحدة </th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                    الدرجة </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($degrees4 as $index => $degree )
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium font-bold text-gray-600 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    {{$degree->subject->name_ar}}
                                </th>
                                <td class="px-6 py-4">
                                   {{$degree->subject->unit }}
                                </td>
                                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                    {{$degree->degree}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex flex-col gap-4 items-center justify-center">
                <div class="">السنة الثالثة - الفصل الثاني </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-center text-gray-500 dark:text-gray-400">
                        <thead class="text-lg text-gray-700 uppercase text-gray-700 font-bold">
                            <tr>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                    المادة </th>
                                <th scope="col" class="px-6 py-3">
                                    الوحدة </th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                    الدرجة </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($degrees5 as $index => $degree )
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <th scope="row" class="font-bold px-6 py-4 font-medium text-gray-600 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    {{$degree->subject->name_ar}}
                                </th>
                                <td class="px-6 py-4">
                                   {{$degree->subject->unit }}
                                </td>
                                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                    {{$degree->degree}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="p-8 mb-10 border border-gray-200 rounded-md bg-white shadow mt-20">
        <div class="grid grid-cols-2 gap-9 md:grid-cols-2 ">
            <div class="flex flex-col gap-4 items-center justify-center ">
                <div class="">السنة الرابعة - الفصل الاول </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-center text-gray-500 dark:text-gray-400">
                        <thead class="text-lg uppercase text-gray-700 font-bold">
                            <tr>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                    المادة </th>
                                <th scope="col" class="px-6 py-3">
                                    الوحدة </th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                    الدرجة </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($degrees6 as $index => $degree )
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium font-bold text-gray-600 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    {{$degree->subject->name_ar}}
                                </th>
                                <td class="px-6 py-4">
                                   {{$degree->subject->unit }}
                                </td>
                                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                    {{$degree->degree}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex flex-col gap-4 items-center justify-center">
                <div class="">السنة الرابعة - الفصل الثاني </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-center text-gray-500 dark:text-gray-400">
                        <thead class="text-lg text-gray-700 uppercase text-gray-700 font-bold">
                            <tr>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                    المادة </th>
                                <th scope="col" class="px-6 py-3">
                                    الوحدة </th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                    الدرجة </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($degrees7 as $index => $degree )
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <th scope="row" class="font-bold px-6 py-4 font-medium text-gray-600 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    {{$degree->subject->name_ar}}
                                </th>
                                <td class="px-6 py-4">
                                   {{$degree->subject->unit }}
                                </td>
                                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                    {{$degree->degree}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>