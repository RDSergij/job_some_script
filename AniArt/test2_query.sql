SELECT `A1`, `A2` FROM `test2_t1` 
LEFT OUTER JOIN `test2_t2` ON `test2_t2`.`FK`=`test2_t1`.`id`
WHERE `test2_t2`.`FK` IS NULL
