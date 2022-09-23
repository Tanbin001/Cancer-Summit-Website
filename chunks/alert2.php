<?php
    if($msg == 'success'){
?>
    <center>
        <div class="border px-4 py-4 w-8/12 border-green-400 bg-green-300 text-green-900">
            Your message has been sent to our Associates!
        </div>
    </center>
<?php
    }else if($msg == 'error'){
?>
    <center>
        <div class="border px-4 py-4 w-8/12 border-red-400 bg-red-300 text-red-900">
            <b>Database Error!!</b>&nbsp Please Try Again After a Few Moment!
        </div>
    </center>
<?php
    }
?>