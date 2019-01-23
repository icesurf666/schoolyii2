<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://static.hogwartsishere.com/storage/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <?php
        NavBar::begin([
            'brandLabel' => 'School',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
//                ['label' => 'Домой', 'url' => ['/site/index']],
                ['label' => 'Языки', 'url' => ['/language']],
                Yii::$app->user->can('admin') ? (
                ['label' => 'Пользователи', 'url' => ['/user']]
                 ) : '',
                Yii::$app->user->can('student') ? (
                ['label' => 'Группа слов', 'url' => ['/groupworld']]
                 ) : '',
                Yii::$app->user->can('student') ? (
                ['label' => 'Русские слова', 'url' => ['/russianworld']]
                ) : '',
                Yii::$app->user->can('student') ? (
                ['label' => 'Иностранные слова', 'url' => ['/foreignworld']]
                ) : '',
                Yii::$app->user->can('student') ? (
                ['label' => 'Задания', 'url' => ['/task']]
                ) : '',
                Yii::$app->user->can('student') ? (
                ['label' => 'Изуч.задач', 'url' => ['/usertask']]
                ) : '',
                Yii::$app->user->can('student') ? (
                ['label' => 'Изуч.слова', 'url' => ['/userworld']]
                ) : '',



//                ['label' => 'About', 'url' => ['/site/about']],
//                ['label' => 'Contact', 'url' => ['/site/contact']],
//                ['label' => 'Register', 'url' => ['site/register']],
                Yii::$app->user->isGuest ? (
            ['label' => 'Регистрация', 'url' => ['site/register']]
            ) : '',
            Yii::$app->user->isGuest ? (
            ['label' => 'Вход', 'url' => ['/site/login']]
            ) : (
                    '<li>'
                    . Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
                )
            ],
        ]);
        NavBar::end();
        ?>

    <div class="bg">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>
    </div>
    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>