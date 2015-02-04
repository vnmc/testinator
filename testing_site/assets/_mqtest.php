<!-- mq test -->
<br/>
<?php writeHeading(DEVICE_INFO); ?>
<br/>

<div class="row">
    <div class="col-md-12">
        <p>
            <span class="alert alert-success">User Agent:</span>&nbsp;&nbsp;&nbsp;
            <script>document.write(navigator.userAgent);</script>
        </p>

        <div id="mqTest"></div>
        <noscript>
            <div class="alert alert-info">
                <em>
                    Your javascript is turned off<br>
                    Please enable JavaScript to test the browser User Agent and media query test
                </em>
            </div>
        </noscript>
        <div id="timer"><p></p></div>
    </div>
</div>