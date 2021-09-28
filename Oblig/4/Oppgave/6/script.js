let form = document.getElementById('form');
let name = document.getElementById('name');
let address = document.getElementById('address');

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

function verifyAddress() {
    address.classList.remove("correct-border");
    address.classList.remove("wrong-border");

    address.value = address.value.trim().replaceAll(/\s+/g, " ");

    if(!/^[a-å A-Å 0-9 \s .,\-]+$/.test(address.value)) {
        address.classList.add("wrong-border");
        return false;
    } else {
        address.classList.add("correct-border");
        return true;
    };
};

name.addEventListener('change', verifyName);
address.addEventListener('change', verifyAddress);

form.addEventListener('submit', e => {
    verifyName();
    verifyAddress();
    
    if(!verifyName() || !verifyAddress()) {
        e.preventDefault();
    };
});