var overlay = document.getElementById("overlay");
var spinner = document.getElementById("spinner");
function showSpinner() {
    spinner.setAttribute('class', 'show');
    overlay.setAttribute('class', 'show')
    setTimeout(() => {
        spinner.className = spinner.className.replace("show", "");
        overlay.className = overlay.className.replace("show", "");
    }, 5000);
}
showSpinner();
