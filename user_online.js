jQuery(function($) {
    $(document.body).ready(function(){        
            $("#reload_count").click(function()
            {
				user_online();
            });        
    });
});

setInterval("user_online", 5000);
user_online();
function user_online() {	
	$.ajax({
		type: "GET",
		url: 'user_online.php',
		cache:false,
		dataType:'text',
		timeout:5000,
		success: function(data) {
			$('#user_count').text(data);
        }
	});	
}



