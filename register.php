<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Account</title>
</head>
<style>
body a { text-decoration: none; color: inherit; }
.header { grid-area: header; background-color: white; border-bottom: 2px solid black;
                height: 60px;
                }
#item1 {
            float:left;
            margin: 10px 0 0 20px;
            text-align: center;
        }   #item1 a { float: left; margin: 10px 20px; font-size: 20px; font-weight: bold; }
            #item1 img { float: left; }
#item2 {
            float: right;
            margin: 10px 0 0 0;
        } #item2 input { float: left; margin: 10px 20px; }
        #selected { position: relative; background-color: #696969; padding: 2px 10px 2px 10px; margin-bottom: 20px;}
#item3 { grid-area: item3;  background-color: #696969;
                text-align: center; 
                }  #item3 h3 {  width: 350px; margin: 30px auto 0 auto; border-bottom: 2px solid #fff;}
                #item3p { width: 350px; margin: 0 auto 0 auto;}
#item4 { grid-area: item4; background-color: #696969; 
                text-align: center;
                }  #item4 h3 { width: 350px; margin: 30px auto 20px auto; border-bottom: 2px solid #fff;}
#item5 { grid-area: item5; background-color: #696969; 
                }  #form { padding-left: 30px;}
.footer { grid-area: footer; background-color: #696969;
                display: grid;
                grid-template-areas: 
                'item3 item4 item5';
                height: 300px;
                color: #fff;
                }
.main { height: 1300px; background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url("./img/background.jpg"); 
        width: 1440px; background-size: 100% 100%; background-color: #696969;}
.grid-container {
            display: grid;
            grid-template-areas: 
            'header header header header header header'
            'main main main main main main'
            'footer footer footer footer footer footer'
            ;
            max-height: 1000px;
        }

.nicebody {
    margin-left: auto; margin-right: auto;
    margin-top: 135px;
    background-color: #A9A9A9;
    width: 650px;
    height: 1100px;
}   
.subjects { 
    font-size: 30px; 
    padding: 10px 0 0 30px;
}   .subjects input { width: 550px; }
    .subjects p { color: darkslategray; }
    .subjects a { color: darkslategray; }
#submit { width: 100px; float: right; margin-right: 50px;}
#title {
    text-align: center;
    background-color: grey;
    height: 140px;
    width: 650px;
    font-size: 35px;
    font-weight: bold;
    border: 2px solid black;
}
input.submit {
    margin-right: 5px;
}

</style>


<script>
function myFunction() {
    alert("You have completed the registration porcess");
}
                </script>

<body>
    <div class="grid-container">

        <div class="main">
            <div class="nicebody">
                <div id="title">
                    <h2>Create New Account</h2>
                </div>
                    <form action="register.php" method="post">
                    <div class="subjects">

                    <label for="email">Email:</label><br>
                    <input type="text" id="email" name="email"></input><br><br>
                    <label for="PASSWORD">Password:</label><br>
                    <input type="password" id="PASSWORD" name="PASSWORD"></input><br><br>

                    <p>By creating new account, you are agreeing to our  terms and conditions.</p>
                    <a href="">Already sign up? Sign in</a>
                    <input class="submit" type="submit" value="Submit" name="submit" id="submit" onclick ="myFunction()" /><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['submit'])){
        $email= $_POST['email'];
        $PASSWORD= $_POST['PASSWORD'];
        include "config.php";

            $sql = "INSERT INTO user(email, password) VALUES($email, $PASSWORD)";
            if($connect->query($sql) === true){
                echo "success insert";
            
        }
    }
    ?> 
<div>

</body>
</html>
