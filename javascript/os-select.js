const select = document.querySelector("div#system");
const option1 = document.querySelector("div[name=select]");
const option2 = document.querySelector("p[value=windows]");
const option3 = document.querySelector("p[value=mac]");
const link = document.querySelector("a#download");
const img = document.querySelector("img#system");

const toggleSelect = () => {
    select.classList.toggle("active");
    imgSrc();
}

const toggleOption2 = () => {
    option1.id = option2.id;
    option1.innerHTML = `<p>${option1.id}</p><img src="./images/icons-logos/chevron-down.svg">`;
    toggleSelect();
    linkHref();
}

const toggleOption3 = () => {
    option1.id = option3.id;
    option1.innerHTML = `<p>${option1.id}</p><img src="./images/icons-logos/chevron-down.svg">`;
    toggleSelect();
    linkHref();
}

option1.addEventListener("click", toggleSelect);
option1.addEventListener("touchstart", toggleSelect);
option1.addEventListener("touchend", toggleSelect);

option2.addEventListener("click", toggleOption2);
option2.addEventListener("touchstart", toggleOption2);
option2.addEventListener("touchend", toggleOption2);

option3.addEventListener("click", toggleOption3);
option3.addEventListener("touchstart", toggleOption3);
option3.addEventListener("touchend", toggleOption3);

const imgSrc = () => {
    if (select.classList.item(0) == "active"){
        img.style.display = "none";
    } else if (select.classList.item(0) != "active" && option1.id == option2.id) {
        img.src = "./images/icons-logos/windows-logo.svg";
        img.alt = "Logo Windows";
        img.style.display = "block";
    } else if (select.classList.item(0) != "active" && option1.id == option3.id) {
        img.src = "./images/icons-logos/mac-logo.svg";
        img.alt = "Logo macOS";
        img.style.display = "block";
    }
}

const linkHref = () => {
    if (option1.id == option2.id) {
        link.href = "./download/launcher-setup.exe";
        link.innerHTML = 'Télécharger <img src="./images/icons-logos/download.svg" width="30px" height="35px">';
    } else if (option1.id == option3.id) {
        link.href = "./download/launcher-setup.dmg";
        link.innerHTML = 'Télécharger <img src="./images/icons-logos/download.svg" width="30px" height="35px">';
    }
}