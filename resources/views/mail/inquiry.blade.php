<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Contact Inquiry</title>
</head>
<body style="background-color: #2a2a2a; font-family: Arial, sans-serif; padding: 20px; color: white;">
    <section style="background-color: #333; padding: 16px; border-radius: 8px;">
        <p style="font-size: 16px; font-weight: bold;">New Contact Inquiry from ICT Club Website</p>

        <p style="margin: 10px 0;"><strong>Name:</strong> {{ $data['fullname'] }}</p>
        <p style="margin: 10px 0;"><strong>Email:</strong> {{ $data['email'] }}</p>
        <p style="margin: 10px 0;"><strong>Category:</strong> {{ $data['category'] }}</p>
        <p style="margin: 10px 0;"><strong>Message:</strong><br> {{ $data['message'] }}</p>
    </section>
</body>
</html>
