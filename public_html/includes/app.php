<?php

$players = [
    [ 'name' => 'red', 'color' => '#C61111' ],
    [ 'name' => 'blue', 'color' => '#132ED2' ],
    [ 'name' => 'green', 'color' => '#11802D' ],
    [ 'name' => 'pink', 'color' => '#EE54BB' ],
    [ 'name' => 'orange', 'color' => '#F07D0D' ],
    [ 'name' => 'yellow', 'color' => '#F6F657' ],
    [ 'name' => 'black', 'color' => '#3F474E' ],
    [ 'name' => 'white', 'color' => '#D7E1F1' ],
    [ 'name' => 'purple', 'color' => '#6B2FBC' ],
    [ 'name' => 'brown', 'color' => '#71491E' ],
    [ 'name' => 'cyan', 'color' => '#38FFDD' ],
    [ 'name' => 'lime', 'color' => '#50F039' ],
];

?>
<table class="players">
<?php

foreach ( $players as $player )
{
?>
        <tr class="player" data-status="">
            <td class="color"><div class="inner" style="background-color: <?=$player['color'];?>;"></div></td>
            <td class="name"><?=$player['name'];?></td>
            <td class="label js-toggle" data-set-status="imposter">imposter</td>
            <td class="label js-toggle" data-set-status="sus">sus</td>
            <td class="label js-toggle" data-set-status="crewmate">crewmate</td>
            <td class="label js-toggle" data-set-dead="dead">dead</td>
            <td class="label js-toggle" data-set-status="unused">unused</td>
        </tr>
    </li>
<?php
}

?>
    </tbody>
</table>
<p class="reset"><a href="/">reset</a></p>
<?php

