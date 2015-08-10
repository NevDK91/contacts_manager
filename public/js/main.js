App = {
	Models: {},
	Views: {},
	Collections: {},
	Router: {}
};

App.template = function(id){
	return _.template( $('#' + id).html() );
};


window.vent = _.extend( {}, Backbone.Events ); 


