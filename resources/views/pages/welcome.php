<?php

use Extro\ViewEngine\View;

/** @var View $this; */
$this->extend('pages/index');
?>

<?php $this->startSection('content'); ?>
<div class="container">
    <div class="logo-container">
        <svg xmlns="http://www.w3.org/2000/svg" width="527.000000pt" height="527.000000pt" viewBox="0 0 527.000000 527.000000" preserveAspectRatio="xMidYMid meet">
            <g xmlns="http://www.w3.org/2000/svg" transform="translate(0.000000,527.000000) scale(0.100000,-0.100000)" fill="#fff" stroke="none">
                <path d="M 2515 5014 c -368 -21 -829 -163 -1125 -347 c -259 -162 -601 -498 -783 -770 c -58 -87 -173 -320 -216 -438 c -71 -195 -121 -407 -142 -599 c -19 -173 -7 -507 24 -670 c 70 -366 215 -716 396 -955 c 182 -241 461 -509 684 -658 c 87 -58 320 -173 438 -216 c 188 -68 402 -120 584 -141 c 116 -13 414 -13 530 0 c 182 21 396 73 584 141 c 118 43 351 158 438 216 c 223 149 502 417 684 658 c 181 239 326 589 396 955 c 31 163 43 497 24 670 c -21 192 -71 404 -142 599 c -43 118 -158 351 -216 438 c -149 223 -417 502 -658 684 c -259 196 -713 372 -1068 413 c -132 16 -336 25 -432 20 z m 485 -378 c 205 -35 383 -92 550 -176 c 376 -189 768 -589 955 -975 c 54 -111 132 -329 157 -440 c 67 -273 74 -570 0 -870 c -25 -111 -103 -329 -157 -440 c -193 -399 -591 -797 -990 -990 c -111 -54 -329 -132 -440 -157 c -343 -67 -555 -67 -870 0 c -111 25 -329 103 -440 157 c -399 193 -797 591 -990 990 c -54 111 -132 329 -157 440 c -73 322 -73 590 0 870 c 25 111 103 329 157 440 c 217 448 682 881 1130 1054 c 135 51 313 99 425 114 c 268 38 402 45 671 -15 z"/>
                <path d="M1350 2610 l0 -1290 1290 0 1290 0 0 730 0 730 -560 0 -560 0 0 390 0 390 560 0 560 0 0 170 0 170 -1290 0 -1290 0 0 -1290z m1120 560 l0 -390 -390 0 -390 0 0 390 0 390 390 0 390 0 0 -390z m0 -1120 l0 -390 -390 0 -390 0 0 390 0 390 390 0 390 0 0 -390z m1120 0 l0 -390 -390 0 -390 0 0 390 0 390 390 0 390 0 0 -390z"/>
            </g>
        </svg>
    </div>
    <div class="title">PlainWay</div>
    <div class="subtitle">framework</div>
    <p>Minimalist PHP framework for quickly creating web applications</p>
    <div class="links">
        <a href="https://github.com/plainway/framework" target="_blank">GitHub</a>
    </div>
</div>
<?php $this->endSection(); ?>