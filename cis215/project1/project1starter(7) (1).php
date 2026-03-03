<!DOCTYPE html>
<html><head>
<title>Student Study Habits Survey</title>  <!-- TODO: Change "Survey Name" to the topic of your survey -->
</head>
<body>
<header>
        <h1>Student Study Habits Survey</h1>
    <p>Please Complete this survey about your study habits and time management</p>
</header>
<nav>
    <ul>
        <li> <a href="project1starter(7)(1).php">Survey Form</a></li>
        <li> <a href="data.php">View survey data</a></li>
    </ul>
</nav>
    

<main>
    <h2>Survey Form</h2>
<form action="process_survey.php" method="post" class="survey">

    <!-- Email -->
<div>
    <h3> Contact & Access</h3>
   <div>
    <label for="email">Enter your email:</label>
        <input type="email" name="email" id="email" required>
</div>
 <!-- Survey password (required by project spec, NOT login password) -->
<div>
        <label for="survey_password">Enter survey password:</label>
        <input type="password" name="survey_password" id="survey_password" required>
    </div>
</div>
    
<div>
    <h3>About You</h3>

            <div>Age Range</div>
            <div>
                <label><input type="radio" name="age" value="18-22" required>18-22</label><br>
                <label><input type="radio" name="age" value="23-27">23-27</label><br>
                <label><input type="radio" name="age" value="28-32">28-32</label><br>
                <label><input type="radio" name="age" value="33-37">33-37</label><br>
                <label><input type="radio" name="age" value="38-42">38-42</label><br>
                <label><input type="radio" name="age" value="43-47">43-47</label><br>
                <label><input type="radio" name="age" value="48-52">48-52</label><br>
                <label><input type="radio" name="age" value="53-57">53-57</label><br>
                <label><input type="radio" name="age" value="58-62">58-62</label><br>
                <label><input type="radio" name="age" value="63-67">63-67</label><br>
                <label><input type="radio" name="age" value="68+">68+</label>
            </div>

             <div>
                <label for="gender">Gender:</label><br>
                <select name="gender" id="gender" required>
                    <option value="">Select...</option>
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                    <option value="nb">Nonbinary</option>
                    <option value="o">Other / Prefer not to say</option>
                </select>
            </div>

</div>


<!-- TODO: Add your own survey questions -->

</form>
</main>

<!-- TODO: All the backend PHP/SQL stuff! (you may need a separate file for this!) -->

</body></html>