<!DOCTYPE html>
<html>
<head>
    <title>Febriansyah Rizqi P.S</title>
</head>

<body>

    <form action="proses-pendaftaran.php" method="POST"> 

        <fieldset> 

        <p>
            <label for="username">Username: </label>
            <input type="text" name="username"
        </p>
        <p>
            <label for="password">Password: </label>
            <input type="password" name="password"></textarea>
        </p>
        <p>
            <label for="level">Level: </label>
            <select name="level">
                <option>Admin</option>
                <option>User</option>
                <option>Guest</option>
            </select>
        </p>
        <p>
            <label for="fullname">Fullname: </label>
            <input type="fullname" name="fullname"></textarea>
        </p>
        <br/>
        
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>
