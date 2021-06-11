<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>

    <style>
         @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
        .center{
            padding: 100px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 130px;
        }
        .box{
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 20px;
        }
        label, h1, a, footer{
            color: #ffffffff;
            font-family:'Montserrat',sans-serif;
        }
        table{
            padding: 20px;
        }
        input{
            padding: 7px 7px;
            margin-bottom: 10px;
            font-family:'Montserrat',sans-serif;
        }
        .button{
            margin-bottom: 20%;
            margin-top: 5px;
            padding: 7px 14px;
            background-color: rgb(0, 77, 128);
            border: none;
            color: #ffffffff;
            font-family:'Montserrat',sans-serif;
        }
        h1{
            font-size: 40px;
            text-align: center;
            margin-top: 1px;
        }
        footer{
            text-align: center;
        }
        .round{
            border-radius: 5px;
            border: none;
        }

    </style>

    <body style="background-image: url(background3.jpg);">
        <form method="POST" action="aksi_login.php">
            <table class="center box">
                    <tr>
                        <td>
                            <h1>Login</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Username</label><br>
                            <input name="username" class="round" type="text" placeholder="Your username"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Password</label><br>
                            <input name="password" class="round" type="password" placeholder="Your Password"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="button" type="submit" value="Login">
                        </td>
                    </tr>
            </table>
        </form>
    </body>

    <footer>
        <p>&copy; 2021 Copyright Reserved.</p>
    </footer>
</html>