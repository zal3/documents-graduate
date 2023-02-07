<div class="">
    <div class=" text-xl mr-2 px-9  text-white bg-[#071F63] py-4">
        <h1>
            تأييد تخرج لغرض الدراسات </h1>
    </div>
    <form wire:submit.prevent="createardoc" class="m-20">
        @csrf
        <div>
            <div>
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">
                    اختر الطالب </label>
                </label>
                <div class="flex w-2/3 gap-2">
                    <input wire:model="search" required type="text" class="block w-2/3 p-2 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="اسم الطالب">

                    @if ($search)
                    <select wire:model="student_id" required class="border border-gray-300 px-9 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="" selected>اختر الطالب </option>
                        @foreach ($students as $student)
                        <option value="{{$student->id}}">{{$student->name_ar}}</option>
                        @endforeach
                    </select>
                    @endif
                </div>
            </div>
            <div class="my-16">
            </div>
            <button type="submit" class="p-2 px-10 text-2xl  font-medium text-white focus:outline-none  rounded-lg border bg-yellow-400 hover:bg-yellow-500 focus:ring-[#071F63] focus:ring-4 ">طباعة</button>
        </div>
    </form>
</div>