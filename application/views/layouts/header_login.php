<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

if (!isset($_SESSION['s_name'])) {
    $redirect = base_url();
    header("location: $redirect");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate</title>
    
    <style type="text/css">
        .list-group-item {
            width: 135px;
            font-size: 0.8em;
        }

        .card-header {
            text-align: center;
        }

        .input-group-text {
            width: 135px;
        }

        h1 {
            color: #17a2b8;

        }
    </style>
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url().'Principal'; ?>">Real Estate</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url().'Principal'; ?>">Properties <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url().'Create_propertie'; ?>"><i class="fa fa-home"></i>Create Property</i></a>
                        </li>
                        
                    </ul>
                    <form class="form-inline my-2 my-lg-0" action="<?php echo base_url() . 'Ex' ?>">
                        <span class="text-light"><strong><i class="fa fa-user-circle"></i> <?php echo $_SESSION['s_name']; ?></strong></span>
                        &nbsp;
                        &nbsp;
                        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit"><i class="fa fa-stop"></i> Exit</button>
                    </form>
                </div>
            </div>
        </nav>

    </header>

    <div class="container">
    <br>