<div class="container flex flex-col justify-between  mx-auto px-4">
    <div class="grid grid-cols-3 items-end ">
        <div> </div>
        <div class="text-center items-center">
            <h2 class="text-center text-xl  font-semibold">تأييد تخرج </h2>
            <h2 class="text-center text-xl  font-semibold">الى/ جامعة البصرة / وحدة الدراسات العليا</h2>
            <!-- @if($selected)
                رقم التسلسل : <span class=" text-center font-semibold"> {{$student->id}}</span>
                @endif -->
        </div>
        @if($student->gender == 1)
        <img src="{{ asset($student->image_path ?? 'img/female.png') }}" alt="" class="w-36 h-36 border-2  rounded-sm border-gray-900 p-1 mx-auto mt-10">
        @else
        <img src="{{ asset($student->image_path ?? 'img/male.png') }}" alt="" class="w-36 h-36 border-2  rounded-sm border-gray-900 p-1 mx-auto mt-10">
        @endif

    </div>
    <div class="flex  mx-44">
        <div class=" mt-20 text-md">نؤيد لكم ان <span class="font-semibold"> {{$student->name_ar}}</span>

            <span class="text-lg">
                @if($student->gender ==1)
                الملصقة
                @else
                الملصق
                @endif
                @if($student->gender ==1)
                صورتها
                @else
                صورته
                @endif
                اعلاه هو
                @if($student->gender ==1)
                احدى
                @else
                احد
                @endif
                @if($student->gender ==1)
                خريجات
                @else
                خريجي
                @endif
                كليتنا للعام الدراسي
                @if($student->unid->graduation_year == 1) 2014-2015 @elseif($student->unid->graduation_year == 2) 2015-2016 @elseif($student->unid->graduation_year == 3) 2016-2017 @elseif($student->unid->graduation_year == 4) 2017-2018 @elseif($student->unid->graduation_year == 5) 2018-2019 @elseif($student->unid->graduation_year == 6) 2019-2020 @elseif($student->unid->graduation_year == 7) 2020-2021 @elseif($student->unid->graduation_year == 8) 2021-2022 @elseif($student->unid->graduation_year == 9) 2022-2023 @elseif($student->unid->graduation_year == 10) 2023-2024 @elseif($student->unid->graduation_year == 11) 2024-2025 @elseif($student->unid->graduation_year == 12) 2025-2026 @elseif($student->unid->graduation_year == 13) 2026-2027 @elseif($student->unid->graduation_year == 14) 2027-2028 @elseif($student->unid->graduation_year == 15) 2028-2029 @elseif($student->unid->graduation_year == 16) 2029-2030 @endif
                <!-- (
                @if($student->unid->round ==0)
                الدور الاول
                @elseif($student->unid->round ==1)
                الدور الثاني
                @else
                الدور الثالث
                @endif
                ) -->
                , قد
                @if($student->gender ==1)
                منحت
                @else
                منح
                @endif

                شهادة بكالوريوس العلوم في تكنولوجيا المعلومات/ علوم
                الحاسوب/
                @if($student->unid->type == 0)
                الدراسة الصباحية
                @else
                الدراسة المسائية
                @endif
                , وحسب الامر الجامعي المرقم 
                {{$student->unid->number}}
                 وبمعدل تخرج 
                {{$student->average}}
                وبناء على طلبها زودت بهذه الوثيقة 
                .
            
            </span>
        </div>
    </div>
    <div class="flex mx-auto mt-20"> مع التقدير</div>
    <div class="grid grid-cols-2 mt-9 justify-between  text-center items-end">
        <div class="">
            <p class=" font-semibold mb-2 ">ثمينة محمد خلف</p>
            <p> مسؤول وحدة الوثائق</p>
        </div>
        <div class="">
            <p class="mb-2">الأستاذ الدكتور
            <p class=" font-semibold mb-2"> زينب علي خلف</p>
            <p class="">معاون العميد للشؤون العلمية والدراسات العليا</p>
            </p>
        </div>

    </div>


</div>
</div>