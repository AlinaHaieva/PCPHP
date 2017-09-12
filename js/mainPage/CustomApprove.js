var selectBox = document.querySelector('.approve-select');
var customAdd = document.querySelector('.custom-expert');

selectBox.addEventListener("change", changeExpertFunc);

function changeExpertFunc() {
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    console.log(selectedValue);

    if (selectedValue === "Custom approve") {
        customAdd.style.display = "block";
    } else {
        customAdd.style.display = "none";
    }
}