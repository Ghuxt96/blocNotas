<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style media="screen">
  body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-image: url(bg2.jpg);
    background-size: cover;
  }
  .box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 700px;
    padding: 70px;
    background: rgba(0, 0, 0, 0.6);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
    border-radius: 10px;
  }
  .box h2{
    margin: 0 0 30px;
    padding: 0px;
    color: #fff;
    text-align: center;
  }
  .box .input-box{
    position: relative;
  }

  .box .input-box input{
    width: 100%;
    padding: 10px 0px;
    font-size: 16px;
    color: #fff;
    letter-spacing: 1px;
    margin-bottom: 30px;
    border: none;
    outline: none;
    background: transparent;
    border-bottom: 1px solid #fff;
  }

  .box .input-box input:focus ~ label,
  .box .input-box input:valid ~ label{
    top: -18px;
    left: 0px;
    color: #03a9f4;
    font-size: 12px;
  }
  .box input[type="submit"]{
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
    background: #227be3;
    padding: 10px 20px;
    border-radius: 5px;
    cursor:pointer;
  }

  .box input[type="submit"]:hover{
    background-color: #3067b9;
  }

  </style>
<title>Bloc de notas</title>
<style>
	body{color:#FFF; font-family:Arial, Helvetica, sans-serif;}
</style>
</head>

<body>
<div class="box">
	<form action="guardar.php" method="POST" name="frm">
    <h1>bloc de notas</h1>
    <label>ingrese los datos para el archivo txt</label>
    <div class="input-box">
        <input type="text" name="texto">
        <input type="submit" id="crear" name="crear" value="Crear"/></p>
        </div>
        </form>
	<form action="directorio.php" method="post">
    <label>ingrese en nombre para el directorio</label>
    <div class="input-box">
    <input type="text" name="nombre" id="nombre" value="" />
    <input type="submit" name="crear" id="crear" value="Crear" />
    </div>

    </form>
    
</body>
</html>

