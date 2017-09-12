var browsePhoto = document.querySelector(".browse-photo");
var browseCv = document.querySelector(".browse-cv");
var removePhoto = document.querySelector(".remove-photo");
var removeCv = document.querySelector(".remove-cv");
var photo = document.querySelector(".photo-file");
var cv = document.querySelector(".cv-file");

removePhoto.addEventListener("click", function () {
    photo.style.display = "none";
    photo.value = "";
    removePhoto.style.display = "none";
});

browsePhoto.onchange = function () {
    photo.value = this.files.item(0).name;
    photo.style.display = "inline-block";
    removePhoto.style.display = "inline-block";
};

removeCv.addEventListener("click", function () {
    cv.style.display = "none";
    cv.value = "";
    removeCv.style.display = "none";
});

browseCv.onchange = function () {
    cv.value = this.files.item(0).name;
    cv.style.display = "inline-block";
    removeCv.style.display = "inline-block";
};