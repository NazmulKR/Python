<!DOCTYPE html>
<html><head>
<title>Student Study Habits Survey</title>  <!-- TODO: Change "Survey Name" to the topic of your survey -->
</head>
<body>
<header>
        <h1>Student Study Habits Survey</h1>
    <p>Please Complete this survey about your study habits and time management</p>
</header>
    


<form action="process_survey.php" method="post" class="survey">

    <!-- Email -->
<div>
    <label for="email">Enter your email:</label>
        <input type="email" name="email" id="email" required>
</div>
 <!-- Survey password (required by project spec, NOT login password) -->
<div>
        <label for="survey_password">Enter survey password:</label>
        <input type="password" name="survey_password" id="survey_password" required>
    </div>

<label>What age are you? </label>
<input type="radio" name="0" id="1">
<label>0-12 </label>
<input type="radio" name="1" id="1">
<label>13-17 </label>
<input type="radio" name="2" id="1">
<label>18-22 </label>
<input type="radio" name="3" id="1">
<label>23-27 </label>
<input type="radio" name="4" id="1">
<label>28-32 </label>
<input type="radio" name="5" id="1">
<label>33-37 </label>
<input type="radio" name="6" id="1">
<label>38-42 </label>
<input type="radio" name="7" id="1">
<label>43-47 </label>
<input type="radio" name="8" id="1">
<label>48-52 </label>
<input type="radio" name="9" id="1">
<label>53-57 </label>
<input type="radio" name="10" id="1">
<label>58-62 </label>
<input type="radio" name="11" id="1">
<label>63-67 </label>
<input type="radio" name="12" id="1">
<label>68+ </label>

<select name="gender" id="gender">
    <option value="m">Male</option>
    <option value="f">Female</option>
    <option value="nb">Nonbinary</option>
    <option value="gf">Genderfluid</option>
    <option value="a">Agender</option>
    <option value="o">Choose not to say/Other</option>
</select>

<!-- TODO: Add your own survey questions -->

</form>

<!-- TODO: All the backend PHP/SQL stuff! (you may need a separate file for this!) -->

</body></html>