document.addEventListener('DOMContentLoaded', function () {
    const ERROR_MASSAGE_FIELD = {
        username : "Nama pengguna tidak boleh kosong",
        f_pass : "Kata sandi wajib diisi",
        fConfrm_pass : "Konfirmasi kata sandi",
        email : "E-mail tidak boleh kosong",
        phone : "Nomor hp tidak boleh kosong",
        address : "Alamat tidak  boleh kosong"
    }

    /**
     * @param {HTMLFormElement} formElement
     * @returns {boolean}
     */

    function validateForm (formElement) {
        const inputFields = formElement.querySelectorAll("[data-required]");
        const errorSpan = formElement.querySelector("#error_massage");
        let isValidate = true;
        for (let input of inputFields) {
            if (!input.value.trim()) {
                isValidate = false;
                input.focus();
                input.setAttribute("aria-invalid", "true");

                if (errorSpan) {
                    errorSpan.textContent = ERROR_MASSAGE_FIELD[input.id] ?? "Kolom ini wajib diisi";
                    errorSpan.classList.remove("hidden");
                }

                break;

            }

            input.removeAttribute("aria-invalid");
            if (errorSpan) errorSpan.classList.add("hidden");
        }
        
        return isValidate;
    }
    
    /**
     * 
     * @param {SubmitEvent} event 
     */
    function handleFormSubmit (event) {
        event.preventDefault();

        if (!validateForm(event.currentTarget)) {
            focusErrorField(event.currentTarget);
            return;
        }

        event.target.submit();
    }

    const formElement = document.getElementById("form_container");
    formElement.addEventListener("submit", handleFormSubmit);

    filedContainer.addEventListener("click", function (event) {
        const iVisibTarget = event.target.closest("#i_visibPass, #i_visibConfirmPass");
        
        if(!iVisibTarget) return;
        let fPassId = iVisibTarget.id === "i_visibPass" ? "#f_pass" : "#fConfrm_pass";

        const fPassSelectd = document.querySelector(fPassId);
        if(!fPassSelectd) return;

        fPassSelectd.type = fPassSelectd.type == "password" ? "text" : "password";
        iVisibTarget.classList.toggle("fa-eye", fPassSelectd.type === "text");
        iVisibTarget.classList.toggle("fa-eye-slash", fPassSelectd.type === "password");
    })
})