@vite('resources/sass/Cashier/partial/sidebar.scss')
@vite('resources/sass/Cashier/pages/event.scss')
@vite('resources/sass/Cashier/components/notif.scss')
@vite('resources/js/components/notif.js')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>Event</title>
</head>

<body>
    @include('Cashier.partial.sidebar')

    <main class="event-main">
        <header class="event-header">
            <h1>Event</h1>
            <div class="event-header__right">
                <a href="/profile" class="user-profile">
                    <div class="user-avatar">
                        <img src="{{ asset('images/Avatar.png') }}" alt="Sebastian Hamer" class="avatar-img">
                    </div>
                    <div class="user-info">
                        <span class="user-name">Sebastian Hamer</span>
                        <span class="user-role">Cashier Officer</span>
                    </div>
                </a>
                @include('Cashier.components.notif')
            </div>
        </header>

        <!-- Table Section -->
        <section class="redeem-content">
            <!-- Search and Filter Section -->
            <div class="redeem-controls">
                <div class="search-container">
                    {{-- search added here by JS --}}
                </div>
                <div class="filter-and-add-group">
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
                <div class="status-filter">
                    <select class="status-select">
                        <option value="">Status</option>
                        <option value="active">Active</option>
                        <option value="deactive">Deactive</option>
                        <option value="pending">Pending</option>
                        <option value="expired">Expired</option>
                    </select>
                </div>
            </div>
            </div>
            <!-- Table Section -->
            <div class="redeem-table-container" data-aos="zoom-in-out" data-aos-delay="1000">
                <div class="table-responsive-custom">
                    <table id="redeemTable" class="redeem-table">
                        <thead>
                            <tr>
                                <th>
                                    Event Name
                                    <img src="{{ asset('images/sort.svg') }}" alt="sort" class="th-icon">
                                </th>
                                <th>
                                    Creator
                                    <img src="{{ asset('images/sort.svg') }}" alt="sort" class="th-icon">
                                </th>
                                <th>
                                    Location
                                    <img src="{{ asset('images/sort.svg') }}" alt="sort" class="th-icon">
                                </th>
                                <th>
                                    Date
                                    <img src="{{ asset('images/sort.svg') }}" alt="sort" class="th-icon">
                                </th>
                                <th>
                                    Price
                                    <img src="{{ asset('images/sort.svg') }}" alt="sort" class="th-icon">
                                </th>
                                <th>
                                    Status
                                    <img src="{{ asset('images/sort.svg') }}" alt="sort" class="th-icon">
                                </th>
                                <th>
                                    Action
                                    <img src="images/sort.svg" alt="sort" class="th-icon">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tennessee Discount 10%</td>
                                <td>Barizto Edward</td>
                                <td>LXXY Bali, Sky Garden</td>
                                <td>10 July 2024</td>
                                <td>6,500 Points</td>
                                <td><span class="status-badge deactive">Deactive</span></td>
                                <td>
                                    <div class="action-dropdown">
                                        <button class="action-btn" onclick="toggleDropdown(this)">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12C18 12.5523 18.4477 13 19 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="/de" class="dropdown-item detail">Detail</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="dark-row">
                                <td>Old No.7 Buy 2 Get 1</td>
                                <td>Dallas Jr.</td>
                                <td>Sky Garden, Joe Bar...</td>
                                <td>10 July 2024</td>
                                <td>6,500 Points</td>
                                <td><span class="status-badge deactive">Deactive</span></td>
                                <td>
                                    <div class="action-dropdown">
                                        <button class="action-btn" onclick="toggleDropdown(this)">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12C18 12.5523 18.4477 13 19 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="/de" class="dropdown-item detail">Detail</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Buy 1 Get 2 Gentleman Jack</td>
                                <td>Joe Gong</td>
                                <td>Joe Bar, Savaya Club...</td>
                                <td>10 July 2024</td>
                                <td>6,500 Points</td>
                                <td><span class="status-badge deactive">Deactive</span></td>
                                <td>
                                    <div class="action-dropdown">
                                        <button class="action-btn" onclick="toggleDropdown(this)">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12C18 12.5523 11.4477 13 12 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="/de" class="dropdown-item detail">Detail</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="dark-row">
                                <td>Tennessee Discount 5%</td>
                                <td>Samantha Ping</td>
                                <td>Savaya Club, Blow B...</td>
                                <td>10 July 2024</td>
                                <td>6,500 Points</td>
                                <td><span class="status-badge active">Active</span></td>
                                <td>
                                    <div class="action-dropdown">
                                        <button class="action-btn" onclick="toggleDropdown(this)">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12C18 12.5523 18.4477 13 19 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="/de" class="dropdown-item detail">Detail</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Old No.7 Buy 2 Get 2</td>
                                <td>Moes Lord</td>
                                <td>Blow Bar, Iron Faire...</td>
                                <td>10 July 2024</td>
                                <td>6,500 Points</td>
                                <td><span class="status-badge active">Active</span></td>
                                <td>
                                    <div class="action-dropdown">
                                        <button class="action-btn" onclick="toggleDropdown(this)">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12C18 12.5523 18.4477 13 19 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="/de" class="dropdown-item detail">Detail</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="dark-row">
                                <td>Tennessee Discount 5%</td>
                                <td>Ben Jamie</td>
                                <td>Iron Fairies, Mirror N...</td>
                                <td>10 July 2024</td>
                                <td>6,500 Points</td>
                                <td><span class="status-badge active">Active</span></td>
                                <td>
                                    <div class="action-dropdown">
                                        <button class="action-btn" onclick="toggleDropdown(this)">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12C18 12.5523 18.4477 13 19 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="/de" class="dropdown-item detail">Detail</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Old No.7 Buy 2 Get 2</td>
                                <td>Abas Dorlan</td>
                                <td>Mirror Night Club, L...</td>
                                <td>10 July 2024</td>
                                <td>6,500 Points</td>
                                <td><span class="status-badge active">Active</span></td>
                                <td>
                                    <div class="action-dropdown">
                                        <button class="action-btn" onclick="toggleDropdown(this)">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12C11 12.5523 11.4477 13 12 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="/de" class="dropdown-item detail">Detail</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="dark-row">
                                <td>Tennessee Discount 5%</td>
                                <td>Cristo Anjax</td>
                                <td>Late Club, Pretty Poi...</td>
                                <td>10 July 2024</td>
                                <td>6,500 Points</td>
                                <td><span class="status-badge active">Active</span></td>
                                <td>
                                    <div class="action-dropdown">
                                        <button class="action-btn" onclick="toggleDropdown(this)">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12C18 12.5523 18.4477 13 19 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item detail">Detail</a>
                                            <a href="#" class="dropdown-item">Edit</a>
                                            <a href="#" class="dropdown-item">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Old No.7 Buy 2 Get 2</td>
                                <td>Hitaro Koniji</td>
                                <td>Pretty Poison, Red...</td>
                                <td>10 July 2024</td>
                                <td>6,500 Points</td>
                                <td><span class="status-badge active">Active</span></td>
                                <td>
                                    <div class="action-dropdown">
                                        <button class="action-btn" onclick="toggleDropdown(this)">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12C18 12.5523 18.4477 13 19 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="/de" class="dropdown-item detail">Detail</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="dark-row">
                                <td>Tennessee Discount 5%</td>
                                <td>Giano Fucpaz</td>
                                <td>Red Ruby, Late Club</td>
                                <td>10 July 2024</td>
                                <td>6,500 Points</td>
                                <td><span class="status-badge active">Active</span></td>
                                <td>
                                    <div class="action-dropdown">
                                        <button class="action-btn" onclick="toggleDropdown(this)">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12C18 12.5523 18.4477 13 19 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13Z"
                                                    stroke="#7B7878" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="/de" class="dropdown-item detail">Detail</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="redeem-pagination">
                    <div class="pagination-row">Rows: 10</div>
                    <div class="pagination-page">
                        1-10 of 100
                        <button class="pagination-nav prev">‹</button>
                        <button class="pagination-nav next">›</button>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.bootstrap4.js"></script>

    <script type="text/javascript">
        $(document).ready(() => {
            if ($("#redeemTable").length) {
                const promoTable = $("#redeemTable").DataTable({
                    // Konfigurasi DataTables
                    paging: false,
                    lengthChange: false,
                    searching: true,
                    info: false,
                    ordering: true,
                    responsive: true, // 
                    language: {
                        search: "",
                        searchPlaceholder: "Search event",
                    },
                    orderClasses: false,
                    columnDefs: [{
                        orderable: true,
                        targets: [6]
                    }, ],

                    columns: [{
                            width: '20%'
                        }, // Event Name
                        {
                            width: '15%'
                        }, // Creator
                        {
                            width: '15%'
                        }, // Location
                        {
                            width: '15%'
                        }, // Date
                        {
                            width: '10%'
                        }, // Price
                        {
                            width: '10%'
                        }, // Status
                        {
                            width: '10%'
                            // Action
                        }
                    ],
                    renderer: "bootstrap",
                    // Gunakan DOM hanya untuk filter (f) dan tabel (t)
                    dom: "ft",

                    initComplete: function() {
                        const api = this.api();
                        const searchContainer = $(".redeem-controls .search-container");
                        const defaultSearchWrapper = $(".dt-search, .dataTables_filter");
                        const defaultSearchInput = defaultSearchWrapper.find("input[type='search']");

                        defaultSearchWrapper.hide();

                        const searchIcon = $(`
                            <svg class="search-icon" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                <path d="M21 21L16.514 16.506L21 21ZM19 10.5C19 15.194 15.194 19 10.5 19C5.806 19 2 15.194 2 10.5C2 5.806 5.806 2 10.5 2C15.194 2 19 5.806 19 10.5Z" 
                                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        `);

                        searchContainer.empty();
                        searchContainer.append(searchIcon);
                        searchContainer.append(defaultSearchInput);

                        defaultSearchInput
                            .addClass("search-input")
                            .attr("placeholder", "Search event")
                            .css({
                                'width': '100%',
                                'padding': '12px 16px 12px 48px',
                                'background': 'var(--Dark-300)',
                                'border': '1px solid var(--Dark-400)',
                                'border-radius': '8px',
                                'color': '#fff',
                                'text-align': 'left',
                                'font-family': 'Montserrat',
                                'font-size': '14px',
                                'box-sizing': 'border-box'
                            });

                        if (!$('.table-responsive-custom').length) {
                            $('#redeemTable').wrap('<div class="table-responsive-custom"></div>');
                        }
                    }
                });
            }
        });

        function toggleDropdown(button) {
            // Close all other dropdowns
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                if (menu !== button.nextElementSibling) {
                    menu.classList.remove('show');
                }
            });

            // Toggle current dropdown
            const dropdown = button.nextElementSibling;
            dropdown.classList.toggle('show');

            // Dynamic positioning untuk mencegah overflow
            if (dropdown.classList.contains('show')) {
                // Reset positioning
                dropdown.style.top = '';
                dropdown.style.bottom = '';
                dropdown.style.left = '';
                dropdown.style.right = '';

                // Check vertical overflow
                const rect = dropdown.getBoundingClientRect();
                const viewportHeight = window.innerHeight;
                const viewportWidth = window.innerWidth;

                if (rect.bottom > viewportHeight) {
                    // Show dropdown above button
                    dropdown.style.top = 'auto';
                    dropdown.style.bottom = '100%';
                    dropdown.style.transform = 'translateY(10px)';
                } else {
                    // Show dropdown below button (default)
                    dropdown.style.top = '100%';
                    dropdown.style.bottom = 'auto';
                    dropdown.style.transform = 'translateY(-10px)';
                }

                // Check horizontal overflow
                if (rect.right > viewportWidth) {
                    dropdown.style.right = '0';
                    dropdown.style.left = 'auto';
                } else if (rect.left < 0) {
                    dropdown.style.left = '0';
                    dropdown.style.right = 'auto';
                }

                // Update transform for show state
                setTimeout(() => {
                    if (dropdown.classList.contains('show')) {
                        dropdown.style.transform = 'translateY(0)';
                    }
                }, 10);
            }
        }

        // Enhanced close dropdown function
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.action-dropdown')) {
                document.querySelectorAll('.dropdown-menu').forEach(menu => {
                    menu.classList.remove('show');
                    // Reset styles
                    menu.style.top = '';
                    menu.style.bottom = '';
                    menu.style.left = '';
                    menu.style.right = '';
                    menu.style.transform = '';
                });
            }
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                menu.classList.remove('show');
            });
        });

        // Date Placeholder Management Function for Event Page
        // Function ini memfokuskan untuk menampilkan "Start Date" dan "End Date" 
        // serta menyembunyikan format default dd/mm/yyyy dari browser
        function updateDatePlaceholdersEvent() {
            const startDate = document.getElementById('startDateHistory');
            const endDate = document.getElementById('endDateHistory');
            const startPlaceholder = document.querySelector('.start-placeholder');
            const endPlaceholder = document.querySelector('.end-placeholder');

            if (startDate && startPlaceholder) {
                if (startDate.value) {
                    // Ada tanggal dipilih: sembunyikan placeholder, tampilkan tanggal
                    startDate.classList.remove('empty');
                    startPlaceholder.style.display = 'none';
                } else {
                    // Tidak ada tanggal: tampilkan "Start Date", sembunyikan format default
                    startDate.classList.add('empty');
                    startPlaceholder.style.display = 'block';
                }
            }

            if (endDate && endPlaceholder) {
                if (endDate.value) {
                    // Ada tanggal dipilih: sembunyikan placeholder, tampilkan tanggal
                    endDate.classList.remove('empty');
                    endPlaceholder.style.display = 'none';
                } else {
                    // Tidak ada tanggal: tampilkan "End Date", sembunyikan format default
                    endDate.classList.add('empty');
                    endPlaceholder.style.display = 'block';
                }
            }
        }

        // Initialize Date Placeholders for Event Page
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize placeholders on page load
            updateDatePlaceholdersEvent();

            // Add event listeners to date inputs
            const eventDateInputs = document.querySelectorAll('.date-filter-container .date-input');
            eventDateInputs.forEach(input => {
                // Focus event - hide placeholder and change icon color
                input.addEventListener('focus', function() {
                    const placeholder = this.parentElement.querySelector('.date-placeholder');
                    const calendarIcon = this.parentElement.querySelector('.calendar-icon');
                    
                    if (placeholder) {
                        placeholder.style.opacity = '0';
                    }
                    if (calendarIcon) {
                        calendarIcon.style.filter = 'brightness(0) invert(1) sepia(1) saturate(5) hue-rotate(30deg)';
                    }
                });

                // Blur event - show placeholder if empty and reset icon color
                input.addEventListener('blur', function() {
                    const placeholder = this.parentElement.querySelector('.date-placeholder');
                    const calendarIcon = this.parentElement.querySelector('.calendar-icon');
                    
                    if (!this.value && placeholder) {
                        placeholder.style.opacity = '1';
                    }
                    if (calendarIcon) {
                        calendarIcon.style.filter = 'brightness(0) invert(1)';
                    }
                });

                // Change event - update placeholders when value changes
                input.addEventListener('change', function() {
                    updateDatePlaceholdersEvent();
                });

                // Input event - for real-time updates
                input.addEventListener('input', function() {
                    updateDatePlaceholdersEvent();
                });
            });
        });

        $(document).ready(function() {
            // Target input dengan form-control dan tambahkan kelas custom
            $('.form-control').addClass('custom-search-input');

            // Atau target berdasarkan ID
            $('#dt-search-0').addClass('custom-search-input');
        });
    </script>
</body>

</html>