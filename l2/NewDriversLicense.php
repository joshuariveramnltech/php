<?php
/*
|--------------------------------
| You have to get a new driver's license and you
| show up at the office at the same time as 4 other
| people. The office says that they will see everyone
| in alphabetical order and it takes 20 minutes for
| them to process each new license. All of the agents
| are available now, and they can each see one
| customer at a time. How long will it take for you to
| walk out of the office with your new license?
|--------------------------------
| Task:
|  Given Everyone's name that showed up at the
|  same time, determine how long will it take to get
|  your license.
|
| Input Format:
|  Your Input will be a string of your name, then an
|  integer of the number of available agents, and lastly
|  a string of the other four names separated by
|  spaces.
|
| Output Format:
|  You will output an integer of the number of minutes
|  that it will take to get your license.
|
| Sample Input:
|  'Eric'
|  2
|  'Adam Caroline Rebecca Frank'
|
| Sample Output:
|  40
*/

// Initialize Input as Variables
$name = 'Zed';
$available_agents = 6;
$other_applicants = 'Adam Caroline Eric Rebecca Frank';

function determineTimeToApplication($applicants, $available_agents, $name) {
    // Convert String input to a sortable list using ' ' character
    // as separator.
    $applicants_list = explode(" ", $applicants);
    sort($applicants_list);

    // Get the name's queue position.
    $position =  array_search($name, $applicants_list, true);

    // Calculate Overhead.
    $overhead = ($position + 1) / $available_agents;

    // Calculate the time.
    $time = $overhead <= 1 ? 20 : ($overhead < 1.99 ? 40: (floor($overhead) * 20));

    // Return the calculated time.
    return (string) $time;

}

$applicants = $name . " " . $other_applicants;

echo determineTimeToApplication($applicants, $available_agents, $name);
