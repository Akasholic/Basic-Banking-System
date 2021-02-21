<?php
                $conn = mysqli_connect('localhost','root','','transaction') or die("unable to connect");
                $sql = "SELECT * From transaction_history";
                $result = $conn -> query($sql);

                if($result -> num_rows > 0){
                    while($row = $result -> fetch_assoc())
                    {
                        echo "<tr>";
                        echo  "<td>" . $row["FromAcc"] . "</td>";
                        echo  "<td>" . $row["ToAcc"] . "</td>";
                        
                        echo  "<td>" . $row["Amount"] . "</td>";
                        echo  "</tr>";
                    }
                    echo "</table>";
                }
                else
                {
                    echo "0 result";
                }
                $conn -> close();
                ?>