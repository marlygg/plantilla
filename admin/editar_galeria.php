<?php
include("menu.php");
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Galeria</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- References: https://github.com/fancyapps/fancyBox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    <style type="text/css">
    .galeria{
        display: inline-block;
        margin-top: 20px;
    }
    .icono-cerrar{
		border-radius: 50%;
        position: absolute;
        right: 5px;
        top: -10px;
        padding: 5px 8px;
    }
    .form-image-upload{
        background: #e8e8e8 none repeat scroll 0 0;
        padding: 15px;
    }
    </style>
</head>
<body>

<div class="container">

    <h3>Galeria</h3>
    <form action="imageUpload.php" class="form-image-upload" method="POST" enctype="multipart/form-data">

        <?php if(!empty($_SESSION['error'])){ ?>
            <div class="alert alert-danger">
                <strong>Error!</strong> Verifique su session.<br><br>
                <ul>
                    <li><?php echo $_SESSION['error']; ?></li>
                </ul>
            </div>
        <?php unset($_SESSION['error']); } ?>

        <?php if(!empty($_SESSION['success'])){ ?>
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong><?php echo $_SESSION['success']; ?></strong>
        </div>
        <?php unset($_SESSION['success']); } ?>

        <div class="row">
            <div class="col-md-5">
                <strong>Titulo:</strong>
                <input type="text" name="titulo" class="form-control" placeholder="Titulo">
            </div>
            <div class="col-md-5">
                <strong>Imagen:</strong>
                <input type="file" name="imagen" class="form-control">
            </div>
            <div class="col-md-2">
                <br/>
                <button type="submit" class="btn btn-success">Subir</button>
            </div>
        </div>

    </form> 

    <div class="row">
    <div class='list-group gallery'>

            <?php
            require('db_config.php');
			
            $sql = "SELECT * FROM galeria";
            $images = $mysqli->query($sql);

            while($image = $images->fetch_assoc()){

            ?>
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="<?php echo $image['imagen'] ?>">
                        <img class="img-responsive" alt="" src="<?php echo $image['imagen'] ?>" />
                        <div class='text-center'>
                            <small class='text-muted'><?php echo $image['titulo'] ?></small>
                        </div> <!-- text-center / end -->
                    </a>
                    <form action="imageDelete.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $image['id'] ?>">
                    <button type="submit" class=" btn btn-danger icono-cerrar"><i class="glyphicon glyphicon-remove"></i></button>
                    </form>
                </div> <!-- col-6 / end -->
            <?php } ?>

        </div> <!-- list-group / end -->
    </div> <!-- row / end -->
</div> <!-- container / end -->

</body>

<script type="text/javascript">
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>
</html>