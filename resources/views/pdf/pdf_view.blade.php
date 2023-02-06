<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex flex-col items-center justify-center overflow-scroll">
        <div class="relative w-[21cm] h-[29.7cm] flex flex-col bg-[#efeccb] m-[15px] mb-0 shadow-lg shadow-[(0, 0, 0, 0.5)] border-2 border-dashed border-black">
            {{-- * Head Compartment --}}
            <livewire:pages.ui.dochead />

            {{-- * Body Compartment --}}
            <div class="flex flex-col justify-between px-4 mx-auto ">
                <div class="grid items-end grid-cols-3 ">
                    <div> </div>
                    <div class="items-center text-center">
                        <h2 class="text-xl font-semibold text-center">وثيقة تخرج</h2>
                        <h2 class="text-xl font-semibold text-center">الى/من يمهمه الامر</h2>
                        
                    </div>
                    
                </div>
                <div class="flex mx-[100px] ">
                        <span class="text-lg">
                            
                        .
                        </span>
                    </div>
                </div>
            </div>

            {{-- * Tail Compartment --}}
           
            {{-- * WaterMark Compartment --}}
            <img class="absolute opacity-[20%] z-0 h-[575px] top-[25%] left-[13.8%]" src="/img/it.svg" alt="water Mark">
        </div>
        {{-- * Second Page --}}
        <a href="{{route ('pdf')}}"> dddddddddd</a>
    </div>
</div>
</body>

</html>