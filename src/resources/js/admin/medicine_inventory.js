/**
 * 
 * @param {NodeList} elements
 * @param {HTMLElement} selectAllWrp 
 * @returns
 */
function uncheckAll(elements, selectAllWrp) {
    if(!(elements instanceof NodeList) || !selectAllWrp) return;
    elements.forEach(elemen => elemen.checked = false);
    selectAllWrp.querySelector("#select_all_checkbox").checked = false;
}

/**
 * 
 * @param {NodeList} elements 
 * @returns
 */
function checkAll(elements) {
    if(!(elements instanceof NodeList)) return;
    elements.forEach(elemen => elemen.checked = true);
}

/**
 * 
 * @param {NodeList} elements 
 * @returns 
 */
function checkChecked(elements) {
    if(!(elements instanceof NodeList)) return;
    return [...elements].some(el => el.checked);
}

/**
 * 
 * @param {HTMLElement} el 
 * @returns 
 */
function showDelete(el) {
    if(!el) return;
    el.classList.remove("opacity-0", "pointer-events-none");
    el.classList.add("opacity-100", "pointer-events-auto");
}

/**
 * 
 * @param {HTMLElement} el
 * @returns 
 */
function hideDelete(el) {
    if(!el) return;
    el.classList.remove("opacity-100", "pointer-events-auto");
    el.classList.add("opacity-0", "pointer-events-none");
}

/**
 * 
 * @param {HTMLElement} modal 
 */
function handleCancle(modal) {
    if(!modal) return;
    modal.classList.remove("flex");
    modal.classList.add("hidden");
}

/**
 * 
 * @param {HTMLElement} modal
 * @param {Number} deleteCount
 * @returns 
 */
function showModalDelete(modal, deleteCount) {
    if(!modal || typeof deleteCount !== 'number' || isNaN(deleteCount)) return;
    modal.classList.remove("hidden");
    modal.classList.add("flex");

    const title = modal.querySelector("#confirm_del_title");
    const message = modal.querySelector("#confirm_del_message");
    if(!title || !message) return;

    title.textContent = "Hapus";
    message.textContent = `Yakin ingin menghapus ${deleteCount} obat?`;

    const cancleBtn = modal.querySelector("#confirm_cancel_delete");
    if(!cancleBtn) return;
    cancleBtn.addEventListener('click', event => {handleCancle(modal)});
}

/**
 * 
 * @param {HTMLElement} selectAllWrp 
 * @param {HTMLElement} delEl 
 * @param {NodeList} elements 
 * @returns 
 */
function handleSelectAll(selectAllWrp, delEl, elements) {
    if(!selectAllWrp || !delEl || !(elements instanceof NodeList)) return;

    let isChecked = selectAllWrp.querySelector("#select_all_checkbox").checked;
    if(isChecked) {
        checkAll(elements);
        showDelete(delEl);
    } else {
        uncheckAll(elements, selectAllWrp);
        hideDelete(delEl);
    }
}
 
/**
 * 
 * @param {HTMLElement} toggle
 * @param {NodeList} checkboxItems
 * @param {HTMLElement} deleteBtn
 * @param {HTMLElement} selectAllWrp
 * @returns 
 */
function handleToggleMode(toggle, elements, deleteBtn, selectAllWrp) {
    if(!toggle || !(elements instanceof NodeList) || !deleteBtn || !selectAllWrp) return;
    
    let isActive = toggle.classList.toggle("actiive");
    if(checkChecked(elements)) {
        uncheckAll(elements, selectAllWrp);
        hideDelete(deleteBtn);
    };
    
    toggle.querySelector("#icon_mode").className = isActive ? "fa-solid fa-xmark" : "fa-solid fa-list-check";
    toggle.querySelector("#text_mode").textContent = isActive ? "Batal" : "Pilih obat";
    elements.forEach(checkbox => checkbox.classList.toggle("hidden")); 
    selectAllWrp.classList.toggle("hidden"); 
}

function handleDelete(elements, modalDelete) {
    if(!(elements instanceof NodeList)) return;
    let deleteCount = [...elements].filter(elemen => elemen.checked).length;
    if(deleteCount === 0) return;
    showModalDelete(modalDelete, deleteCount);
}

document.addEventListener('DOMContentLoaded', function () {
    const root = document.querySelector("[data-inventory]");
    if(!root) return;

    const toggleMode = root.querySelector("#toggle_mode");
    const deleteBtn = root.querySelector("#delete_btn");
    const modalDelete = root.querySelector("#delete_modal");
    const checkboxItems = root.querySelectorAll(".item_checkbox");
    const selectAllWrp = root.querySelector("#select_all_wrapper");
    const medicineContainer = root.querySelector("#medicine_container");
    if(!toggleMode || !deleteBtn || checkboxItems === 0 || !medicineContainer) return;

    toggleMode.addEventListener('click', event => {handleToggleMode(toggleMode, checkboxItems, deleteBtn, selectAllWrp)});
    medicineContainer.addEventListener('change', event => {
        checkChecked(checkboxItems) ? showDelete(deleteBtn) : hideDelete(deleteBtn);
    });
    selectAllWrp.addEventListener('change', event => {handleSelectAll(selectAllWrp, deleteBtn, checkboxItems)});
    deleteBtn.addEventListener('click', event => {
        event.preventDefault();
        handleDelete(checkboxItems, modalDelete);
    });
})