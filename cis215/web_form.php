<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Car Selection Form</title>
</head>
<body>

<main>

    <form action="confirmation.php" method="POST">

        <div class="form-section">
            <label for="email-id">Enter your email:</label>
            <input type="email" name="email-input" id="email-id" value="">
        </div>

        <fieldset class="form-section">
            <legend>What car brands do you like?</legend>

            <div class="form-group">
                <input type="checkbox" name="car-choice[]" id="lexus" value="Lexus">
                <label for="lexus">Lexus</label>
            </div>

            <div class="form-group">
                <input type="checkbox" name="car-choice[]" id="toyota" value="Toyota">
                <label for="toyota">Toyota</label>
            </div>

            <div class="form-group">
                <input type="checkbox" name="car-choice[]" id="honda" value="Honda">
                <label for="honda">Honda</label>
            </div>
        </fieldset>

        <div class="form-section">
            <label for="car-model">Select your preferred model:</label>
            <select name="car-model" id="car-model">

                <option value="">-- Choose a Model --</option>

                <optgroup label="Lexus Models">
                    <option value="IS250">Lexus IS250</option>
                    <option value="RX350">Lexus RX350</option>
                </optgroup>

                <optgroup label="Toyota Models">
                    <option value="Camry">Toyota Camry</option>
                    <option value="Corolla">Toyota Corolla</option>
                </optgroup>

                <optgroup label="Honda Models">
                    <option value="Civic">Honda Civic</option>
                    <option value="Accord">Honda Accord</option>
                </optgroup>

            </select>
        </div>

        <div class="form-section">
            <label for="comments">Additional comments:</label>
            <textarea name="comments" id="comments" rows="4" cols="40"></textarea>
        </div>
        <div>
           <fieldset>
    <legend>Select Your Favorite Square Number</legend>

<?php
for ($i = 1; $i <= 10; $i++) {

    $square = $i * $i;

    print("<div><input type='radio'
        name='square-radio-simple-loop'
        id='square-$i'
        value='$square'>
        <label for='square-$i'>$square</label></div>");
}
?>

</fieldset>


        </div>

        <div class="form-section">
            <button type="submit" name="submit-btn" id="submit-btn" value="submit">
                Submit
            </button>
        </div>

    </form>

</main>

</body>
</html>

