<div class="margin-bottom-md">
    <div class="flex flex-column gap-sm flex-row@sm justify-between@sm items-baseline@sm">
        <h1 class="text-lg">Dashboard</h1>
    </div>
    <div class="margin-bottom-md">
        <form class="flex flex-wrap flex-column flex-row@xs gap-xxs">

            <div class="input-group date-range-select flex-shrink-0 js-date-range-select">
                <label class="input-group__tag" for="select-date-range">Select a date range:</label>

                <div class="select text-sm@sm">
                    <select class="select__input form-control" name="select-date-range" id="select-date-range">
                        <?php foreach ($data['dateRanges'] as $key => $value) : ?>
                            <option value="<?= $key ?>" <?= $key == $data['selectedDateRange'] ? ' selected' : '' ?>><?= $value ?></option>
                        <?php endforeach; ?>
                    </select>

                    <svg class="icon select__icon" aria-hidden="true" viewBox="0 0 16 16">
                        <polyline points="1 5 8 12 15 5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                </div>
            </div>

            <div class="select date-range is-hidden flex-shrink-0 js-date-range">
                <div class="date-range__input js-date-range__input">
                    <input type="text" class="js-date-range__text js-date-range__text--start" name="filterDateFrom" aria-label="Select start date, format is dd/mm/yyyy" value="<?= $data['filterDate']['from'] ?>">
                </div>

                <div class="date-range__input js-date-range__input">
                    <input type="text" class="js-date-range__text js-date-range__text--end" name="filterDateUntil" aria-label="Select end date, format is dd/mm/yyyy" value="<?= $data['filterDate']['until'] ?>">
                </div>

                <button class="btn btn--subtle text-sm@sm height-100% width-100% js-date-range__trigger js-tab-focus" aria-label="Select start and end dates using the calendar widget">
                    <span class="js-date-range__trigger-label" aria-hidden="true">
                        <span <?= isset($data['filterDate']['from'], $data['filterDate']['until']) ? 'class="is-hidden"' : '' ?>>Select dates</span>

                        <span <?= !isset($data['filterDate']['from'], $data['filterDate']['until']) ? 'class="is-hidden"' : '' ?>>
                            <i class="js-date-range__value js-date-range__value--start">Start date</i> - <i class="js-date-range__value js-date-range__value--end">End date</i>
                        </span>
                    </span>
                </button>

                <div class="date-picker bg radius-md shadow-md js-date-picker" role="dialog" aria-labelledby="calendar-label-1">
                    <header class="date-picker__header">
                        <div class="date-picker__month">
                            <span class="date-picker__month-label js-date-picker__month-label" id="calendar-label-1"></span> <!-- this will contain month label + year -->

                            <nav>
                                <ul class="date-picker__month-nav js-date-picker__month-nav">
                                    <li>
                                        <button class="reset date-picker__month-nav-btn js-date-picker__month-nav-btn js-date-picker__month-nav-btn--prev js-tab-focus">
                                            <svg class="icon icon--xs" viewBox="0 0 16 16">
                                                <title>Previous month</title>
                                                <polyline points="11 14 5 8 11 2" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" />
                                            </svg>
                                        </button>
                                    </li>

                                    <li>
                                        <button class="reset date-picker__month-nav-btn js-date-picker__month-nav-btn js-date-picker__month-nav-btn--next js-tab-focus">
                                            <svg class="icon icon--xs" viewBox="0 0 16 16">
                                                <title>Next month</title>
                                                <polyline points="5 2 11 8 5 14" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" />
                                            </svg>
                                        </button>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <ol class="date-picker__week">
                            <li>
                                <div class="date-picker__day">M<span class="sr-only">onday</span></div>
                            </li>
                            <li>
                                <div class="date-picker__day">T<span class="sr-only">uesday</span></div>
                            </li>
                            <li>
                                <div class="date-picker__day">W<span class="sr-only">ednesday</span></div>
                            </li>
                            <li>
                                <div class="date-picker__day">T<span class="sr-only">hursday</span></div>
                            </li>
                            <li>
                                <div class="date-picker__day">F<span class="sr-only">riday</span></div>
                            </li>
                            <li>
                                <div class="date-picker__day">S<span class="sr-only">aturday</span></div>
                            </li>
                            <li>
                                <div class="date-picker__day">S<span class="sr-only">unday</span></div>
                            </li>
                        </ol>
                    </header>

                    <ol class="date-picker__dates js-date-picker__dates" aria-labelledby="calendar-label-1">
                        <!-- days will be created using js -->
                    </ol>
                </div>
            </div>
            <button class="btn btn--primary">Filter</button>
        </form>
    </div>
</div>

<div class="grid gap-sm">
    <section>
        <div class="grid gap-sm">
            <h1 class="text-lg">Users</h1>

            <div class="stats-card bg-light radius-md padding-md inner-glow shadow-xs col-2@sm">
                <p class="color-contrast-low">Guest</p>
                <p class="text-xxl font-semibold color-contrast-higher"><?= (isset($data['usersTypeCount']['guest'])) ? $data['usersTypeCount']['guest'] : '0'; ?></p>
            </div>

            <div class="stats-card bg-light radius-md padding-md inner-glow shadow-xs col-2@sm">
                <p class="color-contrast-low">Vendor</p>
                <p class="text-xxl font-semibold color-contrast-higher"><?= (isset($data['usersTypeCount']['vendor'])) ? $data['usersTypeCount']['vendor'] : '0'; ?></p>
            </div>

            <div class="stats-card bg-light radius-md padding-md inner-glow shadow-xs col-2@sm">
                <p class="color-contrast-low">Customer</p>
                <p class="text-xxl font-semibold color-contrast-higher"><?= (isset($data['usersTypeCount']['customer'])) ? $data['usersTypeCount']['customer'] : '0'; ?></p>
            </div>

            <div class="stats-card bg-light radius-md padding-md inner-glow shadow-xs col-2@sm">
                <p class="color-contrast-low">Support</p>
                <p class="text-xxl font-semibold color-contrast-higher"><?= (isset($data['usersTypeCount']['support'])) ? $data['usersTypeCount']['support'] : '0'; ?></p>
            </div>

            <div class="stats-card bg-light radius-md padding-md inner-glow shadow-xs col-2@sm">
                <p class="color-contrast-low">Admin</p>
                <p class="text-xxl font-semibold color-contrast-higher"><?= (isset($data['usersTypeCount']['admin'])) ? $data['usersTypeCount']['admin'] : '0'; ?></p>
            </div>
        </div>
    </section>

    <section>
        <div class="grid gap-sm">
            <h1 class="text-lg">Videos</h1>

            <div class="stats-card bg-light radius-md padding-md inner-glow shadow-xs col-2@sm">
                <p class="color-contrast-low">Uploading</p>
                <p class="text-xxl font-semibold color-contrast-higher"><?= (isset($data['videosTypeCount']['uploading-processing'])) ? $data['videosTypeCount']['uploading-processing'] : '0'; ?></p>
            </div>

            <div class="stats-card bg-light radius-md padding-md inner-glow shadow-xs col-2@sm">
                <p class="color-contrast-low">Optimizing</p>
                <p class="text-xxl font-semibold color-contrast-higher"><?= (isset($data['videosTypeCount']['Pending'])) ? $data['videosTypeCount']['Pending'] : '0'; ?></p>
            </div>

            <div class="stats-card bg-light radius-md padding-md inner-glow shadow-xs col-2@sm">
                <p class="color-contrast-low">Ready</p>
                <p class="text-xxl font-semibold color-contrast-higher"><?= (isset($data['videosTypeCount']['Optimizing'])) ? $data['videosTypeCount']['Optimizing'] : '0'; ?></p>
            </div>

            <div class="stats-card bg-light radius-md padding-md inner-glow shadow-xs col-2@sm">
                <p class="color-contrast-low">Error</p>
                <p class="text-xxl font-semibold color-contrast-higher"><?= (isset($data['videosTypeCount']['Ready'])) ? $data['videosTypeCount']['Ready'] : '0'; ?></p>
            </div>

            <div class="stats-card bg-light radius-md padding-md inner-glow shadow-xs col-2@sm">
                <p class="color-contrast-low">Pending</p>
                <p class="text-xxl font-semibold color-contrast-higher"><?= (isset($data['videosTypeCount']['Error'])) ? $data['videosTypeCount']['Error'] : '0'; ?></p>
            </div>
        </div>
    </section>

    <section>
        <div class="grid gap-sm">
            <h1 class="text-lg">Orders</h1>

            <div class="stats-card bg-light radius-md padding-md inner-glow shadow-xs col-2@sm">
                <p class="color-contrast-low">Pending</p>
                <p class="text-xxl font-semibold color-contrast-higher"><?= (isset($data['ordersTypeCount']['pending'])) ? $data['ordersTypeCount']['pending'] : '0'; ?></p>
            </div>

            <div class="stats-card bg-light radius-md padding-md inner-glow shadow-xs col-2@sm">
                <p class="color-contrast-low">Failed</p>
                <p class="text-xxl font-semibold color-contrast-higher"><?= (isset($data['ordersTypeCount']['failed'])) ? $data['ordersTypeCount']['failed'] : '0'; ?></p>
            </div>

            <div class="stats-card bg-light radius-md padding-md inner-glow shadow-xs col-2@sm">
                <p class="color-contrast-low">Incomplete</p>
                <p class="text-xxl font-semibold color-contrast-higher"><?= (isset($data['ordersTypeCount']['incomplete'])) ? $data['ordersTypeCount']['incomplete'] : '0'; ?></p>
            </div>

            <div class="stats-card bg-light radius-md padding-md inner-glow shadow-xs col-2@sm">
                <p class="color-contrast-low">Complete</p>
                <p class="text-xxl font-semibold color-contrast-higher"><?= (isset($data['ordersTypeCount']['complete'])) ? $data['ordersTypeCount']['complete'] : '0'; ?></p>
            </div>
        </div>
    </section>

    <!-- interactive table -->
    <div class="bg radius-md padding-md inner-glow shadow-xs col-12">
        <p class="color-contrast-low margin-bottom-md">Recent Tickets</p>

        <div id="interactive-table-1" class="int-table text-sm js-int-table">
            <div class="int-table__inner">
                <table class="int-table__table" aria-label="Interactive table example">
                    <thead class="int-table__header js-int-table__header">
                        <tr class="int-table__row">
                            <td class="int-table__cell">
                                <div class="custom-checkbox int-table__checkbox">
                                    <input class="custom-checkbox__input js-int-table__select-all" type="checkbox" aria-label="Select all rows" />
                                    <div class="custom-checkbox__control" aria-hidden="true"></div>
                                </div>
                            </td>

                            <th class="int-table__cell int-table__cell--th int-table__cell--sort js-int-table__cell--sort">
                                <div class="flex items-center">
                                    <span>Subject</span>

                                    <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12">
                                        <polygon class="arrow-up" points="6 0 10 5 2 5 6 0" />
                                        <polygon class="arrow-down" points="6 12 2 7 10 7 6 12" />
                                    </svg>
                                </div>

                                <ul class="sr-only js-int-table__sort-list">
                                    <li>
                                        <input type="radio" name="sorting-title" id="sorting-title-none" value="none" checked>
                                        <label for="sorting-title-none">No sorting</label>
                                    </li>

                                    <li>
                                        <input type="radio" name="sorting-title" id="sorting-title-asc" value="asc">
                                        <label for="sorting-title-asc">Sort in ascending order</label>
                                    </li>

                                    <li>
                                        <input type="radio" name="sorting-title" id="sorting-title-des" value="desc">
                                        <label for="sorting-title-des">Sort in descending order</label>
                                    </li>
                                </ul>
                            </th>

                            <th class="int-table__cell int-table__cell--th text-left">
                                User
                            </th>

                            <th class="int-table__cell int-table__cell--th text-left">
                                Ticket Type
                            </th>

                            <th class="int-table__cell int-table__cell--th text-left">
                                Status
                            </th>

                            <th class="int-table__cell int-table__cell--th int-table__cell--sort js-int-table__cell--sort" data-date-format="dd-mm-yyyy">
                                <div class="flex items-center justify-end">
                                    <span>Last modified</span>

                                    <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12">
                                        <polygon class="arrow-up" points="6 0 10 5 2 5 6 0" />
                                        <polygon class="arrow-down" points="6 12 2 7 10 7 6 12" />
                                    </svg>
                                </div>

                                <ul class="sr-only js-int-table__sort-list">
                                    <li>
                                        <input type="radio" name="sorting-date" id="sorting-date-none" value="none" checked>
                                        <label for="sorting-date-none">No sorting</label>
                                    </li>

                                    <li>
                                        <input type="radio" name="sorting-date" id="sorting-date-asc" value="asc">
                                        <label for="sorting-date-asc">Sort in ascending order</label>
                                    </li>

                                    <li>
                                        <input type="radio" name="sorting-date" id="sorting-date-des" value="desc">
                                        <label for="sorting-date-des">Sort in descending order</label>
                                    </li>
                                </ul>
                            </th>
                        </tr>
                    </thead>

                    <tbody class="int-table__body js-int-table__body">
                        <?php
                        if (empty($data['tickets'])) { ?>
                            <tr class="int-table__row">
                                <td class="int-table__cell text-center" colspan="100%">No Records Found</td>
                            </tr>
                            <?php
                        } else {
                            foreach ($data['tickets'] as $ticket) : ?>
                                <tr class="int-table__row">
                                    <th class="int-table__cell text-left" scope="row">
                                        <div class="custom-checkbox int-table__checkbox">
                                            <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row" />
                                            <div class="custom-checkbox__control" aria-hidden="true"></div>
                                        </div>
                                    </th>
                                    <td class="int-table__cell text-truncate max-width-xxxxs"><a href="<?= URLROOT . 'TicketsController/showTicket/' . $ticket->ticketId ?>"><?= $ticket->ticketTitle ?></a></td>
                                    <td class="int-table__cell"><a href="<?= URLROOT . 'UsersController/update/' . $ticket->ticketUserId ?>"><?= $ticket->userUsername ?></a></td>
                                    <td class="int-table__cell"><a href="#0"><?= $ticket->ticketType ?></a></td>
                                    <td class="int-table__cell">
                                        <?php if ($ticket->ticketStatus == 'open') : ?>
                                            <span class="inline-block bg-error bg-opacity-20% radius-full padding-y-xxxs padding-x-xs color-error-darker text-xs ws-nowrap"><?= $ticket->ticketStatus ?></span>
                                        <?php endif; ?>
                                        <?php if ($ticket->ticketStatus == 'inprogress') : ?>
                                            <span class="inline-block bg-warning bg-opacity-20% radius-full padding-y-xxxs padding-x-xs color-warning-darker text-xs ws-nowrap"><?= $ticket->ticketStatus ?></span>
                                        <?php endif; ?>
                                        <?php if ($ticket->ticketStatus == 'closed') : ?>
                                            <span class="inline-block bg-success bg-opacity-20% radius-full padding-y-xxxs padding-x-xs color-success-darker text-xs ws-nowrap"><?= $ticket->ticketStatus ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <?php if (!empty($ticket->ticketModifiedDate)) : ?>
                                        <td class="int-table__cell text-right"><?= date('Y-m-d H:i:s', $ticket->ticketModifiedDate) ?></td>
                                    <?php else : ?>
                                        <td class="int-table__cell text-right"><?= date('Y-m-d H:i:s', $ticket->ticketCreateDate) ?></td>
                                    <?php endif; ?>
                                </tr>
                        <?php endforeach;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="flex items-center justify-between padding-top-sm">
            <a href="<?= URLROOT ?>TicketsController/index"><button type="button" class="btn btn--primary">Ticket Overview</button></a>
        </div>
    </div>
</div>