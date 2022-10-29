<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="display:flex; justify-content:center">
        <div style="width:90%;">
            <h4>Job Information</h4>
            <p>Job Type :{{$data['job_type']}}</p>
            <p>Total Image :{{$data['total_image']}}</p>
            <p>Amount :{{$data['amount']}} tk</p>
            <p>Instruction :{{$data['instruction']}}</p>
            <p>Folder Name :{{$data['folder_name']}}</p>
            <p>Google drive link :{{$data['goole_drive_link']}}</p>
            <p style="text-align: center; font-weight:bolder;">Thanks for working with us</p>
        </div>
    </div>
</body>

</html>