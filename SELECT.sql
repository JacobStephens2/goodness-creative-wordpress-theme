SELECT
    games.title,
    games.MnP,
    games.MxP,
    games.MxT,
    games.Age,
    games.KeptCol,
    playgroup.FullName,
    players.FullName,
    players.G,
    players.Priority,
    Max(responses.AversionDate) AS MaxOfAversionDate,
    Max(responses.PlayDate) AS MaxOfPlayDate,
    Max(responses.PassDate) AS MaxOfPassDate,
    Max(responses.RequestDate) AS MaxOfRequestDate
FROM (
        players
        LEFT JOIN (
            games
            LEFT JOIN responses ON games.ID = responses.Title
        ) ON players.ID = responses.Player
    )
    INNER JOIN playgroup ON players.ID = playgroup.FullName
GROUP BY
    games.Title,
    games.MnP,
    games.Age,
    games.MxP,
    players.FirstName,
    playgroup.FullName,
    games.FavCt,
    players.G,
    players.Priority
HAVING
 games.mnp <= 3
 AND games.mxp >= 3
-- AND games.mxt <= 60
-- AND ((games.age) <= 18)
ORDER BY
    players.G,
    players.Priority DESC,
    Max(responses.AversionDate) ASC,
    Max(responses.PlayDate) DESC,
    Max(responses.PassDate) ASC,
    Max(responses.RequestDate) DESC
