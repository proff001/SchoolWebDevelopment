const button = document.getElementById('test');

button.onclick = function() {
	axios.post('api/getPersoner.php')
	.then((res) => {
		console.log(res.data);
	})
	.catch((err) => {
		console.log(err);
	});
}
