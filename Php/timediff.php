<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// PHP program to convert timestamp
// to time ago

function time_Ago($timestamp) {

    // Initialize current time
    $curr_time = $timestamp;

// The strtotime() function converts
// English textual date-time
// description to a UNIX timestamp.
    $time = strtotime($curr_time);

// Display the time ago
//    echo time_Ago($time_ago) . "\n";
    // Calculate difference between current
    // time and given timestamp in seconds
    $diff = time() - $time;

    // Time difference in seconds
    $sec = $diff;

    // Convert time difference in minutes
    $min = round($diff / 60);

    // Convert time difference in hours
    $hrs = round($diff / 3600);

    // Convert time difference in days
    $days = round($diff / 86400);

    // Convert time difference in weeks
    $weeks = round($diff / 604800);

    // Convert time difference in months
    $mnths = round($diff / 2600640);

    // Convert time difference in years
    $yrs = round($diff / 31207680);

    // Check for seconds
    if ($sec <= 60) {
        echo "$sec seconds ago";
    }

    // Check for minutes
    else if ($min <= 60) {
        if ($min == 1) {
            echo "one minute ago";
        } else {
            echo "$min minutes ago";
        }
    }

    // Check for hours
    else if ($hrs <= 24) {
        if ($hrs == 1) {
            echo "an hour ago";
        } else {
            echo "$hrs hours ago";
        }
    }

    // Check for days
    else if ($days <= 7) {
        if ($days == 1) {
            echo "Yesterday";
        } else {
            echo "$days days ago";
        }
    } else {
        $ts = date("m/d/Y", strtotime($timestamp));

        $dateObj = DateTime::createFromFormat('!m', date('m', strtotime($ts)));
        
        $monthName = $dateObj->format('F');
        $day = date('d', strtotime($ts));
        $year = date('y', strtotime($ts));
        
       echo "$monthName $day , $year";
        
    }

    // Check for weeks
//	else if($weeks <= 4.3) {
//		if($weeks == 1) {
//			echo "a week ago";
//		}
//		else {
//			echo "$weeks weeks ago";
//		}
//	}
//	
//	// Check for months
//	else if($mnths <= 12) {
//		if($mnths == 1) {
//			echo "a month ago";
//		}
//		else {
//			echo "$mnths months ago";
//		}
//	}
//	
//	// Check for years
//	else {
//		if($yrs == 1) {
//			echo "one year ago";
//		}
//		else {
//			echo "$yrs years ago";
//		}
//	}
}

// Initialize current time
//$curr_time = "2019-01-05 09:09:09";
//
//// The strtotime() function converts
//// English textual date-time
//// description to a UNIX timestamp.
//$time_ago = strtotime($curr_time);
//
//// Display the time ago
//echo time_Ago($time_ago);
