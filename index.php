<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet"" href="stilo.css">
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>trabajo</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-family: "Open Sans";
            color: #fff;
        }
        section{
            background: url("tacos.jpg");
            height: 100vh;
            width: 100%;
            background-size: cover;
            background-position: center center;
        }
        input
        {
            background-color: #0B5345;
            margin:20px;
            padding:10px;
            border-radius: 10px;
        }
        h3
        {
            color: #0B5345;
            font-size: 4em;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 6rem;
            font-weight: bold;
            
        }
        
    </style>
    


    <script>
        function accionParaCuandoEllaDigaQueSi(){
            alert('SABIA QUE DIRIAS QUE SI TKM <3' <br> ATT.AMPUERO);
        }

        function mueveElBoton(){
            width = window.innerWidth;
            height = window.innerHeight;

            newWidth = (Math.random() * width);
            newHeight = (Math.random() * height);

            document.getElementById('btnNo').style.position = "absolute";
            document.getElementById('btnNo').style.left = newWidth + "px";
            document.getElementById('btnNo').style.top = newHeight + "px";


        }
    </script>
</head>
<body>
<section>
    <center>
        
      
        <BR><BR><BR><BR><BR><BR>
    <h3>QUIERES IR CONMIGO A LOS TACOS?</h3>
    <input type="button" onclick="accionParaCuandoEllaDigaQueSi()" id="btnSi" value="Si" />
    <input type="button" id="btnNo" onmouseover="mueveElBoton()" value="No" />
    </center>
    
   
    </section>
</body>
</html>
