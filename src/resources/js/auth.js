

document.addEventListener('DOMContentLoaded', function () {
    const filedContainer = document.querySelector(".field_container");
    if(!filedContainer) return;

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