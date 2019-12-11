
<?php get_header(); ?>

<div id="contact">
    <h1>Contact</h1>
    <div id="form">
        <form action="" method="post" name="cu_form" id="cu_form">
            <label for="cu_name">Name: </label>
                <input type="text" name="cu_name" id="cu_name">
                <br>
            <label for="cu_email">Email: </label>
                <input type="text" name="cu_email" id="cu_email">
                <br>
            <label for="cu_phone">Phone: </label>
                <input type="text" name="cu_phone" id="cu_phone">
                <br>
            <label for="cu_comment">Comment: </label>
                <textarea name="cu_comment" id="cu_comment"></textarea>
        </form>
    </div>
    <div id="address">
        <h3>Address:</h3>
        <p>
            BestBiz Corporation
            <br>
            123, Business Street,
            <br>
            Somewhere,
            <br>
            USA
            <br><br>
            Ph: 123-456-789
            <br>
            www: <a href="http://www.bestbiz.tld">bestbiz.tld</a>
            <br><br>
            Email: <a href="mailto:info@bestbiz.tld">info@bestbiz.tld</a>
        </p>
    </div>
    <div id="map">
        <h3>Map:</h3>
    </div>
</div>


<?php get_footer(); ?>