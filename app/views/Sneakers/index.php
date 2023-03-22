
<body>
    <!-- main content -->
    <main class="app-ui__body padding-md js-app-ui__body">
        <div class="margin-bottom-md">
            <h1 class="text-lg">Sneakers</h1>
        </div>

        <div class="grid gap-sm">
            <!-- interactive table -->
            <div class="bg radius-md padding-md inner-glow shadow-xs col-12">


                <div id="interactive-table-1" class="int-table text-sm js-int-table">
                    <div class="int-table__inner">
                        <table class="int-table__table" aria-label="Interactive table example">
                            <thead class="int-table__header js-int-table__header">
                            <tr class="int-table__row">
                                <td class="int-table__cell">
                                    <div class="flex items-center">
                                        <span>Id</span>

                                    </div>
                                </td>

                                <th class="int-table__cell int-table__cell--th int-table__cell--sort js-int-table__cell--sort">
                                    <div class="flex items-center">
                                        <span>Brand</span>

                                        <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12"><polygon class="arrow-up" points="6 0 10 5 2 5 6 0"/><polygon class="arrow-down" points="6 12 2 7 10 7 6 12"/></svg>
                                    </div>

                                    <ul class="sr-only js-int-table__sort-list">
                                        <li>
                                            <input type="radio" name="sortingId" id="sortingIdNone" value="none" checked>
                                            <label for="sortingIdNone">No sorting</label>
                                        </li>

                                        <li>
                                            <input type="radio" name="sortingId" id="sortingIdAsc" value="asc">
                                            <label for="sortingIdAsc">Sort in ascending order</label>
                                        </li>

                                        <li>
                                            <input type="radio" name="sortingId" id="sortingIdDes" value="desc">
                                            <label for="sortingIdDes">Sort in descending order</label>
                                        </li>
                                    </ul>
                                </th>

                                <th class="int-table__cell int-table__cell--th int-table__cell--sort js-int-table__cell--sort">
                                    <div class="flex items-center">
                                        <span>Model</span>

                                        <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12"><polygon class="arrow-up" points="6 0 10 5 2 5 6 0"/><polygon class="arrow-down" points="6 12 2 7 10 7 6 12"/></svg>
                                    </div>

                                    <ul class="sr-only js-int-table__sort-list">
                                        <li>
                                            <input type="radio" name="sortingName" id="sortingNameNone" value="none" checked>
                                            <label for="sortingNameNone">No sorting</label>
                                        </li>

                                        <li>
                                            <input type="radio" name="sortingName" id="sortingNameAsc" value="asc">
                                            <label for="sortingNameAsc">Sort in ascending order</label>
                                        </li>

                                        <li>
                                            <input type="radio" name="sortingName" id="sortingNameDes" value="desc">
                                            <label for="sortingNameDes">Sort in descending order</label>
                                        </li>
                                    </ul>
                                </th>

                                <th class="int-table__cell int-table__cell--th int-table__cell--sort js-int-table__cell--sort">
                                    <div class="flex items-center">
                                        <span>Gender</span>

                                        <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12"><polygon class="arrow-up" points="6 0 10 5 2 5 6 0"/><polygon class="arrow-down" points="6 12 2 7 10 7 6 12"/></svg>
                                    </div>

                                    <ul class="sr-only js-int-table__sort-list">
                                        <li>
                                            <input type="radio" name="sortingEmail" id="sortingEmailNone" value="none" checked>
                                            <label for="sortingEmailNone">No sorting</label>
                                        </li>

                                        <li>
                                            <input type="radio" name="sortingEmail" id="sortingEmailAsc" value="asc">
                                            <label for="sortingEmailAsc">Sort in ascending order</label>
                                        </li>

                                        <li>
                                            <input type="radio" name="sortingEmail" id="sortingEmailDes" value="desc">
                                            <label for="sortingEmailDes">Sort in descending order</label>
                                        </li>
                                    </ul>
                                </th>

                                <th class="int-table__cell int-table__cell--th text-left">
                                    Release Date
                                </th>


                                <th class="int-table__cell int-table__cell--th text-right">Action</th>
                            </tr>
                            </thead>

                            <tbody class="int-table__body js-int-table__body">
                            <?php
                            if($data['Sneakers']) {?>
<!--                                <tr class="table__row">-->
<!--                                    <td class="table__cell text-center" colspan="100%" role="cell"><span class="table__label" aria-hidden="true"></span>No Records</td>-->
<!--                                </tr>-->
                                <?php
                                foreach ($data['Sneakers'] as $Sneakers):?>
                                    <tr class="table__row">
                                        <td class="table__cell" role="cell"><span class="table__label" aria-hidden="true"></span><?=$Sneakers->sneakersId?></td>
                                        <td class="table__cell" role="cell"><span class="table__label" aria-hidden="true"></span><?=$Sneakers->brandsName ?></td>
                                        <td class="table__cell" role="cell"><span class="table__label" aria-hidden="true"></span><?=$Sneakers->sneakersName?></td>
                                        <td class="table__cell" role="cell"><span class="table__label" aria-hidden="true"></span><?=$Sneakers->sneakersGender?></td>
                                        <td class="table__cell" role="cell"><span class="table__label" aria-hidden="true"></span><?=gmdate("m-d-Y", $Sneakers->sneakersReleaseDate)?></td>
                                        <td class="int-table__cell text-right">
                                            <a class="btn btn--primary" href="<?=URLROOT ?>SneakersController/update?userid=<?=$Sneakers->sneakersId?>">Update</a>
                                            <a class="btn btn--primary" href="<?=URLROOT ?>SneakersController/delete?userid=<?=$Sneakers->sneakersId?>">Delete</a>
                                        </td>
                                    </tr>
                                <?php
                                endforeach;
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="flex items-center justify-between padding-top-sm">
                    <p class="text-sm">450 results</p>

                    <nav class="pagination text-sm" aria-label="Pagination">
                        <ul class="pagination__list flex flex-wrap gap-xxxs">
                            <li>
                                <a href="#0" class="pagination__item">
                                    <svg class="icon" viewBox="0 0 16 16"><title>Go to previous page</title><g stroke-width="1.5" stroke="currentColor"><polyline fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="9.5,3.5 5,8 9.5,12.5 "></polyline></g></svg>
                                </a>
                            </li>

                            <li>
                  <span class="pagination__jumper flex items-center">
                    <input aria-label="Page number" class="form-control" type="text" id="pageNumber" name="pageNumber" value="1">
                    <em>of 50</em>
                  </span>
                            </li>

                            <li>
                                <a href="#0" class="pagination__item">
                                    <svg class="icon" viewBox="0 0 16 16"><title>Go to next page</title><g stroke-width="1.5" stroke="currentColor"><polyline fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6.5,3.5 11,8 6.5,12.5 "></polyline></g></svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <menu id="menu-example" class="menu js-menu" data-scrollable-element=".js-app-ui__body">
                    <li role="menuitem">
              <span class="menu__content js-menu__content">
                <svg class="icon menu__icon" aria-hidden="true" viewBox="0 0 12 12"><path d="M10.121.293a1,1,0,0,0-1.414,0L1,8,0,12l4-1,7.707-7.707a1,1,0,0,0,0-1.414Z"></path></svg>
                <span>Edit</span>
              </span>
                    </li>

                    <li role="menuitem">
              <span class="menu__content js-menu__content">
                <svg class="icon menu__icon" aria-hidden="true" viewBox="0 0 16 16"><path d="M15,4H1C0.4,4,0,4.4,0,5v10c0,0.6,0.4,1,1,1h14c0.6,0,1-0.4,1-1V5C16,4.4,15.6,4,15,4z M14,14H2V6h12V14z"></path><rect x="2" width="12" height="2"></rect></svg>
                <span>Copy</span>
              </span>
                    </li>

                    <li role="menuitem">
              <span class="menu__content js-menu__content">
                <svg class="icon menu__icon" aria-hidden="true" viewBox="0 0 12 12"><path d="M8.354,3.646a.5.5,0,0,0-.708,0L6,5.293,4.354,3.646a.5.5,0,0,0-.708.708L5.293,6,3.646,7.646a.5.5,0,0,0,.708.708L6,6.707,7.646,8.354a.5.5,0,1,0,.708-.708L6.707,6,8.354,4.354A.5.5,0,0,0,8.354,3.646Z"></path><path d="M6,0a6,6,0,1,0,6,6A6.006,6.006,0,0,0,6,0ZM6,10a4,4,0,1,1,4-4A4,4,0,0,1,6,10Z"></path></svg>
                <span>Delete</span>
              </span>
                    </li>
                </menu>
            </div>



    <div class="border-top border-alpha padding-md">
        <div class="flex flex-wrap gap-xs justify-between">
            <a href="<?=URLROOT ?>" class="btn btn--primary">Back</a>
            <a href="<?=URLROOT ?>SneakersController/create" class="btn btn--primary">Create</a>
        </div>
    </div>
</div>


<script src="assets/js/scripts.js"></script>
</body>




