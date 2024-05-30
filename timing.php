<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Web Design Mastery | Fitclub</title>
    <style>
        /* Updated CSS for the entire page */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(90deg, orange 50%, black 50%);
            color: white;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        /* Additional CSS for the new section */
        .schedule_container {
            background: rgba(0, 0, 0, 0.7); /* Semi-transparent black background */
            padding: 20px;
            text-align: center;
            color: white; /* Set text color to white */
        }

        .schedule__section {
            margin-bottom: 20px;
        }

        .schedule__subheader {
            font-family: 'Helvetica', sans-serif; /* Different font style */
            font-size: 24px;
            margin-bottom: 10px;
        }

        .class__list {
            list-style-type: disc;
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <!-- Your existing code -->

    <section class="section_container schedule_container">
        <h2 class="section__header">Timing and Scheduling</h2>

        <!-- Gym Hours -->
        <div class="schedule__section">
            <h3 class="schedule__subheader">Gym Hours</h3>
            <p>Monday - Friday: 6:00 AM - 10:00 PM</p>
            <p>Saturday: 8:00 AM - 8:00 PM</p>
            <p>Sunday: 9:00 AM - 6:00 PM</p>
        </div>

        <!-- Class Schedule -->
        <div class="schedule__section">
            <h3 class="schedule__subheader">Class Schedule</h3>
            <ul class="class__list">
                <li>Yoga: Monday, Wednesday, Friday - 7:00 AM - 8:00 AM</li>
                <li>Zumba: Tuesday, Thursday - 6:30 PM - 7:30 PM</li>
                <li>Spin Class: Saturday - 9:00 AM - 10:00 AM</li>
            </ul>
        </div>

        <!-- Booking Options -->
        <div class="schedule__section">
            <h3 class="schedule__subheader">Booking Options</h3>
            <p>To book a class, please log in to your account and use our online booking system. You can also call our front desk to reserve your spot.</p>
        </div>
    </section>

    <!-- Your existing code -->

</body>
</html>