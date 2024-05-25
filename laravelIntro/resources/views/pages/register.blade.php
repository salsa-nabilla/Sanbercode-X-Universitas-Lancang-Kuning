<!DOCTYPE html>
<html>
<body>

<h2>Buat Account Baru</h2>
<h3>Sign Up Form</h3>

<form action="/sign" method="POST">
    @csrf

    <label>First Name:</label><br>
    <input type="text" name="name"><br><br>
    <label>Last Name:</label><br>
    <input type="text" name="nama"><br><br>
    <label>Gender:</label><br>
    <input type="radio" name="gender" value="male"> Man<br>
    <input type="radio" name="gender" value="female"> Woman<br>
    <input type="radio" name="gender" value="other"> Other<br><br>

    <label>Nationality:</label><br>
    <select name="Nationality">
        <option value="indonesian">Indonesian</option>
        <option value="singapore">Singapore</option>
        <option value="singapore">Malaysian</option>
        <option value="singapore">Thailand</option>
    </select><br><br>
    <label>Language Spoken</label><br>
    <input type="checkbox" name="languange spoken">Bahasa Indonesia<br>
    <input type="checkbox" name="languange spoken">English<br>
    <input type="checkbox" name="languange spoken">Arabic<br>
    <input type="checkbox" name="languange spoken">Japanese<br><br>
    <label>Bio:</label><br>
    <textarea name="bio" rows="10" cols="30"></textarea><br><br>
    <button type="sign up">Sign Up</button>

</form>
</body>

</html>