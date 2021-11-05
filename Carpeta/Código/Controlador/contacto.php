<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CONTACTO</title>
    <link rel="shortcut icon" href="../Imagenes/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
 <body background= "../Imagenes/FOL11.jpg" style="background-repeat: no-repeat; background-position: absolute;background-size: cover">
    <section class="form_wrap">
<style type="text/css">
    
*{
    margin: 0;
    padding: 0;
    box-sizing:border-box;
}

:focus{
    outline: none;
}

body{
    background: "../Imagenes/FOL11.jpg"
    font-family: 'Time-New-Roman';
}

/* FORMULARIO =================================== */

.form_wrap{
    width: 800px;
    height: 470px;
    margin: 60px auto;
    display: flex;

    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
}

/* Informacion de Contacto*/

.cantact_info::before{
    content: '';
    width: 100%;
    height: 100%;

    position: absolute;
    top: 0;
    left: 0;

    background: linear-gradient(
30deg
, #1C2833 ,#212F3D, #060505, #212F3D, #1C2833 );;
    opacity: 0.9;
}

.cantact_info{
    width: 36%;
    position: relative;

    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

    background-size: cover;
    background-position: center center;

}

.info_title,
.info_items{
    position: relative;
    z-index: 2;
    color: #fff;
}

.info_title{
    margin-bottom: 40px;
}

.info_title span{
    font-size: 100px;
    display: block;
    text-align: center;
    margin-bottom: 15px;
}

.info_title h2{
    font-size: 35px;
    text-align: center;
}

.info_items p{
    display: flex;
    align-items: center;

    font-size: 16px;
    font-weight: 600;
    margin-bottom: 10px;
}

.info_items p:nth-child(1) span{
    font-size: 30px;
    margin-right: 10px;
}

.info_items p:nth-child(2) span{
    font-size: 50px;
    margin-right: 15px;
    margin-left: 4px;
}


/* Formulario de contacto*/
form.form_contact{
    width: 62%;
    padding: 30px 40px;
}

form.form_contact h2{
    font-size: 25px;
    font-weight: 600;
    color: #30300;
    margin-bottom: 30px;
}

form.form_contact .user_info{
    display: flex;
    flex-direction: column;
}

form.form_contact label{
    font-weight: 600;
}

form.form_contact input,
form.form_contact textarea{
    width: 100%;
    padding: 8px 0px 5px;
    margin-bottom: 20px;

    border: none;
    border-bottom: 2px solid #D1D1D1;

    font-family: 'Open sans';
    color: #5A5A5A;
    font-size: 14px;
    font-weight: 400;
}

form.form_contact textarea{
    max-width: 100%;
    min-width: 100%;
    max-height: 90px;
}

form.form_contact input[type="button"]{
    width: 180px;
    background: black;
    padding: 10px;
    border: none;
    border-radius: 25px;

    align-self: flex-end;

    color: #fff;
    font-family: 'Open sans';
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
}

form.form_contact input[type="button"]:hover{
    background: #3371B6;
}
.bto {
  position:absolute;
  left:6%;
  top:10%;
  width:3%;
  height:6%;
  box-shadow:  5px 5px 5px black; 
  background-color:#E1E8EA;
}

</style>
        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
               <h2>INFORMACIÓN<br>DE CONTACTO</h2>
            </section>
            <section class="info_items">
                <p><i style="margin-right: 5%;" class="fa fa-envelope fa-2x"></i> lkcalderon46@misena.edu.co <br> catiria4@misena.edu.co</p>
                <p><span style="margin-left: -0.5%" class="fas fa-mobile-alt"></span> 320-447-3192 - 310-456-345</p>
            </section>
        </section>

        
            <form class="form_contact"action="mailto:lkcalderon46@misena.edu.co,
catiria4@misena.edu.co " method="post" enctype="text/plain">
    <BR>
            <h2>Envia un mensaje</h2>
            <div class="user_info">
                <div id="nombre">
                <label for="names">Nombres *</label>
                <input  required="" style="margin-left: 1px" type="text" name="Nombre"  >
    </div>
              <div id="Correo">
                <label for="email">Correo electronico *</label>
               <input required="" type="text" name="Direccion"  placeholder="Por ejemplo, Maria03@misena.edu.co" > 
  </div>
   <div id="Mensaje">
                <label for="Asunto">Mensaje *</label>
               <textarea required=""   name="Asunto"   > </textarea>
  </div>
             
</div>
<div id="button">

<input type="submit" value="Enviar Mensaje" >
            </div>
        </form>

    </section>
</body><div class="divbutton1">
<button  class="bto"><a href="javascript:history.back()"><p class="fas fa-arrow-left fa-2x"></p></a></button>
</div>
</html>