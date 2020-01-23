fetch("component/header.html")
		  .then(response => {
		    return response.text()
		  })
		  .then(data => {
		    document.querySelector("header").innerHTML = data;
		  });
// window.location.replace("/tab");