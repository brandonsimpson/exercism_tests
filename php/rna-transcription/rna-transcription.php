<?php
function toRna($dna) {
    $rna = ['G' => 'C', 'C' => 'G', 'T' => 'A', 'A' => 'U'];
    return strtr($dna, $rna);
}
