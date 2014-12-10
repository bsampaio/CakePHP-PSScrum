<head>
	<?php echo $this->Html->charset(); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('logo-nav');
		echo $this->Html->css('scrum');

		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php echo $this->Html->link($this->Html->image('logo.png'),
                                            '/pages/home',
                                            array('class' => 'navbar-brand',
                                                  'escape' => false,
                                            )
                );?>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Colaboradores<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><?php echo $this->Html->link('Listar', array(
                                'controller' => 'employees',
                                'action' => 'index',
                                'full_base' => true
                            ));?></li>
                            <li><?php echo $this->Html->link('Adicionar', array(
                                'controller' => 'employees',
                                'action' => 'add',
                                'full_base' => true
                            ));?></li>
                        </ul>
                    </li>
                    <li><?php echo $this->Html->link('Sobre', array(
                                'controller' => 'pages',
                                'action' => 'about',
                                'full_base' => true
                            ));?></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="principal">