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
                    <legend class="form-legend margin-bottom-md">Create a Sneaker</legend>

                    <!-- input text -->
                    <div class="margin-bottom-sm">
                        <div class="grid gap-xxs">

                            <div class="col-6@lg">
                                <input class="form-control width-100%" type="hidden" name="sneakerId" id="sneakerId" value="<?=$data['userid']?>" required>
                            </div>
                        </div>
                    </div>


                    <!-- custom select -->
                    <div class="margin-bottom-sm">
                        <div class="grid gap-xxs">
                            <div class="col-3@lg">
                                <label class="inline-block text-sm padding-top-xs@lg" for="custom-select">Brand</label>
                            </div>

                            <div class="col-6@lg">
                                <div class="select">
                                    <select class="select__input form-control" name="brand" id="brand">
                                        <option disabled selected>Brand </option>
                                        <?php foreach ($data['allBrands'] as $brand) {
                                            echo '<option value="' . $brand->brandsId . '">' . $brand->brandsName . '</option>';
                                        } ?>
                                    </select>

                                    <svg class="icon select__icon" aria-hidden="true" viewBox="0 0 16 16"><polyline points="1 5 8 12 15 5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- input text -->
                    <div class="margin-bottom-sm">
                        <div class="grid gap-xxs">
                            <div class="col-3@lg">
                                <label class="inline-block text-sm padding-top-xs@lg" for="input-name">Name</label>
                            </div>

                            <div class="col-6@lg">
                                <input class="form-control width-100%" type="text" name="sneakersName" id="sneakersName" required>
                            </div>
                        </div>
                    </div>

                    <!-- custom select -->
                    <div class="margin-bottom-sm">
                        <div class="grid gap-xxs">
                            <div class="col-3@lg">
                                <label class="inline-block text-sm padding-top-xs@lg" for="custom-select">Gender</label>
                            </div>
                            <div class="col-6@lg">
                                <div class="select">
                                    <select class="select__input form-control" name="gender" id="gender">
                                        <option value="0">Mens</option>
                                        <option value="1">Womans</option>
                                        <option value="2">GS</option>
                                    </select>
                                    <svg class="icon select__icon" aria-hidden="true" viewBox="0 0 16 16"><polyline points="1 5 8 12 15 5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="margin-bottom-sm">
                        <div class="grid gap-xxs">
                            <div class="col-3@lg">
                                <label class="inline-block text-sm padding-top-xs@lg" for="date-input-1">Select date<i class="sr-only">, format is dd/mm/yyyy</i></label>
                            </div>

                            <div class="col-6@lg date-input js-date-input">
                                <div class="date-input__wrapper">
                                    <input type="text" class="form-control width-100% date-input__text js-date-input__text" placeholder="mm/dd/yyyy" autocomplete="off" id="releaseDate" name="releaseDate">

                                    <button class="reset date-input__trigger js-date-input__trigger js-tab-focus" aria-label="Select date using calendar widget" type="button">
                                        <svg class="icon" aria-hidden="true" viewBox="0 0 20 20"><g fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"><rect x="1" y="4" width="18" height="14" rx="1"/><line x1="5" y1="1" x2="5" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="1" y1="9" x2="19" y2="9"/></g></svg>
                                    </button>
                                </div>

                                <div class="date-picker bg radius-md shadow-md js-date-picker" role="dialog" aria-labelledby="calendar-label-1">
                                    <header class="date-picker__header">
                                        <div class="date-picker__month">
                                            <span class="date-picker__month-label js-date-picker__month-label" id="calendar-label-1"></span> <!-- this will contain month label + year -->

                                            <nav>
                                                <ul class="date-picker__month-nav js-date-picker__month-nav">
                                                    <li>
                                                        <button class="reset date-picker__month-nav-btn js-date-picker__month-nav-btn js-date-picker__month-nav-btn--prev js-tab-focus" type="button">
                                                            <svg class="icon icon--xs" viewBox="0 0 16 16"><title>Previous month</title><polyline points="11 14 5 8 11 2" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2"/></svg>
                                                        </button>
                                                    </li>

                                                    <li>
                                                        <button class="reset date-picker__month-nav-btn js-date-picker__month-nav-btn js-date-picker__month-nav-btn--next js-tab-focus" type="button">
                                                            <svg class="icon icon--xs" viewBox="0 0 16 16"><title>Next month</title><polyline points="5 2 11 8 5 14" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2"/></svg>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>

                                        <ol class="date-picker__week">
                                            <li><div class="date-picker__day">M<span class="sr-only">onday</span></div></li>
                                            <li><div class="date-picker__day">T<span class="sr-only">uesday</span></div></li>
                                            <li><div class="date-picker__day">W<span class="sr-only">ednesday</span></div></li>
                                            <li><div class="date-picker__day">T<span class="sr-only">hursday</span></div></li>
                                            <li><div class="date-picker__day">F<span class="sr-only">riday</span></div></li>
                                            <li><div class="date-picker__day">S<span class="sr-only">aturday</span></div></li>
                                            <li><div class="date-picker__day">S<span class="sr-only">unday</span></div></li>
                                        </ol>
                                    </header>

                                    <ol class="date-picker__dates js-date-picker__dates" aria-labelledby="calendar-label-1">
                                        <!-- days will be created using js -->
                                    </ol>
                                </div>
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

