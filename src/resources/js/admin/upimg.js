/**
 * 
 * @param {URL} urlObj
 * @returns {String}
 */
const getImageNameFormUrl = (urlObj) => urlObj instanceof URL ? urlObj.pathname.split('/').pop() : '';

/**
 * 
 * @param {HTMLImageElement} image 
 * @returns {boolean}
 */
const isImgDatasetOrigin = (image) => image.dataset.origin !== '';

/**
 * @param {HTMLImageElement} img 
 * @returns {boolean}
 */
function isImgFilled(img) {
    if(!img || !img.src || img.src.trim() === '' || img.src === window.location.href) return false;
    if(!img.src.startsWith('http://') && !img.src.startsWith('https://') && !img.src.startsWith('blob:')) return false;
    return true
}

/**
 * 
 * @param {String} url
 * @returns {boolean} 
 */
function isValidUrl(url) {
    let isTrue = false
    try {
        new URL(url);
        isTrue = true
    } catch (err) {
        isTrue = false
    }

    return isTrue;
}

/**
 * 
 * @param {HTMLDivElement} parent 
 * @param {String} icon 
 */
function switchIcon(parent, icon) {
    if(!parent || icon.trim() === '') return;
    const iconEl = parent.querySelector(`.fa-${parent.id}`);
    
    if(!iconEl) return;
    iconEl.classList.remove(`fa-${parent.id}`);
    iconEl.classList.add(icon);
}

function checkCreateFields() {
    const form = document.querySelector("[data-create]");
    if(!form) return;
    form.dispatchEvent(new CustomEvent('create:fields-check'))
}

function eventImgToOrigin() {
    const form = document.querySelector("[data-edit]");
    // console.log(form);
    if(!form) return;
    form.dispatchEvent(new CustomEvent('edit:img-to-origin'));
}

/**
 * @param {File} file 
 * @param {String} zonename 
 * @param {HTMLElement} zone 
 * @param {HTMLInputElement} inputfile
 */
function show(file, zonename, zone) {
    if(!file || file.type.startsWith('image/*')) return;
    const image = zone.querySelector(`[data-prevw="${zonename}"]`);
    const placeholder = zone.querySelector(`[data-placeholder="${zonename}"]`);
    const xmark = zone.querySelector('#xmark');
    if(!image || !placeholder || !xmark) return;

    image.src = URL.createObjectURL(file);
    image.classList.remove('hidden');
    placeholder.classList.add('hidden');

    if(isImgDatasetOrigin(image)) {
        switchIcon(xmark, "fa-rotate-left")
        xmark.addEventListener('click', async (e) => {
            await backOriginImage(image, zonename, zone, xmark, e);
            eventImgToOrigin();
        }, {once: true});
    } else {
        changeDropZone(zonename, zone)
        xmark.addEventListener('click', e => {
            dropImage(image, zonename, zone, xmark, e);
            checkCreateFields();
        }, {once: true});
    }

    xmark.classList.remove('hidden');
}

/**
 * @param {HTMLImageElement} image
 * @param {String} zonename
 * @param {HTMLElement} zone
 * @param {HTMLElement} xmark
 * @param {Event} event
 */
async function backOriginImage(image, zonename, zone, xmark, event) {
    if(!image || zonename.trim() === '' || !zone || !xmark || !event) return;
    event.preventDefault();

    if(!isImgDatasetOrigin(image)) return;
    const inputImg = zone.querySelector(`#${zonename}`);
    const dataTransfer = await createDataTransferFromImage(image, true);
    
    inputImg.files = dataTransfer.files;
    inputImg.defaultValue = inputImg.value
    // console.log(inputImg.files);
    
    image.src = image.dataset.origin;
    xmark.classList.add('hidden');
}

/**
 * @param {HTMLImageElement} image
 * @param {String} zonename
 * @param {HTMLElement} zone
 * @param {HTMLElement} xmark
 * @param {Event} event
 */
function dropImage(image, zonename, zone, xmark, event) {
    if(!image || zonename.trim() === '' || !zone || !xmark || !event) return;
    event.preventDefault();

    if(!isImgFilled(image)) return;
    URL.revokeObjectURL(image.src);
    image.src = '';
    image.classList.add('hidden');

    zone.querySelector(`#${zonename}`).value = '';
    zone.querySelector(`[data-placeholder="${zonename}"]`)?.classList.remove('hidden');
    zone.querySelector(`[data-placeholder="${zonename}"]`)?.classList.add('flex');
    xmark.classList.add('hidden');
    resetDropZone(zonename, zone);
}

/**
 * @param {String} zonename
 * @param {HTMLElement} zone
 */
function resetDropZone(zonename, zone) {
    if(!zone) return;
    const changeBtn = zone.querySelector(`[data-change-btn="${zonename}"]`);
    const wrapper = zone.querySelector(`[data-wrapper="${zonename}"]`);
    if(!changeBtn || !wrapper) return;

    changeBtn.classList.add('hidden');
    wrapper.setAttribute('for', zonename);
    wrapper.classList.add('cursor-pointer');
}

/**
 * @param {String} zonename
 * @param {HTMLElement} zone
 */
function changeDropZone(zonename, zone) {
    if(!zonename || !zone) return;
    const changeBtn = zone.querySelector(`[data-change-btn="${zonename}"]`);
    const wrapper = zone.querySelector(`[data-wrapper="${zonename}"]`);
    if(!changeBtn || !wrapper) return;

    changeBtn.classList.remove('hidden');
    wrapper.removeAttribute('for');
    wrapper.classList.remove('cursor-pointer');
}

/**
 * @param {HTMLImageElement} image 
 * @param {boolean} formorigin
 * @returns {Promise<DataTransfer|null>}
 */
async function createDataTransferFromImage(image, formorigin = false) {
    if(!isImgFilled(image)) return;
    let dataTransfer = null;

    const strUrl = formorigin ? isValidUrl(image.dataset.origin) ? image.dataset.origin : '' : isValidUrl(image.src) ? image.src : '';
    if(strUrl.trim() === '') return;

    try {
        const response = await fetch(strUrl);
        console.log(response)
        if(!response.ok) throw new Error(`Failed to take image\n${response.status}`);

        const blob = await response.blob();
        const file = new File([blob], getImageNameFormUrl(new URL(strUrl)), {type: (await blob).type});
        dataTransfer = new DataTransfer();
        dataTransfer.items.add(file);
    } catch (err) {
        console.log(err);
    }

    return dataTransfer;
}

document.addEventListener('DOMContentLoaded', async function () {
    const zone = document.querySelector('[data-dropzone]');
    if(!zone) return;

    const name = zone.dataset.dropzone;
    const inputImg = zone.querySelector(`#${name}`);
    const image_prevw = zone.querySelector(`[data-prevw="${name}"]`);
    const xmark = zone.querySelector('#xmark');

    if(!inputImg) return;

    if(image_prevw && isImgFilled(image_prevw)) {
        const dataTransfer = await createDataTransferFromImage(image_prevw, false);
        if(!dataTransfer) return;
        inputImg.files = dataTransfer.files;
        changeDropZone(name, zone);
    }

    inputImg.addEventListener('change', () => show(inputImg.files[0], name, zone));
    ['dragenter', 'dragover'].forEach(ev => zone.addEventListener(ev, e => {
        e.preventDefault();
        zone.classList.add('border-hijau', 'bg-hijau/5');
    }));

    ['dragleave', 'drop'].forEach(ev => zone.addEventListener(ev, e => {
        e.preventDefault();
        zone.classList.remove('border-hijau', 'bg-hijau');
    }));

    zone.addEventListener('drop', e => {
        inputImg.files = e.dataTransfer.files;
        show(inputImg.files[0], name, zone);
        checkCreateFields();
        console.log(inputImg.value);

    })

    zone.addEventListener('dropzone:clear', e => dropImage(image_prevw, name, zone, xmark, e))
    zone.addEventListener('dropzone:to-origin-img', e => backOriginImage(image_prevw, name, zone, xmark, e));
})