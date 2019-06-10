<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body style="width:100%;color:#181818;">
    <div style="width:90%;display:block;margin:0 auto;">
        <h1 style="text-align:center;">Thank You for Registering</h1>
        <img src="http://bic.bncc.net/image/BIC.png" alt="" style="width:280px;display:block;margin:0 auto;">
        <h3 style="text-align:justify;">Terima kasih sudah mendaftar sebagai peserta expo di BNCC Idea Competition. Di bawah ini adalah QR Code yang akan digunakan untuk registrasi hari-H saat expo BNCC Idea Competition.</h3>
        <img style="display:block;margin: 0 auto;" src="{!!$message->embedData($qr, 'QrCode.png', 'image/png')!!}">
        <h3>Jangan lupa untuk hadir di BNCC Idea Competition pada : <br>
                Hari : Selasa - Rabu <br>
                Tanggal : 25 - 26 Juni 2019 <br>
                Tempat : Foodcourt BINUS Anggrek
        </h3>
        <h3>
                Pantau terus website dan sosial media kami agar tidak ketinggalan informasi seputar BNCC dan BNCC Idea Competition: <br>
                Website : http://bic.bncc.net/ <br>
                Instagram : @technoeventbncc dan @BNCCBinus <br>
                Facebook : Bina Nusantara Computer Club <br>
                LINE : @joy0117j <br>
                Twitter : @BNCC_Binus <br>
        </h3>
        <h1 style="display:block;margin: 0 auto;width:80%;">Your OTP Code is: {{$otp}}</h1>
    </div>
</body>
</html>