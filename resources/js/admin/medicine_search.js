const medicineElAttributes = {
    wrapper: "flex justify-between border-b py-5",
    med_name: "text-md text-hijau font-bold",
    med_type: "mt-1.5 text-sm teks-lembut",
    med_stock: "text-md text-hijau font-bold",
    med_isactive: "mt-1.5 text-sm teks-lembut"
}

/**
 * 
 * @param {HTMLElement} medicineContainer 
 */
function setEmptySearch(medicineContainer) {
    medicineContainer.innerHTML = `
        <p class="py-8 text-center text-teks-lembut">
            Obat tidak ditemukan.
        </p>
    `;
}

/**
 * 
 * @param {} medicine 
 * @returns 
 */
function createMedicine(medicine) {
    const wrapper = document.createElement("div");
    wrapper.className = medicineElAttributes.wrapper

    const leftDiv = document.createElement("div");
    const rightDiv = document.createElement("div");

    const medName = document.createElement("h4")
    medName.className = medicineElAttributes.med_name;
    medName.textContent = medicine.name;
    const medType = document.createElement("p");
    medType.className = medicineElAttributes.med_type;
    medType.textContent = medicine.type;
    leftDiv.append(medName, medType);

    const medStock = document.createElement("h4");
    medStock.className = medicineElAttributes.med_stock;
    medStock.textContent = medicine.stock_unit;
    const medIsActive = document.createElement("p");
    medIsActive.className = medicineElAttributes.med_isactive;
    medIsActive.textContent = medicine.is_active;
    rightDiv.append(medStock, medIsActive);
    
    wrapper.append(leftDiv, rightDiv);
    return wrapper;
}

/**
 * 
 * @param {*} medicines 
 * @returns 
 */
function renderMedicines(medicines) {
    const medicineContainer = document.querySelector('[data-dash="medicine"]');
    if(!medicineContainer) return;

    medicineContainer.innerHTML = "";
    if(medicines.length === 0) {setEmptySearch(medicineContainer); return};
    medicines.forEach(medicine => {
        const wraper = createMedicine(medicine)
        medicineContainer.appendChild(wraper);
    });
}

let debounceTimer;
function handleSearch(event) {
    clearTimeout(debounceTimer);
    const keywords = event.target.value.trim();

    debounceTimer = setTimeout(async () => {
        try{
            const response = await fetch(
                `/admin/medicine/search?keywords=${encodeURIComponent(keywords)}`
            )
    
            if(!response.ok) throw new Error("Gagal mengambil data obat");
            const medicines = await response.json();
            renderMedicines(medicines);
        } catch (err) {
            console.error(err);
        }
    }, 300);
}

document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById("search_input");
    if(!searchInput) return;
    searchInput.addEventListener('input', handleSearch);
})