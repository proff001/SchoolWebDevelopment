const form = document.getElementById('feedback');
const name = document.getElementById('name');
const heightLabel = document.getElementById('heightLabel');
const height = document.getElementById('height');
const weightLabel = document.getElementById('weightLabel');
const weight = document.getElementById('weight');

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

function verifyHeight() {
    let h = parseInt(height.value);
    if(h < 50 || h > 280 || Number.isNaN(h)) {
        heightLabel.innerHTML = `Høyde ikke innenfor 50-280cm!`;
        return false;
    } else {
        heightLabel.innerHTML = `Høyde: ${height.value}cm`;
        return true;
    };
};

function verifyWeight() {
    let h = parseInt(weight.value);
    if(h < 10 || h > 160 || Number.isNaN(h)) {
        weightLabel.innerHTML = `Vekt ikke innenfor 5-160kg!`;
        return false;
    } else {
        weightLabel.innerHTML = `Vekt: ${weight.value}kg`;
        return true;
    };
};

name.addEventListener('change', verifyName);
height.addEventListener('input', verifyHeight);
weight.addEventListener('input', verifyWeight);

man_btn.addEventListener("click", () => handleGenderClick(true));
wom_btn.addEventListener("click", () => handleGenderClick(false));

document.getElementById('feedback').addEventListener('submit', e => {
    verifyName();
    verifyHeight();
    verifyWeight();

    if(!verifyName() || !verifyHeight() || !verifyWeight()) {
        e.preventDefault();
    };
});