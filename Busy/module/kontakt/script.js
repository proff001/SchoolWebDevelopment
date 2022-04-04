const elements = {
	lagFirma: document.getElementById('lagFirma'),
	firmaSelector: document.getElementById('firmaSelector'),

	lagPerson: document.getElementById('lagPerson'),
}

const instance = NiceSelect.bind(elements.firmaSelector, { searchable: true });


async function setupFirmaSelector() {
	const res = await axios.post('/Busy/api/getFirma.php');
	
	res.data.forEach(firmaData => {
		const option = document.createElement('option');
		option.value = firmaData.id;
		option.innerHTML = firmaData.navn;
		elements.firmaSelector.appendChild(option);
	});
	
	instance.update();
}

;(async () => {
	setupFirmaSelector();
})();

elements.lagFirma.addEventListener('submit', async (e) => {
	e.preventDefault();
	console.log(e.target.navn.value);
});