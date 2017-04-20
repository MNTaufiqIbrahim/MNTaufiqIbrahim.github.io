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
      CREATE TABLE user_info
      (id INTEGER PRIMARY KEY AUTOINCREMENT,
      name           VARCHAR(255),
      ic_no          VARCHAR(255),
      email       	 VARCHAR(255),
      phone_no       VARCHAR(255),
      address        VARCHAR(255),
      postal_code    VARCHAR(255),
      city       	 VARCHAR(255),
      state       	 VARCHAR(255),
      country        VARCHAR(255),
      username       VARCHAR(255),
      password       VARCHAR(255));
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Table created successfully\n";
   }
   $db->close();
?>