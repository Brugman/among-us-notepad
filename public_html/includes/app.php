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
    [ 'name' => 'maroon', 'color' => '#5F1D2E' ],
    [ 'name' => 'rose', 'color' => '#ECC0D3' ],
    [ 'name' => 'banana', 'color' => '#F0E7A8' ],
    [ 'name' => 'gray', 'color' => '#758593' ],
    [ 'name' => 'tan', 'color' => '#918877' ],
    [ 'name' => 'coral', 'color' => '#D76464' ],
];

?>
<table class="players">
<?php

foreach ( $players as $player )
{
?>
    <tr class="player" data-status="neutral">
        <td class="color"><div class="inner" style="background-color: <?=$player['color'];?>;"></div></td>
        <td class="name"><?=$player['name'];?></td>
        <td class="label js-toggle" data-set-status="imposter">imposter</td>
        <td class="label js-toggle" data-set-status="sus">sus</td>
        <td class="label js-toggle" data-set-status="neutral">neutral</td>
        <td class="label js-toggle" data-set-status="trusty">trusty</td>
        <td class="label js-toggle" data-set-status="crewmate">crewmate</td>
        <td class="label js-toggle" data-set-dead="dead">dead</td>
        <td class="label js-toggle" data-set-status="unused">unused/me</td>
    </tr>
<?php
}

?>
</table>
<p class="resets"><a href="/">new lobby</a><a href="/" class="js-reset" style="margin-left: 30px;">new game</a></p>
<?php

