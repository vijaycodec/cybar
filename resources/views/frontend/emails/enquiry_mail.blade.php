<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Enquiry Received</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            max-width: 600px;
            background: #ffffff;
            padding: 20px;
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            text-align: center;
        }
        p {
            font-size: 16px;
            line-height: 1.5;
            color: #555;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>New Enquiry Received</h2>

        <p>Dear Team,</p>

        <p>Hope you are doing well. I am reaching out to inform you about a new enquiry submitted through our platform. Below are the details:</p>

        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Phone No:</strong> {{ $data['phone_no'] }}</p>
        <p><strong>Course:</strong> {{ $data['course'] }}</p>
        <p><strong>Message:</strong> {{ $data['message'] }}</p>
        <p><strong>Country:</strong> {{ $data['country'] }}</p>
        <p><strong>Phone Code:</strong> {{ $data['phone_code'] }}</p>
        
        <p>Please take the necessary action as needed.</p>

        <p class="footer">Best Regards,<br>Your Name / Your Company Name</p>
    </div>
</body>
</html>
