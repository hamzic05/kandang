<section id="category_container" aria-label="Angka ringkas" class="grid grid-cols-1 gap-4 sm:grid-cols-3">
    <x-admin.card icon="fa-calendar-day" label="Jadwal hari ini" unit="selesai" :current="1" :target="10" route="admin.medicine.schedules.index" :params="['filter' => 'senin']" >
        <x-admin.medicine.card_row left="08.00" right="Vitamin B Complex"/>
    </x-admin.card>

    <x-admin.card icon="fa-syringe" label="Riwayat pemberian" unit="pemberian hari ini" :current="1" route="admin.medicine.history.index" :params="['filter' => 'senin']" >
        <x-admin.medicine.card_row left="08.00" right="Vitamin B Complex"/>
    </x-admin.card>
    
    <x-admin.card icon="fa-triangle-exclamation" label="Stock menipis" tone="warning" unit="perlu restock" :current="1" route="admin.medicine.index" :params="['stock' => 'low']" >
        <x-admin.medicine.card_row left="Vitamin B Complex" right="sisa 2 botol"/>
    </x-admin.card>
</section>