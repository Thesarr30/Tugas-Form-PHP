<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>Sign Up Form</title>
</head>
<body>
    <div class="signup-container">
        <h1>Buat Account Baru</h1>
        <form action="welcome.php" method="get" class="signup-form">
            <div class="form-group">
                <label for="firstname">First name :</label>
                <input type="text" id="firstname" name="firstname" required>
            </div>
            <div class="form-group">
                <label for="lastname">Last name :</label>
                <input type="text" id="lastname" name="lastname" required>
            </div>
            <div class="form-group">
                <b><label for="gender">Gender :</label></b><br>
                <label class="btn btn-primary active">
                    <input type="radio" class="me-2" name="gender" value="Lanang" autocomplete="off" checked> Lanang
                </label><br>
                <label class="btn btn-primary">
                    <input type="radio" name="gender" value="Female" autocomplete="off"> Female
                </label><br>
                <label class="btn btn-primary">
                    <input type="radio" name="gender" value="E-mail" autocomplete="off"> E-mail
                </label>
            </div>
            <div class="dropdown-container">
                <label for="nationality">Nationality :</label>
                <select class="custom-select" id="nationality" name="nationality">
                    <option value="English">English</option>
                    <option value="Dutch">Dutch</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="German">German</option>
                </select>
            </div><br>
            <div class="form-group">
                <label for="languages">Language Spoken :</label><br>
                <input type="checkbox" id="language1" name="languages[]" value="Bahasa Indonesia">
                <label for="language1"> Bahasa Indonesia</label><br>
                <input type="checkbox" id="language2" name="languages[]" value="English">
                <label for="language2"> English</label><br>
                <input type="checkbox" id="language3" name="languages[]" value="Jawir">
                <label for="language3"> Jawir</label>
            </div>
            <div class="form-group">
                <b><label for="bio">Bio</label></b><br>
                <textarea class="form-control" name="bio" id="bio" cols="30" rows="10"></textarea>
            </div>
            <input type="submit" value="Sign Up">
        </form>
    </div>
</body>
</html>
