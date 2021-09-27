let form = document.getElementById('form');
let name = document.getElementById('name');

function verifyName() {
    name.classList.remove("correct-border");
    name.classList.remove("wrong-border");

    name.value = name.value.trim().replaceAll(/\s+/g, " ");

    if(!/^[a-å A-Å \s .\-]+$/.test(name.value)) {
        name.classList.add("wrong-border");
        return false;
    } else {
        name.classList.add("correct-border");
        return true;
    };
};

name.addEventListener('change', verifyName);

form.addEventListener('submit', e => {
    if(!verifyName()) {
        e.preventDefault();
    };
});