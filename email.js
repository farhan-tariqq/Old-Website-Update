function sendMaiil() {
    var params = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        number: document.getElementById("number").value,
        message: document.getElementById("message").value,
      };
    
      const serviceID = "service_5gl7zse";
      const templateID = "template_ndaueno";
    
        emailjs.send(serviceID, templateID, params)
        .then(res=>{
            document.getElementById("name").value = "";
            document.getElementById("email").value = "";
            document.getElementById("number").value = "";
           // document.getElementById("file").value = "";
            document.getElementById("message").value = "";
            // var message = document.getElementById("message").value;
    
            console.log(res);
            alert('Your message sent successfully!!')
    
        })    
    // Redirect to the next page
    window.location.href = "email.html";
  }
  