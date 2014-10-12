<?php 


//Database settings
$db = Database::handler(); 

//Query
$query = "SELECT * FROM audio WHERE koupeno = '0'";
$result =  $db->query($query);
?>
<?php if ($result->num_rows): ?>
    <table class="player-layer-audio-table">
    <?php while ($row = $result->fetch_assoc()): ?>
        <tr><td width="320px"><span class="border-link"><a href="#" class="player-playlist-menu" data-url="<?=$row["cesta"];?>"><?=$row["nazev"];?></a></span><br /></td>
        <td><span><a href="#" class="audio-pick border-link" data-nazev="<?=$row["nazev"]?>">Tuto chci!</a></span></td></tr>
    <?php endwhile; ?>
    </table>
<?php else: ?>
	Momentálně máme vyprodáno, na dalších skladbách se pracuje.
<?php endif; ?>


