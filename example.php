<?php

//example script

require_once 'bijoy2unicode.php';

// $demo = 'Dfq cv‡k av‡bi kx‡l †ewóZ cvwb‡Z fvmgvb RvZxq dzj kvcjv| Zvi gv_vq cvUMv‡Qi ci¯úi mshy³ wZbwU cvZv Ges Dfh cv‡k `ywU K‡i ZviKv|';
$demo = 'Kzwgjøv  mvZwÿiv †gvjøvcvov byiæj Kvgiæ¾vgvb';	// text with some complex ligature 

$converted = convertBijoyToUnicode($demo);

echo $converted;

// উভয় পাশে ধানের শীষে বেষ্টিত পানিতে ভাসমান জাতীয় ফুল শাপলা। তার মাথায় পাটগাছের পরস্পর সংযুক্ত তিনটি পাতা এবং উভয পাশে দুটি করে তারকা।

// After fix
// কুমিল্লা সাতক্ষিরা মোল্লাপাড়া নুরুল কামরুজ্জামান

// Before fix With error
// কুমিলস্না সাতÿিরা মোলস্নাপাড়া নুরম্নল কামরম্নজ্জামান
?>