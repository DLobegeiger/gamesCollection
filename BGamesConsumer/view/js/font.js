function loadFont() {
    if (localStorage.getItem("fontsize") == "20px") {
        let header1 = document.getElementsByTagName('h1');
        for (i = 0; i < header1.length; i++){
            header1[i].style.fontSize="51px";
        }
        let paragraph = document.getElementsByTagName('p');
        for (i = 0; i < paragraph.length; i++){
            paragraph[i].style.fontSize="26px";
        }
    }
}