<?php

$arr = array('title' => "Kapan Nikah?",
    'answer' => array(
        "Besok, dateng ya.",
        "Lah kemarin resepsi gak dateng?",
        "Yuk!",
        "Cepek dulu dong.",
        "Belom nemu calonnya.",
        "Menikah itu yang penting di waktu yang tepat, bukan tepat waktu.",
        "(Dia) belom move on, bro.",
        "Situ kapan?",
        "Nunggu lulus kuliah.",
        "Nanti pas naik jabatan.",
        "Nanti deh pokoknya.",
        "Di sini belom legal.",
        "Nunggu MH-370 ketemu.",
        "Udah semalem di puncak.",
        "Abis ijab kabul.",
        "Kuy lah",
        "Belom ketemu yang seiman.",
        "Nunggu kamu.",
        "Punya kenalan duda ganteng kaya raya?",
        "Kamu kapan putus sama yang sekarang?",
        "Nunggu syahrini jadi anggota avenger.",
        "Bentar ya, tiba-tiba mules nih!"));

/* Send as JSON */
header("Content-Type: application/json", true);

$length = count($arr["answer"]) - 1;
//echo $arr["answer"][rand(0, $length)];
echo json_encode($arr["answer"][rand(0, $length)]);
?>