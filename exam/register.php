<?php
if($password != password_confirm){
    echo "<script>alert ('암호확인이 일치하지 않습니다.');</script>";
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
   
    
    <title>Document</title>
    <style>
        h3{
            padding: 10px;
        }
        .card{
         

            background-color: red;
            padding: 10px;
            max-width: 320px;
            min-width: 220px;
            
            box-shadow: 1px 1px 10px gray;
            text-align: center;
            border-radius: 10px;
        }
        .card > *{
            margin-top : 6px;
        }
    
    
        label{
            display:inline-block;
	        text-align:center;
	        width:80px;
        	font-weight:bold;
        }
        
      

        input[type=submit] {
            width : 95px; height : 22px;
       
        }
      

    </style>
   
</head>
<body>
    <div class="card">
    
    <H3>회원가입</h3>
        <form action="register.php" method="POST">
            <p> <img src="https://via.placeholder.com/150"></p>
            <p> <label>아이디</label><input type = "email" name = "email" required ></p>
            <p> <label>암호</label><input type = "password"  name="password" required></p>
            <p> <label>암호확인</label><input type = "password" name = password_confirm required></p>
            <input type = "submit" value="제출">
        </form>
   
    
    
</div>
</body>
</html>
