/**
 * 
 * @param {HTMLElement} element 
 * @param {String} dataName 
 * @returns 
 */
function validateParams(element, attribute) {
    if(!element || !attribute) return false;
    if(!(element instanceof HTMLElement) || (typeof attribute !== "string")) return false;
    return true;
}

function setActiveDropdown(targets, parent, attribute, value) {
    targets.forEach(target => {
        target.removeAttribute(attribute);
    })

    parent.setAttribute(attribute, value);
}

function addListenerChild(targets, parent, attribute, value) {
    const child = parent.querySelectorAll(".dropdownn_menu");
    if(!child) return;
    child.forEach(dm => {
        dm.addEventListener("click", event => setActiveDropdown(targets, parent, attribute, value));
    })
}

/**
 * 
 * @param {HTMLElement[]} targets
 * @param {HTMLElement} currentTarget
 * @param {String} attribute 
 * @param {String} value 
 */
function setActive(targets, currentTarget, attribute, value) {
    if(currentTarget.hasAttribute("data-dropdown-parent")) {addListenerChild(targets, currentTarget, attribute, value); return};

    targets.forEach(target => {
        target.removeAttribute(attribute);
    })

    currentTarget.setAttribute(attribute, value);
}

/**
 * 
 * @param {HTMLElement} parentElement 
 * @param {String} attribute
 * @param {String} value
 */
export function activateNavlink(parentElement, targets, attribute, value = null) {
    if(!validateParams(parentElement, attribute)) return;
    if(!targets || targets.length === 0) return;

    targets.forEach(target => {
        target.addEventListener("click", event => {
            setActive(targets, target, attribute, value);
        });
    })
}