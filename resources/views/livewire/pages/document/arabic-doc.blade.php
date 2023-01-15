<div class="">
    <div class=" text-xl mr-2 px-9  text-white bg-[#071F63] py-4">
        <h1>
            وثيقة التخرج باللغة العربية </h1>

    </div>
    <form method="POST" class="m-20">
        @csrf
        <div>
            <div class="flex flex-col mb-3">
                <label for="" class=" text-2xl text-[#000]  duration-300 transform  ">الأسم الرباعي بالعربية</label><br>

                <input type="text" name="student_name" wire:model="query" {{-- wire:keydown.escape="resetFunc" 
                    wire:keydown.tab="resetFunc" --}} wire:keydown.Arrow-up="decrementHighlight" wire:keydown.Arrow-down="incrementHighlight" wire:keydown.enter="selectStudent" list="students" for="students" class=" w-96 h-12  bg-white  ext-sm text-gray-900  rounded-lg border border-3  border-gray-400 focus:ring-blue-500 focus:border-blue-500 block" placeholder=" " />
            </div>
            <div class="my-16">
                <div class="flex items-center mb-4 gap-5">
                    <input id="default-checkbox" type="checkbox" value="" class="w-6 h-6 text-[#071F63] bg-gray-100 border-gray-300 rounded focus:ring-[#071F63] dark:focus:ring-[#071F63] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-checkbox" class="ml-2 text-xl font-medium text-gray-900 dark:text-gray-300">وثيقة مع تسلسل </label>
                </div>
                <div class="flex items-center  gap-5">
                    <input checked id="checked-checkbox" type="checkbox" value="" class="w-6 h-6 text-[#071F63] bg-gray-100 border-gray-300 rounded focus:ring-[#071F63] dark:focus:ring-[#071F63] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="checked-checkbox" class="ml-2 text-xl font-medium text-gray-900 dark:text-gray-300">وثيقة مع درجات </label>
                </div>
            </div>


            <button type="submit" class="p-2 px-10 text-2xl  font-medium text-white focus:outline-none  rounded-lg border bg-yellow-400 hover:bg-yellow-500 focus:ring-[#071F63] focus:ring-4 ">طباعة</button>
        </div>
    </form>
</div>