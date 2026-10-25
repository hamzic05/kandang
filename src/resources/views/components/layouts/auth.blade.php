<x-layouts.app>
    <x-slot:content>
        <div class="h-screen grid grid-cols-1 lg:grid-cols-2">
            <div class="left_panel hidden lg:block bg-primary py-[6rem] px-[4rem]">
                <div class="h-full">
                    <div class="h-2/3 relative">
                        <div class=" space-y-6 absolute bottom-10">
                            <h2 class="font-serif text-[3rem] font-semibold leading-[0.98] tracking-[-0.01em] text-[#FCFCFC] text-balance md:text-[3.6rem] lg:pt-0 lg:text-[3rem]">Ayam sehat, tenang, dan rajin bertelur</h2>
                            <p class=" max-w-xs font-sans text-lg leading-relaxed lg:text-[1rem] text-[#B8C7B8]">Catat telur, pantau kesehatan, dan terima peringatan sebelum produksi turun</p>
                        </div>
                    </div>

                    <div class="relative h-1/3">
                        <div class="absolute bottom-0">
                            <p class="font-sans max-w-xs text-sm leading-relaxed lg:text-[1rem] text-[#B8C7B8]">Alat bantu pencatatan. Tidak menggantikan peran dokter hewan</p>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="right_panel bg-[#f5f1e8] flex justify-center items-center">
                <x-ui.auth_card>
                    <x-slot:auth_card_w>
                        {{ $auth_card_w }}
                    </x-slot:auth_card_w>

                    <x-slot:auth_card_h>
                        {{ $auth_card_h }}
                    </x-slot:auth_card_h>

                    <x-slot:auth_part>
                        {{ $auth_part ?? "" }}
                    </x-slot:auth_part>
                </x-ui.auth_card>
            </div>
        </div>
    </x-slot:content>
</x-layouts.app>