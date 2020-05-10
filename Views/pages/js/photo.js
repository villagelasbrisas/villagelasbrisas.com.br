let modal = document.getElementById("modal");

function openPhoto(i){
    let photo = document.getElementById(`photo${i}`);

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
