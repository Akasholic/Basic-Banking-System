<?php
                $conn = mysqli_connect('localhost','root','','transaction') or die("unable to connect");
                $sql = "SELECT * From customer";
                $result = $conn -> query($sql);

                if($result -> num_rows > 0){
                    while($row = $result -> fetch_assoc())
                    {
                        echo "<tr>";
                        echo  "<td><b>" . $row["Name"] . "</b></td>";
                        echo  "<td>" . $row["AccountNumber"] . "</td>";
                        echo  "<td>" . $row["Email"] . "</td>";
                        echo  "<td>" . $row["CurrentBalance"] . "</td>";
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