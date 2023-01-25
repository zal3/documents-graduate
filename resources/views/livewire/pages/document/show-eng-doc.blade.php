<div class="container flex flex-col justify-between  mx-auto px-4">
    <div class="grid grid-cols-3 items-end ">
        <div> </div>
        <div class="text-center items-center">
            <h2 class="text-center text-xl  font-semibold">graduation document </h2>
            <h2 class="text-center text-xl  font-semibold">
                To/whom it may concern </h2>
            @if($selected)
            Serial Number: <span class=" text-center font-semibold"> {{$student->id}}</span>
            @endif
        </div>
        @if($student->gender == 1)
        <img src="{{ asset($student->image_path ?? 'img/female.png') }}" alt="" class="w-36 h-36 border-2  rounded-sm border-gray-900 p-1 mx-auto mt-10">
        @else
        <img src="{{ asset($student->image_path ?? 'img/male.png') }}" alt="" class="w-36 h-36 border-2  rounded-sm border-gray-900 p-1 mx-auto mt-10">
        @endif

    </div>
    <div class="flex mx-40">
        <div class=" mt-20 text-md text-left left-0">
            We support you that
            <span class="font-semibold"> {{$student->name_en}}</span>
            <span class="text-lg text-left">
                whose picture is pasted above

                is one of our college graduates for the academic year
                @if($student->unid->graduation_year == 1) 2014-2015 @elseif($student->unid->graduation_year == 2) 2015-2016 @elseif($student->unid->graduation_year == 3) 2016-2017 @elseif($student->unid->graduation_year == 4) 2017-2018 @elseif($student->unid->graduation_year == 5) 2018-2019 @elseif($student->unid->graduation_year == 6) 2019-2020 @elseif($student->unid->graduation_year == 7) 2020-2021 @elseif($student->unid->graduation_year == 8) 2021-2022 @elseif($student->unid->graduation_year == 9) 2022-2023 @elseif($student->unid->graduation_year == 10) 2023-2024 @elseif($student->unid->graduation_year == 11) 2024-2025 @elseif($student->unid->graduation_year == 12) 2025-2026 @elseif($student->unid->graduation_year == 13) 2026-2027 @elseif($student->unid->graduation_year == 14) 2027-2028 @elseif($student->unid->graduation_year == 15) 2028-2029 @elseif($student->unid->graduation_year == 16) 2029-2030 @endif
                (
                @if($student->unid->round ==0)
                the first round
                @elseif($student->unid->round ==1)
                the second round @else
                the third round @endif
                )
                who was awarded a Bachelor of Science degree in information technology / computer science /
                @if($student->unid->type == 0)
                Morning study @else
                Evening study @endif
                according to the university order number
                (
                {{ $student->unid->number}} ) On the date of
                {{date('Y-m-d')}}
                with a grade of (
                @if($student->average <= 50) Weak @elseif($student->average <= 60) Acceptable @elseif($student->average <= 70) middle @elseif($student->average <= 80) good @elseif($student->average <= 90) very good @elseif($student->average <= 100) Excellent @endif ) and a graduation rate of ( {{$student->average}} ) </span>
        </div>
    </div>
    <div class="grid grid-cols-3 mt-24 justify-between  text-center items-end">
        <div class="">
            <p class=" font-semibold mb-2 "> Thamina Mohammed Khalaf </p>
            <p> Documentation Unit Officer</p>
        </div>
        <div class="">
            <p class="mb-2"> Prof. Dr
            <p class=" font-semibold mb-2"> Zainab Ali Khalaf</p>
            <p class="">Associate Dean for Scientific Affairs and Postgraduate Studies</p>
            </p>
        </div>
        <div class="">
            <p class="mb-2 ">
                Assistant Professor Dr
            <p class=" font-semibold mb-2"> Salma Abdel-Baqi Mahmoud</p>
            <p class=""> Dean of the College </p>
            </p>
        </div>
    </div>


</div>
</div>