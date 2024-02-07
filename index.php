<!Doctype html>
<html>

<head>
   <meta charset="utf-8">
</head>

<body>

  <div>
        <input id="mailValue" type="text">
        <button onclick="addMail()">envoyer</button>
  </div>
     
</body>

<script>

 const mailValue = document.getElementById("mailValue");

  const addMail = async () => fetch("http://localhost:80/ml/server.php?mailValue=" + mailValue.value).then(res => alert("ok"));

</script>



</html>