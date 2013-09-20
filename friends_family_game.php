<html>
    <body>
        <p>
	   <?php
        /*
        FILENAME:      friends_family_game.php                         
        PROGRAMMER:    Nanette K. Hartley                              
        PURPOSE:       A PHP game to generate a randome number and then use the number to select a person from the array.
                       Returns the name of the person in the array that corresponds to that value.   */


    	// Create an array and push on the names
        // of your closest family and friends
        $fam_fri_list = array();
        array_push($fam_fri_list, "Dad");
        array_push($fam_fri_list, "Heidi");
        array_push($fam_fri_list, "Wally");
        array_push($fam_fri_list, "Mike");
        array_push($fam_fri_list, "Nic");
        array_push($fam_fri_list, "Taylor");
    	
        // Sort the list
        sort($fam_fri_list);
    	
        // Randomly select a winner!
        $count = count($fam_fri_list);
        $select = rand(0, ($count - 1));
        $selection = $fam_fri_list[$select];
    	
        // Print the winner's name in ALL CAPS
    	print strtoupper($selection);
    	?>
	</p>
</html>
