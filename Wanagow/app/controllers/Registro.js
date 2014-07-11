// 
//  Registro.js
//  WanagoSistema
//  
//  Created by Alonso Campos on 2014-05-19.
//  Copyright 2014 Alonso Campos. All rights reserved.
// 
	
	

	var cancel = Titanium.UI.createButton({
	    title 			: 'Close',
	    top				: 2,
	    left			: 30,
	    height 			: 30,
	    width 			: 44,
	});
	
	var done = Titanium.UI.createButton({
	    title 			: 'Done',
	    right			: 30,
	    top				: 2,
	    height 			: 40,
	    width 			: 42,
	});
	
	var picker_view = Titanium.UI.createView({
		backgroundColor	: 'yellow',
	    top 			: '80%',
	    height 			: 400,
	    width 			: 420,
	    
	});
	
	
	var picker = Ti.UI.createPicker({
		top 				: 43,
        value 				: new Date(),
        type 				: Ti.UI.PICKER_TYPE_DATE,
        minDate 			: new Date(1980,11,31),
        maxDate 			: new Date(2016,11,31),
        selectionIndicator  : true
	});

if(Ti.Platform.osname == 'iphone' || Ti.Platform.osname == 'android')
{
	
	
		
	var alineacion 			= '13%';
	var ancho	   			= '75%';
	var alto 				= '7%';
	var letranormal 		= {fontFamily:'Arial', fontSize:'12%',};
	
	$.imagenw.height		= '8%';
	$.imagew.top	 		= '13%';
	$.imagew.width			= '40%';
	$.label1w.font			= letranormal;
	$.label2w.font			= letranormal;
	$.label3w.font			= letranormal;
	picker_view.width		= ancho;
	picker_view.top			= '55%';
	picker_view.left		= alineacion;
	done.top				= '-1.4%';
	cancel.top				= '0%';
	done.left				= '70%';
	cancel.left				= '10%';
	
	$.label1w.top			= '19%';
	$.txtEmailw.top			= '22%';
	$.txtPasswordw.top		= '30%';
	$.txtconfirmew.top		= '38%';
	$.label2w.top			= '44%';
	$.txtnombrew.top		= '50%';
	$.txtapellidow.top		= '58%';
	$.btn1w.top				= '66%';
	$.label3w.top			= '74%';
	$.mujer.top				= '74%';
	$.hombre.top			= '74%';
	$.btn4w.top				= '82%';
	
	$.label1w.left			= alineacion;
	$.txtconfirmew.left		= alineacion;
	$.txtEmailw.left		= alineacion;
	$.txtPasswordw.left		= alineacion;
	$.label2w.left			= alineacion;
	$.txtnombrew.left		= alineacion;
	$.txtapellidow.left		= alineacion;
	$.btn1w.left			= alineacion;
	$.label3w.left			= alineacion;
	$.mujer.left			= '25%';
	$.hombre.left			= '58%';
	$.btn4w.left			= alineacion;
	
	$.txtPasswordw.width	= ancho;
	$.txtconfirmew.width	= ancho;
	$.txtEmailw.width		= ancho;
	$.label2w.width			= ancho;
	$.txtnombrew.width		= ancho;
	$.txtapellidow.width	= ancho;
	$.btn1w.width			= ancho;
	$.label3w.width			= ancho;
	$.mujer.width			= '30%';
	$.hombre.width			= '30%';
	$.btn4w.width			= ancho;
	
	$.txtPasswordw.height	= alto;
	$.txtconfirmew.height	= alto;
	$.txtEmailw.height		= alto;
	$.label2w.height		= alto;
	$.txtnombrew.height		= alto;
	$.txtapellidow.height	= alto;
	$.btn1w.height			= alto;
	$.label3w.height		= alto;
	$.mujer.height			= alto;
	$.hombre.height			= alto;
	$.btn4w.height			= alto;
	
	
	
	
};






$.mujer.addEventListener('click',function(){
	$.mujer.opacity = 1;
	$.hombre.opacity =0.4;
});

$.hombre.addEventListener('click',function(){
	$.hombre.opacity = 1;
	$.mujer.opacity =0.4;
});


$.btn1w.addEventListener('click',function(){
	picker.addEventListener('change',function(e){
	  	Ti.API.info("User selected date: " + e.value.toLocaleString());
	  	
	});
	done.addEventListener('click',function(){
	
			picker_view.animate({
				duration:1000,
				top:'120%',
			});
		
			alert(picker.value);		
		
		
	});
	
	cancel.addEventListener('click',function(){
		picker_view.animate({
			duration:1000,
			top:'120%',
			
		});
	});
	
	
	
	picker_view.add(cancel);
	picker_view.add(done);
	picker_view.add(picker);
	$.container.add(picker_view);
	
	
});








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
               var genero;
               
            	if($.mujer.opacity==1)
            	{
            		genero=0;
            	}else{
            		genero=1;
            	}
            	
               
               
                var parametos = {
                    email		: $.txtEmailw.value,
                    //password	: $.txtPasswordw.value,
                   	nombre		: $.txtnombrew.value,
                    apellido	: $.txtapellidow.value,
                    fecha	 	: picker.value,
                    genero	 	: genero ,
                    password	: Ti.Utils.md5HexDigest($.txtPasswordw.value),
                    
                    
                };
                
               Alloy.createController('Next',parametos).getView().open();
            }
        }
    });


function NuevaCuenta () {
	if ($.txtEmailw.value != '' && $.txtPasswordw.value != '' && $.txtconfirmew.value 
	!= '' && $.txtnombrew.value != '' && $.txtapellidow.value != ''
	&& picker.value!=null && picker.value!='' && $.mujer.opacity==1 || $.hombre.opacity==1 )
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
            	var genero;
            	if($.mujer.opacity==1)
            	{
            		genero=0;
            	}else{
            		genero=1;
            	}
            	
            	
            	createReq.open("POST","http://localhost/wanagow/new.php");
                var params = {
                	nombre	 : $.txtnombrew.value,
                    apellido : $.txtapellidow.value,
                    email	 : $.txtEmailw.value,
                    //password : $.txtPasswordw.value,
                    fecha	 : picker.value,
                    genero	 : genero ,
                    password: Ti.Utils.md5HexDigest($.txtPasswordw.value),
                    
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

function siguiente () {
	Alloy.createController('Next').getView().open();
}
