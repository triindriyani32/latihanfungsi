<p>
    <?php
//pembuatan fungsi
$p= 18;
$l= 10;
$t= 12;
function VolumeBalok($p,$l,$t ) {
    return ($p*$l*$t );
}
//menampilkan fungsi
echo "Volume Balok tersebut adalah  =".VolumeBalok($p,$l,$t)."cm";
?>
</p>





<p>
<?php
$r= 28;
$t= 40;
$phi= 22/7;
function VolumeKerucut($r,$t,$phi) {
    return (1/3*($phi*$r*$r*$t)) ;
}
echo "Volume kerucut tersebut adalah =".Volumekerucut($phi,$r,$t)."cm";
?>
</p>