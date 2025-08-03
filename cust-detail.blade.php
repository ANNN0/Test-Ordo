@vite('resources/sass/Cashier/partial/sidebar.scss')
@vite('resources/sass/Cashier/includes/cust-detail.scss')
@vite('resources/sass/Cashier/components/notif.scss')
@vite('resources/js/components/notif.js')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Detail Customer</title>
</head>

<body>
    @include('Cashier.partial.sidebar')

    <main class="messages-main">
        <header class="messages-header">
            <div class="header-left">
                <a href="/de" class="back-button">
                    <img src="{{ asset('images/arrow.svg') }}" alt="Back" />
                </a>
                <h1>Customer List / Joe Gong</h1>
            </div>
            <div class="messages-header__right">
                @include('Cashier.components.notif')
            </div>
        </header>
        <!-- ===== SECTION 1: CUSTOMER DETAILS ===== -->
        <section class="customer-details-section">
            <div class="customer-cards-container">
                <div class="customer-photo-wrapper">
                    <img src="{{ asset('images/Avatar.png') }}" alt="Customer Photo" class="customer-photo">
                </div>

                <!-- Description Card -->
                <div class="customer-card desc-card">
                    <div class="customer-info">
                        <div class="info-row">
                            <div class="info-item">
                                <span class="info-label">Full Name</span>
                                <span class="info-value">Joe Gong</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Member ID</span>
                                <span class="info-value">78819224831901</span>
                            </div>
                        </div>

                        <div class="info-row">
                            <div class="info-item">
                                <span class="info-label">Phone Number</span>
                                <span class="info-value">021-345678</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Email</span>
                                <span class="info-value">baritza@email.com</span>
                            </div>
                        </div>

                        <div class="info-row">
                            <div class="info-item">
                                <span class="info-label">Birth Date</span>
                                <span class="info-value">19 May 1995</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Total Spend</span>
                                <span class="info-value">Rp 5.796.000</span>
                            </div>
                        </div>

                        <div class="info-row">
                            <div class="info-item">
                                <span class="info-label">Total Transaction</span>
                                <span class="info-value">536</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Poin Earned</span>
                                <span class="info-value">36.450</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="customer-card qr-card">
                    <div class="qr-info">
                        <div class="qr-container">
                            <img src="{{ asset('images/QR.svg') }}" alt="Customer QR Code" class="qr-code">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== SECTION 3: TRANSACTION HISTORY ===== -->
        <section class="transaction-history-section">
            <div class="transaction-history-header">
                <div class="table-header-left">
                    <h1 class="table-title">Transaction History</h1>
                </div>
                <div class="table-header-right">
                    <div class="date-filter-container">
                        <div class="date-input-group">
                            <img src="{{ asset('images/start.svg') }}" alt="Calendar" class="calendar-icon" />
                            <input type="date" class="date-input" id="startDateHistory" />
                            <span class="date-placeholder start-placeholder">Start Date</span>
                        </div>
                        <span class="date-separator">-</span>
                        <div class="date-input-group">
                            <img src="{{ asset('images/start.svg') }}" alt="Calendar" class="calendar-icon" />
                            <input type="date" class="date-input" id="endDateHistory" />
                            <span class="date-placeholder end-placeholder">End Date</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="transaction-history-container">
                <table id="Transaction-History-Table" class="transaction-history-table table-dark">
                    <thead>
                        <tr>
                            <th>
                                Transaction ID
                                <img src="{{ asset('images/sort.svg') }}" alt="sort" class="th-icon">
                            </th>
                            <th>
                                Date Time
                                <img src="{{ asset('images/sort.svg') }}" alt="sort" class="th-icon">
                            </th>
                            <th>
                                Total Spend
                                <img src="{{ asset('images/sort.svg') }}" alt="sort" class="th-icon">
                            </th>
                            <th>
                                Point Earned
                                <img src="{{ asset('images/sort.svg') }}" alt="sort" class="th-icon">
                            </th>
                            <th>
                                Action
                                <img src="{{ asset('images/sort.svg') }}" alt="sort" class="th-icon">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-sort="ID1100">ID1100</td>
                            <td>10 July 2024, 02.00 AM</td>
                            <td data-sort="2024-07-10">Rp 2.300.000</td>
                            <td>6000</td>
                            <td>
                                <div class="action-dropdown">
                                    <button class="action-btn" onclick="toggleDropdown(this)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5Z"
                                                fill="white" />
                                            <path
                                                d="M10.5 12C10.5 11.1716 11.1716 10.5 12 10.5C12.8284 10.5 13.5 11.1716 13.5 12C13.5 12.8284 12.8284 13.5 12 13.5C11.1716 13.5 10.5 12.8284 10.5 12Z"
                                                fill="white" />
                                            <path
                                                d="M16.5 12C16.5 11.1716 17.1716 10.5 18 10.5C18.8284 10.5 19.5 11.1716 19.5 12C19.5 12.8284 18.8284 13.5 18 13.5C17.1716 13.5 16.5 12.8284 16.5 12Z"
                                                fill="white" />
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item detail"
                                            onclick="openTransactionDetailModal(this.closest('tr').querySelector('td').textContent.trim(), this); return false;">Detail</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="dark-row">
                            <td data-sort="ID1100">ID1101</td>
                            <td>10 July 2024, 02.00 AM</td>
                            <td data-sort="2024-07-10">Rp 2.300.000</td>
                            <td>6000</td>
                            <td>
                                <div class="action-dropdown">
                                    <button class="action-btn" onclick="toggleDropdown(this)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5Z"
                                                fill="white" />
                                            <path
                                                d="M10.5 12C10.5 11.1716 11.1716 10.5 12 10.5C12.8284 10.5 13.5 11.1716 13.5 12C13.5 12.8284 12.8284 13.5 12 13.5C11.1716 13.5 10.5 12.8284 10.5 12Z"
                                                fill="white" />
                                            <path
                                                d="M16.5 12C16.5 11.1716 17.1716 10.5 18 10.5C18.8284 10.5 19.5 11.1716 19.5 12C19.5 12.8284 18.8284 13.5 18 13.5C17.1716 13.5 16.5 12.8284 16.5 12Z"
                                                fill="white" />
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item detail"
                                            onclick="openTransactionDetailModal(this.closest('tr').querySelector('td').textContent.trim(), this); return false;">Detail</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td data-sort="ID1100">ID1102</td>
                            <td>10 July 2024, 02.00 AM</td>
                            <td data-sort="2024-07-10">Rp 2.300.000</td>
                            <td>6000</td>
                            <td>
                                <div class="action-dropdown">
                                    <button class="action-btn" onclick="toggleDropdown(this)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5Z"
                                                fill="white" />
                                            <path
                                                d="M10.5 12C10.5 11.1716 11.1716 10.5 12 10.5C12.8284 10.5 13.5 11.1716 13.5 12C13.5 12.8284 12.8284 13.5 12 13.5C11.1716 13.5 10.5 12.8284 10.5 12Z"
                                                fill="white" />
                                            <path
                                                d="M16.5 12C16.5 11.1716 17.1716 10.5 18 10.5C18.8284 10.5 19.5 11.1716 19.5 12C19.5 12.8284 18.8284 13.5 18 13.5C17.1716 13.5 16.5 12.8284 16.5 12Z"
                                                fill="white" />
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item detail"
                                            onclick="openTransactionDetailModal(this.closest('tr').querySelector('td').textContent.trim(), this); return false;">Detail</a>
                                        <a href="#" class="dropdown-item">Edit</a>
                                        <a href="#" class="dropdown-item">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="dark-row">
                            <td data-sort="ID1100">ID1103</td>
                            <td>10 July 2024, 02.00 AM</td>
                            <td data-sort="2024-07-10">Rp 2.300.000</td>
                            <td>6000</td>
                            <td>
                                <div class="action-dropdown">
                                    <button class="action-btn" onclick="toggleDropdown(this)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5Z"
                                                fill="white" />
                                            <path
                                                d="M10.5 12C10.5 11.1716 11.1716 10.5 12 10.5C12.8284 10.5 13.5 11.1716 13.5 12C13.5 12.8284 12.8284 13.5 12 13.5C11.1716 13.5 10.5 12.8284 10.5 12Z"
                                                fill="white" />
                                            <path
                                                d="M16.5 12C16.5 11.1716 17.1716 10.5 18 10.5C18.8284 10.5 19.5 11.1716 19.5 12C19.5 12.8284 18.8284 13.5 18 13.5C17.1716 13.5 16.5 12.8284 16.5 12Z"
                                                fill="white" />
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item detail"
                                            onclick="openTransactionDetailModal(this.closest('tr').querySelector('td').textContent.trim(), this); return false;">Detail</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td data-sort="ID1100">ID1105</td>
                            <td>10 July 2024, 02.00 AM</td>
                            <td data-sort="2024-07-10">Rp 2.300.000</td>
                            <td>6000</td>
                            <td>
                                <div class="action-dropdown">
                                    <button class="action-btn" onclick="toggleDropdown(this)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5Z"
                                                fill="white" />
                                            <path
                                                d="M10.5 12C10.5 11.1716 11.1716 10.5 12 10.5C12.8284 10.5 13.5 11.1716 13.5 12C13.5 12.8284 13.5 12Z"
                                                fill="white" />
                                            <path
                                                d="M16.5 12C16.5 11.1716 17.1716 10.5 18 10.5C18.8284 10.5 19.5 11.1716 19.5 12C19.5 12.8284 18.8284 13.5 18 13.5C17.1716 13.5 16.5 12.8284 16.5 12Z"
                                                fill="white" />
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item detail"
                                            onclick="openTransactionDetailModal(this.closest('tr').querySelector('td').textContent.trim(), this); return false;">Detail</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <!-- Modal untuk Transaction Detail -->
    <div id="transactionDetailModal" class="modal transaction-detail-modal" aria-hidden="true" role="dialog">
        <div class="modal-content" role="document">
            <div class="modal-header">
                <h2 class="transaction-id-title">Transaction ID<span id="detailTransactionId">1100</span></h2>
                <button type="button" class="close-modal-btn" onclick="closeModal('transactionDetailModal', event)"
                    aria-label="Close modal">
                    <img class="close-modal-icon" src="{{ asset('images/Close.svg') }}" alt="Close">
                </button>
            </div>
            <div class="modal-body">
                <!-- Customer section -->
                <div class="section customer-section">
                    <div class="section-title">Customer</div>
                    <div class="customer-info-wrapper">
                        <div class="customer-details">
                            <div class="customer-name" id="detailCustomer">Joe Gong</div>
                            <div class="member-id">Member ID</div>
                            <div class="member-id-value" id="detailMemberId">78819224831901</div>
                        </div>
                        <div class="qr-code">
                            <img src="{{ asset('images/QR.svg') }}" alt="QR Code">
                        </div>
                    </div>
                </div>

                <div class="section date-time-section">
                    <div class="section-title">Date & Time</div>
                    <div class="info-item">
                        <span class="info-label">Date</span>
                        <span class="info-value" id="detailDate">June 10, 2024</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Time</span>
                        <span class="info-value" id="detailTime">23:00 PM</span>
                    </div>
                </div>

                <div class="section payment-section">
                    <div class="section-title">Payment</div>
                    <div class="info-item">
                        <span class="info-label">Payment Method</span>
                        <span class="info-value" id="detailPaymentMethod">BCA</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Bank Account Number</span>
                        <span class="info-value" id="detailBankAccount">092874129623</span>
                    </div>
                </div>

                <div class="section product-section">
                    <div class="section-title">Product</div>
                    <div class="product-list" id="detailProductList">
                        <div class="product-item">
                            <span class="product-name">Tennesse Honey</span>
                            <span class="product-qty">x2</span>
                        </div>
                        <div class="product-item">
                            <span class="product-name">Old No. 7</span>
                            <span class="product-qty">x1</span>
                        </div>
                    </div>
                </div>

                <div class="section summary-section">
                    <div class="section-title">Summary</div>
                    <div class="summary-list" id="detailSummaryList">
                        <div class="summary-item">
                            <span class="summary-label">Tennesse Honey</span>
                            <span class="summary-value">Rp 1.125.000 <span class="qty-multiplier">x2</span></span>
                        </div>
                        <div class="summary-item">
                            <span class="summary-label">Old No. 7</span>
                            <span class="summary-value">Rp 2.250.000 <span class="qty-multiplier">x1</span></span>
                        </div>
                        <div class="summary-item promo-item">
                            <span class="summary-label">Old No. 7 Promo 5%</span>
                            <span class="summary-value discount">- Rp 337.500</span>
                        </div>
                    </div>
                </div>

                <div class="section totals-section">
                    <div class="info-item subtotal">
                        <span class="info-label">Sub Total</span>
                        <span class="info-value" id="detailSubTotal">Rp 4.162.500</span>
                    </div>
                    <div class="info-item tax">
                        <span class="info-label">Tax</span>
                        <span class="info-value" id="detailTax">+ Rp 208.125 <span
                                class="tax-percentage">(5%)</span></span>
                    </div>
                    <div class="info-item total-amount">
                        <span class="info-label">Total</span>
                        <span class="info-value" id="detailTotalAmount">Rp 4.370.625</span>
                    </div>
                    <div class="info-item points-earned">
                        <span class="info-label">Points Earned</span>
                        <span class="info-value" id="detailPointsEarned">+ 6.000 Point</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.bootstrap4.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        // 1. Action Dropdown Handler
        function toggleDropdown(button) {
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                if (menu !== button.nextElementSibling) {
                    menu.classList.remove('show');
                }
            });

            const dropdown = button.nextElementSibling;
            dropdown.classList.toggle('show');

            if (dropdown.classList.contains('show')) {
                dropdown.style.top = '';
                dropdown.style.bottom = '';
                dropdown.style.left = '';
                dropdown.style.right = '';

                const rect = dropdown.getBoundingClientRect();
                const viewportHeight = window.innerHeight;
                const viewportWidth = window.innerWidth;

                if (rect.bottom > viewportHeight) {
                    dropdown.style.top = 'auto';
                    dropdown.style.bottom = '100%';
                    dropdown.style.transform = 'translateY(10px)';
                } else {
                    dropdown.style.top = '100%';
                    dropdown.style.bottom = 'auto';
                    dropdown.style.transform = 'translateY(-10px)';
                }

                if (rect.right > viewportWidth) {
                    dropdown.style.right = '0';
                    dropdown.style.left = 'auto';
                } else if (rect.left < 0) {
                    dropdown.style.left = '0';
                    dropdown.style.right = 'auto';
                }

                setTimeout(() => {
                    if (dropdown.classList.contains('show')) {
                        dropdown.style.transform = 'translateY(0)';
                    }
                }, 10);
            }
        }

        // 2. Click Outside Handler
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.action-dropdown')) {
                document.querySelectorAll('.dropdown-menu').forEach(menu => {
                    menu.classList.remove('show');
                    menu.style.top = '';
                    menu.style.bottom = '';
                    menu.style.left = '';
                    menu.style.right = '';
                    menu.style.transform = '';
                });
            }
        });

        // 3. Window Resize Handler
        window.addEventListener('resize', function() {
            document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                menu.classList.remove('show');
            });
        });

        // DataTable for Transaction History
        if ($("#Transaction-History-Table").length) {
            const transactionHistoryTable = $("#Transaction-History-Table").DataTable({
                paging: true,
                pageLength: 5,
                lengthChange: false,
                searching: false,
                info: false,
                ordering: true,
                responsive: false,
                autoWidth: false,
                language: {
                    paginate: {
                        previous: "‹",
                        next: "›"
                    },
                    lengthMenu: "Rows: _MENU_",
                    info: "_START_-_END_ of _TOTAL_"
                },
                columns: [{
                        width: '25%'
                    }, // Transaction ID
                    {
                        width: '35%'
                    }, // Date Time
                    {
                        width: '25%'
                    }, // Total Spend
                    {
                        width: '15%'
                        //Point Earned
                    },
                    {
                        width: '15%',
                        orderable: false
                    } // Action
                ],
                dom: 't<"transaction-history-pagination"<"pagination-row"i><"pagination-page"p>>',
                orderClasses: false,
                renderer: "bootstrap",
                drawCallback: function(settings) {
                    const api = this.api();
                    const info = api.page.info();

                    $('.transaction-history-pagination .pagination-row').html(
                        `Rows: ${settings._iDisplayLength}`);
                    $('.transaction-history-pagination .pagination-page').html(`
                        ${info.start + 1}-${info.end} of ${info.recordsTotal}
                        <button class="pagination-nav prev ${info.page === 0 ? 'disabled' : ''}"
                                onclick="transactionHistoryTable.page('previous').draw();">‹</button>
                        <button class="pagination-nav next ${info.page === info.pages - 1 ? 'disabled' : ''}"
                                onclick="transactionHistoryTable.page('next').draw();">›</button>
                    `);
                    api.rows().every(function() {
                        const row = this.node();
                        const detailLink = $(row).find('.dropdown-item.detail');
                        detailLink.off('click').on('click', function(e) {
                            e.preventDefault();
                            const transactionId = $(row).find('td:eq(0)').text();
                            openTransactionDetailModal(transactionId, this);
                        });
                    });
                },
                initComplete: function() {
                    setupTransactionHistoryFilters(this.api());
                }
            });
            window.transactionHistoryTable = transactionHistoryTable;
        }

        // Setup Date Filters for Transaction History
        function setupTransactionHistoryFilters(api) {
            $('#startDateHistory, #endDateHistory').on('change', function() {
                const startDate = $('#startDateHistory').val();
                const endDate = $('#endDateHistory').val();

                updateDatePlaceholdersHistory();

                $.fn.dataTable.ext.search.pop();

                $.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
                    if (settings.nTable.id !== 'Transaction-History-Table') {
                        return true;
                    }

                    const dateStr = $(api.row(dataIndex).node()).find('td:eq(2)').data('sort');
                    const rowDate = new Date(dateStr);
                    const start = startDate ? new Date(startDate) : null;
                    const end = endDate ? new Date(endDate) : null;

                    if (start && rowDate < start) return false;
                    if (end && rowDate > end) return false;

                    return true;
                });

                api.draw();
            });
        }

        // Update Date Placeholders for Transaction History
        function updateDatePlaceholdersHistory() {
            const startDate = document.getElementById('startDateHistory');
            const endDate = document.getElementById('endDateHistory');
            const startPlaceholder = document.querySelector('.transaction-history-section .start-placeholder');
            const endPlaceholder = document.querySelector('.transaction-history-section .end-placeholder');

            if (startDate && startPlaceholder) {
                if (startDate.value) {
                    startDate.classList.remove('empty');
                    startPlaceholder.style.display = 'none';
                } else {
                    startDate.classList.add('empty');
                    startPlaceholder.style.display = 'block';
                }
            }

            if (endDate && endPlaceholder) {
                if (endDate.value) {
                    endDate.classList.remove('empty');
                    endPlaceholder.style.display = 'none';
                } else {
                    endDate.classList.add('empty');
                    endPlaceholder.style.display = 'block';
                }
            }
        }

        // Initialize Date Placeholders for Transaction History
        document.addEventListener('DOMContentLoaded', function() {
            updateDatePlaceholdersHistory();

            const historyDateInputs = document.querySelectorAll('.transaction-history-section .date-input');
            historyDateInputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.querySelector('.date-placeholder').style.opacity = '0';
                    this.parentElement.querySelector('.calendar-icon').style.color =
                        'var(--Primary-200)';
                });

                input.addEventListener('blur', function() {
                    if (!this.value) {
                        this.parentElement.querySelector('.date-placeholder').style.opacity = '1';
                    }
                    this.parentElement.querySelector('.calendar-icon').style.color =
                        'var(--Gray-100)';
                });
            });
        });

        // ===== MODAL FUNCTIONS - FIXED VERSION =====
        
        // Open Transaction Detail Modal - WITH ERROR HANDLING
        function openTransactionDetailModal(transactionId, element) {
            console.log('Opening modal for Transaction ID:', transactionId);
            const modal = document.getElementById('transactionDetailModal');
            
            if (!modal) {
                console.error('Modal not found!');
                return;
            }

            try {
                // Prevent body scroll
                document.body.classList.add('modal-open');

                // Show modal
                modal.classList.add('show-modal');
                modal.setAttribute('aria-hidden', 'false');

                // Helper function to safely set element text
                const setElementText = (id, text) => {
                    const element = document.getElementById(id);
                    if (element) {
                        element.textContent = text;
                    } else {
                        console.warn(`Element with ID '${id}' not found`);
                    }
                };

                // Sample data
                const dummyTransactionData = {
                    id: transactionId,
                    customerName: "Joe Gong",
                    memberId: "7881923483119001",
                    date: "June 10, 2024",
                    time: "23:00 PM",
                    paymentMethod: "BCA",
                    bankAccountNumber: "092874129623",
                    subTotal: 4162500,
                    tax: 208125,
                    totalAmount: 4370625,
                    pointsEarned: 6000
                };

                // Populate modal data safely
                setElementText('detailTransactionId', dummyTransactionData.id);
                setElementText('detailCustomer', dummyTransactionData.customerName);
                setElementText('detailMemberId', dummyTransactionData.memberId);
                setElementText('detailDate', dummyTransactionData.date);
                setElementText('detailTime', dummyTransactionData.time);
                setElementText('detailPaymentMethod', dummyTransactionData.paymentMethod);
                setElementText('detailBankAccount', dummyTransactionData.bankAccountNumber);
                setElementText('detailSubTotal', `Rp ${dummyTransactionData.subTotal.toLocaleString('id-ID')}`);
                setElementText('detailTotalAmount', `Rp ${dummyTransactionData.totalAmount.toLocaleString('id-ID')}`);
                setElementText('detailPointsEarned', `+ ${dummyTransactionData.pointsEarned.toLocaleString('id-ID')} Point`);
                
                // Handle tax with HTML
                const taxElement = document.getElementById('detailTax');
                if (taxElement) {
                    taxElement.innerHTML = `+ Rp ${dummyTransactionData.tax.toLocaleString('id-ID')} <span class="tax-percentage">(5%)</span>`;
                }

                console.log('Modal opened successfully');
            } catch (error) {
                console.error('Error opening modal:', error);
                // Still show modal even if data population fails
                modal.classList.add('show-modal');
                modal.setAttribute('aria-hidden', 'false');
            }
        }

        // Close Modal Function - FIXED VERSION
        function closeModal(modalId, e) {
            console.log('Attempting to close modal:', modalId);
            
            if (e) {
                e.preventDefault();
                e.stopPropagation();
            }

            const modal = document.getElementById(modalId);
            if (modal) {
                try {
                    // Restore body scroll
                    document.body.classList.remove('modal-open');

                    // Hide modal
                    modal.classList.remove('show-modal');
                    modal.setAttribute('aria-hidden', 'true');

                    console.log('Modal closed successfully');
                } catch (error) {
                    console.error('Error closing modal:', error);
                }
            } else {
                console.error('Modal not found:', modalId);
            }
        }

        // Add ESC key support
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                const openModal = document.querySelector('.modal.show-modal');
                if (openModal) {
                    closeModal(openModal.id);
                }
            }
        });

        // Ensure event listeners are properly attached
        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOM loaded, setting up modal event listeners');
            
            const modal = document.getElementById('transactionDetailModal');
            if (modal) {
                // Click outside to close
                modal.addEventListener('click', function(event) {
                    if (event.target === modal) {
                        console.log('Clicked outside modal, closing...');
                        closeModal('transactionDetailModal');
                    }
                });

                // Close button click
                const closeBtn = modal.querySelector('.close-modal-icon');
                if (closeBtn) {
                    closeBtn.addEventListener('click', function(event) {
                        console.log('Close button clicked');
                        closeModal('transactionDetailModal', event);
                    });
                } else {
                    console.warn('Close button not found');
                }

                // Also add event listener to the button wrapper
                const closeBtnWrapper = modal.querySelector('.close-modal-btn');
                if (closeBtnWrapper) {
                    closeBtnWrapper.addEventListener('click', function(event) {
                        console.log('Close button wrapper clicked');
                        closeModal('transactionDetailModal', event);
                    });
                }

                console.log('Modal event listeners set up successfully');
            } else {
                console.error('Modal not found during setup');
            }
        });
    </script>
</body>

</html>