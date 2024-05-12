<?php
include 'includes/class-autoload.inc.php';
/* add custom css in $css */
$css = '
    #calendar{
        background-color: gray;
    }
    td{
        width: 5vw;
        height: 6vh;
        background-color: blue;
        color: white;
        padding: .1em;
        border: 5px solid black;
        border-radius: 5%;
        transition: all 200ms ease-in; 
    }
    .dayGlow:hover{
        background-color: gray ;
        height: 7vh;
        cursor: pointer;    
        scale: 1.04;
        font-size: 1em;
    }
';
echo Utils::get_header($css, true);
?>
<!-- body starts here -->

<div class="container-fluid text-bg-information text-center align-items-center">
    <div class="row">
        <div class="col-md">
            <h1>Hello world</h1>
            <p class="lead">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis eum aspernatur sapiente. Eius cupiditate
                illum sunt maxime cum? Numquam, quis minima praesentium quibusdam ut eaque necessitatibus perspiciatis,
                iste omnis, quam iusto repellendus ipsum. Ipsum pariatur tenetur fugit necessitatibus doloremque
                exercitationem est recusandae minus eveniet dignissimos. Architecto, quaerat eum dignissimos, quo fuga
                reiciendis omnis dolorum nihil exercitationem possimus quisquam nobis esse?
            </p>
        </div>
    </div>
</div>

<p>
    And so i gained the ability to plan events, become organised, make this school the greatest! Just look and see.
</p>

<div class="container">
    <h2>Event Details Form</h2>
    <form id="eventForm" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="eventName" class="form-label">Event Name</label>
            <input type="text" class="form-control" id="eventName" required>
        </div>
        <div class="mb-3">
            <label for="eventDate" class="form-label">Event Date</label>
            <input type="date" class="form-control" id="eventDate" required>
        </div>
        <div class="mb-3">
            <label for="eventTime" class="form-label">Event Time</label>
            <input type="time" class="form-control" id="eventTime" required>
        </div>
        <div class="mb-3">
            <label for="eventVenue" class="form-label">Venue</label>
            <input type="text" class="form-control" id="eventVenue" required>
        </div>
        <div class="mb-3">
            <label for="eventPricing" class="form-label">Pricing</label>
            <input type="number" class="form-control" id="eventPricing" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="consentForm" class="form-label">Consent Form (Upload)</label>
            <input type="file" class="form-control" id="consentForm" required>
        </div>
        <div class="mb-3">
            <label for="staffBriefing" class="form-label">Staff Briefing Document (Upload)</label>
            <input type="file" class="form-control" id="staffBriefing" required>
        </div>
        <div class="mb-3">
            <label for="transportation" class="form-label">Transportation Details</label>
            <input type="text" class="form-control" id="transportation">
        </div>
        <div class="mb-3">
            <label for="foodDrink" class="form-label">Food & Drink Options</label>
            <textarea class="form-control" id="foodDrink" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Event</button>
    </form>
</div>


<div class="container text-center p-5 m-2 align-items-center justify-content-center" id="calendar">
    <div class="row" id="month">
        <?php echo Utils::get_calendar("march", "2024"); ?>
    </div>
</div>

<!-- body ends here -->
<?php
/* add custom javascript/jquery in $jq */
$jq = '';
echo Utils::get_footer($jq, false);
Utils::get_message() ?>
</body>

</html>