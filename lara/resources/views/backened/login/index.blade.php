<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        h1{
            text-align :center;
        }
    </style>
</head>
<body>
    <h1>This is login Page</h1>
    <form method="post">
      
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        <table align="center">
            <tr><td width="400px" align="center">
                <fieldset>
                    <legend>Login Page</legend>
                User ID:<br><input type="text" name="username"><br>
                Password:<br><input type="password" name="password"><br><br>
                <input type="submit" name="submit" value="submit"><br>
                <a href="#">Sign Up</a>
                {{ session('msg') }}      
                </fieldset>
            </td></tr> 
        </table>
    </form>
    
</body>
</html>