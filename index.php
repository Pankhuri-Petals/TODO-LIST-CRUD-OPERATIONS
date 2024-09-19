<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO LIST APP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <img src="bg.png" alt="" style="height: 500px;width:1535px;filter: brightness(60%);">
    <form action="insert.php" method="POST" style="position: absolute;top: 15%;left: 50%;transform: translate(-50%, -50%);color: white;text-align: center;">
        <div class="container">
            <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6 " style="width:600px">
                <h3 class="text-center text-primary font-monospace">TODO</h3>
                <div class="col-8">
                    <input type="text" name="list" class="form-control">
                </div>
                <div class="col-2">
                    <button class="btn btn-outline-primary">ADD</button>
                </div>
            </div>
        </div>
    </form>

    <?php
    include "config.php";
    $rawData=mysqli_query(mysql:$con,query:"select* from todolist");
    ?>
    <div class="container">
        <div class="col-8 bg-white m-auto mt-3">
            <table class="table">
                <tbody>
                    <?php
                    while($row=mysqli_fetch_array($rawData)){
                        ?>
                   <tr>
                       <td><?php echo $row['id'] ?></td>
                       <td><?php echo $row['list'] ?></td>
                       <td style="width:10%"><a href="delete.php? ID= <?php echo $row['id'] ?>"class="btn btn-outline-danger">delete</a></td>
                       <td style="width:10%"><a href="update.php? ID= <?php echo $row['id'] ?>"class="btn btn-outline-success">update</a></t>
                   </tr>
                   <?php 
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>