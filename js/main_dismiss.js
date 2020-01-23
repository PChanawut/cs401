fetch("component/main_dismiss.html")
		  .then(response => {
		    return response.text()
		  })
		  .then(data => {
		    document.querySelector("main").innerHTML = data;
		  });
// window.location.replace("/tab");