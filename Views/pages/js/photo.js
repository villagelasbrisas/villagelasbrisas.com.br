let modal = document.getElementById("modal");
let photoOpened = 0;

function openPhoto(number){
    let formattedNumber = ("0" + number).slice(-2);
    this.photoOpened = formattedNumber;

    let photo = document.getElementById(`photo${formattedNumber}`);
    let path = window.location.pathname;
    let lastIndex = path.split("/").slice(-1);

    window.location.host == "localhost" ? localhost = "/villagelasbrisas.com.br" : localhost = "";

    let url =
        window.location.protocol + "//"
        + window.location.host
        + localhost + "/Views/pages/img/"
        + lastIndex + `-${formattedNumber}.jpg`;

    photo.src = url;

    photo.classList.remove("dn");
    modal.classList.remove("dn");

    if (photo) {
        return true;
    }   return false;
}

function closePhoto(){
    let photo = modal.children;
    let numOfPhotos = photo.length;

    for (let i = 0; i < numOfPhotos; i++) {
        if (photo[i].className != "dn") {
            this.photo = photo[i];
        }
    }

    modal.classList.add("dn");
    this.photo.classList.add("dn");
}

function nextPhoto() {
    this.photoOpened++;
    closePhoto();
    openPhoto(this.photoOpened);
}

function prevPhoto() {
    this.photoOpened--;
    closePhoto();
    openPhoto(this.photoOpened);
}
