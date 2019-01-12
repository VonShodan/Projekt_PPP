<?php
/* @var $this yii\web\View */
$backgroundColor = isset($_REQUEST['bckg'])?$_REQUEST['bckg']:'#FFF00F';
$this->params['background_color'] = $backgroundColor;
$this->title = 'Aplikacja Dyżury';
?>

<div class="site-index">

    <div class="jumbotron">
        <h1>Witaj!</h1>

        <p class="lead">Aplikacja umożliwia łatwiejsze zarządzanie swoimi dyżurami</p>

    <!--     <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p> --> 
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Tekst 1 naglowek</h2>

                <p>Tekst 1.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Link 1 &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Tekst 2 naglowek</h2>

                <p>Tekst 2.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Link 2 &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Tekst 3 naglowek</h2>

                <p>Tekst 2.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Link 3 &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
