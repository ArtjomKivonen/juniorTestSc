<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS Bootstrap & Custom -->
<!--    <script src="public/js/jquery.js" type="text/javascript"></script>-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="public/js/script.js" type="text/javascript"></script>

    <script src="	https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="public/css/style.css" />

    <title>Junior Test</title>
</head>
<body>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex flex-row justify-content-between align-items-center filters">
                <h2><?php echo $title; ?></php></h2>
                <div class="right-sort">
                    <div class="sort-by">
                    <?php echo $buttons; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <?php
    if(isset($content))
    {
        echo $content;
    }
    ?>

</div>
<hr>
<footer>
<h5>Scandiweb Test Assignment</h5>
    <h6>Junior Test Artjom Kivonen</h6>
</footer>
</body>
</html>