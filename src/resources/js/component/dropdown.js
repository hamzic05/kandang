/**
 * 
 * @param {any} el  
 * @returns {boolean}
 */
const isValidElement = (el) => el instanceof HTMLElement; 

/**
 * 
 * @param {HTMLElement} subMenu 
 * @param {HTMLElement} arrIcon
 * @returns
 */
function open(subMenu, arrIcon = null) {
    if(!subMenu) return;
    subMenu.classList.remove("grid-rows-[0fr]", "opacity-0");
    subMenu.classList.add("grid-rows-[1fr]", "opacity-100");
    if(arrIcon) arrIcon.classList.toggle("rotate-90");
}

/**
 * 
 * @param {HTMLElement} subMenu 
 * @param {HTMLElement} arrIcon
 * @returns
 */
function close(subMenu, arrIcon = null) {
    if(!subMenu) return;
    subMenu.classList.remove("grid-rows-[1fr]", "opacity-100");
    subMenu.classList.add("grid-rows-[0fr]", "opacity-0");
    if(arrIcon) arrIcon.classList.toggle("rotate-90");
}

/**
 * 
 * @param {HTMLElement} elements 
 * @returns 
 */
function dropDown(element) {
    if(!isValidElement(element)) return;

    const targetId = element.getAttribute("data-target");
    const subMenu = document.getElementById(targetId);
    const arrIcon = element.querySelector(".arrow")

    const isOpen = subMenu.classList.contains("grid-rows-[1fr]") && subMenu.classList.contains("opacity-100");

    if(!isOpen) {
        open(subMenu, arrIcon);
    } else {
        close(subMenu, arrIcon);
    }

    return;
}

/**
 * 
 * @param {HTMLElement} parentElement 
 * @param {String} dataName 
 * @returns 
 */
export function dropdownToggle(parentElement, dataName) {
    if(!isValidElement(parentElement)) return;

    parentElement.addEventListener("click", event => {
        const eTarget = event.target.closest(dataName);
        if(eTarget) {
            dropDown(eTarget);
        }
    })

    return;
}