<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 30px auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header {
            background: #0d6efd;
            color: white;
            padding: 20px;
            font-size: 22px;
            text-align: center;
        }
        .content {
            padding: 20px;
            color: #333;
        }
        .content strong {
            color: #0d6efd;
        }
        .footer {
            background: #f1f1f1;
            padding: 15px;
            text-align: center;
            font-size: 14px;
            color: #666;
        }
        .message-box {
            background: #f9f9f9;
            padding: 15px;
            border-left: 4px solid #0d6efd;
            margin-top: 10px;
            white-space: pre-line;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            📩 New Contact Message
        </div>
        <div class="content">
            <p>Hey, it's me <strong>{{ $data->name }}</strong></p>
            <h1><strong>User Details:</strong></h1>
            <p>
                <strong>Name:</strong> {{ $data->name }}<br>
                <strong>Email:</strong> {{ $data->email }}<br>
                <strong>Phone:</strong> {{ $data->phone }}
            </p>
            <p><strong>Message:</strong></p>
            <div class="message-box">
                {{ $data->message }}
            </div>
        </div>







        

        <div class="footer">
            Thank you for contacting us.<br>
            We will get back to you shortly.
        </div>
    </div>

</body>
</html>
