select * from playlist_and_issue as pai join issue 
on pai.issue = issue.id join playlist as lst
on pai.list = lst.id
where lst.id = 1
;