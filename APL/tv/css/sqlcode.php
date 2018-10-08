select pl.name,sc.score  from players pl 
join team_player tp on tp.player_id = pl.id
join teams tm on tp.team_id = tm.id
join scores sc on sc.player_id = pl.id
order by sc.score desc











select pl.name,sc.score from players pl 
join matches mt on mt.id = 1 where team_a_id = 11

join scores sc on  sc.match_id = mt.id
order by pl.name

join teams tm on tp.team_id = tm.id
join scores sc on sc.player_id = pl.id
order by sc.score desc





select mt.*,pl.team_id,pl.name from matches as mt left join players as pl ON(mt.team_b_id=pl.team_id) where mt.match_date='2018-07-30'






select pl.id,pl.name,sc.score,sc.player_id,mt.match_date,mt.id,mt.team_a_id from matches mt 
join scores sc on sc.match_id = mt.id  and sc.team_id = mt.team_a_id
join players pl on pl.id = sc.player_id
where mt.match_date = "2018-07-30" and mt.id=%1 = 0


select tma.tname,mt.team_a_id,tmb.tname,mt.team_b_id  from matches mt
join teams tma on tma.id = mt.team_a_id
join teams tmb on tmb.id = mt.team_b_id
where mt.match_date = "2018-07-30"