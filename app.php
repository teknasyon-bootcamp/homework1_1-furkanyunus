<?php

$age = 25;

/**
 * Bu ödevde age değişkeni içerisinde yer alan yaş değerinin bulunduğu
 * yaş grubu tespit edilip ekrana bu yaş grubunun ismi yazılmalıdır. 
 * 
 * 0-14 = Çocuk
 * 15-24 = Genç
 * 25-64 = Yetişkin
 * 65+ = Yaşlı
 * 
 * Ekran çıktısı için `echo` yada `print` kullanabilirsiniz.
 * 
 * > **Not**: Çıktıda sadece `Çocuk`, `Genç`, `Yetişkin` veya `Yaşlı`
 * yer almalıdır.
 * 
 * İyi çalışmalar.
 */
$age = 25;
 if ($age>=0 && $age<=14) {//if else ifadesini kullanarak yaş aralıklarını girdik
    echo  " ÇOCUK";
 }
 elseif($age>14 && $age<=24) {
   echo " GENÇ";
 } elseif($age>=25 && $age<=64) {
   echo  " YETİŞKİN";
 }elseif($age>65) {
   echo " YAŞLI";
 }else {//yaş yerine harf veya sıfırdan küçük bir değer girilirse diye de else ifadesi döndürdük
   echo "YAŞINIZI YANLIŞ GİRDİNİZ.TEKRAR DENEYİN";
 }
 
