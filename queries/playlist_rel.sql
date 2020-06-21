SELECT * FROM playlist;
SELECT * FROM playlist_and_issue;
SELECT * FROM issue;

select lst.id, lst.name as PLAYLIST, ise.* from playlist as lst join 
playlist_and_issue as pai
on lst.id = pai.list 
join issue as ise
on ise.id = pai.issue
;

select * from playlist where id = 1 limit 1
;
