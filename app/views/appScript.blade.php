<script type="text/javascript">
	
	$(document).ready(function(){


//new App.Router();
//Backbone.history.start();

App.contacts = new App.Collections.Contacts();
App.contacts.fetch().done(function(){

appView = new App.Views.App({collection: App.contacts});

});





	});


</script>