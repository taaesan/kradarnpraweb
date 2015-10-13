select concat((select max(member_prefix) from tb_group where id = 1 ), gm.member_num) member_num, 
m.facebook_name 
from tb_group_member_mapping gm inner join tb_member m 
on gm.member_id = m.id where gm.group_id = 1 
order by gm.member_num




SELECT CONCAT((SELECT MAX(MEMBER_PREFIX) FROM TB_GROUP WHERE ID = 1 ), GM.MEMBER_NUM) MEMBER_NUM, M.FACEBOOK_NAME, M.NAME, M.SURNAME, M.BANK_NAME, M.BANK_ACCOUNT_NUMBER
FROM TB_GROUP_MEMBER_MAPPING GM INNER JOIN TB_MEMBER M 
ON GM.MEMBER_ID = M.ID WHERE GM.GROUP_ID = 1 
ORDER BY GM.MEMBER_NUM