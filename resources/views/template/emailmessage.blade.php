<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .content {
            font-size: 14px;
            line-height: 1.6;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            color: #777;
        }

        .forgottenPassword {
            font-family: monospace;
        }

        .appname {
            font-size: 13px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Request Forgotten Password</h2>
            <small class="appname">{{ env('APP_NAME').' '.env('APP_VERSION') }} © @php echo date('Y'); @endphp</small>
        </div>
        <div class="content">
            <span>Hello,</span><br><br>
            <span>We received a request to send your forgotted password.</span><br>
            <span>Your requested forgotten password: <u class="forgottenPassword">{{ $mailData['forgottenPassword'] }}</u></span><br><br>
            <span>Please log in and update your password as soon as possible.</span><br>
        </div>
        <div class="footer">
            <p>If you didn't request a Forgotten password, please ignore and delete this email.</p>
        </div>
    </div>
</body>
</html>