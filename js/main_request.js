fetch("component/main_request.html")
		  .then(response => {
		    return response.text()
		  })
		  .then(data => {
		    document.querySelector("main").innerHTML = data;
		  });
// window.location.replace("/tab");