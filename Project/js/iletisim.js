
function temizle(){
    document.getElementsByTagName('form')[0].reset();
}

function kontrol(){
    var isim=document.forms["iletisim-formu"]["isim"].value;
    var mail=document.forms["iletisim-formu"]["mail"].value;
    var sehir=document.forms["iletisim-formu"]["sehir"].value;
    var cinsiyet=document.forms["iletisim-formu"]["cinsiyet"].value;
    var mesaj=document.forms["iletisim-formu"]["mesaj"].value;
    var mailformat = /^\S+@\S+\.\S+$/;
    var onay=document.getElementById("onay");

    if (isim=="")
    {
        alert("Lütfen isminizi giriniz.");
        return false;
    }
    if (sehir=="")
    {
        alert("Lütfen şehrinizi seçiniz.");
        return false;
    }
    else if (mail=="")
    {
        alert("Lütfen mail adresinizi giriniz.");
        return false;
    }
    else if (mailformat.test(mail) == false)
    {
        alert("Lütfen doğru bir mail adresi giriniz.");
        return false;
    }
    else if (cinsiyet=="")
    {
        alert("Lütfen cinsiyetinizi seçiniz.");
        return false;
    }
    else if (mesaj=="")
    {
        alert("Lütfen mesajınızı giriniz.");
        return false;
    }
    else if (!(onay.checked))
    {
        alert("Lütfen kullanıcı sözleşmesini okuyup onaylayınız.");
        return false;
    }
}