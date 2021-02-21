<?php

$fromAcc = $_POST['from'];
$toAcc = $_POST['to'];
$amount = $_POST['amt'];


if(!empty($fromAcc) || !empty($toAcc) || !empty($amount) ){

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "transaction";

$conn = mysqli_connect($host,$user,$pass,$dbname);

if(mysqli_connect_error()){
    die('conncetion Error('.mysqli_connect_error().')'. mysqli_connect_error());
}
else{
      if($fromAcc!=$toAcc){


      $currvals =" SELECT CurrentBalance from customer WHERE AccountNumber=$fromAcc";
      $result1 = $conn ->query($currvals);
      if($result1-> num_rows > 0){
        while($row = $result1 -> fetch_assoc())
                    {
                      $vals = $row["CurrentBalance"];
                        //echo $row["CurrentBalance"];

                    }
      }
       $newvals=$vals-$amount;

      
      $currvalr =" SELECT CurrentBalance from customer WHERE AccountNumber=$toAcc";
      $result2 = $conn ->query($currvalr);
      if($result2-> num_rows > 0){
        while($rowr = $result2 -> fetch_assoc())
                    {
                      $valr = $rowr["CurrentBalance"];
                        //echo $row["CurrentBalance"];

                    }
      }
      $newvalr = $valr + $amount;
     
     
      
       $fills = "UPDATE customer SET CurrentBalance = $newvals WHERE AccountNumber=$fromAcc";
        $fillr = "UPDATE customer SET CurrentBalance = $newvalr WHERE AccountNumber=$toAcc";
        $sendupdt = mysqli_query($conn,$fills);
        $recupdt = mysqli_query($conn,$fillr);





    $query = "INSERT INTO transaction_history  VALUES('$fromAcc','$toAcc','$amount')";
    $data = mysqli_query($conn,$query);
    if($data){
    echo '<script>alert("Transaction Successfull");
    window.location = "http://localhost/Banking%20System/Transactm.php";
     </script>';
        
    }

    else{
        echo "failed to insert";
    }
}
else{
    echo '<script>alert("Sender or Reciever Account Number is Wrong");
        window.location = "http://localhost/Banking%20System/Transactm.php";
        </script>';
}
}

}
else{
    echo "All Field Are Required!";
    die();

}


?>
