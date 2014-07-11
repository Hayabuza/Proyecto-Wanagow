function Controller() {
    function checkemail(emailAddress) {
        var testresults;
        var str = emailAddress;
        var filter = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        testresults = filter.test(str) ? true : false;
        return testresults;
    }
    function NuevaCuenta() {
        if ("" != $.txtEmailw.value && "" != $.txtPasswordw.value && "" != $.txtconfirmew.value && "" != $.txtnombrew.value && "" != $.txtapellidow.value && null != picker.value && "" != picker.value && 1 == $.mujer.opacity || 1 == $.hombre.opacity) if ($.txtPasswordw.value != $.txtconfirmew.value) alert("Las contraseñas no coinciden"); else if (checkemail($.txtEmailw.value)) {
            var genero;
            genero = 1 == $.mujer.opacity ? 0 : 1;
            createReq.open("POST", "http://localhost/wanagow/new.php");
            var params = {
                nombre: $.txtnombrew.value,
                apellido: $.txtapellidow.value,
                email: $.txtEmailw.value,
                fecha: picker.value,
                genero: genero,
                password: Ti.Utils.md5HexDigest($.txtPasswordw.value)
            };
            createReq.send(params);
            alert("Informacion enviada");
        } else alert("Por favor ingresa un correo valido"); else alert("Complete la informacion necesaria");
    }
    require("alloy/controllers/BaseController").apply(this, Array.prototype.slice.call(arguments));
    this.__controllerPath = "Registro";
    arguments[0] ? arguments[0]["__parentSymbol"] : null;
    arguments[0] ? arguments[0]["$model"] : null;
    arguments[0] ? arguments[0]["__itemTemplate"] : null;
    var $ = this;
    var exports = {};
    var __defers = {};
    $.__views.container = Ti.UI.createWindow({
        backgroundColor: "white",
        id: "container"
    });
    $.__views.container && $.addTopLevelView($.__views.container);
    $.__views.imagenw = Ti.UI.createImageView({
        image: "imagen/reeee.jpg",
        height: 100,
        width: 800,
        righ: 900,
        top: 20,
        id: "imagenw"
    });
    $.__views.container.add($.__views.imagenw);
    $.__views.imagew = Ti.UI.createImageView({
        image: "imagen/face.jpg",
        height: Ti.UI.SIZE,
        width: Ti.UI.SIZE,
        top: 130,
        id: "imagew"
    });
    $.__views.container.add($.__views.imagew);
    $.__views.label1w = Ti.UI.createLabel({
        height: Ti.UI.SIZE,
        width: Ti.UI.SIZE,
        color: "black",
        layout: "center",
        top: 190,
        text: "DATOS DE LA CUENTA",
        id: "label1w"
    });
    $.__views.container.add($.__views.label1w);
    $.__views.txtEmailw = Ti.UI.createTextField({
        width: 300,
        right: 50,
        left: 250,
        height: 45,
        top: 250,
        hintText: "Email",
        borderColor: "#F4CE00",
        borderWidth: 1.2,
        borderRadius: 10,
        borderStyle: "Ti.UI.INPUT_BORDERSTYLE_ROUNDED",
        color: "black",
        id: "txtEmailw"
    });
    $.__views.container.add($.__views.txtEmailw);
    $.__views.txtPasswordw = Ti.UI.createTextField({
        width: 300,
        right: 50,
        left: 250,
        height: 45,
        top: 300,
        borderWidth: 1.2,
        borderRadius: 10,
        hintText: "Password",
        borderColor: "#F4CE00",
        borderStyle: "Ti.UI.INPUT_BORDERSTYLE_ROUNDED",
        color: "black",
        id: "txtPasswordw",
        passwordMask: "true"
    });
    $.__views.container.add($.__views.txtPasswordw);
    $.__views.txtconfirmew = Ti.UI.createTextField({
        width: 300,
        right: 50,
        left: 250,
        height: 45,
        top: 350,
        hintText: "Confirme Password",
        borderColor: "#F4CE00",
        borderStyle: "Ti.UI.INPUT_BORDERSTYLE_ROUNDED",
        color: "black",
        id: "txtconfirmew",
        passwordMask: "true"
    });
    $.__views.container.add($.__views.txtconfirmew);
    $.__views.label2w = Ti.UI.createLabel({
        height: Ti.UI.SIZE,
        width: Ti.UI.SIZE,
        top: 410,
        text: "DATOS DEL USUARIO",
        id: "label2w"
    });
    $.__views.container.add($.__views.label2w);
    $.__views.txtnombrew = Ti.UI.createTextField({
        width: 300,
        right: 50,
        left: 250,
        height: 45,
        top: 450,
        hintText: "Nombre",
        borderColor: "#F4CE00",
        borderStyle: "Ti.UI.INPUT_BORDERSTYLE_ROUNDED",
        color: "black",
        id: "txtnombrew"
    });
    $.__views.container.add($.__views.txtnombrew);
    $.__views.txtapellidow = Ti.UI.createTextField({
        width: 300,
        right: 50,
        left: 250,
        height: 45,
        top: 500,
        hintText: "Apellido",
        borderColor: "#F4CE00",
        borderStyle: "Ti.UI.INPUT_BORDERSTYLE_ROUNDED",
        color: "black",
        id: "txtapellidow"
    });
    $.__views.container.add($.__views.txtapellidow);
    $.__views.btn1w = Ti.UI.createButton({
        width: 300,
        right: 300,
        left: 250,
        backgroundColor: "#E3C109",
        height: 50,
        top: 570,
        font: {
            fontFamily: "Helvetica Neue"
        },
        color: "white",
        title: "Fecha de Nacimiento",
        id: "btn1w"
    });
    $.__views.container.add($.__views.btn1w);
    $.__views.label3w = Ti.UI.createLabel({
        width: 100,
        right: 100,
        left: 260,
        height: 50,
        top: 650,
        text: "Sexo:",
        id: "label3w"
    });
    $.__views.container.add($.__views.label3w);
    $.__views.mujer = Ti.UI.createButton({
        width: 100,
        right: 100,
        left: 340,
        backgroundColor: "#DCBC0D",
        height: 50,
        top: 650,
        font: {
            fontFamily: "Helvetica Neue"
        },
        color: "white",
        title: "Mujer",
        id: "mujer"
    });
    $.__views.container.add($.__views.mujer);
    $.__views.hombre = Ti.UI.createButton({
        width: 100,
        right: 100,
        left: 436,
        backgroundColor: "#C5B76A",
        height: 50,
        top: 650,
        font: {
            fontFamily: "Helvetica Neue"
        },
        color: "white",
        title: "Hombre",
        id: "hombre"
    });
    $.__views.container.add($.__views.hombre);
    $.__views.btn4w = Ti.UI.createButton({
        width: 100,
        right: 500,
        left: 600,
        backgroundColor: "#515050",
        height: 50,
        top: 750,
        font: {
            fontFamily: "Helvetica Neue"
        },
        color: "white",
        title: "Siguiente",
        id: "btn4w"
    });
    $.__views.container.add($.__views.btn4w);
    NuevaCuenta ? $.__views.btn4w.addEventListener("click", NuevaCuenta) : __defers["$.__views.btn4w!click!NuevaCuenta"] = true;
    exports.destroy = function() {};
    _.extend($, $.__views);
    var cancel = Titanium.UI.createButton({
        title: "Close",
        top: 2,
        left: 30,
        height: 30,
        width: 44
    });
    var done = Titanium.UI.createButton({
        title: "Done",
        right: 30,
        top: 2,
        height: 40,
        width: 42
    });
    var picker_view = Titanium.UI.createView({
        backgroundColor: "yellow",
        top: "80%",
        height: 400,
        width: 420
    });
    var picker = Ti.UI.createPicker({
        top: 43,
        value: new Date(),
        type: Ti.UI.PICKER_TYPE_DATE,
        minDate: new Date(1980, 11, 31),
        maxDate: new Date(2016, 11, 31),
        selectionIndicator: true
    });
    var alineacion;
    var ancho;
    var alto;
    var letranormal;
    var alineacion = "13%";
    var ancho = "75%";
    var alto = "7%";
    var letranormal = {
        fontFamily: "Arial",
        fontSize: "12%"
    };
    $.imagenw.height = "8%";
    $.imagew.top = "13%";
    $.imagew.width = "40%";
    $.label1w.font = letranormal;
    $.label2w.font = letranormal;
    $.label3w.font = letranormal;
    picker_view.width = ancho;
    picker_view.top = "55%";
    picker_view.left = alineacion;
    done.top = "-1.4%";
    cancel.top = "0%";
    done.left = "70%";
    cancel.left = "10%";
    $.label1w.top = "19%";
    $.txtEmailw.top = "22%";
    $.txtPasswordw.top = "30%";
    $.txtconfirmew.top = "38%";
    $.label2w.top = "44%";
    $.txtnombrew.top = "50%";
    $.txtapellidow.top = "58%";
    $.btn1w.top = "66%";
    $.label3w.top = "74%";
    $.mujer.top = "74%";
    $.hombre.top = "74%";
    $.btn4w.top = "82%";
    $.label1w.left = alineacion;
    $.txtconfirmew.left = alineacion;
    $.txtEmailw.left = alineacion;
    $.txtPasswordw.left = alineacion;
    $.label2w.left = alineacion;
    $.txtnombrew.left = alineacion;
    $.txtapellidow.left = alineacion;
    $.btn1w.left = alineacion;
    $.label3w.left = alineacion;
    $.mujer.left = "25%";
    $.hombre.left = "58%";
    $.btn4w.left = alineacion;
    $.txtPasswordw.width = ancho;
    $.txtconfirmew.width = ancho;
    $.txtEmailw.width = ancho;
    $.label2w.width = ancho;
    $.txtnombrew.width = ancho;
    $.txtapellidow.width = ancho;
    $.btn1w.width = ancho;
    $.label3w.width = ancho;
    $.mujer.width = "30%";
    $.hombre.width = "30%";
    $.btn4w.width = ancho;
    $.txtPasswordw.height = alto;
    $.txtconfirmew.height = alto;
    $.txtEmailw.height = alto;
    $.label2w.height = alto;
    $.txtnombrew.height = alto;
    $.txtapellidow.height = alto;
    $.btn1w.height = alto;
    $.label3w.height = alto;
    $.mujer.height = alto;
    $.hombre.height = alto;
    $.btn4w.height = alto;
    $.mujer.addEventListener("click", function() {
        $.mujer.opacity = 1;
        $.hombre.opacity = .4;
    });
    $.hombre.addEventListener("click", function() {
        $.hombre.opacity = 1;
        $.mujer.opacity = .4;
    });
    $.btn1w.addEventListener("click", function() {
        picker.addEventListener("change", function(e) {
            Ti.API.info("User selected date: " + e.value.toLocaleString());
        });
        done.addEventListener("click", function() {
            picker_view.animate({
                duration: 1e3,
                top: "120%"
            });
            alert(picker.value);
        });
        cancel.addEventListener("click", function() {
            picker_view.animate({
                duration: 1e3,
                top: "120%"
            });
        });
        picker_view.add(cancel);
        picker_view.add(done);
        picker_view.add(picker);
        $.container.add(picker_view);
    });
    var createReq = Titanium.Network.createHTTPClient({
        onload: function() {
            if ("Insert failed" == this.responseText || "That username or email already exists" == this.responseText) alert(this.responseText); else {
                var genero;
                genero = 1 == $.mujer.opacity ? 0 : 1;
                var parametos = {
                    email: $.txtEmailw.value,
                    nombre: $.txtnombrew.value,
                    apellido: $.txtapellidow.value,
                    fecha: picker.value,
                    genero: genero,
                    password: Ti.Utils.md5HexDigest($.txtPasswordw.value)
                };
                Alloy.createController("Next", parametos).getView().open();
            }
        }
    });
    __defers["$.__views.btn4w!click!NuevaCuenta"] && $.__views.btn4w.addEventListener("click", NuevaCuenta);
    _.extend($, exports);
}

var Alloy = require("alloy"), Backbone = Alloy.Backbone, _ = Alloy._;

module.exports = Controller;