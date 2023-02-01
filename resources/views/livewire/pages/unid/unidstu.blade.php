<div class="">
    <div class=" text-xl mr-2 px-9   text-white bg-[#071F63] py-4 flex justify-between items-center">
        <div>
            طلاب الامر الجامعي
        </div>
        <div class="flex justify-between gap-12">
            <div>{{ $unid->number }}</div>
            <div>{{ $unid->date }}</div>
            <div> {{ $unid->department->name_ar }}</div>
            <div> {{ $unid->type == 0 ? 'صباحي' : 'مسائي' }}</div>
            <div> {{ $unid->round == 1 ? 'الاول' : ($unid->round == 2 ? 'الثاني' : 'الثالث') }}</div>
            <div> </div>

        </div>
    </div>
    <div class="inline-block min-w-full overflow-hidden align-middle bg-white rounded-bl-lg rounded-br-lg">
        <table class="min-w-full text-center">
            <thead>
                <tr class=" bg-[#FFC657]">
                    <th class="px-6 py-3 border-b-2 border-gray-300  leading-4 text-[#071F63] tracking-wider">#</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300  text-md leading-4 text-[#071F63] tracking-wider">
                        اسم الطالب </th>
                    <th class="px-6 py-3 border-b-2 border-gray-300  text-md leading-4 text-[#071F63] tracking-wider">
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white p-9">
                @foreach ($unid->students as $student)
                <tr class="bg-white p-9">
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                        <div class="leading-5 text-gray-800 text-md">{{ $loop->iteration }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                        <div class="leading-5 text-blue-900 text-md">{{ $student->name_ar }}</div>
                    </td>
                    <td class="px-6 py-4 leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500 text-md">
                        <a href="{{ route('profile-graduate', $student->id) }}" class="px-5 py-2 border-[#071F63] border text-[#071F63] rounded transition duration-300 hover:bg-[#071F63]  hover:text-white focus:outline-none">عرض
                            التفاصيل </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>