<!DOCTYPE html>
<html>
    <head>
        <title><?= $title ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
        <style>
            #result
            {
                width:100%;
                max-height: 550px;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid page-container">
            <div class="container content-container">
                <div class="page-header">
                    <h1><?= $title ?></h1>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <?= $content ?>
                    </div>
                </div>
            </div>
        </div>
        <script >
<?= $script ?> 
        </script>
    </body>
</html>