function openPhoto(eventTarget) {
    if(hasModal()) return;

    const photoCollection = eventTarget.parentElement.cloneNode(true);

    createModal(photoCollection);
    showHidePhotos(photoCollection);
}

function createModal(photoCollection) {
    const modal = document.createElement('div');
    const htmlHeader = document.querySelector('header');

    modal.setAttribute('id', 'modal');
    modal.setAttribute('onclick', 'deleteModal()');
    modal.appendChild(photoCollection);

    setTimeout(() => {
        document.body.setAttribute('onscroll', 'deleteModal()');
    }, 500);

    document.body.insertBefore(modal, htmlHeader);
}

function deleteModal() {
    modal.remove();

    document.body.removeAttribute('onscroll');
}

function showHidePhotos(photoCollection) {
    const images = photoCollection.getElementsByTagName('img');
    let visibleImages = [];

    for (let i = 0; i < images.length; i++) {
        visibleImages = images[i].classList.remove('dn');
    }

    return visibleImages;
}

function hasModal() {
    return document.getElementById('modal');
}
