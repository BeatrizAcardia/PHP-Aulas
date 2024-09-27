<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Professor</title>
    <style>
body{
font-family: "Poppins", sans-serif;
display: flex;
flex-direction: column;
align-items: center;
background-color: #f4f4f4;
}
    </style>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION["logado"]) && ($_SESSION["logado"] == "2")){
            echo"
            <h2>Sistema Acadêmico</h2>
            <h3> Oi, Professor</h3>
            <a href='logout.php'>Logout</a>
            ";
        } else{
            echo "Faça o <a href='login.php'>login</a> porra!";
        }
    ?>

</body>
</html>