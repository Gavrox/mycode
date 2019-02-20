<?php
class Roditelj{
public $x = 10;
}
class Dijete extends Roditelj{
}
$d = new Dijete();
echo $d->x;
?>