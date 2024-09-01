<?php
function solution($a, $x) {
    return in_array($x, $a);
}

var_dump(solution(array('a', 'b', 'c', 'd', 'e', "f"), "a"));
