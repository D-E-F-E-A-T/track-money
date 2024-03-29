<?php

if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){

    require_once "conexao.php";
    
    $sql = "SELECT * FROM crowdfunding WHERE id = ?";
    
    if($stmt = mysqli_prepare($conn, $sql)){
      
        mysqli_stmt_bind_param($stmt, "i", $param_id);

        $param_id = trim($_GET["id"]);
        
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $value = $row["value"];
                $status = $row["status"];  
            } else{
                header("location: index.php");
                exit();
            }
            
        } else{
            echo "Opa! Algo deu errado. Por favor, tente novamente mais tarde.";
        }
    }
    mysqli_stmt_close($stmt);
    
    mysqli_close($conn);
} else{
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Visualizar</title>
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
                        <h1>Título Recebível</h1>
                    </div>
                    <div class="form-group">
                        <label>Valor</label>
                        <p class="form-control-static"><?php echo $row["value"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Disponibilidade</label>
                        <p class="form-control-static"><?php echo $row["status"]; ?></p>
                    </div>
                    <p><a href="capitalization.php" class="btn btn-primary">Voltar</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>