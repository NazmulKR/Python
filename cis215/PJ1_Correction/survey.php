<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Survey: Student Study Habits</title>
</head>
<body>

<header>
    <h1>Student Study Habits Survey</h1>
</header>

<nav>
        <ul>
            <li><a href="survey.php">Survey Form</a></li>
            <li><a href="data.php">View Survey Data</a></li>
        </ul>
    </nav>


<main>
    <form action="process_survey.php" method="post">
        
        <fieldset>
            <legend>Account Access</legend>
            <label for="email-id">Enter your email: </label>
            <input type="email" name="email-name" id="email-id" required>

            <label for="pw-id">Enter survey password: </label>
            <input type="password" name="pw-name" id="pw-id" required>
        </fieldset>

        <fieldset>
            <legend>What age are you?</legend>
            <input type="radio" name="age" id="age1" value="0-12" required><label for="age1">0-12</label>
            <input type="radio" name="age" id="age2" value="13-17"><label for="age2">13-17</label>
            <input type="radio" name="age" id="age3" value="18-22"><label for="age3">18-22</label>
            <input type="radio" name="age" id="age4" value="23-27"><label for="age4">23-27</label>
            <input type="radio" name="age" id="age5" value="28-32"><label for="age5">28-32</label>
            <input type="radio" name="age" id="age6" value="33-37"><label for="age6">33-37</label>
            <input type="radio" name="age" id="age7" value="38-42"><label for="age7">38-42</label>
            <input type="radio" name="age" id="age8" value="43-47"><label for="age8">43-47</label>
            <input type="radio" name="age" id="age9" value="48-52"><label for="age9">48-52</label>
            <input type="radio" name="age" id="age10" value="53-57"><label for="age10">53-57</label>
            <input type="radio" name="age" id="age11" value="58-62"><label for="age11">58-62</label>
            <input type="radio" name="age" id="age12" value="63-67"><label for="age12">63-67</label>
            <input type="radio" name="age" id="age13" value="68+"><label for="age13">68+</label>
        </fieldset>

        <fieldset>
            <legend>Details</legend>
            <label for="gender">Gender:</label>
            <select name="gender" id="gender">
                <option value="">--Select--</option>
                <option value="m">Male</option>
                <option value="f">Female</option>
                <option value="nb">Nonbinary</option>
                <option value="o">Other</option>
            </select>

            <label for="major">Major / Program:</label>
            <input type="text" name="major" id="major" required>

            <label for="hours">Study Hours Per Week:</label>
            <input type="number" name="hours_per_week" id="hours" min="0" max="168" required>

            <label for="comments">Comments:</label>
            <textarea name="comments" id="comments" rows="4" cols="40"></textarea>
        </fieldset>

        <button type="submit">Submit Survey</button>
    </form>
</main>
</body>
</html>