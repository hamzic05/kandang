/**
 * 
 * @param {NodeList} fields 
 * @returns {boolean}
 */
function checkFilled(fields) {
    if(!(fields instanceof NodeList)) return;
    const isFilled = [...fields].some(field => {
        if(field.type === "checkbox" || field.type === "radio") return field.checked;
        return field.value.trim() !== "";
    })
    return isFilled;
}

/**
 * 
 * @param {HTMLElement} btnContainer 
 * @returns 
 */
function showBtn(btnContainer) {
    if(!btnContainer) return;
    btnContainer.classList.remove("opacity-0", "translate-y-2", "pointer-events-none")
    btnContainer.classList.add("opacity-100", "translate-y-0", "pointer-event-auto");
}

function hideBtn(btnContainer) {
    if(!btnContainer) return;
    btnContainer.classList.remove("opacity-100", "translate-y-0", "pointer-events-auto");
    btnContainer.classList.add("opacity-0", "translate-y-2", "pointer-event-none");
}

/**
 * 
 * @param {NodeList} fields 
 * @returns 
 */
function resetFeilds(fields, btnContainer) {
    if(!checkFilled(fields)) return;
    fields.forEach(field => {
        if(field.type === "checkbox" || field.type === "radio"){
            field.value = false;
        } else {
            field.value = "";
        }

        if(!checkFilled(fields)) hideBtn(btnContainer);
    })
}

document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector("[data-create]");
    if(!form) return;

    const actBtnContainer = form.querySelector("#act_btn_container");
    const xBtn = actBtnContainer.querySelector("#cancle_btn");
    const fields = form.querySelectorAll(".field");
    if(!actBtnContainer || !xBtn || !fields) return;
    
    form.addEventListener('input', event => {
        checkFilled(fields) ? showBtn(actBtnContainer) : hideBtn(actBtnContainer);
    });

    form.addEventListener('change', event => {
        checkFilled(fields) ? showBtn(actBtnContainer) : hideBtn(actBtnContainer);
    });

    xBtn.addEventListener('click', event => {resetFeilds(fields, actBtnContainer)});
})