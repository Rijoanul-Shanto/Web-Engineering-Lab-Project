<!DOCTYPE html>
<html>
    <head>
        <title>YOU</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <div class="main">
            <div class="listTitle">
                <h1>Search People here</h1>
            </div>
            <div class="search">
                <form action="searchRes.php" method="post">
                    Search: <input type="text" name="input" placeholder="Enter firstname lastname or country">
                    <input type="submit" name="click" value="Search">
                </form>
            </div>
            <div class="listavailable">
                <h1>List of available users</h1>
            </div>
            <div class="list_user">
                <?php
                    include ('connect.php');
                    $sql = "select * from info;";
                    $rows = mysqli_query($conn, $sql);
                    $rowscheck = mysqli_num_rows($rows);
                ?>
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
                        while ($result = mysqli_fetch_assoc($rows)) {
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
                    ?>
                </table>
            </div>
        </div>
    </body>
</html>
