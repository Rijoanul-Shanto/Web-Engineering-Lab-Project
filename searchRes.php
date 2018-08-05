<!DOCTYPE html>
<html>
    <head>
        <title>YOU</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <div class="main">
            <div class="listTitle">
                <h1>Search Result</h1>
            </div>
            <div class="list_user">
                <table border="1" cellpadding="5" width="100%">
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>DateofBirth</th>
                        <th>Country</th>
                        <th>Address</th>
                        <th>Gender</th>
                    </tr>
                    <?php
                        include ('connect.php');
                        if (isset($_POST['click'])) {
                            
                            $sql = "select * from info;";
                            $rows = mysqli_query($conn, $sql);
                            $rowscheck = mysqli_num_rows($rows);

                            while ($result = mysqli_fetch_assoc($rows)) {
                                if($_POST['input'] == $result['firstName'] or $_POST['input'] == $result['lastName'] or $_POST['input'] == $result['country'])
                                {
                                    echo "<tr> <td>";
                                    echo $result['firstName'];
                                    echo "</td>";

                                    echo "<td>";
                                    echo $result['lastName'];
                                    echo "</td>";

                                    echo "<td>";
                                    echo $result['email'];
                                    echo "</td>";

                                    echo "<td>";
                                    echo $result['phone'];
                                    echo "</td>";

                                    echo "<td>";
                                    echo $result['bd'];
                                    echo "</td>";

                                    echo "<td>";
                                    echo $result['country'];
                                    echo "</td>";

                                    echo "<td>";
                                    echo $result['address'];
                                    echo "</td>";

                                    echo "<td>";
                                    echo $result['gender'];
                                    echo "</td>";

                                    echo "</tr>";
                                }
                            }
                        }
                    ?>
                </table>
            </div>
        </div>
    </body>
</html>
