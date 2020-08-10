<?php 
    session_start();

    /* echo '¡Hola ' . htmlspecialchars($_COOKIE["user_type"]) . '!'; */

    switch ($_COOKIE["user_type"]) {
        case 2:
            header('location: /backend/red_sites/colaborator_setup.php');
            break;
        case 3:
            header('location: /backend/red_sites/setup.php');
            break;
        
        default:
    };
    
?>



<!DOCTYPE html>
<html lang="en">
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/backend/red_component/red_component/header.php';?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Options</title>
</head>
<body>
<div class="content shadow box">
        <div class="tittle">
            <h1>Admin Setup</h1>
        </div>
        <div class="div-text">
            <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel rem ipsum error provident est ducimus
                veniam corporis, veritatis facilis, accusamus quidem recusandae sint omnis asperiores quasi quo mollitia
                at iure!
                Sint provident incidunt nemo! Quaerat cum rem maiores illum commodi nam odio aut deleniti officiis
                provident. Iusto dolorum minus vitae beatae dolorem doloribus corrupti eos necessitatibus, at vel
                incidunt eaque?
                Totam iusto nam minima dolorum natus enim iure similique, cum eos asperiores. Odio cum voluptate nisi
                magni obcaecati fugiat asperiores delectus a. Temporibus minus nihil perferendis sunt soluta!
                Laboriosam, delectus.</p>
        </div>
    </div>
</body>
<footer>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/backend/red_component/red_component/footer.php';?>
</footer>
</html>