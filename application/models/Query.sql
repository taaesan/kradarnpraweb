select concat((select max(member_prefix) from tb_group where id = 1 ), gm.member_num) member_num, 
m.facebook_name 
from tb_group_member_mapping gm inner join tb_member m 
on gm.member_id = m.id where gm.group_id = 1 
order by gm.member_num




select concat((select max(member_prefix) from tb_group where id = 1 ), gm.member_num) member_num, m.facebook_name, m.name, m.surname, m.bank_name, m.bank_account_number
from tb_group_member_mapping gm inner join tb_member m 
on gm.member_id = m.id where gm.group_id = 1 
order by gm.member_num