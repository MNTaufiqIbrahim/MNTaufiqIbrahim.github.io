<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('soding.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      //echo "Opened database successfully\n";
   }

   $sql =<<<EOF
      SELECT * from user_info;
EOF;

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      echo "ID = ". $row['id'] . "\n";
      echo "NAME = ". $row['name'] ."\n";
      //echo "EMAIL = ". $row['EMAIL'] ."\n";
      echo "USERNAME =  ".$row['username'] ."\n\n";
      //echo "PASSWORD =  ".$row['PASSWORD'] ."\n\n</br>";
   }
   //echo "Operation done successfully\n";
   $db->close();
?>