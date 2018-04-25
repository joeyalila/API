<?php
/********************************************************************************************************************
  Consider the following string(bbit3a.txt)                                                                         *
  It constains IP address, names(surname,second_name,first_name),number,country and country code of some individuals *
                                                                                                                    *
  @Required                                                                                                         *
  1. Create a new branch from the develop branch called feature-rewind-13a                                          *
  2. Display the following data as follows (NB: first_name can be clicked to open the persons IP on a new tab)      *
                                                                                                                    *
      a). first_name second_name,surname (# country_code(0)number[country])                                         *
      b). .......                                                                                                   *
      c). .......                                                                                                   *
      (For example                                                                                                  *
        a) Mosiro Olesaningo Chirchir(# +254 (0) 760 387 482[KENYA])                                                *
      )                                                                                                             *
                                                                                                                    *
    Summary                                                                                                         *
     -- Total names : total.                                                                                        *
     -- Total unique countries : total(list of countries - comma separated)                                         *
  3. Commit changes of the new branch                                                                               *
  4. Merge changes with the development branch                                                                      *
  5. Push the changes to your repo.                                                                                 *
  6. Submit the github url on google classroom (Check Quiz 1 - 3A)                                                  *
 ********************************************************************************************************************/




$unordered = "'66.249.72.240'.Chirchir,Olesaningo Mosiro.0760387482.KENYA.+254_'192.168.170.25'.Wambua,Doe Mumbua.080023450.KENYA.+254_
'113.193.241.186'.Vonbora,Katherina Luther.0600990033.GERMANY.+32
_'197.176.231.200'.Boromir,Grommit Wallace.0100873901.IRELAND.+98_'113.193.241.186'.Faramir,Edwards Jonathan.0200983729.AMERICA.+1_'77.77.7.7'.Asaph,Aslan King.02990033.ISRAEL.+2
_'172.53.14.2'.Huan,Valinor Hound.02880023.SPAIN.+26_
'113.193.241.18'.Otoyo,Wafula Joel.0777799920.KENYA.+254
_'173.190.141.16'.Mapete,Mwambingu Simba.0987483292.TANZANIA.+257_
'153.193.241.186'.SARATON,DAVID BREINARD.043899292.AMERICA.+1
_'103.153.211.186'.Legolas,JOHN OWEN.074749292.ZAMBIA.+267_'123.19.201.186'.Puddleglum,JOHN BUNYAN.09837328.UGANDA.+256_'163.193.241.156'.Vonstaupitz,Johann Gregory.0600984733.GERMANY.+32_'150.133.10.23'.Beren,Luthien Lovi.028403323.SPAIN.+26
";

function order($unordered){
  //ordering function
 $try =  array(explode("_", $unordered));

foreach ($try as $trial) {
  $num = 0;
  while ($num <= 13) {
  preg_match("([^']+)", $trial[$num], $result);


  $checker = "'".$result[0]."'";
  $fresh_word = str_replace($checker,"",$trial[$num]);
  echo $result[0].$fresh_word.'<br>';
  $num++;
  }

}

}

echo order($unordered);


 ?>
