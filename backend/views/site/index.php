<?php
/* @var $this yii\web\View */
$backgroundColor = isset($_REQUEST['bckg'])?$_REQUEST['bckg']:'#FFF00F';
$this->params['background_color'] = $backgroundColor;
$this->title = 'Aplikacja Dyżury';
?>

<div class="site-index">

<div class="jumbotron">
        <h1>Witaj!</h1>

        <p class="lead">Aplikacja ułatwia zarządzanie dyżurami</p>

        <p><a class="btn btn-lg btn-success" href="http://localhost/PPP-AI/frontend/web/index.php">Dla Pracowników</a></p>
    </div>


</div>
