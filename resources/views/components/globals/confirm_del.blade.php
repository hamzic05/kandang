<div id="delete_modal"
    class="hidden fixed inset-0 z-[999] items-center justify-center
           bg-black/40 backdrop-blur-[2px] p-4">

    <div class="w-full max-w-md rounded-2xl bg-white p-6
                shadow-[0_8px_30px_rgba(0,0,0,0.18)]">

        <div class="flex flex-col items-center text-center gap-3">

            <div class="flex size-14 items-center justify-center
                        rounded-full bg-red-100 text-red-600">
                <i class="fa-solid fa-trash-can text-xl"></i>
            </div>

            <h2 id="confirm_del_title" class="text-lg font-semibold text-tinta">
                Konfirmasi
            </h2>

            <p id="confirm_del_message" class="text-sm text-gray-500">
                Apakah kamu yakin ingin menghapus
                <span id="selected_del_count" class="font-semibold text-tinta">0</span>
            </p>

        </div>

        <div class="mt-6 flex justify-end gap-3">

            <button type="button" id="confirm_cancel_delete"
                class="rounded-lg border border-gray-200 px-4 py-2
                       text-sm font-medium text-gray-600 hover:bg-gray-50 cursor-pointer">
                Batal
            </button>

            <button id="confirm_delete" type="submit" name="delete" value="delete"
                class="rounded-lg bg-red-600 px-4 py-2
                       text-sm font-medium text-white hover:bg-red-700 cursor-pointer">
                Ya, Hapus
            </button>

        </div>
    </div>
</div>