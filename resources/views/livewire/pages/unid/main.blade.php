<div class=" ">

    <div class=" text-xl mr-2 px-9   text-white bg-[#071F63] py-4 flex justify-between items-center">
        <div>
            الامر الجامعي
        </div>
        <div class="flex flex-col justify-between gap-2">
            <livewire:pages.ui.search />
            <div class="flex  items-center">
                <livewire:pages.ui.filter-unids class="" />
                <a href="{{route('add-unid')}}">
                    <button class=" mx-auto transition duration-150 ease-in-out   bg-[#FFC657] rounded text-black px-4 sm:px-8 py-2 text-md">اضافة امر </button>
                </a>
            </div>
        </div>
    </div>

    <div class="align-middle inline-block min-w-full  overflow-hidden bg-white    rounded-bl-lg rounded-br-lg">
        <table class="min-w-full text-center">
            <thead>
                <tr class=" bg-[#FFC657]">
                    <th class="px-6 py-3 border-b-2 border-gray-300  leading-4 text-[#071F63] tracking-wider">#</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300  text-md leading-4 text-[#071F63] tracking-wider">الامر الجامعي </th>
                    <th class="px-6 py-3 border-b-2 border-gray-300  text-md leading-4 text-[#071F63] tracking-wider"> تاريخ الاصدار </th>
                    <th class="px-6 py-3 border-b-2 border-gray-300  text-md leading-4 text-[#071F63] tracking-wider"> القسم</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300  text-md leading-4 text-[#071F63] tracking-wider"> الدراسة </th>
                    <th class="px-6 py-3 border-b-2 border-gray-300  text-md leading-4 text-[#071F63] tracking-wider"> الدور </th>
                    <th class="px-6 py-3 border-b-2 border-gray-300  text-md leading-4 text-[#071F63] tracking-wider"> سنة التخرج </th>
                    <th class="px-6 py-3 border-b-2 border-gray-300"></th>
                </tr>
            </thead>
            <tbody class="bg-white p-9">
                @foreach ($unids as $index => $unid)
                <tr class="bg-white p-9">
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                        <div class="flex items-center">
                            <div>
                                <div class="text-md leading-5 text-gray-800">{{$loop->index + 1}}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                        <div class="text-md leading-5 text-blue-900">{{$unid->number}}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-md leading-5">
                        {{$unid->date}}
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-md leading-5">
                        @if($unid->department->id == 1) علوم الحاسوب @else نظم المعلومات @endif
                    </td>

                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-md leading-5">
                        @if($unid->type == 0) صباحي @else مسائي @endif
                    <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-md leading-5">
                        @if($unid->round == 0) الاول @elseif($unid->round == 1) الثاني @else الثالث @endif
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-md leading-5">
                        @if($unid->graduation_year == 0) 2014-2015 @elseif($unid->graduation_year == 1) 2015-2016 @elseif($unid->graduation_year == 2) 2016-2017 @elseif($unid->graduation_year == 3) 2017-2018 @elseif($unid->graduation_year == 4) 2018-2019 @elseif($unid->graduation_year == 5) 2019-2020 @elseif($unid->graduation_year == 6) 2020-2021 @elseif($unid->graduation_year == 7) 2021-2022 @elseif($unid->graduation_year == 8) 2022-2023 @elseif($unid->graduation_year == 9) 2023-2024 @elseif($unid->graduation_year == 10) 2024-2025 @elseif($unid->graduation_year == 11) 2025-2026 @elseif($unid->graduation_year == 12) 2026-2027 @elseif($unid->graduation_year == 13) 2027-2028 @elseif($unid->graduation_year == 14) 2028-2029 @elseif($unid->graduation_year == 15) 2029-2030 @endif
                    </td>
                    <td   class="px-6 py-4 whitespace-no-wrap border-b text-red-600 border-gray-500 text-lg leading-5">
                    <button wire:click="confirm({{ $unid->id }})">
                    <i class="fa-regular fa-trash-can"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>