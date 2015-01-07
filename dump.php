<?php

foreach ($folders_temp as $fid => $fold) {
    //uroven slozky,jestli nadrazena není -999, pak se jedna o podslozku
    level = ($fold["parent_id"] != -999) ? (($folders_temp[strval($fold["parent_id"])]["parent_id"] != -999) ? 1 : 1) : 0;
    $folders_temp[strval($fid)]["level"] = $level;
    if ($level && $last_parent[$level] != $fold['parent_id']) {
        $last_parent[$level] = $fold["parent_id"];
        $cislo_dedice[$level] = 1; // pouzivat jen jeden jazyk pro pojmenovani, idealne EN.
    } else $cislo_dedice[$level]++;
    // if it's subfolder, the lines before icon must be identificated (||, |L,_L, ...)
    if ($level) {
        $blah = ($child_num[$level] < $folders_temp[strval($fold["parent_id"])]["kids"]) ? 1 : 2
        if ($level === 2) {
            $blah += ($child_num[1] < $folders_temp[$folders_temp[strval($fold["parent_id"])]["parent_id"]]["kids"]) ? 4 : 8;
        }
    } else $blah = 0;
    $folders_temp[strval($fid)]["cross"] = $blah;
}
