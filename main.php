<!-- the program is included three files: 
main: main.php
css: styles.css
data: Code_Test_Dec_2020.php

default link in local server: http://localhost/php1/main.php
-->

<html>
<head>
    <!-- the header with basic setting including charset, title and css link  -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>PHP1 | Code Test Dec 2020</title>    
    <link rel="stylesheet" media="screen" href="styles.css">
</head>
<body>


<!-- body with heading info, candidate info and program version  -->
<h1>PHP1 | Code Test Dec 2020</h1>
<p>Version: 1.0</p>

<!-- original php source data file -->
<?php include("Code_Test_Dec_2020.php");

//-- a small function for array sorting
uasort($people, function($a, $b){
    return strcmp($a['name'], $b['name']);
});

//-- for loop to read $people arrary; apply array_slice to pick up the values from $people array
foreach($people as $personArray=>$person_info){
    $id = current(array_slice($person_info, 0, 1));
    $person_name = current(array_slice($person_info, 1, 1));
    $person_age = current(array_slice($person_info, 2, 1));
    $person_gender = current(array_slice($person_info, 3, 1));
    $person_shoe_size = current(array_slice($person_info, 4, 1));
    ?>
    <!-- setup css table to display $people array result; check if the array has value using empty function; 
    capitalize first character of string values using ucfirst function-->
    <table class="table">
        <?php if (!empty($person_name)) {?><tr><td><?php echo "Name: "?></td><td><?php echo ucfirst($person_name);}?></td></tr>
        <?php if (!empty($person_age)) {?><tr><td><?php echo "Age: " ?></td><td><?php echo $person_age;}?></td></tr>
        <?php if (!empty($person_gender)) {?><tr><td><?php echo "Gender: "?></td><td><?php echo ucfirst($person_gender); }?></td></tr>
        <?php if (!empty($person_shoe_size)) {?><tr><td><?php echo "Shoe Size: "?></td><td><?php echo $person_shoe_size;}?></td></tr>
    </table>
    <?php
    //-- check the number of pets for individual person
    $pet_index = 0;       
    foreach($pets as $petArray=>$pet_info){
        $person_id = current(array_slice($pet_info, 1, 1));
        if ($person_id==$id){
            $pet_index++;
        }
    }
    //-- for loop to read $pet arrary; apply array_slice to pick up the values from $pet array
    foreach($pets as $petArray=>$pet_info){
        $pet_id = current(array_slice($pet_info, 0, 1));
        $person_id = current(array_slice($pet_info, 1, 1));
        $pet_name = current(array_slice($pet_info, 2, 1));
        $pet_age = current(array_slice($pet_info, 3, 1));
        $pet_type = current(array_slice($pet_info, 4, 1));
        //-- merge $people array with $pet array ($pet.person_id = $people.id)  
        if ($person_id==$id){
            if($pet_index == 1){
                ?><!-- display "PET" wording if only one pet -->
                <table class="table"><tr><td>
                <?php
                echo "PET";
                echo "<br>";
                ?></td></tr><?php
            }
            if($pet_index > 1){
                ?><!-- display wording "PETS" if more than one pet -->
                <table class="table"><tr><td>
                <?php
                echo "PETS";
                echo "<br>";
                $pet_index = 0;     
                ?></td></tr><?php
            }
            ?><!-- display $pet info result in css table; capitalize first character of string values using ucfirst function -->
            <table class="table"><tr><td>
            <?php
            echo "A " . ucfirst($pet_type) . " called " .ucfirst($pet_name) . " who is " .$pet_age. " years old";
        }?></td></tr></table><?php
    }
    
}
?>
                   
</body>
</html>