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


        {{-- chats --}}
        <div class="chats p-4 space-y-[16px]">

            @for($i = 0; $i
            < 50; $i++) {{-- chat --}} <livewire:chat-overview />
            {{-- end of chat --}}
            @endfor
        </div>
        {{-- end of chats --}}
    </div>
</x-layout>