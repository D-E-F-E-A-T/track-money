<?php

if(isset($_POST["id"]) && !empty($_POST["id"])){
    require_once "conexao.php";
          $sql = "DELETE FROM crowdfunding WHERE id= ?";
    if($stmt = mysqli_prepare($conn, $sql)){
         mysqli_stmt_bind_param($stmt, "i", $param_id);
             $param_id = trim($_POST["id"]);
        if(mysqli_stmt_execute($stmt)){
            header("location: capitalization.php");
 exit();
        } else{
            echo "Opa! Algo deu errado. Por favor, tente novamente mais tarde.";
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else{ 
    if(empty(trim($_GET["id"]))){
        header("location: error.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Deletar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Deletar Título</h1>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger fade in">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                            <p>Deseja remover esse título?</p><br>
                            <p>
                                <input type="submit" value="SIM" class="btn btn-danger">
                                <a href="capitalization.php" class="btn btn-default">Não</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>