<!DOCTYPE html>
<html>
    <head>
        <title>YOU</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <div class="main">
            <?php

                <form class="form">
                    Frist Name: <br> <input type="text" name="firstname" placeholder="Enter your first name..."> <br> <br>
                    Last Name: <br> <input type="text" name="lastname" placeholder="Enter your last name..."> <br> <br>
                    Email: <br> <input type="email" name="email" placeholder="Enter your email..."> <br> <br>
                    Phone: <br> <input type="text" name="phone" placeholder="Enter your phone..."> <br> <br>
                    Date of Birth: <br> <input type="date" name="dofb"> <br> <br>
                    Country: <br> <input type="text" name="country" placeholder="Enter your country..."> <br> <br>
                    Addres: <br> <input type="text" name="address" placeholder="Enter your address..."> <br> <br>
                    Gender:
                    <br> <input type="radio" checked="checked" name="gender" value="Male"> Male <br>
                    <input type="radio" name="gender" value="Female"> Female <br> <br>
                    <input type="submit" name="edit" value="EDIT">
                    <input type="submit" name="delete" value="DELETE">
                </form>
            ?>
        </div>
    </body>
</html>
