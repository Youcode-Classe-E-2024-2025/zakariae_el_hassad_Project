<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
            color: #333;
        }
        .container {
            text-align: center;
        }
        .error-code {
            font-size: 12rem;
            font-weight: bold;
            color: #007BFF;
        }
        .error-message {
            font-size: 2rem;
            margin: 1rem 0;
        }
        .error-description {
            font-size: 1.2rem;
            color: #6c757d;
            margin-bottom: 2rem;
        }
        .btn {
            display: inline-block;
            padding: 0.8rem 1.5rem;
            font-size: 1rem;
            font-weight: bold;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 0.5rem;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="error-code">404</div>
        <p class="error-message">Something's missing.</p>
        <p class="error-description">Sorry, we can't find that page. You'll find lots to explore on the home page.</p>
        <form action="?action=home" method="POST">
            <button class="btn">Back to Homepage</button>
        </form>
    </div>
</body>
</html>
