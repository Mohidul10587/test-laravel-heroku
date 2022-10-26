<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        input,
        textarea,
        button,
        select {
            width: 300px;
            margin: 5px 0px;
            padding: 3px;
        }
    </style>
</head>

<body style="text-align: center;">

    <h2>Job Info</h2>
    <form action="posted-jobs-data" method="post">
        @csrf
        <input type="text" placeholder="Folder" name="folder_name"> <br>
        <input type="number" placeholder="Job id" name="job_id"><br>
        <input type="text" placeholder="Job Type" name="job_type"><br>
        <textarea type="text" placeholder="Instraction.." name="instruction"></textarea><br>
        <input type="number" placeholder="Total Image" name="total_image"> <br>
        <input type="number" placeholder="Amount of taka.." name="amount"> <br>

        <input type="url" placeholder="Google drive link" name="goole_drive_link"><br>
        <!-- <label for="start-date">start-date</label><br>
        <input type="date" id="start-date" placeholder="Start Date" name="start_Date"><br> -->
        <label for="deadline_date">Deadline_date</label><br>
        <input type="date" id='deadline_date' placeholder="Deadline of day" name="deadline_date"><br>
        <label for="deadline_time">Deadline_time</label><br>
        <input type="time" id='deadline_time' placeholder="Deadline of time" name="deadline_time"><br>
        <label for="empoyee_name">Assign to..</label><br>
        <select name="empoyee_name" id="empoyee_name">
            <option value="volvo">Emplyee Name</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select><br>
        <button type="submit">Submit</button>
</body>

</html>