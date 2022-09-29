<?php
$data = file_get_contents("data.json");
$res = json_decode($data, true);

$length = count($res);
foreach ($res as $r) {
    if(isset($r["replies"])) {
        $length += count($r['replies']);
        foreach ($r["replies"] as $rpl) {
            if (isset($rpl["replies"])) {
                $length += count($rpl["replies"]);
            }
        }
    }
}
print("Total komentar = ". $length);