const labelNews = document.getElementById("label");

document.addEventListener("DOMContentLoaded", function () {
    const elems = document.querySelectorAll("select");
    M.FormSelect.init(elems, labelNews);
});
