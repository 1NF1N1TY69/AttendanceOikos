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
    <title>Oikos Employee: Approval</title>
    <style>
        .container{
            margin-top: 2em;
            width:100%;
            padding:1em;
            background-color:white;
            opacity:1;
            border-radius:5px;
            transition: opacity 400ms ease-in-out;
            display: flex;
            flex-direction: column;
        } 
        .steps-container{
            margin-top: 1.3em;
            background-color:white;
            border-radius:5px;
            display:flex;
            flex-direction: row;
        }
        #container-title{
            font-weight: 400;
            color: #59A3CD;
            border-bottom:1px solid #dedede;
        }
        .header-content {
            display: flex;
        }

        .document-request,
        .approval {
            display: inline;
        }
        .input-group{
            padding:0.8em;
            width:25%;
            display:flex;
            flex-direction:column;
        }
        .input-group-special{
            padding:.8em;
            width:50%;
            display:flex;
            flex-direction:column;
        }
        .input-group-single{
            padding:.8em;
            width:75%;
            display:flex;
            flex-direction:column;
        }
        .input-group-nborder{
            padding:.8em;
            width:100%;
            display:flex;
            flex-direction:column;
        }
        .field-group{
            margin-top:2em;
            display:flex;
        }
        .input-group .input-field,.input-group-special .input-field,.input-group-single .input-field{
            border:none; 
            font-size:1rem;
            border-bottom:1px solid #dedede;
        }
        .input-field-nborder{
            border:none;
            font-size: 1rem;
            white-space: nowrap;
            width: 90%;
        }
        label{
            margin-top:.5em;
            color:#c4c4c4;
        }
        .left-container{
            margin-top: 0.5em;
            width:55%;
            padding:1em;
            background-color:white;
            opacity:1;
            border-radius:5px;
            transition: opacity 400ms ease-in-out;
            display: flex;
            flex-direction: column;
        }
        .right-container{
            margin-top: 1.5em;
            width:45%;
            padding:1em;
            background-color:white;
            opacity:1;
            border-radius:5px;
            transition: opacity 400ms ease-in-out;
            display: flex;
            flex-direction: column;
            border-left:1px solid #dedede;
            height: 100%;
            align-items: flex-start;
        }
        .border-horizontal{
            border-bottom:1px solid #dedede;
            width: 90%;
        }
        .certif-container{
            width:100%;
            background-color:#EEF7FF;
            opacity:1;
            border-radius:5px;
            transition: opacity 400ms ease-in-out;
            display: flex;
        }
        i {
            font-size: 1.2em;
            cursor: pointer;
            float: right;
        }
        /* Add this style for the download link container */
        .download-link-container {
            display: flex;
            align-items: center;
            cursor: pointer;
            text-decoration: none; /* Underline effect on hover */
        }

        /* Add this style to adjust the hover effect on the input field */
        .download-link-container:hover .input-field-nborder {
            text-decoration: underline;
        }

        /* Add this style to move the download icon to the right */
        .download-link-container i {
            margin-left: auto;
        }
    </style>
</head>
<body>
    @include('component.employee.sidenav')
    <div class="main-content">
        <div class="header-content">
            <h1 class="document-request" style = "color: rgba(100, 100, 100, 0.700)">Document Request > </h1>
            <h1 class="approval" style = "margin-left: 0.3em;">Approval</h1>
        </div>
        
        <div class="container">
            <h3 id=container-title>REQUEST SUMMARY</h3>
            <div class="field-group">
                <div class="input-group">
                    <input type="text" class='input-field' id='requestor-name' value="WATSON, AMELIA" readonly>
                    <label for="requestor-name">Requestor Name</label>
                </div>
                <div class="input-group">
                    <input type="text" class='input-field' id='request-code' value="CPE-2024- 01-00001" readonly>
                    <label for="request-code">Request Code</label>
                </div>
                <div class="input-group">
                    <input type="text" class='input-field' id='request-type' value="Certificate of Good Moral Character" readonly>
                    <label for="request-type">Request Type</label>
                </div>
                <div class="input-group">
                    <input type="text" class='input-field' id='date-requested' value="Jan 01, 2024" readonly>
                    <label for="date-requested">Date Requested</label>
                </div>
                <div class="input-group">
                    <input type="text" class='input-field' id='date-processed' value="Pending" readonly>
                    <label for="date-processed">Date Processed</label>
                </div>
                <div class="input-group">
                    <input type="text" class='input-field' id='request-status' value="Pending" readonly>
                    <label for="request-status">Request Status</label>
                </div>
            </div>
        </div>

        <div class="steps-container">
            <div class="left-container">
                <div class="field-group">
                    <div class="input-group">
                        <label for="request-code">Request Code</label>
                        <input type="text" class='input-field' style = "margin-top: 0.5em;"id='request-code' value="CPE-2024- 01-00001" readonly>
                    </div>
                    <div class="input-group">
                        <label for="requested-date">Requested Date</label>
                        <input type="text" class='input-field' style = "margin-top: 0.5em;"id='requested-date' value="Jan 01, 2024" readonly>
                    </div>
                    <div class="input-group">
                        <label for="status">Status</label>
                        <input type="text" class='input-field' style = "margin-top: 0.5em;"id='status' value="Pending" readonly>
                    </div>
                </div>
                <div class="field-group">
                    <div class="input-group-single">
                        <label for="certification">Certification</label>
                        <input type="text" class='input-field' style = "margin-top: 0.5em;"id='certification' value="Certification of Good Moral Character" readonly>
                    </div>
                </div>
                <div class="field-group">
                    <div class="input-group-single">
                        <label for="remarks">Remarks</label>
                        <input type="text" class='input-field' style = "margin-top: 0.5em;"id='remarks' value="Blah blah Blah blah Blah blah Blah blah Blah blah Blah blah Blah blah" readonly>
                    </div>
                </div>
                <div class="field-group" style = "margin-bottom: -0.8em;">
                    <h3 id=container-title>CERTIFICATION</h3>
                    <div class="border-horizontal"></div>
                </div>
                <div class="field-group">
                    <div class="certif-container">
                        <div class="input-group-nborder">
                            <div class="download-link-container">
                                <input type="text" class='input-field-nborder' style = "color: #007bff; background-color:rgba(100, 100, 100, 0);" id='certification' style="background-color: rgba(255, 255, 255, 0); font-size: 1rem;" value="Certificate of Good Moral Character - Ms. Watson.pdf" readonly>
                                <i class="fa-solid fa-download"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-container">
                <h3 id=container-title>STEPS</h3>
                <div class="border-horizontal"></div>
            </div>
        </div>
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