$(document).ready( function () {
		$('#userreg').validate({ // initialize the plugin
	        rules: {
	            email: {
	                required: true,
	                email: true
	            },
	            firstname: {
	                required: true,
	                minlength: 5
	            }
	        }
	    });

});