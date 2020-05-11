let modal = document.getElementById("modal");

function openPhoto(number){

    let photo = document.getElementById(`photo${number}`);
    let path = window.location.pathname;
    let lastIndex = path.split("/").slice(-1);

    window.location.host == "localhost" ? localhost = "/villagelasbrisas.com.br" : localhost = "";

    let url =
        window.location.protocol + "//"
        + window.location.host
        + localhost + "/Views/pages/img/"
        + lastIndex + `-${number}.jpg`;

    photo.src = url;

    photo.classList.remove("dn");
    modal.classList.remove("dn");
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
