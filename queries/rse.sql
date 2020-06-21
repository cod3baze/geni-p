select * from users
where name like '%elias%'
;

select * from issue
where title like '%n%'
;

select lst.name, usr.name from playlist as lst join users as usr
on lst.owner = usr.id
where lst.name like '%d%'
;
