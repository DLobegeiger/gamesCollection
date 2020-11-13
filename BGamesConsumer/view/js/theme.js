function loadTheme() {
    if (localStorage.getItem("theme") == "dark") {  
        document.body.style.backgroundColor="#333333";
        document.getElementsByTagName("nav")[0].style.backgroundColor="#616161";
        document.getElementsByTagName("footer")[0].style.backgroundColor="#616161";
        document.getElementsByTagName("h1")[0].style.color="white";
        let header1 = document.getElementsByTagName('h1');
        for (i = 0; i < header1.length; i++){
            header1[i].style.color="white";
        }
        let paragraph = document.getElementsByTagName('p');
        for (i = 0; i < paragraph.length; i++){
            paragraph[i].style.color="white";
        }
    }
}