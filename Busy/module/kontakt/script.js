const elements = {
	lagFirma: document.getElementById('lagFirma'),
	firmaSelector: document.getElementById('firmaSelector'),

	lagPerson: document.getElementById('lagPerson'),

	firmaSelector2: document.getElementById('firmaSelector2'),
	firmaDelete: document.getElementById('firmaDelete'),
	firmainformasjon: {
		adresse: document.getElementById('firmaAdresse'),
		leveringsadresse: document.getElementById('firmaLeveringsadresse'),
		postnr: document.getElementById('firmaPostnr'),
		poststed: document.getElementById('firmaPoststed'),
		leverandor: document.getElementById('firmaLeverandor'),
	},

	personSelector: document.getElementById('personSelector'),
	personDelete: document.getElementById('personDelete'),
	personinformasjon: {
		tittel: document.getElementById('personTittel'),
		epost: document.getElementById('personEpost'),
		telefon: document.getElementById('personTelefon'),
		firma: document.getElementById('personFirma'),
	},

	firmaSelector3: document.getElementById('firmaSelector3'),
	editFirma: document.getElementById('editFirma'),
	firmaEditInfo: {
		navn: document.getElementById('firmaEditNavn'),
		adresse: document.getElementById('firmaEditAdresse'),
		leveringsadresse: document.getElementById('firmaEditLeveringsadresse'),
		postnr: document.getElementById('firmaEditPostnr'),
		poststed: document.getElementById('firmaEditPoststed'),
		leverandor: document.getElementById('firmaEditLeverandor'),
	}
}

const resetFocus = () => { document.getElementById('content').focus(); };
const resetPerson = () => { for(el in elements.personinformasjon) elements.personinformasjon[el].innerHTML = 'Ingen person valgt'; };
const resetFirma = () => { for(el in elements.firmainformasjon) elements.firmainformasjon[el].innerHTML = 'Ingen firma valgt'; };

const options = { searchable: true };
const firmaSelector = NiceSelect.bind(elements.firmaSelector, options);
const firmaSelector2 = NiceSelect.bind(elements.firmaSelector2, options);
const firmaSelector3 = NiceSelect.bind(elements.firmaSelector3, options);
const personSelector = NiceSelect.bind(elements.personSelector, options)

let firmaData = {};
let personData = {};

const defaultFirmaData = '<option selected value="0">Velg et firma</option>';
async function setupFirmaSelector() {
	const res = await axios.post('/Busy/api/getFirma.php');

	firmaSelector.clear();
	firmaSelector2.clear();
	firmaSelector3.clear();

	if(elements.firmaSelector.childElementCount > 1) elements.firmaSelector.innerHTML = defaultFirmaData;
	if(elements.firmaSelector2.childElementCount > 1) elements.firmaSelector2.innerHTML = defaultFirmaData;
	if(elements.firmaSelector3.childElementCount > 1) elements.firmaSelector3.innerHTML = defaultFirmaData;

	firmaData = {};

	res.data.forEach((_firmaData) => {
		const option = document.createElement('option');
		option.value = _firmaData.id;
		option.innerHTML = _firmaData.navn;
		elements.firmaSelector.appendChild(option);
		elements.firmaSelector2.appendChild(option.cloneNode(true));
		elements.firmaSelector3.appendChild(option.cloneNode(true));

		firmaData[_firmaData.id] = _firmaData;
	});

	firmaSelector.update();
	firmaSelector2.update();
	firmaSelector3.update();
}

const defaultPersonData = '<option selected value="0">Velg en person</option>';
async function setupPersonSelector() {
	const res = await axios.post('/Busy/api/getPersoner.php');

	personSelector.clear();

	if(elements.personSelector.childElementCount > 1) elements.personSelector.innerHTML = defaultPersonData;
	
	personData = {};

	res.data.forEach((_personData) => {
		const option = document.createElement('option');
		option.value = _personData.id;
		option.innerHTML = `${_personData.fornavn} ${_personData.etternavn}`;
		elements.personSelector.appendChild(option);

		personData[_personData.id] = _personData;
	});

	personSelector.update();
}

setupFirmaSelector();
setupPersonSelector();

elements.lagFirma.addEventListener('submit', (e) => {
	e.preventDefault();

	const data = {
		navn: e.target.navn.value,
		adresse: e.target.adresse.value,
		postnr: e.target.postnr.value,
		poststed: e.target.poststed.value,
		leverandor: e.target.leverandor.checked,
	}

	if(e.target.leveringsadresse.value.length !== 0) data['leveringsadresse'] = e.target.leveringsadresse.value;

	axios.post('/Busy/api/createFirma.php', data)
	.then(res => {
		console.log(res);
		setupFirmaSelector();
		elements.lagFirma.reset();
	}).catch(err => console.log(err));
});

elements.lagPerson.addEventListener('submit', (e) => {
	e.preventDefault();

	const data = {
		fornavn: e.target.fornavn.value,
		etternavn: e.target.etternavn.value,
		tittel: e.target.tittel.value,
		epost: e.target.epost.value,
		telefon: e.target.telefon.value,
	};

	if(elements.firmaSelector.value !== 0) data['firma'] = elements.firmaSelector.value;

	axios.post('/Busy/api/createPerson.php', data)
	.then(res => {
		console.log(res);
		setupPersonSelector();
		firmaSelector.clear();
		elements.lagPerson.reset();
	}).catch(err => console.log(err));
});

elements.firmaSelector2.addEventListener('change', (e) => {
	if(e.target.value == 0) return resetFirma();

	const data = firmaData[e.target.value];

	elements.firmainformasjon.adresse.innerHTML = data.adresse;
	elements.firmainformasjon.postnr.innerHTML = data.postnr;
	elements.firmainformasjon.poststed.innerHTML = data.poststed;
	elements.firmainformasjon.leverandor.innerHTML = data.leverandor != 0 ? 'Ja' : 'Nei';
	elements.firmainformasjon.leveringsadresse.innerHTML = data.leveringsadresse ? data.leveringsadresse : 'Ingen leveringsadresse';
});

elements.firmaDelete.addEventListener('click', (e) => {
	const id = elements.firmaSelector2.value;
	if(id == 0 || !firmaData[id]) return;

	axios.post('/Busy/api/deleteFirma.php', { id })
	.then(res => {
		console.log(res);
		setupFirmaSelector();
		resetFirma();
	}).catch(err => console.log(err));
	console.log('delete');
});

elements.personSelector.addEventListener('change', (e) => {
	if(e.target.value == 0) return resetPerson();

	const data = personData[e.target.value];

	elements.personinformasjon.tittel.innerHTML = data.tittel;
	elements.personinformasjon.epost.innerHTML = data.epost;
	elements.personinformasjon.telefon.innerHTML = data.telefon;

	if(data.firma && firmaData[data.firma].navn) elements.personinformasjon.firma.innerHTML = firmaData[data.firma].navn;
	else elements.personinformasjon.firma.innerHTML = 'Ingen firma';
});

elements.personDelete.addEventListener('click', (e) => {
	const id = elements.personSelector.value;
	if(id == 0 || !personData[id]) return;

	axios.post('/Busy/api/deletePerson.php', { id })
	.then(res => {
		console.log(res);
		setupPersonSelector();
		resetPerson();
	}).catch(err => console.log(err));
	console.log('delete');
});

elements.firmaSelector3.addEventListener('change', (e) => {
	const id = elements.firmaSelector3.value;
	if(id == 0 || !firmaData[id]) return elements.editFirma.reset();;

	const data = firmaData[id];
	console.log(data);

	elements.firmaEditInfo.navn.value = data.navn;
	elements.firmaEditInfo.adresse.value = data.adresse;
	elements.firmaEditInfo.leveringsadresse.value = data.leveringsadresse;
	elements.firmaEditInfo.postnr.value = data.postnr;
	elements.firmaEditInfo.poststed.value = data.poststed;
	elements.firmaEditInfo.leverandor.checked = data.leverandor == 1;
});

elements.editFirma.addEventListener('submit', (e) => {
	e.preventDefault();

	const orgData = firmaData[elements.firmaSelector3.value];
	if(!orgData.leveringsadresse) orgData.leveringsadresse = '';

	const data = {
		id: elements.firmaSelector3.value,
	}

	if(e.target.navn.value != orgData.navn) data['navn'] = e.target.navn.value;
	if(e.target.adresse.value != orgData.adresse) data['adresse'] = e.target.adresse.value;
	if(e.target.leveringsadresse.value != orgData.leveringsadresse) data['leveringsadresse'] = e.target.leveringsadresse.value;
	if(e.target.postnr.value != orgData.postnr) data['postnr'] = e.target.postnr.value;
	if(e.target.poststed.value != orgData.poststed) data['poststed'] = e.target.poststed.value;
	if(e.target.leverandor.checked != orgData.leverandor) data['leverandor'] = e.target.leverandor.checked ? 1 : 0;

	console.log(data);

	axios.post('/Busy/api/editFirma.php', data)
	.then(res => {
		console.log(res);
		setupFirmaSelector();
		firmaSelector3.clear();
		elements.editFirma.reset();
	}).catch(err => console.log(err));
});
