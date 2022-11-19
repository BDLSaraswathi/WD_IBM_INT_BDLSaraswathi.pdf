<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
       *{
           font-family: serif;
           font-weight: 600;
        }
        body{
            background-image: url(image2.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        .container{
            border:2px #000000;
            text-align: center;
            height: 68%;
            width: 50%;
            position: absolute;
            margin-left:25%;
            margin-top: 8%;
            background-color: #F0F8FF;
            border-radius: 15px;
            box-shadow: 2px 2px #000000;
        }
        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-top: 4%;          
        }
       button{
            background-color: #000000;
            color: #FFFFFF;
            width: 23%;
            border-radius: 5px;
        }
       .input{
           padding: 14px;
       }
       label{
           display: flex;
           align-items: flex-start;
       }
  </style>
   <title>Register</title>
</head>
<body>
  <div class=container >
            <form method="post">
                <div class="input">
                <label for="Full-Name">Name:</label>
                <input type="text" size="30%" name="name"/>
                </div>
                <div class="input">
                <label for="E-mail Adress">E-mail:</label>
                <input type="text" size="30%" name="email"/>
                </div>
                <div class="input">
                <label for="Phone Number">Phone Number:</label>
                <input type="text" size="30%" name="phone_no"/>
                </div>
                <div class="input">
                <label for="Password">Password:</label>
                <input type="text" size="30%" name="password"/>
                </div>
                <div class="input">
                <label for="Confirm Password">Confirm Password:</label>
                <input type="text" size="30%"/>
                </div><br>
                <button value="submit" name="submit">submit</button>
                <p style="text-align:center">Already Registered?<a href="login.php">Login</a></p>
            </form>
        </div>
</body>
</html>