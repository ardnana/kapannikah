<?php

$arr = array('title' => "Kapan Nikah?",
    'answer' => array(
        "Besok, dateng ya.",
        "Lah kemarin resepsi gak dateng?",
        "Yuk!",
        "Cepek dulu dong.",
        "Belom nemu calonnya.",
        "Doain aja...",
        "(Dia) belom move on, bro.",
        "Situ kapan?",
        "Nunggu lulus kuliah.",
        "Nanti pas naik jabatan.",
        "Nanti deh pokoknya.",
        "Di sini belom legal.",
        "Nunggu MH-370 ketemu.",
        "Udah semalem di puncak.",
        "Abis ijab kabul.",
        "Kuy lah.",
        "Belom ketemu yang seiman.",
        "Nunggu kamu.",
        "Punya kenalan duda ganteng kaya raya?",
        "Kamu kapan putus sama yang sekarang?",
        "CV nya belom ada yang nyangkut.",
        "Kalo udah punya rumah, mobil, apartemen, perusahaan, berlian, tambang emas, pulau, negara...",
        "Kamu mau sama aku?",
        "Calonnya diculik ISIS.",
        "Gue nikah juga lo gak bakal diundang.",
        "Calonnya belum 17 tahun.",
        "Situ kapan? Matinya?",
        "Mungkin lusa atau di lain hari~",
        "Masih nyari sponsor.",
        "Nanya melulu, mau modalin?",
        "Belum ada yang ngelamar gue.",
        "Belom laku nih, endorse di IG dong sist~",
        "Belum ada yang lolos tahap seleksi.",
        "Kalo Half-Life 3 rilis.",
        "Kelarin tesis dulu ya.",
        "Nanti kalo keterima LPDP.",
        "WAH ADA GORILA COKELAT! *nunjuk ke jendela*",
        "Skripsi aja gak kelar-kelar...",
        "Emang nanti mau ngasih kado apa?",
        "Masih ngumpulin modal nih, jodohnya juga..",
        "Nunggu MMR 9k.",
        "Tau gak kalau kata Kementerian Agama RI, Tahun 2013 : menikah 2.218.130 kejadian, cerai 324.527 kejadian.",
        "Tau gak menurut statistik BKKBN, perceraian di Indonesia tertinggi di Asia Pasifik.",
        "Laper nih, makan yuk ini opor sianida enak loh.",
        "Tau gak, 2010-2015, Puslitbang Kehidupan Keagamaan Kemenag mendapat temuan kasus perceraian 2010-2015 meningkat sebanyak 59-80 persen.",
        "Nunggu pengumuman UAN doi dulu sih..",
        "Kemarin kontraknya baru habis.",
        "Katanya sabtu depan anak tante mau ngelamar aku",
        "Anak tante siap dilamar?"
        ));

/* Send as JSON */
header("Content-Type: application/json", true);

$length = count($arr["answer"]) - 1;
//echo $arr["answer"][rand(0, $length)];
echo json_encode($arr["answer"][rand(0, $length)]);
?>