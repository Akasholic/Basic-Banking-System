<html>
    <head>
        <meta charset="UTF=8">
        <title>Transaction History</title>
        
    </head>
    <body >
        <div class="bg" style="background-color: black;height: wrap-content">
        <h3 style="color: antiquewhite;text-align: center;font-size: 24"><b><i>Transaction History</i></b></h3>
        <a href="index.html" style="backgroud-color: white;color:white"> Home</a>
        <table style="color: beige;width: 100%">
            <tr>
                <th>From</th> 
                <th>To</th>
                <th>Amount</th>
            </tr>
            <tbody style="text-align:center">
            <?php include("transactions.php") ?>;
            </tbody>
        </table>  

         </div>
    </body>
</html>