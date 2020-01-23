fetch("component/config/config.html")
	.then(response => {
		return response.text()
	})
	.then(data => {
		document.querySelector("configHeader").innerHTML = data;
    });