<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Música Semanal</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body id="page-top">

        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="<?=base_url()?>">Página principal</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <?php if ($this->session->userdata('is_logged_in')) : ?>
                            <li>
                                <a class="page-scroll"><?php echo 'Bienvenido, '.$this->session->userdata('username') ?></a>
                            </li> 
                            <?php if ($this->session->userdata('admin') == 1) : ?>
                                <li>
                                    <a data-toggle="modal" data-target="#modalSms" class="page-scroll">Enviar SMS</a>
                                </li>
                            <?php else : ?>
                                <li>
                                    <a class="page-scroll" href="<?=base_url()?>users/cuenta">Tu cuenta</a>
                                </li> 
                            <?php endif; ?>                            
                            <li>
                                <a class="page-scroll" href="<?=base_url()?>users/salir">Desconectar</a>
                            </li>  
                        <?php else : ?>
                            <li>
                                <a class="page-scroll" href="<?=base_url()?>users/entrar">Miembros</a>
                            </li>      
                        <?php endif; ?>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>


    </div>

</body>

</html>
