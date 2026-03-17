<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
</head>
<body>
    
    <form method="POST" action="/message">
        @csrf
        <h1>Send Message</h1>
        <label for="message">Message:</label><br>
        <input type="text" id="message" name="message" required><br><br>
        <button type="submit">Send</button>
    </form>
    
</body>
</html>