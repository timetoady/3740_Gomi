<?php
$title = 'Cabot Cruises: Booking A Cruise';
include '_top.php';
?>

<div class="gridContainer bookingBox">
    <form action="/">
        <h1>Booking A Cruise</h1>
        <div class="item">
            <label for="name">Full Name</label>
            <div class="name-item">
                <input type="text" name="name" placeholder="Jane Doe" required />
            </div>
        </div>
        <div class="item">
            <label for="address">Address Line</label>
            <input type="text" name="address" />
            <div class="city-item">
                <label for="city">City</label>
                <input type="text" name="city" />
                <label>State</label>
                <select>
                    <option selected value="" disabled>Please Select...</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select>
                <label>Postal/Zip Code</label>
                <input type="text" name="zip" placeholder="Postal / Zip code" />


            </div>
        </div>
        <div class="item">
            <label for="phone">Phone</label>
            <input type="text" name="phone" placeholder="### ### ####" />
        </div>
        <div class="item">
            <label for="email">Email</label>
            <input type="email" name="email" required />
        </div>
        <div class="item">
            <label>Cruise Selection</label>
            <select>
                <option selected value="" disabled>Please Select...</option>
                <option value="1">Caribbean</option>
                <option value="2">Southern California</option>
                <option value="3">Netherlands</option>
                <option value="4">Acapoco</option>
                <option value="5">Easter Island</option>
                <option value="6">Alaska</option>
                <option value="7">South America</option>
                <option value="8">Japan</option>
                <option value="9">Iceland</option>
                <option value="10">Bermuda</option>
                <option value="11">Antartica</option>
                <option value="12">Sahara</option>
                <option value="13">Russia</option>
                <option value="14">Malaysia</option>
                <option value="15">Pakistan</option>
            </select>
        </div>
        <div class="btn-block">
            <button class="bookButton" type="submit" href="/">BOOK MY CRUISE</button>
        </div>
    </form>
</div>

<?php include '_bot.php'; ?>