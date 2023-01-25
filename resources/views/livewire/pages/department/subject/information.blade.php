<div class="">
    <div class=" text-xl mr-2 px-9   text-white bg-[#071F63] py-4 flex justify-between items-center">
        <div>
            مواد قسم نظم المعلومات </div>
            <div class="grid items-start grid-cols-2 mr-9 text-black">
                            <select wire:model="stage" class="w-40 py-2 text-sm border border-gray-900 focus:border-gray-500 focus:bg-white focus:ring-0">
                                <option value="0">المرحلة </option>
                                <option value="1">الاولى </option>
                                <option value="2"> الثانية</option>
                                <option value="3"> الثالثة</option>
                                <option value="4"> الرابعة</option>
                            </select>
                            <select wire:model="course" class="w-40 py-2 text-sm border border-gray-900 focus:border-gray-500 focus:bg-white focus:ring-0">
                                <option value="0">الكورس</option>
                                <option value="1">الاول</option>
                                <option value="2"> الثاني</option>
                            </select>
                        </div>
                        <a href="{{ route('add-subject2') }}">
                            <button class=" bg-[#FFC657] mx-auto transition duration-150 ease-in-out rounded text-white px-4 sm:px-8 py-2 text-xs sm:text-sm">اضافة
                                مادة </button>
                        </a>
    </div>
    <div class="inline-block min-w-full overflow-hidden align-middle bg-white rounded-bl-lg rounded-br-lg">
        <table class="min-w-full text-center">            

            @if ($subjects)
                <thead>
                    <tr class="bg-[#FFC657] text-[#071f63]">
                        <th class="px-6 py-3 leading-4 tracking-wider text-right border-b-2 border-gray-300">
                            #
                        </th>
                        <th class="px-6 py-3 leading-4 tracking-wider text-center border-b-2 border-gray-300">
                            اسم المادة
                        </th>
                        <th class="px-6 py-3 leading-4 tracking-wider text-center border-b-2 border-gray-300">
                            الوحدة
                        </th>
                    </tr>
                </thead>
            @endif
            <tbody class="bg-white p-9">
                @foreach ($subjects as $index => $subject)
                <tr class="bg-white p-9">
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                        <div class="flex items-center">
                            <div>
                                <div class="text-sm leading-5 text-gray-800">{{ $loop->index + 1 }}</div>
                            </div>
                        </div>
                    </td>

                    <td
                            class="px-6 py-4 text-lg leading-5 text-red-600 whitespace-no-wrap border-b border-gray-500">
                            <button wire:click="confirm({{ $subject->id }})">
                                <i class="fa-regular fa-trash-can"></i></button>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <div class="text-sm leading-5 text-blue-900">{{ $subject->name_ar }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <div class="text-sm leading-5 text-blue-900">{{ $subject->unit }}</div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    let modal = document.getElementById("modal");

    function modalHandler(val) {
        if (val) {
            fadeIn(modal);
        } else {
            fadeOut(modal);
        }
    }

    function fadeOut(el) {
        el.style.opacity = 1;
        (function fade() {
            if ((el.style.opacity -= 0.1) < 0) {
                el.style.display = "none";
            } else {
                requestAnimationFrame(fade);
            }
        })();
    }

    function fadeIn(el, display) {
        el.style.opacity = 0;
        el.style.display = display || "flex";
        (function fade() {
            let val = parseFloat(el.style.opacity);
            if (!((val += 0.2) > 1)) {
                el.style.opacity = val;
                requestAnimationFrame(fade);
            }
        })();
    }
</script>