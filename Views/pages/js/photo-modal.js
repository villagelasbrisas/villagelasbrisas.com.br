function openPhoto(eventTarget) {
    if(hasModal()) return;

    const photoCollection = eventTarget.parentElement;

    createModal(photoCollection);
    showHidePhotos(photoCollection);
}

function createModal(photoCollection) {
    const modal = document.createElement('div');
    const htmlHeader = document.querySelector('header');

    modal.setAttribute('id', 'modal');
    modal.setAttribute('onclick', 'onClickModal()');
    modal.appendChild(photoCollection);

    setTimeout(() => {
        document.body.setAttribute('onscroll', 'onClickModal()');
    }, 500);

    document.body.insertBefore(modal, htmlHeader);
}

function onClickModal() {
    const photoCollection = document.querySelector('#modal a');

    movePhotoCollectionToOrigin(photoCollection);

    deleteModal();

    document.body.removeAttribute('onscroll');
}

function deleteModal() {
    modal.remove();
}

function movePhotoCollectionToOrigin(photoCollection) {
    const allocationsContent = document.querySelectorAll('.allocation-content');
    let allocationChild;
    let allocationChildTag;

    for (let i = 0; i < allocationsContent.length; i++) {
        allocationChildTag = allocationsContent[i].children[0].localName;

        if(allocationChildTag !== 'a') {
            allocationChild = allocationsContent[i];

            break;
        }
    }

    hidePhotos(photoCollection);

    allocationChild.insertBefore(photoCollection, allocationChild.children[0]);
}

function hidePhotos(photoCollection) {
    const photos = photoCollection.children;
    let hiddenPhotos = [];

    for (let i = 1; i < photos.length; i++) {
        hiddenPhotos = photos[i].classList.add('dn');
    }

    return hiddenPhotos;
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

document.body.onkeydown = function(event) {
    if(event.which == 27 && document.getElementById('modal')) {
        onClickModal();
    }
}
