<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
    <!-- favicon -->
    <link rel="icon" type="image/svg+xml" href="assets/img/favicon.svg">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/dark-mode.js"></script>
    <title>Forms | Dashboard UI by CodyHouse</title>
</head>
<body>


    <!-- main content -->
    <main class="app-ui__body padding-md js-app-ui__body">

        <div class="bg radius-md shadow-xs">
            <form method="post">
                <div class="padding-md">
                    <!-- basic form controls -->
                    <fieldset class="margin-bottom-xl">
                        <legend class="form-legend margin-bottom-md">Create a Brand</legend>

                        <!-- input text -->
                        <div class="margin-bottom-sm">
                            <div class="grid gap-xxs">
                                <div class="col-3@lg">
                                    <label class="inline-block text-sm padding-top-xs@lg" for="input-name">Brand name</label>
                                </div>

                                <div class="col-6@lg">
                                    <input class="form-control width-100%" type="text" name="brandsName" id="brandsName" placeholder="Brand name" required>
                                </div>
                            </div>
                        </div>


                <div class="border-top border-alpha padding-md text-right">
                    <button class="btn btn--primary btn--md">Submit</button>
                </div>
            </form>
        </div>
    </main>
</div>


<script src="assets/js/scripts.js"></script>
</body>
</html>