/*
Template Name: Velzon - Admin & Dashboard Template
Author: Themesbrand
Website: https://Themesbrand.com/
Contact: Themesbrand@gmail.com
File: Team Init Js File
*/

//Fiter Js
var list = document.querySelectorAll(".team-list");
if (list) {
    var buttonGroups = document.querySelectorAll('.filter-button');
    if (buttonGroups) {
        Array.from(buttonGroups).forEach(function (btnGroup) {
            btnGroup.addEventListener('click', onButtonGroupClick);
        });
    }
}

function onButtonGroupClick(event) {
    if (event.target.id === 'list-view-button' || event.target.parentElement.id === 'list-view-button') {
        document.getElementById("list-view-button").classList.add("active");
        document.getElementById("grid-view-button").classList.remove("active");
        Array.from(list).forEach(function (el) {
            el.classList.add("list-view-filter");
            el.classList.remove("grid-view-filter");
        });

    } else {
        document.getElementById("grid-view-button").classList.add("active");
        document.getElementById("list-view-button").classList.remove("active");
        Array.from(list).forEach(function (el) {
            el.classList.remove("list-view-filter");
            el.classList.add("grid-view-filter");
        });
    }
}