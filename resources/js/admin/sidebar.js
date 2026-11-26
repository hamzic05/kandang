import { dropdownToggle } from '../component/dropdown';
import { activateNavlink } from '../component/nav_activator';

document.addEventListener('DOMContentLoaded', function () {  
    const sideBar = document.getElementById("sidebar");
    const targets = sideBar.querySelectorAll(".sidebar_menu");
    if(!sideBar || !targets) return;

    dropdownToggle(sideBar, "[data-dropdown-trigger]");
})