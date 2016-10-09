<?php
class view
{
    public function viewJson($arrEvents, $tableName) {        
        echo "<table border = '1'><caption>" . $tableName . "</caption>";
        echo "<tr><th>event</th><th>date</th><th>time_on</th><th>type</th><th>shuffle color</th></tr>";
        foreach ($arrEvents as $val) {
            echo "<tr><td name=". strtolower($val[event]) .">" . strtolower($val[event]) . "</td>";
            echo "<td>" . date('Y-m-d H:i:s', $val[timestamp]/1000) . "</td>";
            echo "<td class='time_on'>" . $val[time_on] . "</td>";
            echo "<td class='type'>" . $val[type] . "</td>";
            echo "<td><input type='button' value='Shuffle Color' id='buttonSC'></td></tr>";
        }
        echo "</table>";
    }
}