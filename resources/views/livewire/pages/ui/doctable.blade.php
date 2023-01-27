<section class="container p-6 mx-auto ">
    <div class="w-full mb-8">
        <div class="w-full">
            السنة الاولى
            <div class="flex items-start justify-center gap-2 mb-3">
                <div class="flex flex-col items-center justify-center">
                    الفصل الاول
                    <table class="w-full border border-black">
                        <thead>
                            <tr
                                class="font-bold tracking-wide text-left text-black uppercase border border-black text-md">
                                <th class="px-4 py-1 border border-black">اسم المادة</th>
                                <th class="px-4 py-1 border border-black">الوحدة</th>
                                <th class="px-4 py-1 border border-black">الدرجة</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($subjects as $subject)
                                @if ($subject->course == 1 && $subject->stage == 1)
                                    <tr class="text-black border border-black ">
                                        <td class="px-4 py-1 border border-black">
                                            <div class="flex items-center text-md">
                                                <p class="font-bold text-black text-md">@if (Route::currentRouteName() == 'show-eng-doc')
                                                        {{ $subject->name_en }}
                                                    @else
                                                        {{ $subject->name_ar }}
                                                    @endif</p>
                                            </div>
                                        </td>
                                        <td class="px-4 py-1 border border-black text-md">{{ $subject->unit }}</td>
                                        <td class="px-4 py-1 border border-black text-md">
                                            <!-- //degree  -->
                                            <span class="px-2 py-1 leading-tight rounded-sm">
                                                @foreach ($degree as $deg)
                                                    @if ($deg->subject_id == $subject->id)
                                                        {{ $deg->degree }}
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
                <div class="flex flex-col items-center justify-center">
                    الفصل الثاني
                    <table class="w-full border border-black">
                        <thead>
                            <tr
                                class="font-bold tracking-wide text-left text-black uppercase border border-black text-md">
                                <th class="px-4 py-1 border border-black">اسم المادة</th>
                                <th class="px-4 py-1 border border-black">الوحدة</th>
                                <th class="px-4 py-1 border border-black">الدرجة</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($subjects as $subject)
                                @if ($subject->course == 2 && $subject->stage == 1)
                                    <tr class="text-black border border-black ">
                                        <td class="px-4 py-1 border border-black">
                                            <div class="flex items-center text-md">
                                                <p class="font-bold text-black text-md">@if (Route::currentRouteName() == 'show-eng-doc')
                                                        {{ $subject->name_en }}
                                                    @else
                                                        {{ $subject->name_ar }}
                                                    @endif</p>
                                            </div>
                                        </td>
                                        <td class="px-4 py-1 border border-black text-md">{{ $subject->unit }}</td>
                                        <td class="px-4 py-1 border border-black text-md">
                                            <!-- //degree  -->
                                            <span class="px-2 py-1 leading-tight rounded-sm">
                                                @foreach ($degree as $deg)
                                                    @if ($deg->subject_id == $subject->id)
                                                        {{ $deg->degree }}
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
            <div class="flex items-start justify-center gap-2 mb-3">
                <div class="flex flex-col items-center justify-center">
                    الفصل الاول
                    <table class="w-full border border-black">
                        <thead>
                            <tr
                                class="font-bold tracking-wide text-left text-black uppercase border border-black text-md">
                                <th class="px-4 py-1 border border-black">اسم المادة</th>
                                <th class="px-4 py-1 border border-black">الوحدة</th>
                                <th class="px-4 py-1 border border-black">الدرجة</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($subjects as $subject)
                                @if ($subject->course == 1 && $subject->stage == 2)
                                    <tr class="text-black border border-black ">
                                        <td class="px-4 py-1 border border-black">
                                            <div class="flex items-center text-md">
                                                <p class="font-bold text-black text-md">@if (Route::currentRouteName() == 'show-eng-doc')
                                                        {{ $subject->name_en }}
                                                    @else
                                                        {{ $subject->name_ar }}
                                                    @endif</p>
                                            </div>
                                        </td>
                                        <td class="px-4 py-1 border border-black text-md">{{ $subject->unit }}</td>
                                        <td class="px-4 py-1 border border-black text-md">
                                            <!-- //degree  -->
                                            <span class="px-2 py-1 leading-tight rounded-sm">
                                                @foreach ($degree as $deg)
                                                    @if ($deg->subject_id == $subject->id)
                                                        {{ $deg->degree }}
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
                <div class="flex flex-col items-center justify-center">
                    الفصل الثاني
                    <table class="w-full border border-black">
                        <thead>
                            <tr
                                class="font-bold tracking-wide text-left text-black uppercase border border-black text-md">
                                <th class="px-4 py-1 border border-black">اسم المادة</th>
                                <th class="px-4 py-1 border border-black">الوحدة</th>
                                <th class="px-4 py-1 border border-black">الدرجة</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($subjects as $subject)
                                @if ($subject->course == 2 && $subject->stage == 2)
                                    <tr class="text-black border border-black ">
                                        <td class="px-4 py-1 border border-black">
                                            <div class="flex items-center text-md">
                                                <p class="font-bold text-black text-md">@if (Route::currentRouteName() == 'show-eng-doc')
                                                        {{ $subject->name_en }}
                                                    @else
                                                        {{ $subject->name_ar }}
                                                    @endif</p>
                                            </div>
                                        </td>
                                        <td class="px-4 py-1 border border-black text-md">{{ $subject->unit }}</td>
                                        <td class="px-4 py-1 border border-black text-md">
                                            <!-- //degree  -->
                                            <span class="px-2 py-1 leading-tight rounded-sm">
                                                @foreach ($degree as $deg)
                                                    @if ($deg->subject_id == $subject->id)
                                                        {{ $deg->degree }}
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
            <div class="flex items-start gap-2 mb-3">
                <div class="flex flex-col items-center justify-center">
                    الفصل الاول
                    <table class="w-full border border-black">
                        <thead>
                            <tr
                                class="font-bold tracking-wide text-left text-black uppercase border border-black text-md">
                                <th class="px-4 py-1 border border-black">اسم المادة</th>
                                <th class="px-4 py-1 border border-black">الوحدة</th>
                                <th class="px-4 py-1 border border-black">الدرجة</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($subjects as $subject)
                                @if ($subject->course == 1 && $subject->stage == 3)
                                    <tr class="text-black border border-black ">
                                        <td class="px-4 py-1 border border-black">
                                            <div class="flex items-center text-md">
                                                <p class="font-bold text-black text-md">@if (Route::currentRouteName() == 'show-eng-doc')
                                                        {{ $subject->name_en }}
                                                    @else
                                                        {{ $subject->name_ar }}
                                                    @endif</p>
                                            </div>
                                        </td>
                                        <td class="px-4 py-1 border border-black text-md">{{ $subject->unit }}</td>
                                        <td class="px-4 py-1 border border-black text-md">
                                            <!-- //degree  -->
                                            <span class="px-2 py-1 leading-tight rounded-sm">
                                                @foreach ($degree as $deg)
                                                    @if ($deg->subject_id == $subject->id)
                                                        {{ $deg->degree }}
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
                <div class="flex flex-col items-center justify-center">
                    الفصل الثاني
                    <table class="w-full border border-black">
                        <thead>
                            <tr
                                class="font-bold tracking-wide text-left text-black uppercase border border-black text-md">
                                <th class="px-4 py-1 border border-black">اسم المادة</th>
                                <th class="px-4 py-1 border border-black">الوحدة</th>
                                <th class="px-4 py-1 border border-black">الدرجة</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($subjects as $subject)
                                @if ($subject->course == 2 && $subject->stage == 3)
                                    <tr class="text-black border border-black ">
                                        <td class="px-4 py-1 border border-black">
                                            <div class="flex items-center text-md">
                                                <p class="font-bold text-black text-md">@if (Route::currentRouteName() == 'show-eng-doc')
                                                        {{ $subject->name_en }}
                                                    @else
                                                        {{ $subject->name_ar }}
                                                    @endif</p>
                                            </div>
                                        </td>
                                        <td class="px-4 py-1 border border-black text-md">{{ $subject->unit }}</td>
                                        <td class="px-4 py-1 border border-black text-md">
                                            <!-- //degree  -->
                                            <span class="px-2 py-1 leading-tight rounded-sm">
                                                @foreach ($degree as $deg)
                                                    @if ($deg->subject_id == $subject->id)
                                                        {{ $deg->degree }}
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
            <div class="flex items-start gap-2 mb-3">
                <div class="flex flex-col items-center justify-center">
                    الفصل الاول
                    <table class="w-full border border-black">
                        <thead>
                            <tr
                                class="font-bold tracking-wide text-left text-black uppercase border border-black text-md">
                                <th class="px-4 py-1 border border-black">اسم المادة</th>
                                <th class="px-4 py-1 border border-black">الوحدة</th>
                                <th class="px-4 py-1 border border-black">الدرجة</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($subjects as $subject)
                                @if ($subject->course == 1 && $subject->stage == 4)
                                    <tr class="text-black border border-black ">
                                        <td class="px-4 py-1 border border-black">
                                            <div class="flex items-center text-md">
                                                <p class="font-bold text-black text-md">@if (Route::currentRouteName() == 'show-eng-doc')
                                                        {{ $subject->name_en }}
                                                    @else
                                                        {{ $subject->name_ar }}
                                                    @endif</p>
                                            </div>
                                        </td>
                                        <td class="px-4 py-1 border border-black text-md">{{ $subject->unit }}</td>
                                        <td class="px-4 py-1 border border-black text-md">
                                            <!-- //degree  -->
                                            <span class="px-2 py-1 leading-tight rounded-sm">
                                                @foreach ($degree as $deg)
                                                    @if ($deg->subject_id == $subject->id)
                                                        {{ $deg->degree }}
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

                <div class="flex flex-col items-center justify-center">
                    الفصل الثاني
                    <table class="w-full border border-black">
                        <thead>
                            <tr
                                class="font-bold tracking-wide text-left text-black uppercase border border-black text-md">
                                <th class="px-4 py-1 border border-black">اسم المادة</th>
                                <th class="px-4 py-1 border border-black">الوحدة</th>
                                <th class="px-4 py-1 border border-black">الدرجة</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($subjects as $subject)
                                @if ($subject->course == 2 && $subject->stage == 4)
                                    <tr class="text-black border border-black ">
                                        <td class="px-4 py-1 border border-black">
                                            <div class="flex items-center text-md">
                                                <p class="font-bold text-black text-md">@if (Route::currentRouteName() == 'show-eng-doc')
                                                        {{ $subject->name_en }}
                                                    @else
                                                        {{ $subject->name_ar }}
                                                    @endif</p>
                                            </div>
                                        </td>
                                        <td class="px-4 py-1 border border-black text-md">{{ $subject->unit }}</td>
                                        <td class="px-4 py-1 border border-black text-md">
                                            <!-- //degree  -->
                                            <span class="px-2 py-1 leading-tight rounded-sm">
                                                @foreach ($degree as $deg)
                                                    @if ($deg->subject_id == $subject->id)
                                                        {{ $deg->degree }}
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
