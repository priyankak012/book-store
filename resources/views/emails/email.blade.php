<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>
</head>

<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            margin-top: 15px;
        }

        h4 {
            color: #007bff;
        }

        p {
            color: #333;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            color: #777;
        }
    </style>
    <div class="container">
        <h4>Email: {{ $email }}</h4>
        <div class="card">
            <p>Online Book-store</p>
        </div>
        <p>“I’m thankful for my struggle because without it I wouldn’t have stumbled across my strength.”....</p>
        <p>Phone Number: {{ $phone }}</p>
        <hr> <!-- Horizontal line separating sections -->
        <p>Additional Information: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class="footer">
        <p>&copy; 2023 Your Company Name. All rights reserved.</p>
    </div>
</body>

</html>
