<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Study Habits Survey</title>
</head>
<body>

<header>
    <h1>Student Study Habits Survey</h1>
    <p>Please complete this survey about your study habits and time management.</p>
</header>
<nav>
    <ul>
        <li><a href="survey.php">Survey Form</a></li>
        <li><a href="data.php">View Survey Data</a></li>
    </ul>
</nav>
<main>
<h2>Survey Form</h2>
<form action="process_survey.php" method="post">
    <fieldset>
        <legend>Contact and Access</legend>
        <div>
            <label for="email">Enter your email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="survey_password">Enter survey password:</label>
            <input type="password" id="survey_password" name="survey_password" required>
        </div>
    </fieldset>
    <fieldset>
        <legend>About You</legend>
        <div>
            <p>Age Range</p>
             <label><input type="radio" name="age" value="18-22" required>18-22</label>
                <label><input type="radio" name="age" value="23-27">23-27</label>
                <label><input type="radio" name="age" value="28-32">28-32</label>
                <label><input type="radio" name="age" value="33-37">33-37</label>
                <label><input type="radio" name="age" value="38-42">38-42</label>
                <label><input type="radio" name="age" value="43-47">43-47</label>
                <label><input type="radio" name="age" value="48-52">48-52</label>
                <label><input type="radio" name="age" value="53-57">53-57</label>
                <label><input type="radio" name="age" value="58-62">58-62</label>
                <label><input type="radio" name="age" value="63-67">63-67</label>
                <label><input type="radio" name="age" value="68+">68+</label>
        </div>
        <div>
            <label for="gender">Gender:</label>
            <select name="gender" id="gender">
                <option value="">--Select--</option>
                <option value="m">Male</option>
                <option value="f">Female</option>
                <option value="nb">Non-Binary</option>
                <option value="o">Other</option>
            </select>
        </div>
    </fieldset>
    <fieldset>
        <legend>Study Habits</legend>
        <div>
            <label for="major">Major / Program:</label>
                <input type="text" name="major" id="major">
        </div>
        <div>
             <label for="hours_per_week">Study Hours Per Week:</label>
             <input type="number" name="hours_per_week" id="hours_per_week" min="0" max="168"> 
        </div>
        <div>
                <p>Study Methods (check any):</p>
                <label><input type="checkbox" name="study_methods[]" value="reading">Reading textbooks</label>
                <label><input type="checkbox" name="study_methods[]" value="videos">Watching videos</label>
                <label><input type="checkbox" name="study_methods[]" value="group">Group study</label>
                <label><input type="checkbox" name="study_methods[]" value="practice">Practice problems</label>
                <label><input type="checkbox" name="study_methods[]" value="tutoring">Tutoring / office hours</label>
            </div>

            <div>
                <label for="comments">Comments (Optional):</label>
                <textarea name="comments" id="comments" rows="4" cols="40"></textarea>
            </div>
        </fieldset>
        <button type="submit">Submit Survey</button>


</form>

</main>









</body>
</html>