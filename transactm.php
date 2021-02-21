<html>
    <head>
        <title>Transact</title>
        <link rel="stylesheet" href="style4.css">
       
    </head>
    <body>
       <div class="bg" >
        <h2 class="heading" style="color: brown;text-align: center">Fill Correctly To Complete A Transaction</h2>
      <a href="index.html" style="background-color:brown;color:black">Home</a>
        <form method="post" action="http://localhost/Banking%20System/transact.php" >
            <h3 class="txt">Select Your Account Number</h3> 
            <select id="txt1" type="number" name="from" method="post" required>
                <option value="11101">11101</option>
                <option value="11102">11102</option>
                <option value="11103">11103</option>
                <option value="11104">11104</option>
                <option value="11105">11105</option>
                <option value="11106">11106</option>
                <option value="11107">11107</option>
                <option value="11108">11108</option>
                <option value="11109">11109</option>
                <option value="11110">11110</option>
            </select>
            <h3 class="txt">Select Account Number<br> of Recipient</h3>
            <select id="txt2" type="number" name="to" method="post" required >
            <option value="11101">11101</option>
                <option value="11102">11102</option>
                <option value="11103">11103</option>
                <option value="11104">11104</option>
                <option value="11105">11105</option>
                <option value="11106">11106</option>
                <option value="11107">11107</option>
                <option value="11108">11108</option>
                <option value="11109">11109</option>
                <option value="11110">11110</option>
        </select>
            <h3 class="txt">Enter Amount Number</h3>
            <input id="txt3" type="number" name="amt" method="post" required >
           
            <input class="btn" type="submit" name="send" value="Send">
        </form>
            <form class="btn2" action="http://localhost/Banking%20System/Transaction_history.php">
            <button type="submit" value="Transaction history" style="width:150px;height: 60px;color: antiquewhite;background-color: black;left:10px">Transaction History</button>
            </form>
       </div>
    </body>
</html>