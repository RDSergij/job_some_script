SELECT `categories`.`name`, 
		COUNT(`products`.`id`), 
		MIN(`products`.`price`), 
		MAX(`products`.`price`), 
		`products`.`Name`, 
		MAX(LENGTH(`products`.`description`)),
		(SELECT `table_temp`.`description` 
         	FROM `products` as `table_temp` GROUP BY LENGTH(`table_temp`.`description`)  
        	HAVING LENGTH(`table_temp`.`description`)=MAX(LENGTH(`products`.`description`))
        )

FROM `categories` LEFT JOIN `products` ON `categories`.`id`=`products`.`category_id` 
GROUP BY `products`.`category_id`
