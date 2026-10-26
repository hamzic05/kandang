import './bootstrap';
import './auth';

document.addEventListener("DOMContentLoaded", function () {
    const sideBar = document.querySelector("#side_bar"); 

    document.addEventListener('click', function (event) {
        const navToggle = event.target.closest("#ham_btn, #close_ham_btn");
        const sideBarClose = sideBar.classList.contains("translate-x-full");

        if (navToggle) {
            sideBar.classList.toggle("translate-x-full");
        }

        if (!sideBarClose && !sideBar.contains(event.target)) {
            sideBar.classList.add("translate-x-full");
        }
    })

    
})