<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anasayfa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="js/iletisim.js"></script>
</head>
<body>
<nav>
    <ul class="nav nav-pills justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="/">Hakkında</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="cv.php">CV</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="sehrim.php">Şehrim</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="mirasimiz.php">Mirasımız</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="ilgialanlarim.php">İlgi Alanlarım</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="girisyap.php">Giriş Yap</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="iletisim.php">İletişim</a>
        </li>
    </ul>
</nav>

<div id="icerik" class="container" align="center">
    <div align="center" class="row">
        <div class="col-1"></div>
        <div id="content-col" style="background-color:#f8bf4f" class="col">
            <form name="iletisim-formu" action="iletisim-redirect.php" method="post" onsubmit="return kontrol()">
                <h1>Aşağıdaki formu doldurarak iletişime geçebilirsiniz.</h1>
                <hr>
                <table id="iletisim-tablo">
                    <tr>
                        <td class="etiket">İsminiz:</td>
                        <td><input name="isim" type="text"></td>
                    </tr>

                    <tr>
                        <td class="etiket">Mail adresiniz:</td>
                        <td><input name="mail" type="text"></td>
                    </tr>
                    <tr>
                        <td class="etiket">Yaşadığınız il:</td>
                        <td>
                            <select name="sehir">
                                <option value="">İkametgah İli</option>
                                <option value="34">İstanbul</option>
                                <option value="6">Ankara</option>
                                <option value="35">İzmir</option>
                                <option value="1">Adana</option>
                                <option value="2">Adıyaman</option>
                                <option value="3">Afyonkarahisar</option>
                                <option value="4">Ağrı</option>
                                <option value="68">Aksaray</option>
                                <option value="5">Amasya</option>
                                <option value="7">Antalya</option>
                                <option value="75">Ardahan</option>
                                <option value="8">Artvin</option>
                                <option value="9">Aydın</option>
                                <option value="10">Balıkesir</option>
                                <option value="74">Bartın</option>
                                <option value="72">Batman</option>
                                <option value="69">Bayburt</option>
                                <option value="11">Bilecik</option>
                                <option value="12">Bingöl</option>
                                <option value="13">Bitlis</option>
                                <option value="14">Bolu</option>
                                <option value="15">Burdur</option>
                                <option value="16">Bursa</option>
                                <option value="17">Çanakkale</option>
                                <option value="18">Çankırı</option>
                                <option value="19">Çorum</option>
                                <option value="20">Denizli</option>
                                <option value="21">Diyarbakır</option>
                                <option value="81">Düzce</option>
                                <option value="22">Edirne</option>
                                <option value="23">Elazığ</option>
                                <option value="24">Erzincan</option>
                                <option value="25">Erzurum</option>
                                <option value="26">Eskişehir</option>
                                <option value="27">Gaziantep</option>
                                <option value="28">Giresun</option>
                                <option value="29">Gümüşhane</option>
                                <option value="30">Hakkâri</option>
                                <option value="31">Hatay</option>
                                <option value="76">Iğdır</option>
                                <option value="32">Isparta</option>
                                <option value="46">Kahramanmaraş</option>
                                <option value="78">Karabük</option>
                                <option value="70">Karaman</option>
                                <option value="36">Kars</option>
                                <option value="37">Kastamonu</option>
                                <option value="38">Kayseri</option>
                                <option value="71">Kırıkkale</option>
                                <option value="39">Kırklareli</option>
                                <option value="40">Kırşehir</option>
                                <option value="79">Kilis</option>
                                <option value="41">Kocaeli</option>
                                <option value="42">Konya</option>
                                <option value="43">Kütahya</option>
                                <option value="44">Malatya</option>
                                <option value="45">Manisa</option>
                                <option value="47">Mardin</option>
                                <option value="33">Mersin</option>
                                <option value="48">Muğla</option>
                                <option value="49">Muş</option>
                                <option value="50">Nevşehir</option>
                                <option value="51">Niğde</option>
                                <option value="52">Ordu</option>
                                <option value="80">Osmaniye</option>
                                <option value="53">Rize</option>
                                <option value="54">Sakarya</option>
                                <option value="55">Samsun</option>
                                <option value="56">Siirt</option>
                                <option value="57">Sinop</option>
                                <option value="58">Sivas</option>
                                <option value="73">Şırnak</option>
                                <option value="59">Tekirdağ</option>
                                <option value="60">Tokat</option>
                                <option value="61">Trabzon</option>
                                <option value="62">Tunceli</option>
                                <option value="63">Şanlıurfa</option>
                                <option value="64">Uşak</option>
                                <option value="65">Van</option>
                                <option value="77">Yalova</option>
                                <option value="66">Yozgat</option>
                                <option value="67">Zonguldak</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="etiket">Cinsiyetiniz:</td>
                        <td>
                            Erkek <input type="radio" name="cinsiyet" value="Erkek">
                            Kadın <input type="radio" name="cinsiyet" value="Kadın">
                        </td>
                    </tr>
                    <tr>
                        <td class="etiket">Mesajınız:</td>
                        <td>
                            <textarea name="mesaj"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="etiket">Kullanıcı sözleşmesini<br>okudum.</td>
                        <td>
                            <input id="onay" type="checkbox" name="onay">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Giriş Yap"> <button onclick="temizle()" type="button">Temizle</button></td>
                    </tr>
            </form>
            </table>
        </div>
        <div class="col-1"></div>
    </div>
</div>
</body>
</html>