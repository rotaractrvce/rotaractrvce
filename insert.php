<?php
   $name=$_POST['name'];
   $topic=$_POST['topic'];
   $file=$_POST['file'];
   $article=$_POST['article'];
   $publish=$_POST['publish'];

   $host="localhost";
   $dbUsername="mentalhealth";
   $dbPassword="mentalhealth3190";
   $dbname="mentalhealth";

   $conn=new mysqli($host, $dbUsernmae,$dbPassword, $dbname);
   
   if (mysqli_connect_error()){
       die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
   }
   else{
       $INSERT="INSER Into mentalhealth (name,topic,file,article,publish";
       $VALUES=()

       $stmt=$conn->prepare($SELECT);

   }

?>