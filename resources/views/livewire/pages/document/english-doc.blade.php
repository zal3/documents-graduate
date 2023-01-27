<div class="" dir="ltr">
    <div class=" text-xl mr-2 px-9  text-white bg-[#071F63] py-4">
        <h1>
            وثيقة التخرج باللغة الانكليزية  </h1>
    </div>
    <form wire:submit.prevent="createardoc" class="m-20">
        @csrf
        <div>
            <div>
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">
                Choose the student </label>
                </label>
                <div class="flex w-2/3 gap-2">
                    <input wire:model="search" type="text" class="block w-2/3 p-2 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder=" Choose the student">

                    @if ($search)
                    <select wire:model="student_id" class="border border-gray-300 px-9 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="" selected>Choose the student  </option>
                        @foreach ($students as $student)
                        <option value="{{$student->id}}">{{$student->name_en}}</option>
                        @endforeach
                    </select>
                    @endif
                </div>
                <!-- @error('task.project_id')
                        <p class="text-red-500 text-s ">{{__('ui.this_field_is_required')}}</p>
                        @enderror -->
            </div>
            <div class="my-16">
                <div class="flex items-center mb-4 gap-5">
                    <input id="default-checkbox" wire:model="selected" type="checkbox" value="" class="w-6 h-6 text-[#071F63] bg-gray-100 border-gray-300 rounded focus:ring-[#071F63] dark:focus:ring-[#071F63] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-checkbox" class="ml-2 text-xl font-medium text-gray-900 dark:text-gray-300">Document with sequence</label>
                </div>
                <div class="flex items-center  gap-5">
                    <input checked id="checked-checkbox" wire:model="selected2" type="checkbox" value="" class="w-6 h-6 text-[#071F63] bg-gray-100 border-gray-300 rounded focus:ring-[#071F63] dark:focus:ring-[#071F63] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="checked-checkbox" class="ml-2 text-xl font-medium text-gray-900 dark:text-gray-300">  document with grades </label>
                </div>
            </div>
            <button type="submit" class="p-2 px-10 text-2xl  font-medium text-white focus:outline-none  rounded-lg border bg-yellow-400 hover:bg-yellow-500 focus:ring-[#071F63] focus:ring-4 ">Print</button>
        </div>
    </form>
    @if ($selected2)
    <form wire:submit.prevent="add" class=" grid grid-cols-1   justify-center items-center m-auto px-10">
        <!-- foreach on subject course      -->
        @csrf

        @foreach ($subjects as $subject)
        @if ($subject->id == 1) <div class="flex border-y border-black w-full text-lg font-bold"> First year, first semester</div> @endif
        @if ($subject->id == 7) <div class="flex border-y border-black w-full text-lg font-bold"> First year, second semester</div> @endif
        @if ($subject->id == 13) <div class="flex border-y border-black w-full text-lg font-bold"> Second year, first semester</div> @endif
        @if ($subject->id == 19) <div class="flex border-y border-black w-full text-lg font-bold"> Second year, second semester</div> @endif
        @if ($subject->id == 25) <div class="flex border-y border-black w-full text-lg font-bold"> Third year, first semester</div> @endif
        @if ($subject->id == 31) <div class="flex border-y border-black w-full text-lg font-bold"> Third year, second semester</div> @endif
        @if ($subject->id == 37) <div class="flex border-y border-black w-full text-lg font-bold"> Fourth year, first semester</div> @endif
        @if ($subject->id == 44) <div class="flex border-y border-black w-full text-lg font-bold"> Fourth year, second semester</div> @endif
        @if ($subject->id == 50) <div class="flex border-y border-black w-full text-lg font-bold"> First year, first semester</div> @endif
        @if ($subject->id == 56) <div class="flex border-y border-black w-full text-lg font-bold"> First year, second semester</div> @endif
        @if ($subject->id == 61) <div class="flex border-y border-black w-full text-lg font-bold"> Second year, first semester</div> @endif
        @if ($subject->id == 67) <div class="flex border-y border-black w-full text-lg font-bold"> Second year, second semester</div> @endif
        @if ($subject->id == 73) <div class="flex border-y border-black w-full text-lg font-bold"> Third year, first semester</div> @endif
        @if ($subject->id == 79) <div class="flex border-y border-black w-full text-lg font-bold"> Third year, second semester</div> @endif
        @if ($subject->id == 84) <div class="flex border-y border-black w-full text-lg font-bold"> Fourth year, first semester</div> @endif
        @if ($subject->id == 88) <div class="flex border-y border-black w-full text-lg font-bold"> Fourth year, second semester</div> @endif


        <div class="grid grid-cols-1">
            <label for="subject" class="text-md font-bold text-gray-900 p-3 "> {{ $subject->name_en }} : <label>
                    <input type="text" id="subject" required wire:model.lazy="degree.{{ $subject->id }}" class="text-sm w-28 text-gray-900 bg-white border-gray-400 rounded-lg border-1" placeholder="إدخل الدرجة " />
        </div>

        @endforeach
        <button type="submit" class="mb-4 p-2 px-10 text-2xl  font-medium w-1/2 flex justify-center mx-auto text-white focus:outline-none  rounded-lg border bg-yellow-400 hover:bg-yellow-500 focus:ring-[#071F63] focus:ring-4 ">حفظ الدرجات </button>

    </form>

    @endif
</div>