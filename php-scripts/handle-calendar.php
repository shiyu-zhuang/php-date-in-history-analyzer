<?php
// Connect to mysql here
include "db-connect.php";

function printCalendar() {
    
    // Drop-downs are not selected by default
    $success = false;
    
    // If all 3 drop-downs are selected turn $success to true.
    if ((isset($_GET["months"]) && $_GET["months"] !== "default") &&
        (isset($_GET["days"]) && $_GET["days"] !== "default") &&
        (isset($_GET["years"]) && $_GET["years"] !== "default") ) {
        
        $success = true;     
    }
    
    $months = [
		"January",
		"February",
		"March",
		"April",
		"May",
		"June",
		"July",
		"August",
		"September",
		"October",
		"November",
		"December"
	];
    
    
    // Print months:
    echo "<div class=\"form-box\">";
    echo "<select name=\"months\">";
    echo "<option value=\"default\">Select Month</option>";
    for ($i = 0; $i < sizeof($months); $i += 1) {
        echo "<option " . ($_GET["months"] == $months[$i] && !$success ? 'selected="true"' : "") . ">" . $months[$i] . "</option>";
    }
    echo "</select>";
    echo "</div>";
    
    
    // Print days:
    echo "<div class=\"form-box\">";
    echo "<select name=\"days\">";
    echo "<option value=\"default\">Select Day</option>";
    for ($i = 1; $i <= 31; $i += 1) {
        echo "<option " . ($_GET["days"] == $i && !$success ? 'selected="true"' : "") . ">" . $i . "</option>";
    }
    echo "</select>";
    echo "</div>";
    
    
    // Print years:
    echo "<div class=\"form-box\">";
    echo "<select name=\"years\">";
    echo "<option value=\"default\">Select Year</option>";
    for ($i = date("Y"); $i >= 1900; $i -= 1) {
        echo "<option " . ($_GET["years"] == $i && !$success ? 'selected="true"' : "") . ">" . $i . "</option>";
    }
    echo "</select>";
    echo "</div>";     
}



function evaluate() {
    
    $err = "";
    
    // Evaluation will happen when the button submit is clicked.
    if (isset($_GET["send"])) {
        
        // Evaluate months:
        if (trim($_GET["months"]) && $_GET["months"] != "default") {
            
            // Clean your $_GET array element from HTML tags.
            $_GET["months"] = trim(strip_tags($_GET["months"]));
            
            // Pass the value to short written variable.
            $m = $_GET["months"];
            
        } else {
            
            // otherwise create error message.
            $err = "<p>Please select a month.</p><br>";
        }


        // Evaluate days:
        if (trim($_GET["days"]) && $_GET["days"] != "default") {
            $_GET["days"] = trim(strip_tags($_GET["days"]));
            $d = $_GET["days"];
        } else {
            $err .= "<p>Please select a day.</p><br>";
        }



        // Evaluate years:
        if (trim($_GET["years"]) && $_GET["years"] != "default") {
            $_GET["years"] = trim(strip_tags($_GET["years"]));
            $y = $_GET["years"];
        } else {
            $err .= "<p>Please select a year.</p><br>";
        }



        // Create feedback:
        if (!empty($m) && !empty($d) && !empty($y)) {
			
            $feed = "<br><p class=\"selected\">You selected: $m $d, $y.</p><br>";
			
			
            
			// YOUR CODE STARTS HERE (DATE IS SELECTED):
			//include "db-connect.php";
			// PART 1:
			// if the year is between 1900 and 1925 
			
				// create query that will select the data based on the time-span
			 if ($y <= 1925) {
                 
                 //create query
                $query = "SELECT * 
                          FROM disney_history
                          WHERE disney_history_date BETWEEN '1900-01-01' AND '1925-12-31'
                          ORDER BY disney_history_date DESC";
  
                }
           
			// or if the year is between 1926 and 1950 
			
				// create query that will select the data based on the time-span
            else if ($y >= 1925 and $y <= 1950) {
                 
                 //create query
                $query = "SELECT * 
                          FROM disney_history
                          WHERE disney_history_date BETWEEN '1925-01-01' AND '1950-12-31'
                          ORDER BY disney_history_date DESC";
            }
			// or if the year is between 1951 and 1975 
			
				// create query that will select the data based on the time-span
            else if ($y > 1950 and $y <= 1975) {
                 
                 //create query
                $query = "SELECT * 
                          FROM disney_history
                          WHERE disney_history_date BETWEEN '1950-01-01' AND '1975-12-31'
                          ORDER BY disney_history_date DESC";
             }
			
			// if the year is between 1976 and 2017
			
				// create query that will select the data based on the time-span
            else if ($y > 1975 and $y <= 2017) {
                 
                 //create query
                $query = "SELECT * 
                          FROM disney_history
                          WHERE disney_history_date BETWEEN '1975-01-01' AND '2017-12-31'
                          ORDER BY disney_history_date DESC";
             }
			
			// close the set of your conditionals here

			
			// PART 2:
			// At this point you have your query created!
			
			// Use mysqli_query to perform the query
            
			//$data = [];
            $record_sets = mysqli_query($GLOBALS['conn'], $query);
			// Start collecting your HTML into a variable	
            $collect_html = "";
			// Use while-loop to convert your record-sets to the collection of associative arrays
			     while ($row = mysqli_fetch_assoc($record_sets)) {
                    $collect_html .= "<div class=\"wrap clearfix\">";
				// Use foreach-loop to loop through each assoc array parsing the array elements to 
				// desired HTML tags and finally append the gotten expression to the variable created
				// for collecting HTML.
			             foreach ($row as $k => $v) {
                            if ($k === "disney_history_image") {
                            $collect_html .= "<img src=\"$v\" alt=\"$v\">";
                            } else if ($k === "disney_history_content") {
                            $collect_html .= "<p class=\"content\">$v</p>";
                            } else  if ($k === "disney_history_id"){
                                $collect_html .= "<p class=\"invisible\">$v</p>";
                            }
                             else {
                                $collect_html .= "<p class=\"date\">$v</p>";
                            }
                         }/*foreach*/
                     $collect_html .= "</div>";
                }/*while*/
        }/*not empty*/
    }/*isset SEND*/
      
    if(isset($collect_html)) {
                        echo $collect_html;}
    // Print feedback/error(s)
    if (isset($feed)) {
        echo $feed;
    }
    
    if (isset($err)) {
        echo $err;
    
    }
	
	// Print the dynamic content here (variable that contains your HTML from PART 2):
	// ...
}

?>