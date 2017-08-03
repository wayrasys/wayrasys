var usuarioM = function(data){
    this.id = null;
    this.username = null;
    this.username_canonical = null;
    this.email = null;
    this.email_canonical = null;
    this.enabled = null;
    this.salt = null;
    this.documento = null;
    this.nombre = null;
    this.apellido = null;
    this.direccion = null;
    this.celular = null;
    this.telefono = null;
    this.fechanacimiento = null;
    this.facebook = null;
    this.instagram = null;
    this.social = null;
    this.fechacreacion = null;
	
    $.ko_deserializeModel(this, data);
};

var usuarioView = function(container, usuario){
    $(container).html($("#usuarioTmpl").html());
    if (usuario === undefined){
        usuario = new usuarioM();
    }
    var vm = new usuarioVM(usuario);
    ko.applyBindings(vm, $(container)[0]);
    return vm;
};

var usuarioVM = function(data){
    var self = this;
    
    self.id = ko.observable(data.id);
    self.username = ko.observable(data.username);
    self.username_canonical = ko.observable(data.username_canonical);
    self.email = ko.observable(data.email);
    self.email_canonical = ko.observable(data.email_canonical);
    self.enabled = ko.observable(data.enabled);
    self.salt = ko.observable(data.salt);
    self.documento = ko.observable(data.documento);
    self.nombre = ko.observable(data.nombre);
    self.apellido = ko.observable(data.apellido);
    self.direccion = ko.observable(data.direccion);
    self.celular = ko.observable(data.celular);
    self.telefono = ko.observable(data.telefono);
    self.fechanacimiento = ko.observable(data.fechanacimiento);
    self.facebook = ko.observable(data.facebook);
    self.instagram = ko.observable(data.instagram);
    self.social = ko.observable(data.social);
    self.fechacreacion = ko.observable(data.fechacreacion);
};

function usuariosVM (usuarios){
    var self = this;
    
    self.usuarios = ko.observableArray();
    self.buscar = ko.observable();
    
    self.nuevo_click_handle_function = null;
    self.nuevo_click_handle = function(hfunction){
        self.nuevo_click_handle_function = hfunction;
    };
        
    self.nuevo = function() {
        if (self.nuevo_click_handle_function!== null){
            self.nuevo_click_handle_function();
        }
    };
	
    var nombres = ["Pepe", "Carlos", "Jesús", "Lola", "Maria Rosa", "Maria","Ernesto", "Javier", "Pablo","Juan Jose","Javiar Alejandro"];
    var apellidos = ["Lopez", "Salas", "Mateo", "Abas", "De Diego","Quesada", "Alcala", "Marin", "Suarez", "Cobos","Chamoscu"];
	
    for(var i = 0; i<50;i++){
	self.usuarios.push(new usuarioM({documento:"22333555", apellido:apellidos[Math.floor(Math.random()*11)], nombre:nombres[Math.floor(Math.random()*11)]}));
    }
        
    self.filterUsuarios = ko.computed(function () {
        if (!self.buscar()) {
            return self.usuarios();
        } else {
            return ko.utils.arrayFilter(self.usuarios(), function (usuario) {
                var filtro = self.buscar().toUpperCase();
                var res = false;
                var arfiltro = filtro.split(" "); 
                for (var i = 0; i < arfiltro.length; i++){
                    filtro = arfiltro[i];
                    if (filtro !== ""){
                        if (usuario.apellido !== undefined && usuario.apellido !== null){
                            var f = usuario.apellido.toUpperCase();
                            if (f.includes(filtro)){return true;}
                        }
                        if (usuario.nombre !== undefined && usuario.nombre !== null){
                            var f = usuario.nombre.toUpperCase();
                            if (f.includes(filtro)){return true;}
                        }
                    }
                }
                return res;
            });
        }
    });        
};

var usuariosView = function(container, usuarios){
    $(container).html($("#usuariosTmpl").html());
    var vm = new usuariosVM(usuarios);
    ko.applyBindings(vm, $(container)[0]);
    return vm;
};