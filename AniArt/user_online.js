jQuery(function($) { // Клік кнопки
    $(document.body).ready(function(){        
            $("#reload_count").click(function()
            {
				user_online(); 
            });        
    });
});

setInterval("user_online", 5000); // Интервал 5 секунд
user_online(); // Перший запуск
function user_online() {	// Асинхроне оновлення 
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



