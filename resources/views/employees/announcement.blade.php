<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "/assets/Oikos Logo.png">
    <link rel="stylesheet" href = "/CSS/employee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Oikos Student: Announcement</title>
    <style>
        .container{
            margin-top:1em;
            padding:1em;
            background-color:white;
            display:flex;
            flex-direction:column;
            border-radius: 5px;
        }
        #container-title{
            font-weight: 400;
            border-bottom:1px solid #dedede;
            color:#323468;
        }
        #post{
            width:11em;
            height:2em;
            padding: .2rem;
            font-size:1.2rem;
            letter-spacing: 1px;
            color:white;
            background-color:#323468;
            border:none;
            border-radius:15px;
            opacity:100%;
            transition:opacity 150ms ease-in-out;
        }
        #post:hover{
            opacity:75%;
            cursor: pointer;
        }
    </style>
</head>
<body>
    @include('component.employee.sidenav')
    <div class="modal-mask">
        
    </div>
    <div class="main-content">
        <h1>Announcements</h1>
        <button id="post">+ Add Annoucement</button>
        @include('component.employee.annoucement_component')
    </div>


    <script>
        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');

        btn.onclick = function () {
            sidebar.classList.toggle('active');
        }
    </script>


</body>
</html>