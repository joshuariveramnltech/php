<?php
    /*
    |--------------------------------
    | Military Time Problem
    | You want to convert the time from a 12 hour clock
    | to a 24 hour clock. If you are given the time on a 12
    | hour clock, you should output the time as it would
    | appear on a 24 hour clock.
    |--------------------------------
    | Task:
    | Determine if the time you are given is AM or PM,
    | then convert that value to the way that it would
    | appear on a 24 hour clock.
    |--------------------------------
    | Input Format:
    | A string that includes the time, then a `space` and
    | the indicator for Am or PM.
    | 
    | Output Format:
    | A string that includes the time in a 24-hour format.
    | (XX:XX)
    |--------------------------------
    | Sample Input:
    |   1:15 PM
    | 
    | Sample Output:
    |   13:15
    |
    */

    // Test Input
    $inputs = array('12:15 PM', '12:12 AM', '1:15 PM');

    function convertToMilitaryFormat($time) {
        sscanf($time, "%d:%d %s", $hour, $minutes, $indicator);
        $indicator == "PM" ? ($hour < 12 ? $hour += 12 : $hour) : ($hour == 12 ? $hour = "00" : $hour);
        return strval($hour) . ':' . strval($minutes);
    }

    foreach ($inputs as $input) {
        print(convertToMilitaryFormat($input).' | ');
    }
