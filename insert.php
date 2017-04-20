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
      echo "Opened database successfully\n";
   }

   $sql =<<<EOF
      INSERT INTO user_info (name,email,username,password)
      VALUES ('Taufiq Ibrahim', 'mnt_2802@yahoo.com', 'taufiq', 'taufiq');
	  
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Records created successfully\n";
   }
   $db->close();
?>