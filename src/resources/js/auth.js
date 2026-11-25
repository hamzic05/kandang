/**
 * @param {MouseEvent} event  
 * @returns
 */
function handlePasswordVisibility(event) {
    const toggleTarget = event.target.closest(
        "#password_toggle, #password_confirmation_toggle",
    );

    if (!toggleTarget) return;
    let fPassId =
        toggleTarget.id === "password_toggle" ? "#password" : "#password_confirmation";

    const fPassSelectd = document.querySelector(fPassId);
    if (!fPassSelectd) return;

    fPassSelectd.type =
        fPassSelectd.type == "password" ? "text" : "password";
    toggleTarget.classList.toggle("fa-eye", fPassSelectd.type === "text");
    toggleTarget.classList.toggle(
        "fa-eye-slash",
        fPassSelectd.type === "password",
    );
}

document.addEventListener("DOMContentLoaded", function () {
    const fieldContainer = document.querySelector(".field_container");
    if(!fieldContainer) return;
    fieldContainer.addEventListener("click", handlePasswordVisibility);
});
