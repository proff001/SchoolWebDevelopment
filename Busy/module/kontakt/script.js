const elements = {
	lagFirma: document.getElementById('lagFirma'),
	firmaSelector: document.getElementById('firmaSelector'),

	lagPerson: document.getElementById('lagPerson'),

	firmaSelector2: document.getElementById('firmaSelector2'),
	firmaDelete: document.getElementById('firmaDelete'),
	firmainformasjon: {
		orgnummer: document.getElementById('firmaOrgnummer'),
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
		orgnummer: document.getElementById('firmaEditOrgnummer'),
		adresse: document.getElementById('firmaEditAdresse'),
		leveringsadresse: document.getElementById('firmaEditLeveringsadresse'),
		postnr: document.getElementById('firmaEditPostnr'),
		poststed: document.getElementById('firmaEditPoststed'),
		leverandor: document.getElementById('firmaEditLeverandor'),
	},

	personSelector2: document.getElementById('personSelector2'),
	editPerson: document.getElementById('editPerson'),
	personEditInfo: {
		fornavn: document.getElementById('personEditFornavn'),
		etternavn: document.getElementById('personEditEtternavn'),
		tittel: document.getElementById('personEditTittel'),
		epost: document.getElementById('personEditEpost'),
		telefon: document.getElementById('personEditTelefon'),
		firma: document.getElementById('personEditFirma'),
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
const personSelector2 = NiceSelect.bind(elements.personSelector2, options)

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
	resetFirma();

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
	if(elements.personSelector2.childElementCount > 1) elements.personSelector2.innerHTML = defaultPersonData;
	resetPerson();

	personData = {};

	res.data.forEach((_personData) => {
		const option = document.createElement('option');
		option.value = _personData.id;
		option.innerHTML = `${_personData.fornavn} ${_personData.etternavn}`;
		elements.personSelector.appendChild(option);
		elements.personSelector2.appendChild(option.cloneNode(true));

		personData[_personData.id] = _personData;
	});

	personSelector.update();
	personSelector2.update();
}

setupFirmaSelector();
setupPersonSelector();

elements.lagFirma.addEventListener('submit', (e) => {
	e.preventDefault();

	const data = {
		navn: e.target.navn.value,
		orgnummer: e.target.orgnummer.value,
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
	elements.firmainformasjon.orgnummer.innerHTML = data.orgnummer;
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
});

elements.firmaSelector3.addEventListener('change', (e) => {
	const id = elements.firmaSelector3.value;
	if(id == 0 || !firmaData[id]) return elements.editFirma.reset();

	const data = firmaData[id];

	elements.firmaEditInfo.navn.value = data.navn;
	elements.firmaEditInfo.orgnummer.value = data.orgnummer;
	elements.firmaEditInfo.adresse.value = data.adresse;
	elements.firmaEditInfo.leveringsadresse.value = data.leveringsadresse;
	elements.firmaEditInfo.postnr.value = data.postnr;
	elements.firmaEditInfo.poststed.value = data.poststed;
	elements.firmaEditInfo.leverandor.checked = data.leverandor == 1;
});

elements.editFirma.addEventListener('submit', (e) => {
	e.preventDefault();

	if(elements.firmaSelector3.value == 0 || !firmaData[elements.firmaSelector3.value]) return;

	const orgData = firmaData[elements.firmaSelector3.value];
	if(!orgData.leveringsadresse) orgData.leveringsadresse = '';

	const data = {
		id: elements.firmaSelector3.value,
	}

	if(e.target.navn.value != orgData.navn) data['navn'] = e.target.navn.value;
	if(e.target.orgnummer.value != orgData.orgnummer) data['orgnummer'] = e.target.orgnummer.value;
	if(e.target.adresse.value != orgData.adresse) data['adresse'] = e.target.adresse.value;
	if(e.target.leveringsadresse.value != orgData.leveringsadresse) data['leveringsadresse'] = e.target.leveringsadresse.value;
	if(e.target.postnr.value != orgData.postnr) data['postnr'] = e.target.postnr.value;
	if(e.target.poststed.value != orgData.poststed) data['poststed'] = e.target.poststed.value;
	if(e.target.leverandor.checked != orgData.leverandor) data['leverandor'] = e.target.leverandor.checked ? 1 : 0;

	if(Object.keys(data).length == 1) return;

	axios.post('/Busy/api/editFirma.php', data)
	.then(res => {
		console.log(res);
		setupFirmaSelector();
		firmaSelector3.clear();
		elements.editFirma.reset();
	}).catch(err => console.log(err));
});

elements.personSelector2.addEventListener('change', (e) => {
	const id = elements.personSelector2.value;
	if(id == 0 || !personData[id]) return elements.editPerson.reset();

	const data = personData[id];

	elements.personEditInfo.fornavn.value = data.fornavn;
	elements.personEditInfo.etternavn.value = data.etternavn;
	elements.personEditInfo.tittel.value = data.tittel;
	elements.personEditInfo.epost.value = data.epost;
	elements.personEditInfo.telefon.value = data.telefon;
	if(data.firma && firmaData[data.firma].navn) elements.personEditInfo.firma.value = firmaData[data.firma].navn;
});

elements.editPerson.addEventListener('submit', (e) => {
	e.preventDefault();

	if(elements.personSelector2.value == 0 || !personData[elements.personSelector2.value]) return;

	const orgData = personData[elements.personSelector2.value];
	if(!orgData.firma) orgData.firma = 0;

	const data = {
		id: elements.personSelector2.value,
	}

	if(e.target.fornavn.value != orgData.fornavn) data['fornavn'] = e.target.fornavn.value;
	if(e.target.etternavn.value != orgData.etternavn) data['etternavn'] = e.target.etternavn.value;
	if(e.target.tittel.value != orgData.tittel) data['tittel'] = e.target.tittel.value;
	if(e.target.epost.value != orgData.epost) data['epost'] = e.target.epost.value;
	if(e.target.telefon.value != orgData.telefon) data['telefon'] = e.target.telefon.value;
	if(e.target.firma.value != orgData.firma) {
		const firma = Object.values(firmaData).find(f => f.navn == e.target.firma.value);
		if(firma && firma.id != orgData.firma) data['firma'] = firma.id;
		if(e.target.firma.value.length == 0) data['firma'] = 0;
	}

	if(Object.keys(data).length == 1) return;

	axios.post('/Busy/api/editPerson.php', data)
	.then(res => {
		console.log(res);
		setupPersonSelector();
		personSelector2.clear();
		elements.editPerson.reset();
	}).catch(err => console.log(err));
});