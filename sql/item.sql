SELECT
  t.type_name,
  MAX(IF(t.month = '1', t.counter, 0)) AS 'JAN',
  MAX(IF(t.month = '2', t.counter, 0)) AS 'FEB',
  MAX(IF(t.month = '3', t.counter, 0)) AS 'MAR',
  MAX(IF(t.month = '4', t.counter, 0)) AS 'APR',
  MAX(IF(t.month = '5', t.counter, 0)) AS 'MAY',
  MAX(IF(t.month = '6', t.counter, 0)) AS 'JUN',
  MAX(IF(t.month = '7', t.counter, 0)) AS 'JUL',
  MAX(IF(t.month = '8', t.counter, 0)) AS 'AUG',
  MAX(IF(t.month = '9', t.counter, 0)) AS 'SEP',
  MAX(IF(t.month = '10', t.counter, 0)) AS 'OCT',
  MAX(IF(t.month = '11', t.counter, 0)) AS 'NOV',
  MAX(IF(t.month = '12', t.counter, 0)) AS 'DEC'
  
FROM (  
    select type.type_name, MONTH(item_date) month, count(item.id) counter 
    from
    tb_item_type type left join tb_item item 
    on type.id = item.item_type_id 
    where YEAR(item_date) = '2015'
    group by type.type_name, MONTH(item_date)
) t
GROUP BY t.type_name;