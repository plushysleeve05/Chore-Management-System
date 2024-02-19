<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles5.css">
</head>
<body>
    <section class="header">
        <div class="logo">
            <i class="ri-menu-line menu"></i>
            <h2><span>CHORE</span> MS</h2>
        </div>
        <div class="header--items">
            <i class="ri-search-2-line"></i>
            <i class="ri-notification-2-line"></i>
            <i class="ri-wechat-2-line chat"></i>
        </div>
    </section>

    <section class="main">
        <div class="sidebar">
            <ul class="sidebar--items">
                <li>
                    <a href="#" class="active">
                        <span class="icon"><i class="ri-bar-chart-line"></i></span>
                        <div class="sidebar--item">MANAGE CHORES</div>
                    </a>
                </li>
                <li>
                    <a href="#" class="active">
                        <span class="icon"><i class="ri-user-line"></i></span>
                        <div class="sidebar--item">HOMEPAGE</div>
                    </a>
                </li>
            </ul>
            <ul class="sidebar--bottom--items">
                <li>
                    <a href="#">
                        <span class="icon"><i class="ri-logout-box-r-line"></i></span>
                        <div class="sidebar--item">Logout</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main--container">
            <div class="cards">
                <div class="card card-1">
                    <div class="card--title">
                        <span class="card--icon icon"><i class="ri-shopping-bag-2-line"></i></span>
                        <span>UNCOMPLETED CHORES</span>
                    </div>
                    <h3 class="card--value">####<i class="ri-arrow-down-circle-fill down"></i></h3>
                </div>
                <div class="card card-2">
                    <div class="card--title">
                        <span class="card--icon icon"><i class="ri-gift-line"></i></span>
                        <span>PENDING</span>
                    </div>
                    <h3 class="card--value">####<i class="ri-arrow-down-circle-fill down"></i></h3>
                    <div class="chart">
                        <canvas id="orders"></canvas>
                    </div>
                </div>
                <div class="card card-3">
                    <div class="card--title">
                        <span class="card--icon icon"><i class="ri-handbag-line"></i></span>
                        <span>COMPLETED CHORES</span>
                    </div>
                    <h3 class="card--value">####<i class="ri-arrow-up-circle-fill up"></i></h3>
                </div>
            </div>
            <table>
    <thead>
        <tr>
            <th>Chore Name</th>
            <th>Assigned By</th>
            <th>Date Assigned</th>
            <th>Date Due</th>
            <th>Chore Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Mow the Lawn</td>
            <td>Jane Doe</td>
            <td>2024-01-30</td>
            <td>2024-02-05</td>
            <td>Pending</td>
            <td>
                <button onclick="markCompleted('Mow the Lawn')">Mark Completed</button>
            </td>
        </tr>
        <tr>
            <td>Wash Dishes</td>
            <td>John Smith</td>
            <td>2024-01-28</td>
            <td>2024-02-02</td>
            <td>Completed</td>
            <td>
                <button onclick="undoCompleted('Wash Dishes')">Undo Completed</button>
            </td>
        </tr>
        <tr>
            <td>Vacuum Living Room</td>
            <td>Alice Johnson</td>
            <td>2024-01-25</td>
            <td>2024-01-31</td>
            <td>Pending</td>
            <td>
                <button onclick="markCompleted('Vacuum Living Room')">Mark Completed</button>
            </td>
        </tr>
        <tr>
            <td>Vacuum Living Room</td>
            <td>Alice Johnson</td>
            <td>2024-01-25</td>
            <td>2024-01-31</td>
            <td>Pending</td>
            <td>
                <button onclick="markCompleted('Vacuum Living Room')">Mark Completed</button>
            </td>
        </tr>
        <tr>
            <td>Vacuum Living Room</td>
            <td>Alice Johnson</td>
            <td>2024-01-25</td>
            <td>2024-01-31</td>
            <td>Pending</td>
            <td>
                <button onclick="markCompleted('Vacuum Living Room')">Mark Completed</button>
            </td>
        </tr>
        <tr>
            <td>Vacuum Living Room</td>
            <td>Alice Johnson</td>
            <td>2024-01-25</td>
            <td>2024-01-31</td>
            <td>Pending</td>
            <td>
                <button onclick="markCompleted('Vacuum Living Room')">Mark Completed</button>
            </td>
        </tr>
    </tbody>
</table>

        </div>
    </section>
</body>
</html>