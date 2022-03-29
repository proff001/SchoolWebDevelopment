

const button = document.getElementById('test');

button.onclick = function() {
	axios.post('/Busy/api/createFirma.php', {
		navn: 'Test',
		adresse: 'Testvej 1',
		postnr: '1234',
		poststed: 'Testby',
	})
	.then((res) => {
		console.log(res.data);
	})
	.catch((err) => {
		console.log(err);
	});
}
