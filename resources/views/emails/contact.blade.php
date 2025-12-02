<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
</head>

<body style="font-family: Arial, sans-serif; padding: 20px;">

    <h2 style="color:#333;">New Contact Message</h2>

    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>

    <hr>

    <p><strong>Message:</strong></p>
    <p style="white-space: pre-line;">
        {{ $data['message'] }}
    </p>

</body>

</html>
