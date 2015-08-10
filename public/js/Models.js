
App.Models.Contact = Backbone.Model.extend({
	defaults: {
		id: null,
		name: "Иван",
		surname: "Иванов",
		email: "Ivanov@ivan.an",
		phone: "8(800)666-66-66",
		description : "Быдлан"
	},

	urlRoot : 'contacts',

	initialize : function(){
        this.on("invalid", function(model, error){
            alert(error);    
        });

    },

	validate: function(attrs){
		
		if( attrs.name == null || attrs.surname == null ) {
			return "Имя и фамилия обязательны к заполнению";
		}

		if( attrs.email == null) {
			return "Введите корректный email адресс";
		}

		if( attrs.phone == null) {
			return "Введите телефон";
		}

		if( attrs.description == null) {
			return "Введите описание контакта";
		}
	}
});

