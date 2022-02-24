<?php

/**
 * Qual o metodo que a posicão do texto 'abc'
 * na string '!ABcaBcaBc' retone 1
 */


echo strpos(strtolower("!ABcaBcaBc"),"abc"); // 1
echo "<br>";
echo stripos("!ABcaBcaBc","abc"); // 1
