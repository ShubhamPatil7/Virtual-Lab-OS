<table class="responsive-table highlight centered" id="processcal">
    <thead>
        <tr>
            <th>Process</th>
            <th>Arrival Time</th>
            <th>Burst Time</th>
            <th>Turm Around Time</th>
            <th>Waiting Time</th>
        </tr>
    </thead>
<?php
        for($i=0;$i<$_GET['n'];$i++)
        {
            echo "<tbody><tr><td>Process $i</td><td id='at$i'><input type='number' min='1' max='10' id='atv$i' required/></td><td id='bt$i'><input type='number' min='1' max='10' id='btv$i' required/></td><td id='tat$i' disabled></td><td id='wt$i' disabled></td></tr></tbody>";
        }
        echo "</table>";
        echo "<center><button class='btn waves-effect waves-light' type='submit' onclick='sjf(".$_GET['n'].")'>Submit
             <i class='material-icons right'>send</i></button></center>";
?>