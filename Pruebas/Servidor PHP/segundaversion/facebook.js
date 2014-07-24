// 
//  Registro.js
//  WanagoSistema
//  
//  Created by Alonso Campos on 2014-05-19.
//  Copyright 2014 Alonso Campos. All rights reserved.
// 

function checkemail(emailAddress)
{
  var testresults;
    var str = emailAddress;
    var filter = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (filter.test(str))
    {
        testresults = true;
    }
    else
    {
        testresults = false;
    }
    return (testresults);
};

function LoginFacebook (correo,nombre,apellidos,genero,fechaNacimiento) 
{
    var params = {
          email: correo,
          nombre:nombre,
          apellido:apellidos,
          genero:genero,
          activo:1,
          fechaNacimiento:fechaNacimiento
    };

    var enviar = Ti.Network.createHTTPClient({ 
        onerror: function(e){ 
            Ti.API.debug(e.error); 
              alert('There was an error during the connection'); 
        }, 
            timeout:3000, 
    });

    enviar.open('POST', 'http://localhost/wanagow/segundaversion/loginFacebook.php'); 
    enviar.send(params);
    enviar.onload = function(){
          if (this.responseText == "Insert failed" || this.responseText == "That username or email already exists")
          {
              alert(this.responseText);
          } 
          else
          {
              var alertDialog = Titanium.UI.createAlertDialog({
                  title: 'Alert',
                  message: this.responseText,
                  buttonNames: ['OK']
              });
              alertDialog.show();
                           
          }                                                                                                                                                                                                                                                                               
    };      
}

function NuevaCuenta () 
{
  if ($.txtEmailw.value != '' && $.txtPasswordw.value != '' && $.txtconfirmew.value != '' 
    && $.txtnombrew.value != '' && $.txtapellidow.value != '')
    {
        if ($.txtPasswordw.value != $.txtconfirmew.value)
        {
            alert("Las contraseñas no coinciden");
        }
        else
        {
            if (!checkemail($.txtEmailw.value))
            {
                alert("Por favor ingresa un correo valido");
            }
            else
            {
              createReq.open("POST","http://localhost/wanagow/new.php");
                var params = {
                  nombre: $.txtnombrew.value,
                    apellido: $.txtapellidow.value,
                    email: $.txtEmailw.value,
                    password: $.txtPasswordw.value,
                    //password: Ti.Utils.md5HexDigest(password1.value),
                    
                };
                createReq.send(params);
                alert("Informacion enviada");
            }
        }
    }
    else
    {
        alert("Complete la informacion necesaria");
    }
}

var createReq = Titanium.Network.createHTTPClient({
        onload:function()
        {
            if (this.responseText == "Insert failed" || this.responseText == "That username or email already exists")
            {
                alert(this.responseText);
            } 
            else
            {
                /*
                var alertDialog = Titanium.UI.createAlertDialog({
                    title: 'Alert',
                    message: this.responseText,
                    buttonNames: ['OK']
                });
                alertDialog.show();
                */
                var params = {
                    email: $.txtEmailw.value,
                    password: $.txtPasswordw.value,
                    nombre: $.txtnombrew.value,
                    apellido: $.txtapellidow.value
                };
                
               Alloy.createController('Next',params).getView().open();
            }
        }
});

function siguiente () {
  Alloy.createController('Next').getView().open();
}

function LoginFacebook()
{
    Titanium.Facebook.appid = "1423658011243570";
    Titanium.Facebook.permissions = ['publish_stream', 'read_stream','user_birthday','email'];
 
    Titanium.Facebook.addEventListener('login', function(e) 
    {
        if (e.success)
        {
            alert('Successfully loggedin');
            
            siguiente();
            
            var genero;
            if(e.data.gender==="male")
            {
              genero =1;  
            }
            else
            {
              genero=0;
            }    
            formContainer.visible = true;

          loginFacebook(e.data.email,e.data.first_name ,e.data.last_name,genero,e.data.fechaNacimiento);
        
        }
        else if (e.error)
        { 
            alert("Error = "+e.error);
        }
        else if (e.cancelled)
        {
            alert('cancelled');
        }
         
    });
}
