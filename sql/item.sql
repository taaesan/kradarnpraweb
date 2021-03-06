
                select max(type.name) type_group, type.type_name, count(item.id) counter 
                from ( 
                    select t.*, g.name
                    from tb_item_type t inner join tb_item_type_group g 
                    on t.item_type_group_id = g.id 
                    where g.group_id = ? ) type
                 left join tb_item item on type.id = item.item_type_id group by type.type_name


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


-- By week

SELECT 
weekstart, 
(weekstart + INTERVAL 6 DAY) as endweek,
type.type_name, 
c_count, 
totalprice,
max_price,
min_price,
(totalprice/c_count) as c_avg
  FROM (
  SELECT 
      item_type_id,
      COUNT(id) AS c_count, 
      max(item_close_price) max_price,
      min(item_close_price) min_price,
      SUM(item_close_price) AS totalprice,
      FROM_DAYS(TO_DAYS(item_date) -MOD(TO_DAYS(item_date) -2, 7)) AS weekstart
    FROM tb_item
      where item_type_id = 1
   GROUP BY FROM_DAYS(TO_DAYS(item_date) -MOD(TO_DAYS(item_date) -2, 7)), item_type_id
  ) AS s
inner join tb_item_type type
on s.item_type_id = type.id
ORDER BY weekstart desc, s.item_type_id asc


SELECT
FROM_DAYS(TO_DAYS(a.week1) -MOD(TO_DAYS(a.week1) -2, 7)) start_week1,
FROM_DAYS(TO_DAYS(a.week2) -MOD(TO_DAYS(a.week2) -2, 7)) start_week2,
FROM_DAYS(TO_DAYS(a.week3) -MOD(TO_DAYS(a.week3) -2, 7)) start_week3,
FROM_DAYS(TO_DAYS(a.week4) -MOD(TO_DAYS(a.week4) -2, 7)) start_week4
    
from(    
    select 
    STR_TO_DATE('2015-11-01','%Y-%m-%d') as week1,
    STR_TO_DATE('2015-11-01','%Y-%m-%d') + INTERVAL 1 week as week2,
    STR_TO_DATE('2015-11-01','%Y-%m-%d') + INTERVAL 2 week as week3,
    STR_TO_DATE('2015-11-01','%Y-%m-%d') + INTERVAL 3 week as week4
)a




INSERT INTO `tb_item` (`id`, `item_date`, `item_link`, `item_close_price`, `item_type_id`, `user_id`, `group_id`) VALUES 

(NULL, '2015-01-08', '', '3500', '4', '', '1'), 
(NULL, '2015-01-08', '', '3500', '4', '', '1'),
(NULL, '2015-01-08', '', '3500', '4', '', '1'), 
(NULL, '2015-01-08', '', '3500', '4', '', '1'),
(NULL, '2015-01-08', '', '3500', '4', '', '1'), 
(NULL, '2015-01-08', '', '3500', '4', '', '1'),

(NULL, '2015-02-08', '', '3500', '4', '', '1'), 
(NULL, '2015-02-08', '', '3500', '4', '', '1'),
(NULL, '2015-02-08', '', '3500', '4', '', '1'), 
(NULL, '2015-02-08', '', '3500', '4', '', '1'),
(NULL, '2015-02-08', '', '3500', '4', '', '1'), 
(NULL, '2015-02-08', '', '3500', '4', '', '1'),
(NULL, '2015-02-08', '', '3500', '4', '', '1'), 
(NULL, '2015-02-08', '', '3500', '4', '', '1'),
(NULL, '2015-02-08', '', '3500', '4', '', '1'), 
(NULL, '2015-02-08', '', '3500', '4', '', '1'),
(NULL, '2015-02-08', '', '3500', '4', '', '1'), 
(NULL, '2015-02-08', '', '3500', '4', '', '1'),
(NULL, '2015-02-08', '', '3500', '4', '', '1'), 
(NULL, '2015-02-08', '', '3500', '4', '', '1'),
(NULL, '2015-02-08', '', '3500', '4', '', '1'), 


(NULL, '2015-03-08', '', '3500', '4', '', '1'), 
(NULL, '2015-03-08', '', '3500', '4', '', '1'),
(NULL, '2015-03-08', '', '3500', '4', '', '1'), 
(NULL, '2015-03-08', '', '3500', '4', '', '1'), 
(NULL, '2015-03-08', '', '3500', '4', '', '1'),
(NULL, '2015-03-08', '', '3500', '4', '', '1'), 
(NULL, '2015-03-08', '', '3500', '4', '', '1'), 
(NULL, '2015-03-08', '', '3500', '4', '', '1'),
(NULL, '2015-03-08', '', '3500', '4', '', '1'), 
(NULL, '2015-03-08', '', '3500', '4', '', '1'), 
(NULL, '2015-03-08', '', '3500', '4', '', '1'),
(NULL, '2015-03-08', '', '3500', '4', '', '1'),
(NULL, '2015-03-08', '', '3500', '4', '', '1'), 
(NULL, '2015-03-08', '', '3500', '4', '', '1'),
(NULL, '2015-03-08', '', '3500', '4', '', '1'), 
(NULL, '2015-03-08', '', '3500', '4', '', '1'), 
(NULL, '2015-03-08', '', '3500', '4', '', '1'),
(NULL, '2015-03-08', '', '3500', '4', '', '1'),
(NULL, '2015-03-08', '', '3500', '4', '', '1'), 
(NULL, '2015-03-08', '', '3500', '4', '', '1'), 
(NULL, '2015-03-08', '', '3500', '4', '', '1'),
(NULL, '2015-03-08', '', '3500', '4', '', '1'),

(NULL, '2015-04-08', '', '3500', '4', '', '1'),
(NULL, '2015-04-08', '', '3500', '4', '', '1'), 
(NULL, '2015-04-08', '', '3500', '4', '', '1'),


(NULL, '2015-05-08', '', '3500', '4', '', '1'),
(NULL, '2015-05-08', '', '3500', '4', '', '1'), 
(NULL, '2015-05-08', '', '3500', '4', '', '1'),
(NULL, '2015-05-08', '', '3500', '4', '', '1'), 


(NULL, '2015-06-08', '', '3500', '4', '', '1'),
(NULL, '2015-06-08', '', '3500', '4', '', '1'), 
(NULL, '2015-06-08', '', '3500', '4', '', '1'),
(NULL, '2015-06-08', '', '3500', '4', '', '1'), 
(NULL, '2015-06-08', '', '3500', '4', '', '1'),
(NULL, '2015-06-08', '', '3500', '4', '', '1'), 
(NULL, '2015-06-08', '', '3500', '4', '', '1'),
(NULL, '2015-06-08', '', '3500', '4', '', '1'), 
(NULL, '2015-06-08', '', '3500', '4', '', '1'),
(NULL, '2015-06-08', '', '3500', '4', '', '1'), 

(NULL, '2015-07-08', '', '3500', '4', '', '1'),
(NULL, '2015-07-08', '', '3500', '4', '', '1'), 
(NULL, '2015-07-08', '', '3500', '4', '', '1'),



(NULL, '2015-08-08', '', '3500', '4', '', '1'),
(NULL, '2015-08-08', '', '3500', '4', '', '1'), 
(NULL, '2015-08-08', '', '3500', '4', '', '1'),
(NULL, '2015-08-08', '', '3500', '4', '', '1'),



(NULL, '2015-09-08', '', '3500', '4', '', '1'),
(NULL, '2015-09-08', '', '3500', '4', '', '1'), 
(NULL, '2015-09-08', '', '3500', '4', '', '1'),
(NULL, '2015-09-08', '', '3500', '4', '', '1'),
(NULL, '2015-09-08', '', '3500', '4', '', '1'), 


(NULL, '2015-10-08', '', '3500', '4', '', '1'),
(NULL, '2015-10-08', '', '3500', '4', '', '1'), 
(NULL, '2015-10-08', '', '3500', '4', '', '1'),
(NULL, '2015-10-08', '', '3500', '4', '', '1'),
(NULL, '2015-10-08', '', '3500', '4', '', '1'), 
(NULL, '2015-10-08', '', '3500', '4', '', '1'),



(NULL, '2015-11-08', '', '3500', '4', '', '1'),
(NULL, '2015-11-08', '', '3500', '4', '', '1'), 
(NULL, '2015-11-08', '', '3500', '4', '', '1'),
(NULL, '2015-11-08', '', '3500', '4', '', '1'),
(NULL, '2015-11-08', '', '3500', '4', '', '1'), 
(NULL, '2015-11-08', '', '3500', '4', '', '1'),
(NULL, '2015-11-08', '', '3500', '4', '', '1'),
(NULL, '2015-11-08', '', '3500', '4', '', '1'), 
 


(NULL, '2015-12-08', '', '3500', '4', '', '1'), 
(NULL, '2015-12-08', '', '3500', '4', '', '1'),
(NULL, '2015-12-08', '', '3500', '4', '', '1'), 
(NULL, '2015-12-08', '', '3500', '4', '', '1');











