fetch("component/main_adduser.html")
		  .then(response => {
		    return response.text()
		  })
		  .then(data => {
		    document.querySelector("main").innerHTML = data;
		  });
// window.location.replace("/tab");