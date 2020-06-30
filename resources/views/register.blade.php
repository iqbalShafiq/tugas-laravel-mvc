<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sign Up</title>
</head>

<body>
    <h2>Buat Account Baru!</h2>
    <h4>Sign Up Form</h4>
    <form action="{{ route('welcome') }}" method="post">
        @csrf
        <label for="first-name">First Name:</label><br><br>
        <input type="text" name="first-name" id="first-name"><br><br>

        <label for="last-name">Last Name:</label><br><br>
        <input type="text" name="last-name" id="last-name"><br>

        <p>Gender</p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br>

        <p>Nationality</p>
        <select name="nationality" id="nationality">
            <option value="indonesia">Indonesian</option>
            <option value="singaporean">Singaporean</option>
            <option value="malaysian">Malaysian</option>
            <option value="australian">Australian</option>
        </select>

        <p>Language Spoken</p>
        <input type="checkbox" name="language" id="bahasa" value="bahasa">
        <label for="bahasa">Bahasa Indonesia</label> <br>
        <input type="checkbox" name="language" id="english" value="english">
        <label for="english">English</label> <br>
        <input type="checkbox" name="language" id="other" value="other">
        <label for="other">Other</label> <br> <br>

        <label for="bio">Bio:</label> <br> <br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea> <br>

        <button type="submit">Sign Up</button>
        
    </form>
</body>