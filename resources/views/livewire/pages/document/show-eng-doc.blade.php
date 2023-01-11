@foreach ($students as $student)
    <form dir="rtl" class="mt-52">
        @csrf
        <div class="absolute left-44	rounded   w-32 h-40 -mt-28 border border-black"></div>
        <h2 class="text-center text-2xl -mb-2  -mr-36 font-semibold">وثيقة تخرج</h2>
        <hr class=" absolute my-4 mx-96    w-48 h-0.5 bg-zinc-800 rounded border-0 md:my-5 ">
        <h2 class="text-center text-2xl mt-4  -mr-36 font-semibold">الى/من يمهمه الامر</h2>

        <p class=" mt-20">نؤيد لكم ان <span class="font-semibold"> {{ $student->name_en }} </span> الملصقة صورته اعلاه هو
            احد خريجي
            كليتنا للعام الدراسي 2020/2021 (الدور الاول), قد منح شهادة بكالوريوس العلوم في تكنولوجيا المعلومات/ علوم
            الحاسوب/ الدراسة الصباحية حسب الأمر الجامعي ذي العدد(24969/13/3) في 2021/12/06 بتقدير (جيد) وبمعدل تخرج
            (71,441)
            واحد وسبعون و <br> أربعمائة وواحد وأربعون بالألف.</p>
        <div class="mt-20">
            <p class="text-right font-semibold ">ثمينة محمد خلف
            <p> مسؤول وحدة الوثائق</p>
            </p>
            <div class="-mt-16 ml-24">
                <p class="text-center">الأستاذ الدكتور
                <p class=" font-semibold text-center">ميثم ابو الهيل شهيد</p>
                <p class="text-center">معاون العميد للشؤون العلمية والدراسات العليا</p>
                </p>
            </div>
            <div class="-mt-16 ml-20 text-left">
                <p class="ml-2 ">
                    الأستاذ المساعد الدكتور
                <p class=" font-semibold"> سلمى عبد الباقي محمود</p>
                <p class="ml-12"> عميد الكلية</p>
                </p>
            </div>
            {{-- 
        @foreach ($students as $student)
            {{ $student['name_ar'] }}
            {{ $student['sequence'] }}
        @endforeach
        --}}
        </div>
    </form>
@endforeach
