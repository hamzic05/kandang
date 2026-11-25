/**
 * 
 * @param {HTMLElement} btnContainer 
 * @returns 
 */
function showBtn(btnContainer) {
    if(!btnContainer) return;
    btnContainer.classList.remove("opacity-0", "translate-y-2", "pointer-events-none")
    btnContainer.classList.add("opacity-100", "translate-y-0", "pointer-events-auto");
}

/**
 * 
 * @param {HTMLElement} btnContainer 
 * @returns 
 */
function hideBtn(btnContainer) {
    if(!btnContainer) return;
    btnContainer.classList.remove("opacity-100", "translate-y-0", "pointer-events-auto");
    btnContainer.classList.add("opacity-0", "translate-y-2", "pointer-events-none");
}

function toOriginImg() {
    const zone = document.querySelector('[data-dropzone]');
    if(!zone) return;
    zone.dispatchEvent(new CustomEvent('dropzone:to-origin-img'));
}

/**
 * 
 * @param {NodeList} fields 
 * @returns {boolean}
 */
function checkNotOrigin(fields) {
    if(!(fields instanceof NodeList)) return false;
    console.log('halo')
    return [...fields].some(field => {
        if(field.type === 'checkbox' || field.type === 'radio') return field.checked !== field.defaultChecked;
        if(field.tagName === 'SELECT'){
            // console.log('halo');
            // field.selected !== field.defaultSelected;
            return [...field.options].some(option => option.selected !== option.defaultSelected);
        }
        // console.log(field.files)
        // console.log(field.value);
        // console.log(field.defaultValue);
        return field.value !== field.defaultValue;
    })
}

document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('[data-edit]');
    if(!form) return;

    const actBtnContainer = form.querySelector("#act_btn_container");
    const xBtn = actBtnContainer.querySelector("#cancle_btn");
    const fields = form.querySelectorAll(".field");
    if(!actBtnContainer || !xBtn || !fields) return;
    
    form.addEventListener('input', () => {
        checkNotOrigin(fields) ? showBtn(actBtnContainer) : hideBtn(actBtnContainer);
    });

    form.addEventListener('change', () => {
        checkNotOrigin(fields) ? showBtn(actBtnContainer) : hideBtn(actBtnContainer);
    });

    form.addEventListener('reset', () => {
        toOriginImg();
        hideBtn(actBtnContainer);
    });

    form.addEventListener('edit:img-to-origin', () => {
        console.log(checkNotOrigin(fields));
        checkNotOrigin(fields) ? showBtn(actBtnContainer) : hideBtn(actBtnContainer);
    });

    xBtn.addEventListener('click', () => form.reset());
})