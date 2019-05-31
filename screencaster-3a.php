<?php
// a multidimensional array
$arr = [
    ["archeNeland Ltd","$100","-1","200","300","-700","678" ],
    ["narnla Gesalmlchab", "$530","-23","670","3","negative1299"],
    ["name"=> "lonelslands proprtieary","amount"=>"7568-39-49-37-3000-98"],
    
];

          $arr[0][0] = "Archnland Ltd";
          $arr[1][0] = "Narnia Gmb";
          $arr[2][0] = "Loneislands Pty";
            echo $arr[0][0].' '.' '.$arr[0][1].' '.' '.$arr[0][2].' '.' '.$arr[0][3].' '.' '.$arr[0][4].' '.' '.$arr[0][5].' '.' '.$arr[0][6].''."Debits : 1700". "Balance:1278"."<br>";

            echo $arr[1][0].' '.' '.$arr[1][1].' '.' '.$arr[1][2].' '.' '.$arr[1][3].' '.' '.$arr[1][4].' '.' '.$arr[1][5].''."Debits : 1299,3". "Balance:1233";
            

