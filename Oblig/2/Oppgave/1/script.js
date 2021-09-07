let form = document.getElementById('feedback');
let name = document.getElementById('name');
let msg = document.getElementById('msg');

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

function verifyMsg() {
    msg.classList.remove("correct-border");
    msg.classList.remove("wrong-border");

    msg.value = msg.value.trim().replaceAll(/\s+/g, " ");

    if(!/^[a-å A-Å 0-9 \s .?/!'"#&@,]+$/.test(msg.value)) {
        msg.classList.add("wrong-border");
        return false;
    } else {
        msg.classList.add("correct-border");
        return true;
    };
};

name.addEventListener('change', verifyName);
msg.addEventListener('change', verifyMsg);

document.getElementById('feedback').addEventListener('submit', e => {
    if(!verifyName() || !verifyMsg()) {
        e.preventDefault();
    };
});