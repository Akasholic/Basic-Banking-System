<html>
    <head>
        <title>View All Customer</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <div class="bg">
            <div class="header" style="background-color: black;color: aliceblue">
                <h1>Customer List</h1>
            </div>
            <form action="http://localhost/Banking%20System/Transactm.php?">
                    <input type="submit" value="Click Here For Transfer Money" style="background-color:black;color:brown" >

                    </form>                
            <table style="width:100%">
                <tr>
                    <th><h2>Name</h2></th>
                    <th><h2>Acc Number</h2></th>
                    <th><h2>Email</h2></th>
                    <th><h2>Current Balance</h2></th>
                </tr>
                <tbody style="text-align:center;font-size:24">
                
                    <?php include("viewfetch.php") ?>
                </tbody>
            </table>

                
        </div>
    </body>
</html>