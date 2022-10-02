<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?=$page;?></title>
        <link rel="stylesheet" href="http://oct-0210/css/style.css">
    </head>
    <body>
        <main>
            <div>
                <ul id="main-menu">
                    <li><a href="?action=main" title="главная">главная</a></li>
                    <li><a href="?action=about" title="о нас">покрытие</a></li>
                    <li><a href="?action=contacts" title="контакты">обратная связь</a></li>
                </ul>
            </div>
            <?php include 'app/views/pages/' . $page . '.php'; ?>
        </main>
    </body>
</html>