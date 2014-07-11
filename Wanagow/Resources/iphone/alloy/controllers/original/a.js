function Controller() {
    require("alloy/controllers/BaseController").apply(this, Array.prototype.slice.call(arguments));
    this.__controllerPath = "original/a";
    arguments[0] ? arguments[0]["__parentSymbol"] : null;
    arguments[0] ? arguments[0]["$model"] : null;
    arguments[0] ? arguments[0]["__itemTemplate"] : null;
    var $ = this;
    var exports = {};
    var __defers = {};
    var __alloyId8 = [];
    $.__views.readWin = Ti.UI.createWindow({
        id: "readWin"
    });
    getTodoList ? $.__views.readWin.addEventListener("open", getTodoList) : __defers["$.__views.readWin!open!getTodoList"] = true;
    $.__views.cabecera = Ti.UI.createView({
        id: "cabecera"
    });
    $.__views.readWin.add($.__views.cabecera);
    $.__views.buscar = Ti.UI.createSearchBar({
        id: "buscar",
        barColor: "#000"
    });
    $.__views.readWin.add($.__views.buscar);
    $.__views.im1 = Ti.UI.createImageView({
        id: "im1"
    });
    $.__views.readWin.add($.__views.im1);
    $.__views.label = Ti.UI.createLabel({
        text: "I am a red window.",
        id: "label"
    });
    $.__views.readWin.add($.__views.label);
    $.__views.im2 = Ti.UI.createImageView({
        id: "im2"
    });
    $.__views.readWin.add($.__views.im2);
    $.__views.tableView = Ti.UI.createTableView({
        id: "tableView"
    });
    $.__views.readWin.add($.__views.tableView);
    $.__views.__alloyId9 = Ti.UI.createButton({
        title: "Refresh",
        id: "__alloyId9"
    });
    $.__views.readWin.add($.__views.__alloyId9);
    getTodoList ? $.__views.__alloyId9.addEventListener("click", getTodoList) : __defers["$.__views.__alloyId9!click!getTodoList"] = true;
    $.__views.tab1 = Ti.UI.createTab({
        window: $.__views.readWin,
        id: "tab1",
        title: "Eventos",
        icon: "KS_nav_views.png"
    });
    __alloyId8.push($.__views.tab1);
    $.__views.fgWin = Ti.UI.createWindow({
        id: "fgWin"
    });
    $.__views.fgHeader = Ti.UI.createView({
        id: "fgHeader"
    });
    $.__views.fgWin.add($.__views.fgHeader);
    $.__views.fgHeaderTitle = Ti.UI.createLabel({
        text: "Septiembre",
        id: "fgHeaderTitle"
    });
    $.__views.fgHeader.add($.__views.fgHeaderTitle);
    $.__views.izquierda = Ti.UI.createView({
        id: "izquierda"
    });
    $.__views.fgHeader.add($.__views.izquierda);
    $.__views.imagenizquierda = Ti.UI.createImageView({
        id: "imagenizquierda",
        image: "img/izquierda.png"
    });
    $.__views.izquierda.add($.__views.imagenizquierda);
    $.__views.derecha = Ti.UI.createView({
        id: "derecha"
    });
    $.__views.fgHeader.add($.__views.derecha);
    $.__views.imagenderecha = Ti.UI.createImageView({
        id: "imagenderecha",
        image: "img/derecha.png"
    });
    $.__views.derecha.add($.__views.imagenderecha);
    $.__views.days = Ti.UI.createView({
        id: "days"
    });
    $.__views.fgHeader.add($.__views.days);
    $.__views.lun = Ti.UI.createLabel({
        text: "Lun",
        id: "lun"
    });
    $.__views.days.add($.__views.lun);
    $.__views.mar = Ti.UI.createLabel({
        text: "Mar",
        id: "mar"
    });
    $.__views.days.add($.__views.mar);
    $.__views.mie = Ti.UI.createLabel({
        text: "Mie",
        id: "mie"
    });
    $.__views.days.add($.__views.mie);
    $.__views.jue = Ti.UI.createLabel({
        text: "Jue",
        id: "jue"
    });
    $.__views.days.add($.__views.jue);
    $.__views.vie = Ti.UI.createLabel({
        text: "Vie",
        id: "vie"
    });
    $.__views.days.add($.__views.vie);
    $.__views.sab = Ti.UI.createLabel({
        text: "Sab",
        id: "sab"
    });
    $.__views.days.add($.__views.sab);
    $.__views.dom = Ti.UI.createLabel({
        text: "Dom",
        id: "dom"
    });
    $.__views.days.add($.__views.dom);
    $.__views.fgMain = Ti.UI.createView({
        id: "fgMain"
    });
    $.__views.fgWin.add($.__views.fgMain);
    $.__views.fgWrapper = Ti.UI.createView({
        id: "fgWrapper"
    });
    $.__views.fgMain.add($.__views.fgWrapper);
    $.__views.fgScrollView = Ti.UI.createScrollView({
        id: "fgScrollView"
    });
    $.__views.fgWrapper.add($.__views.fgScrollView);
    $.__views.tableEventos = Ti.UI.createTableView({
        id: "tableEventos",
        borderRadios: "10",
        width: "auto",
        height: "442"
    });
    $.__views.fgMain.add($.__views.tableEventos);
    $.__views.tab2 = Ti.UI.createTab({
        window: $.__views.fgWin,
        id: "tab2",
        title: "Calendario",
        icon: "KS_nav_views.png"
    });
    __alloyId8.push($.__views.tab2);
    $.__views.win3 = Ti.UI.createWindow({
        id: "win3",
        title: ""
    });
    $.__views.mapa = Ti.UI.createWebView({
        id: "mapa",
        url: "http://www.lenguajesdeprogramacion.esy.es/"
    });
    $.__views.win3.add($.__views.mapa);
    $.__views.tab3 = Ti.UI.createTab({
        window: $.__views.win3,
        id: "tab3",
        title: "Rutas",
        icon: "KS_nav_views.png"
    });
    __alloyId8.push($.__views.tab3);
    $.__views.win4 = Ti.UI.createWindow({
        id: "win4",
        backgroundColor: "white"
    });
    principal ? $.__views.win4.addEventListener("open", principal) : __defers["$.__views.win4!open!principal"] = true;
    $.__views.tableViewAcademica = Ti.UI.createTableView({
        id: "tableViewAcademica",
        top: "0",
        borderRadios: "10",
        width: "auto",
        height: "442"
    });
    $.__views.win4.add($.__views.tableViewAcademica);
    $.__views.tableViewCultural = Ti.UI.createTableView({
        id: "tableViewCultural",
        top: "550",
        borderRadios: "10",
        width: "auto",
        height: "1041"
    });
    $.__views.win4.add($.__views.tableViewCultural);
    $.__views.tableViewEntretenimiento = Ti.UI.createTableView({
        id: "tableViewEntretenimiento",
        top: "1650",
        borderRadios: "10",
        width: "auto",
        height: "1601"
    });
    $.__views.win4.add($.__views.tableViewEntretenimiento);
    $.__views.tab4 = Ti.UI.createTab({
        window: $.__views.win4,
        id: "tab4",
        title: "Cuenta",
        icon: "KS_nav_views.png"
    });
    __alloyId8.push($.__views.tab4);
    $.__views.mainTabGroup = Ti.UI.createTabGroup({
        tabs: __alloyId8,
        backgroundColor: "#696969",
        id: "mainTabGroup"
    });
    $.__views.mainTabGroup && $.addTopLevelView($.__views.mainTabGroup);
    exports.destroy = function() {};
    _.extend($, $.__views);
    __defers["$.__views.readWin!open!getTodoList"] && $.__views.readWin.addEventListener("open", getTodoList);
    __defers["$.__views.__alloyId9!click!getTodoList"] && $.__views.__alloyId9.addEventListener("click", getTodoList);
    __defers["$.__views.win4!open!principal"] && $.__views.win4.addEventListener("open", principal);
    _.extend($, exports);
}

var Alloy = require("alloy"), Backbone = Alloy.Backbone, _ = Alloy._;

module.exports = Controller;