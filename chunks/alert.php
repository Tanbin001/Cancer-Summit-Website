<?php
    if($msg == 'success'){
?>
    <center>
        <div class="border px-4 py-4 w-8/12 border-green-400 bg-green-300 text-green-900">
            <b>Success!!</b>&nbsp You have Successfully Registered! We Will Contact you soon!
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
    }else if($msg == 'alert'){
?>
    <center>
        <div class="border px-4 py-4 w-8/12 border-yellow-400 bg-yellow-300 text-yellow-900">
            <b>Re-entry!!</b>&nbsp You have already Registered with this Email!
        </div>
    </center>
<?php
    }
?>