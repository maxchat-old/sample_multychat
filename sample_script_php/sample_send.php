<?php

require 'multychat.php';

// kirim ke nomor yg sudah ada di kontak
sendText("628123456789","text","saya kenal kamu");

// push ke nomor yg tidak ada di kontak
pushText("628123456789","text","kamu siapa ya?");

// kirim gambar dgn url
sendImage("628123456789","image","https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png", "isi caption", "image.png");

// kirim file pdf dgn url
sendFile("628123456789","document","https://training.it.ufl.edu/media/trainingitufledu/documents/uf-health/excel/Excel2016-Beginners.pdf", "image.png");

?>