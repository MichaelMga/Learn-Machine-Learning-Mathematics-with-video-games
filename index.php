<!Doctype html>
<html>

<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="main.css" />
</head>

<body>


  <div id="mainWrapper">
      <div id="mainWrapperA"> 
         <div id="mainWrapperAA">
             <div id="mainWrapperAAA">
               
                    <h2>
                       Apprends les mathématiques pour le Machin Learning en développant des jeux vidéo 2D.
                    </h2>

                    <p>
  
                      Pars de zero en mathématiques (tant que tu sais compter de 0 à 10, ça ira) </br> 
                      et maîtrise l'ensemble des mathématiques requis pour faire du machine learning, en créant de simples jeux vidéo en Python.

                      <br> <br>
 
                     Mais aussi : Crée un portfolio, découvre Python ou étends tes connaissances du language...
                     Et tout cela en prenant du plaisir. 
                  
                 <br><br> Si vous souhaitez en savoir plus :

                  </p>    

                </div>

                
                <div id="mainWrapperAAB">
                 <input placeholder="Saisissez votre mail" id="mailValue" type="text">
                 <button onclick="addMail()">envoyer</buttan>
                </div>

                </div>

             </div>
             <div id="mainWrapperB">
                <div id="imgWrapper">
                   <img src="assets/gaming2.jpg" alt="">
                </div> 

             </div>
          </div>


      </div>
     
</body>

<script>

 const mailValue = document.getElementById("mailValue");

 const serverAdress = "http://localhost:80/ml/server.php";

  const addMail = async () => {

    if(!isValidEmail(mailValue.value)){
        alert("Veuillez saisir une adresse mail au bon format!");
        return;
    }
    
    fetch(`${serverAdress}?mailValue= ${mailValue.value}`).then(
    
    res => {
       alert("Merci !");
       window.location.reload();
    } 
);

  }


const isValidEmail = (email) => {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}


</script>



</html>