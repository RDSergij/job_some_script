SELECT 
	CASE MONTH(`A1`)  
        WHEN '1' THEN 'Январь'
        WHEN '2' THEN 'Февраль'
        WHEN '3' THEN 'Март'
        WHEN '4' THEN 'Апрель'
        WHEN '5' THEN 'Май'
        WHEN '6' THEN 'Июнь'
        WHEN '7' THEN 'Июль'
        WHEN '8' THEN 'Август'
        WHEN '9' THEN 'Сентябрь'
        WHEN '10' THEN 'Октябрь'
        WHEN '11' THEN 'Ноябрь'
        WHEN '12' THEN 'Декабрь'  
    END AS fieldAlias, 
	if(WEEKDAY(`A1`)=0, SUM(`A2`), 0) as 'Понедельник', 
	if(WEEKDAY(`A1`)=1, SUM(`A2`), 0) as 'Вторник', 
	if(WEEKDAY(`A1`)=2, SUM(`A2`), 0) as 'Среда', 
	if(WEEKDAY(`A1`)=3, SUM(`A2`), 0) as 'Четверг', 
	if(WEEKDAY(`A1`)=4, SUM(`A2`), 0) as 'Пятница',
	if(WEEKDAY(`A1`)=5, SUM(`A2`), 0) as 'Субота',
	if(WEEKDAY(`A1`)=6, SUM(`A2`), 0) as 'Воскресение' 
FROM `test1` 
GROUP BY MONTH(`A1`)