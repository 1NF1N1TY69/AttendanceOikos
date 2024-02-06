<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "/assets/Oikos Logo.png">
    <link rel="stylesheet" href = "/CSS/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- implemented sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Oikos Admin: Dashboard</title>
    <style>
        .container {
            margin-top:1em;
            display: flex;
            justify-content: space-between;
            flex-direction: column;
            align-items: center;
            padding:1em
        }
        .stats-group{
            width:100%;
            display:flex;
            justify-content:space-between;
        }
        .card{
            background-color:white;
            width:30%;
            height:5em;
            border-radius: 5px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:1em;
        }
        .card .left-hand {
            font-size:1.3rem;
            display:flex;
        }
        .card .left-hand .labels{
            margin-left:.5em;
            display:flex;
            flex-direction:column;
        }
        .card .left-hand .labels a{
            color:gray;
            text-decoration:none;
            transition:color 150ms ease-in-out 
        }
        .card .labels a:hover{
            color:black;
        }
        .card .pendings{
            display:flex;
            flex-direction:column;
        }

        .employee-group{
            display:flex;
            flex-direction:column;
            margin-top:2em;
            padding:1em;
            background-color:white;
            width:100%;
        }
        .calendar-group{
            display:flex;
            flex-direction:column;
            margin-top:2em;
            padding:1em;
            background-color:white;
            width:100%;
        }
        .employee-group .table-header{
            display:flex;
            justify-content: space-between;
        }
        .table-header .field-group{
            display:flex;
            justify-content: space-between;
            padding:.3em;
            width:15%;
            border-radius:10px;
            border:1px solid black;
        }
        .table-header .field-group{
            display:flex;
            justify-content: space-between;
            width:15%;
            border-radius:10px;
            border:1px solid black;
            transition:border 150ms ease-in-out;
        }
        .table-header .field-group input{
            border:none;
            width:90%;
        }
        .table-header .field-group input:focus{
            outline:none;
        } 
        #count{
            height:30px;
            width:30px;
            font-weight:lighter;
            font-size:1rem;
            color:white;
            display:flex;
            align-items:center;
            justify-content: center;
            border-radius:50%;
            background-color:#ff3131;
        }
        .attendance-type {
            padding: 10px;
        }

        .attendance-type th,
        .attendance-type td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        .attendance-type th {
            background-color: #323468;
            color: #fff;
        }

        .attendance-type tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .attendance-type tr:hover {
            background-color: #f1f1f1;
        }
        .fc{
            width:100%;
            height:50em;
        }
        .list{
            margin-top:1em;
            display:flex;
            flex-direction:column;
        }
        .list .data{
            display:flex;
            justify-content:flex-start;
            align-items: center;
            margin-top:.5em;
        }
        .list .data .point{
            height:.8em;
            width:.8em;
            border-radius:50%;
        }
        .list .data .date{
            margin-left:.5em;
        }
        .list .data .date{
            margin-left:.5em;
        }
        .list .data .event{
            margin-left:5em;
            color:#606360;
        }
    </style>
</head>
<body>
    @include('component.admin.sidenav')

    <div class="main-content">
        <h1>Dashboard</h1>
        <div class="container">
            <div class="stats-group">
                <div class="card">
                    <div class="left-hand">
                        <i class="fa-solid fa-users" style="background-color:#8c52ff; font-size:1.2rem; padding:1rem; color:white;border-radius:50%"></i>
                        <div class="labels">
                            10 Employees
                            <a href="/admin/Employee_Masterlist">View Details</a>
                        </div>
                    </div>
                    <div class="right-hand">
                        <p id="count">5</p>
                    </div>
                </div>
                <div class="card">
                    <div class="left-hand">
                        <i class="fa-solid fa-user" style="background-color:#32ba6b; font-size:1.3rem; padding:1rem; color:white;border-radius:50%"></i>
                        <div class="labels">
                            20 Students
                            <a href="/admin/Student_Masterlist">View Details</a>
                        </div>
                    </div>
                    <div class="right-hand">
                        <p id="count">5</p>
                    </div>
                </div>
                <div class="card">
                    <div class="left-hand">
                        <i class="fas fa-folder" style="background-color:#ffbd59; font-size:1.3rem; padding:1rem; color:white;border-radius:50%"></i>
                        <div class="labels">
                            10 Documents
                            <a href="/admin/Employee_Masterlist">View Details</a>
                        </div>
                    </div>
                    <div class="right-hand">
                        <p id="count">5</p>
                    </div>
                </div>
            </div>
            <div class="employee-group">
                <div class="table-header">
                    <h3>Employee Logs</h3>
                    <div class="field-group">
                        <input type="text" placeholder="search by name">
                        <i class="fas fa-search" style="cursor:pointer"></i>
                    </div>
                </div>
                <div class="log-body">
                <table style = "width: 100%;" class="attendance-type">
                    <thead>
                        <tr>
                            <th colspan="3"></th>
                            <th colspan="2">Morning Attendance</th>
                            <th colspan="2">Afternoon Attendance</th>
                            <th colspan="2">Evening Attendance</th>
                        </tr>
                        <tr>
                            <th>Student Name</th>
                            <th>Role</th>
                            <th>Date</th>
                            <th>In</th>
                            <th>Out</th>
                            <th>In</th>
                            <th>Out</th>
                            <th>In</th>
                            <th>Out</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>Teacher</td>
                            <td>2024-01-30</td>
                            <td>09:00 AM</td>
                            <td>01:00 PM</td>
                            <td>06:00 PM</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Miles Davis</td>
                            <td>IT </td>
                            <td>2024-01-30</td>
                            <td>09:00 AM</td>
                            <td>01:00 PM</td>
                            <td>06:00 PM</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
            <div class="calendar-group">
                <div class="table-header">
                    <h3>Calendar Events</h3>
                </div>
                <div class="calendar"></div>
                <br>
                <div class="upcoming">
                    <div class="table-header">
                        <h2>Upcoming Events</h2>
                    </div>
                    <div class="list">
                        <div class="data">
                            <p class="point" style="background-color:#32ba6b"></p>
                            <p class="date"><b>1/20/24</b></p>
                            <p class="event">Time Meeting</p>
                        </div>
                        <div class="data">
                            <p class="point" style="background-color:#8c52ff"></p>
                            <p class="date"><b>2/05/24</b></p>
                            <p class="event">New Hiring</p>
                        </div>
                        <div class="data">
                            <p class="point" style="background-color:#ff3131"></p>
                            <p class="date"><b>2/10/24</b></p>
                            <p class="event">New Managers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        var datePicked="";
        var dateCellSelector="";
        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');

        btn.onclick = function () {
            sidebar.classList.toggle('active');
        }
        const calendar = document.querySelector('.calendar');
        let fullCalendar= new FullCalendar.Calendar(calendar,{
            timeZone:'local',
            intialView:'timeGridWeek',
            selectable:true,
            dateClick:function (info){
                console.log(info.date);
            }
        });
        fullCalendar.render();
        console.log(fullCalendar.getDate());
        //let calendarCell=document.querySelector();
        //calendarCell.textContent="Why are you gae";
    </script>


</body>
</html>