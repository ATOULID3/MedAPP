<!-- resources/views/emails/contact_form_submitted.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Form Submission</title>
    <style>
        /* Add your custom styles here */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.5;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            padding: 20px;
            background-color: #fff;
            margin: 20px auto;
            max-width: 600px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        h2 {
            color: #333;
        }

        p {
            color: #555;
        }

        .highlight {
            color: #007BFF;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>New Contact Form Submission</h2>

        <img src={{asset("vendors/images/deskapp-logo.svg") }} alt="" class="dark-logo">

        <p><strong>Name:</strong> <span class="highlight">{{ $formData['name'] }}</span></p>
        <p><strong>Email:</strong> <span class="highlight">{{ $formData['email'] }}</span></p>
        <p><strong>Message:</strong> <br>{{ nl2br(e($formData['message'])) }}</p>

        <p>Thank you,</p>
        <p>MedAPP</p>
    </div>
</body>
</html>

