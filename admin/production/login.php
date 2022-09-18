<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

.ort{
    margin-top:200px;
    width:500px;
    height:350px;
    background-color:#2A3F54;
    margin-left:auto;
    margin-right:auto;

}
.te{
    top:20px;
    width:390px;
    height:40px;
    position: relative;
    left:50px;
    margin-top:20px;
    outline:none;
    border:none;
    padding:15px 15px;

}
.btn-l{
    top:20px;
    width:390px;
    height:40px;
    position: relative;
    left:50px;
    margin-top:20px;
    outline:none;
    border:none;
}
.btn-l:hover{
transform:scale(0.9);
border:0;
}
    </style>
    <title>Panel Giriş</title>
</head>
<body>
    <div class="container">
        <form action="../netting/islem.php" method="post">
        <div class="ort">
            <center><h3 style="color:white;padding: 15px 5px">Yönetici Girişi</h3></center>

            <table>
                <tr>
                    <td><input type="email" class="te" placeholder="E posta Giriniz.." name="kullanici_mail"></td>
                </tr>
                <tr>
                    <td><input type="password" class="te" placeholder="Şifre Giriniz.." name="kullanici_sifre"></td>
                </tr>
                <tr>
                    <td> <button class="btn-l" name="log_gir">Giriş Yap</button> </td>
                </tr>
            </table></form>
        </div>
    </div>
</body>
</html>