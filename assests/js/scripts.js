document.getElementById("doneList").addEventListener("click", function doneListOpen(e) {
    if (e.target.nodeName !== 'INPUT')
        this.classList.toggle("open");
});
