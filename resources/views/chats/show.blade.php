<x-layout>
    <div class="lg:shadow-[0px_0px_24px_rgba(0,_0,_0,_0.25)] lg:h-full lg:rounded-[20px] overflow-y-auto">

        {{-- header --}}
        <div class="w-full bg-primary px-4 py-6 lg:rounded-t-[20px]">
            <div class="flex items-center justify-between">
                <span class="font-semibold text-base leading-[8px] text-secondary">Messages</span>

                <div class="flex items-center gap-6">
                    <div>
                        <button>
                            <img src="{{ asset('assets/icons/glasses.svg') }}" alt="Search">
                        </button>
                    </div>
                    <div>
                        <button>
                            <img src="{{ asset('assets/icons/dots.svg') }}" alt="Menu">
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{-- end of header --}}


        {{-- chat --}}
        <div class="p-4 space-y-[16px]">

            {{-- message--}}
            <div class="flex items-center gap-4">
                <div>
                    <img src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50"
                        class="rounded-full w-10 h-10" alt="" />
                </div>

                <div class="bg-primary text-xs py-2 px-4 rounded-[20px] max-w-[200px]">
                    <span class="inline-block ">I will do the voice over</span>
                </div>

                <div>
                    <time class="text-[10px]">10:38 PM</time>
                </div>
            </div>
            {{-- end of message--}}

            {{-- message--}}
            <div class="flex items-center gap-4 flex-row-reverse">
                <div>
                    <img src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50"
                        class="rounded-full w-10 h-10" alt="" />
                </div>

                <div class="bg-primary text-xs py-2 px-4 rounded-[20px] max-w-[200px]">
                    <span class="inline-block ">Done, my friend</span>
                </div>

                <div>
                    <time class="text-[10px]">10:38 PM</time>
                </div>
            </div>
            {{-- end of message--}}


            {{-- typing box --}}
            {{-- end of typing box --}}

        </div>
        {{-- end of chat --}}
    </div>
</x-layout>