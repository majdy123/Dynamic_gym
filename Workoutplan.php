<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Workout plan</title>
<link rel="stylesheet" href="MyCss/workoutplan.css">
<link href="fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
<link href="css/bootstrap-grid.min.css" rel="stylesheet">
<script src="javascript/workoutplan-script.js"></script>
<script defer src="..fontawesome-free-5.15.4-web/js/brands.js"></script>
<script defer src="..fontawesome-free-5.15.4-web/js/solid.js"></script>
<script defer src="..fontawesome-free-5.15.4-web/js/fontawesome.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<script src="js/bootstrap.bundle.min.js"></script>
<body>

<?php
if (isset($_POST['sendplantouser'])){
    error_reporting(0);
    $sunday_Arm_Ex1_name = $_POST['Exercise1name-arm'];
    $sunday_Arm_Ex1_round = $_POST['Rounds-arm-Ex1'];
    $sunday_Arm_Ex1_rep = $_POST['reps_arm_Ex1'];
    $sunday_Arm_Ex1_photo = $_POST['Exercise1photo-arm'];


    $sunday_Arm_Ex2_name = $_POST['Exercise2name-arm'];
    $sunday_Arm_Ex2_round = $_POST['Rounds-arm-Ex2'];
    $sunday_Arm_Ex2_rep = $_POST['reps-arm-Ex2'];
    $sunday_Arm_Ex2_photo = $_POST['Exercise2photo-arm'];

    $sunday_Arm_Ex3_name = $_POST['Exercise3name-arm'];
    $sunday_Arm_Ex3_round = $_POST['Rounds-arm-Ex3'];
    $sunday_Arm_Ex3_rep = $_POST['reps-arm-Ex3'];
    $sunday_Arm_Ex3_photo = $_POST['Exercise3photo-arm'];

    $sunday_Arm_Ex4_name = $_POST['Exercise4name-arm'];
    $sunday_Arm_Ex4_round = $_POST['Rounds-arm-Ex4'];
    $sunday_Arm_Ex4_rep = $_POST['reps-arm-Ex4'];
    $sunday_Arm_Ex4_photo = $_POST['Exercise4photo-arm'];

    $sunday_Arm_Ex5_name = $_POST['Exercise5name-arm'];
    $sunday_Arm_Ex5_round = $_POST['Rounds-arm-Ex5'];
    $sunday_Arm_Ex5_rep = $_POST['reps-arm-Ex5'];
    $sunday_Arm_Ex5_photo = $_POST['Exercise5photo-arm'];

    /* Done From first Row*/
    $monday_chest_Ex1_name = $_POST['Exercise1name-chest'];
    $monday_chest_Ex1_round = $_POST['Rounds-chest-Ex1'];
    $monday_chest_Ex1_rep = $_POST['reps-chest-Ex1'];
    $monday_chest_Ex1_photo = $_POST['Exercise1photo-chest'];

    $monday_chest_Ex2_name = $_POST['Exercise2name-chest'];
    $monday_chest_Ex2_round = $_POST['Rounds-chest-Ex2'];
    $monday_chest_Ex2_rep = $_POST['reps-chest-Ex2'];
    $monday_chest_Ex2_photo = $_POST['Exercise2photo-chest'];

    $monday_chest_Ex3_name = $_POST['Exercise3name-chest'];
    $monday_chest_Ex3_round = $_POST['Rounds-chest-Ex3'];
    $monday_chest_Ex3_rep = $_POST['reps-chest-Ex3'];
    $monday_chest_Ex3_photo = $_POST['Exercise3photo-chest'];

    $monday_chest_Ex4_name = $_POST['Exercise4name-chest'];
    $monday_chest_Ex4_round = $_POST['Rounds-chest-Ex4'];
    $monday_chest_Ex4_rep = $_POST['reps-chest-Ex4'];
    $monday_chest_Ex4_photo = $_POST['Exercise4photo-chest'];

    $monday_chest_Ex5_name = $_POST['Exercise5name-chest'];
    $monday_chest_Ex5_round = $_POST['Rounds-chest-Ex5'];
    $monday_chest_Ex5_rep = $_POST['reps-chest-Ex5'];
    $monday_chest_Ex5_photo = $_POST['Exercise5photo-chest'];

    /* Done from second row*/

    $tuesday_sholder_Ex1_name = $_POST['Exercise1name-sholder'];
    $tuesday_sholder_Ex1_round = $_POST['Rounds-sholder-Ex1'];
    $tuesday_sholder_Ex1_rep = $_POST['reps-sholder-Ex1'];
    $tuesday_sholder_Ex1_photo = $_POST['Exercise1photo-sholder'];

    $tuesday_sholder_Ex2_name = $_POST['Exercise2name-sholder'];
    $tuesday_sholder_Ex2_round = $_POST['Rounds-sholder-Ex2'];
    $tuesday_sholder_Ex2_rep = $_POST['reps-sholder-Ex2'];
    $tuesday_sholder_Ex2_photo = $_POST['Exercise2photo-sholder'];

    $tuesday_sholder_Ex3_name = $_POST['Exercise3name-sholder'];
    $tuesday_sholder_Ex3_round = $_POST['Rounds-sholder-Ex3'];
    $tuesday_sholder_Ex3_rep = $_POST['reps-sholder-Ex3'];
    $tuesday_sholder_Ex3_photo = $_POST['Exercise3photo-sholder'];

    $tuesday_sholder_Ex4_name = $_POST['Exercise4name-sholder'];
    $tuesday_sholder_Ex4_round = $_POST['Rounds-sholder-Ex4'];
    $tuesday_sholder_Ex4_rep = $_POST['reps-sholder-Ex4'];
    $tuesday_sholder_Ex4_photo = $_POST['Exercise4photo-sholder'];

    $tuesday_sholder_Ex5_name = $_POST['Exercise5name-sholder'];
    $tuesday_sholder_Ex5_round = $_POST['Rounds-sholder-Ex5'];
    $tuesday_sholder_Ex5_rep = $_POST['reps-sholder-Ex5'];
    $tuesday_sholder_Ex5_photo = $_POST['Exercise5photo-sholder'];

    /* Done from 3rd row*/

    $wednesday_legday_Ex1_name = $_POST['Exercise1name-leg'];
    $wednesday_legday_Ex1_round = $_POST['Rounds-leg-Ex1'];
    $wednesday_legday_Ex1_rep = $_POST['reps-leg-Ex1'];
    $wednesday_legday_Ex1_photo = $_POST['Exercise1photo-leg'];

    $wednesday_legday_Ex2_name = $_POST['Exercise2name-leg'];
    $wednesday_legday_Ex2_round = $_POST['Rounds-leg-Ex2'];
    $wednesday_legday_Ex2_rep = $_POST['reps-leg-Ex2'];
    $wednesday_legday_Ex2_photo = $_POST['Exercise2photo-leg'];

    $wednesday_legday_Ex3_name = $_POST['Exercise3name-leg'];
    $wednesday_legday_Ex3_round = $_POST['Rounds-leg-Ex3'];
    $wednesday_legday_Ex3_rep = $_POST['reps-leg-Ex3'];
    $wednesday_legday_Ex3_photo = $_POST['Exercise3photo-leg'];

    $wednesday_legday_Ex4_name = $_POST['Exercise4name-leg'];
    $wednesday_legday_Ex4_round = $_POST['Rounds-leg-Ex4'];
    $wednesday_legday_Ex4_rep = $_POST['reps-leg-Ex4'];
    $wednesday_legday_Ex4_photo = $_POST['Exercise4photo-leg'];

    $wednesday_legday_Ex5_name = $_POST['Exercise5name-leg'];
    $wednesday_legday_Ex5_round = $_POST['Rounds-leg-Ex5'];
    $wednesday_legday_Ex5_rep = $_POST['reps-leg-Ex5'];
    $wednesday_legday_Ex5_photo = $_POST['Exercise5photo-leg'];

    /* Done from 4th row*/

    $thrsday_backday_Ex1_name = $_POST['Exercise1name-back'];
    $thrsday_backday_Ex1_round = $_POST['Rounds-back-Ex1'];
    $thrsday_backday_Ex1_rep = $_POST['reps-back-Ex1'];
    $thrsday_backday_Ex1_photo = $_POST['Exercise1photo-back'];

    $thrsday_backday_Ex2_name = $_POST['Exercise2name-back'];
    $thrsday_backday_Ex2_round = $_POST['Rounds-back-Ex2'];
    $thrsday_backday_Ex2_rep = $_POST['reps-back-Ex2'];
    $thrsday_backday_Ex2_photo = $_POST['Exercise2photo-back'];

    $thrsday_backday_Ex3_name = $_POST['Exercise3name-back'];
    $thrsday_backday_Ex3_round = $_POST['Rounds-back-Ex3'];
    $thrsday_backday_Ex3_rep = $_POST['reps-back-Ex3'];
    $thrsday_backday_Ex3_photo = $_POST['Exercise3photo-back'];

    $thrsday_backday_Ex4_name = $_POST['Exercise4name-back'];
    $thrsday_backday_Ex4_round = $_POST['Rounds-back-Ex4'];
    $thrsday_backday_Ex4_rep = $_POST['reps-back-Ex4'];
    $thrsday_backday_Ex4_photo = $_POST['Exercise4photo-back'];

    $thrsday_backday_Ex5_name = $_POST['Exercise5name-back'];
    $thrsday_backday_Ex5_round = $_POST['Rounds-back-Ex5'];
    $thrsday_backday_Ex5_rep = $_POST['reps-back-Ex5'];
    $thrsday_backday_Ex5_photo = $_POST['Exercise5photo-back'];

    /*Done From 5th row*/

    $saturday_tummy_Ex1_name = $_POST['Exercise1name-tummy'];
    $saturday_tummy_Ex1_round = $_POST['Rounds-tummy-Ex1'];
    $saturday_tummy_Ex1_rep = $_POST['reps-tummy-Ex1'];
    $saturday_tummy_Ex1_photo = $_POST['Exercise1photo-tummy'];

    $saturday_tummy_Ex2_name = $_POST['Exercise2name-tummy'];
    $saturday_tummy_Ex2_round = $_POST['Rounds-tummy-Ex2'];
    $saturday_tummy_Ex2_rep = $_POST['reps-tummy-Ex2'];
    $saturday_tummy_Ex2_photo = $_POST['Exercise2photo-tummy'];

    $saturday_tummy_Ex3_name = $_POST['Exercise3name-tummy'];
    $saturday_tummy_Ex3_round = $_POST['Rounds-tummy-Ex3'];
    $saturday_tummy_Ex3_rep = $_POST['reps-tummy-Ex3'];
    $saturday_tummy_Ex3_photo = $_POST['Exercise3photo-tummy'];

    $saturday_tummy_Ex4_name = $_POST['Exercise4name-tummy'];
    $saturday_tummy_Ex4_round = $_POST['Rounds-tummy-Ex4'];
    $saturday_tummy_Ex4_rep = $_POST['reps-tummy-Ex4'];
    $saturday_tummy_Ex4_photo = $_POST['Exercise4photo-tummy'];

    $saturday_tummy_Ex5_name = $_POST['Exercise5name-tummy'];
    $saturday_tummy_Ex5_round = $_POST['Rounds-tummy-Ex5'];
    $saturday_tummy_Ex5_rep = $_POST['reps-tummy-Ex5'];
    $saturday_tummy_Ex5_photo = $_POST['Exercise5photo-tummy'];
    /*if user click this button this mean send current plan to the user*/
    error_reporting(0);
    $database = new mysqli('localhost', 'root', '', 'gymedge');
    $queryStr = "Select * from member";
    $result = $database->query($queryStr);
    foreach ($result as $row) {
        if ($row['username'] == $_POST['sendplantouser']) {
            $workout_id = $row['plan_id'];
        }
    }

        /*Done from Searching*/
    if($sunday_Arm_Ex1_name !='' && $sunday_Arm_Ex1_rep !=0 && $sunday_Arm_Ex1_round !=0){
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $sunday_Arm_Ex1_name . "','" . $sunday_Arm_Ex1_rep . "','" . $sunday_Arm_Ex1_round . "',
                '" . $sunday_Arm_Ex1_photo . "','" . $_POST['sendplantouser'] . "','" ."Sunday_Arm". "')";
        $result = $database->query($queryStr);}

    if($sunday_Arm_Ex2_name !='' && $sunday_Arm_Ex2_rep !=0 && $sunday_Arm_Ex2_round !=0){
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $sunday_Arm_Ex2_name . "','" . $sunday_Arm_Ex2_rep . "','" . $sunday_Arm_Ex2_round . "',
                '" . $sunday_Arm_Ex2_photo . "','" . $_POST['sendplantouser'] . "','" ."Sunday_Arm". "')";
        $result = $database->query($queryStr);}

    if($sunday_Arm_Ex3_name !='' && $sunday_Arm_Ex3_rep !=0 && $sunday_Arm_Ex3_round !=0){
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $sunday_Arm_Ex3_name . "','" . $sunday_Arm_Ex3_rep . "','" . $sunday_Arm_Ex3_round . "',
                '" . $sunday_Arm_Ex3_photo . "','" . $_POST['sendplantouser'] . "','" ."Sunday_Arm". "')";
        $result = $database->query($queryStr);}

    if($sunday_Arm_Ex4_name !='' && $sunday_Arm_Ex4_rep !=0 && $sunday_Arm_Ex4_round !=0){
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $sunday_Arm_Ex4_name . "','" . $sunday_Arm_Ex4_rep . "','" . $sunday_Arm_Ex4_round . "',
                '" . $sunday_Arm_Ex4_photo . "','" . $_POST['sendplantouser'] . "','" ."Sunday_Arm". "')";
        $result = $database->query($queryStr);}

    if($sunday_Arm_Ex5_name !='' && $sunday_Arm_Ex5_rep !=0 && $sunday_Arm_Ex5_round !=0){
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $sunday_Arm_Ex5_name . "','" . $sunday_Arm_Ex5_rep . "','" . $sunday_Arm_Ex5_round . "',
                '" . $sunday_Arm_Ex5_photo . "','" . $_POST['sendplantouser'] . "','" ."Sunday_Arm". "')";
        $result = $database->query($queryStr);}

    /*Done from Searching row 2*/
    if($monday_chest_Ex1_name != '' && $monday_chest_Ex1_rep !=0 && $monday_chest_Ex1_round !=0){
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $monday_chest_Ex1_name . "','" . $monday_chest_Ex1_rep . "','" . $monday_chest_Ex1_round . "',
                '" . $monday_chest_Ex1_photo . "','" . $_POST['sendplantouser'] . "','" ."Sunday_Arm". "')";
        $result = $database->query($queryStr);}

    if($monday_chest_Ex2_name != '' && $monday_chest_Ex2_rep !=0 && $monday_chest_Ex2_round !=0){
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $monday_chest_Ex2_name . "','" . $monday_chest_Ex2_rep . "','" . $monday_chest_Ex2_round . "',
                '" . $monday_chest_Ex2_photo . "','" . $_POST['sendplantouser'] . "','" ."Monday_Chest". "')";
        $result = $database->query($queryStr);}

    if($monday_chest_Ex3_name != '' && $monday_chest_Ex3_rep !=0 && $monday_chest_Ex3_round !=0){
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $monday_chest_Ex3_name . "','" . $monday_chest_Ex3_rep . "','" . $monday_chest_Ex3_round . "',
                '" . $monday_chest_Ex3_photo . "','" . $_POST['sendplantouser'] . "','" ."Monday_Chest". "')";
        $result = $database->query($queryStr);}

    if($monday_chest_Ex4_name != '' && $monday_chest_Ex4_rep !=0 && $monday_chest_Ex4_round !=0){
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $monday_chest_Ex4_name . "','" . $monday_chest_Ex4_rep . "','" . $monday_chest_Ex4_round . "',
                '" . $monday_chest_Ex4_photo . "','" . $_POST['sendplantouser'] . "','" ."Monday_Chest". "')";
        $result = $database->query($queryStr);}

    if($monday_chest_Ex5_name != '' && $monday_chest_Ex5_rep !=0 && $monday_chest_Ex5_round !=0){
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $monday_chest_Ex5_name . "','" . $monday_chest_Ex5_rep . "','" . $monday_chest_Ex5_round . "',
                '" . $monday_chest_Ex5_photo . "','" . $_POST['sendplantouser'] . "','" ."Monday_Chest". "')";
        $result = $database->query($queryStr);}

    /*Starting for the 3rd line*/
    if($tuesday_sholder_Ex1_name != '' && $tuesday_sholder_Ex1_rep !=0 && $tuesday_sholder_Ex1_round !=0){
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $tuesday_sholder_Ex1_name . "','" . $tuesday_sholder_Ex1_rep . "','" . $tuesday_sholder_Ex1_round . "',
                '" . $tuesday_sholder_Ex1_photo . "','" . $_POST['sendplantouser'] . "','" ."Tuesday_Shoulder". "')";
        $result = $database->query($queryStr);}

    if($tuesday_sholder_Ex2_name != '' && $tuesday_sholder_Ex2_rep !=0 && $tuesday_sholder_Ex2_round !=0){
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $tuesday_sholder_Ex2_name . "','" . $tuesday_sholder_Ex2_rep . "','" . $tuesday_sholder_Ex2_round . "',
                '" . $tuesday_sholder_Ex2_photo . "','" . $_POST['sendplantouser'] . "','" ."Tuesday_Shoulder". "')";
        $result = $database->query($queryStr);}

    if($tuesday_sholder_Ex3_name != '' && $tuesday_sholder_Ex3_rep !=0 && $tuesday_sholder_Ex3_round !=0){
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $tuesday_sholder_Ex3_name . "','" . $tuesday_sholder_Ex3_rep . "','" . $tuesday_sholder_Ex3_round . "',
                '" . $tuesday_sholder_Ex3_photo . "','" . $_POST['sendplantouser'] . "','" ."Tuesday_Shoulder". "')";
        $result = $database->query($queryStr);}

    if($tuesday_sholder_Ex1_name != '' && $tuesday_sholder_Ex1_rep !=0 && $tuesday_sholder_Ex4_round !=0){
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $tuesday_sholder_Ex4_name . "','" . $tuesday_sholder_Ex4_rep . "','" . $tuesday_sholder_Ex4_round . "',
                '" . $tuesday_sholder_Ex4_photo . "','" . $_POST['sendplantouser'] . "','" ."Tuesday_Shoulder". "')";
        $result = $database->query($queryStr);}

    if($tuesday_sholder_Ex5_name != '' && $tuesday_sholder_Ex5_rep !=0 && $tuesday_sholder_Ex5_round !=0){
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $tuesday_sholder_Ex5_name . "','" . $tuesday_sholder_Ex5_rep . "','" . $tuesday_sholder_Ex5_round . "',
                '" . $tuesday_sholder_Ex5_photo . "','" . $_POST['sendplantouser'] . "','" ."Tuesday_Shoulder". "')";
        $result = $database->query($queryStr);}

    /*4th*/

    if($wednesday_legday_Ex1_name != '' &&$wednesday_legday_Ex1_rep !=0 && $wednesday_legday_Ex1_round !=0){
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $wednesday_legday_Ex1_name . "','" . $wednesday_legday_Ex1_rep . "','" . $wednesday_legday_Ex1_round . "',
                '" . $wednesday_legday_Ex1_photo . "','" . $_POST['sendplantouser'] . "','" ."Wednesday_Leg". "')";
        $result = $database->query($queryStr);}

    if($wednesday_legday_Ex2_name != '' &&$wednesday_legday_Ex2_rep !=0 && $wednesday_legday_Ex2_round !=0){
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $wednesday_legday_Ex2_name . "','" . $wednesday_legday_Ex2_rep . "','" . $wednesday_legday_Ex2_round . "',
                '" . $wednesday_legday_Ex2_photo . "','" . $_POST['sendplantouser'] . "','" ."Wednesday_Leg". "')";
        $result = $database->query($queryStr);}

    if($wednesday_legday_Ex3_name != '' &&$wednesday_legday_Ex3_rep !=0 && $wednesday_legday_Ex3_round !=0){
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $wednesday_legday_Ex3_name . "','" . $wednesday_legday_Ex3_rep . "','" . $wednesday_legday_Ex3_round . "',
                '" . $wednesday_legday_Ex3_photo . "','" . $_POST['sendplantouser'] . "','" ."Wednesday_Leg". "')";
        $result = $database->query($queryStr);}

    if($wednesday_legday_Ex4_name != '' &&$wednesday_legday_Ex4_rep !=0 && $wednesday_legday_Ex4_round !=0){
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $wednesday_legday_Ex4_name . "','" . $wednesday_legday_Ex4_rep . "','" . $wednesday_legday_Ex4_round . "',
                '" . $wednesday_legday_Ex4_photo . "','" . $_POST['sendplantouser'] . "','" ."Wednesday_Leg". "')";
        $result = $database->query($queryStr);}

    if($wednesday_legday_Ex5_name != '' &&$wednesday_legday_Ex5_rep !=0 && $wednesday_legday_Ex5_round !=0){
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $wednesday_legday_Ex5_name . "','" . $wednesday_legday_Ex5_rep . "','" . $wednesday_legday_Ex5_round . "',
                '" . $wednesday_legday_Ex5_photo . "','" . $_POST['sendplantouser'] . "','" ."Wednesday_Leg". "')";
        $result = $database->query($queryStr);}

    /*5th Th*/
    if($thrsday_backday_Ex1_name != '' &&$thrsday_backday_Ex1_rep !=0 && $thrsday_backday_Ex1_round !=0){
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $thrsday_backday_Ex1_name . "','" . $thrsday_backday_Ex1_rep . "','" . $thrsday_backday_Ex1_round . "',
                '" . $thrsday_backday_Ex1_photo . "','" . $_POST['sendplantouser'] . "','" ."Thrsday_Back". "')";
        $result = $database->query($queryStr);}

    if($thrsday_backday_Ex2_name != '' &&$thrsday_backday_Ex2_rep !=0 && $thrsday_backday_Ex2_round !=0){
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $thrsday_backday_Ex2_name . "','" . $thrsday_backday_Ex2_rep . "','" . $thrsday_backday_Ex2_round . "',
                '" . $thrsday_backday_Ex2_photo . "','" . $_POST['sendplantouser'] . "','" ."Thrsday_Back". "')";
        $result = $database->query($queryStr);}

    if($thrsday_backday_Ex3_name != '' &&$thrsday_backday_Ex3_rep !=0 && $thrsday_backday_Ex3_round !=0){
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $thrsday_backday_Ex3_name . "','" . $thrsday_backday_Ex3_rep . "','" . $thrsday_backday_Ex3_round . "',
                '" . $thrsday_backday_Ex3_photo . "','" . $_POST['sendplantouser'] . "','" ."Thrsday_Back". "')";
        $result = $database->query($queryStr);}

    if($thrsday_backday_Ex4_name != '' &&$thrsday_backday_Ex4_rep !=0 && $thrsday_backday_Ex4_round !=0){
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $thrsday_backday_Ex4_name . "','" . $thrsday_backday_Ex4_rep . "','" . $thrsday_backday_Ex4_round . "',
                '" . $thrsday_backday_Ex4_photo . "','" . $_POST['sendplantouser'] . "','" ."Thrsday_Back". "')";
        $result = $database->query($queryStr);}

    if($thrsday_backday_Ex5_name != '' &&$thrsday_backday_Ex5_rep !=0 && $thrsday_backday_Ex5_round !=0){
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $thrsday_backday_Ex5_name . "','" . $thrsday_backday_Ex5_rep . "','" . $thrsday_backday_Ex5_round . "',
                '" . $thrsday_backday_Ex5_photo . "','" . $_POST['sendplantouser'] . "','" ."Thrsday_Back". "')";
        $result = $database->query($queryStr);}

    /*6th*/
    if($saturday_tummy_Ex1_name != '' &&$saturday_tummy_Ex1_rep !=0 && $saturday_tummy_Ex1_round !=0){
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $saturday_tummy_Ex1_name . "','" . $saturday_tummy_Ex1_rep . "','" . $saturday_tummy_Ex1_round . "',
                '" . $saturday_tummy_Ex1_photo . "','" . $_POST['sendplantouser'] . "','" ."Saturday_Tummy". "')";
        $result = $database->query($queryStr);}

    if($saturday_tummy_Ex2_name != '' &&$saturday_tummy_Ex2_rep !=0 && $saturday_tummy_Ex2_round !=0){
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $saturday_tummy_Ex2_name . "','" . $saturday_tummy_Ex2_rep . "','" . $saturday_tummy_Ex2_round . "',
                '" . $saturday_tummy_Ex2_photo . "','" . $_POST['sendplantouser'] . "','" ."Saturday_Tummy". "')";
        $result = $database->query($queryStr);}
    if($saturday_tummy_Ex3_name != '' &&$saturday_tummy_Ex3_rep !=0 && $saturday_tummy_Ex3_round !=0){
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $saturday_tummy_Ex3_name . "','" . $saturday_tummy_Ex3_rep . "','" . $saturday_tummy_Ex3_round . "',
                '" . $saturday_tummy_Ex3_photo . "','" . $_POST['sendplantouser'] . "','" ."Saturday_Tummy". "')";
        $result = $database->query($queryStr);}
    if($saturday_tummy_Ex4_name != '' &&$saturday_tummy_Ex4_rep !=0 && $saturday_tummy_Ex4_round !=0){
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $saturday_tummy_Ex4_name . "','" . $saturday_tummy_Ex4_rep . "','" . $saturday_tummy_Ex4_round . "',
                '" . $saturday_tummy_Ex4_photo . "','" . $_POST['sendplantouser'] . "','" ."Saturday_Tummy". "')";
        $result = $database->query($queryStr);}
    if($saturday_tummy_Ex5_name != '' &&$saturday_tummy_Ex5_rep !=0 && $saturday_tummy_Ex5_round !=0){
        $database = new mysqli('localhost', 'root', '', 'gymedge');
        $queryStr = "Insert into `exers` (`workout_id`,`Ex_name`,`Ex_rep`,`Ex_round`,`Ex_photo`,`username`,`day_musle`) values 
                ('" . $workout_id . "','" . $saturday_tummy_Ex5_name . "','" . $saturday_tummy_Ex5_rep . "','" . $saturday_tummy_Ex5_round . "',
                '" . $saturday_tummy_Ex5_photo . "','" . $_POST['sendplantouser'] . "','" ."Saturday_Tummy". "')";
        $result = $database->query($queryStr);}
    $database->commit();
    $database->close();
}

?>
<form action="Workoutplan.php" method="post">
<div class="wallpaperworkoutplan">
    <div class="parent">
        <div class="titleSel">
            <span class="create-a-plan" onclick="Hideslot1()">Create Plan ?</span>
            <span class="Send-plan" onclick="Hideslot2()">Send Plan</span>
        </div>
        <div class="conterner">
            <div id="slot2" class="sloot2">
                <!-- Creating a  plan-->
                    <div class="WeekDay" >
                        <div class="ColweekDay-plan">
                            <h4>
                                Sunday
                            </h4>
                            <div class="ColweekDay-plan-content">
                                <div class="ColweekDay-plan-content-photoArm">

                                </div>
                                <div class="ColweekDay-plan-content-info">
                                    <div class="ColweekDay-plan-content-info-Label">
                                        Arm Day
                                    </div>
                                    <div class="ColweekDay-plan-content-info-bootstrab">
                                        <button class="custommademajdy"  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Add Exercise's</button>
                                        <div style="background-size: cover;background-position:center;background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url('MyCss/imgesStyle/Armday.jpg');width: 100%;height: 700px" class=" offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                                            <div class="offcanvas-header">
                                                <h1 class="titleAddExnav" >Add Exercise's</h1>
                                                <button style="color: white; margin-right: 650px;text-align: left" type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="spacebet1">

                                                <div>
                                                    <div class="Send-plan" style="display: inline-block ;color: rgb(255,255,255);font-family: myfont;font-size: 55px;text-align: center;height: 200px">Saturday</div>>
                                                    <div class="empty">
                                                        <div class="Exersiesphoto" id="Exercises1-arm">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps_arm_Ex1" placeholder="Enter-Reps-Ex1">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-arm-Ex1" placeholder="Enter Round-Ex1">
                                                        </div>
                                                        <input class="fileinput" type="file" name="Exercise1photo-arm">
                                                        <input  class="textfiels" type="text"  name="Exercise1name-arm" placeholder="Enter Exercise Name">
                                                    </div>
                                                    <div class="empty">
                                                        <div class="Exersiesphoto" id="Exercises2-arm">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-arm-Ex2" placeholder="Enter-Reps-Ex2">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-arm-Ex2" placeholder="Enter Round-Ex2">
                                                        </div>
                                                        <input  class="fileinput" type="file" name="Exercise2photo-arm">
                                                        <input  class="textfiels" type="text" name="Exercise2name-arm" placeholder="Enter Exercise Name">
                                                    </div>
                                                    <div class="empty" >
                                                        <div class="Exersiesphoto" id="Exercises3-arm">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-arm-Ex3" placeholder="Enter-Reps-Ex3">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-arm-Ex3" placeholder="Enter Round-Ex3">
                                                        </div>
                                                        <input  class="fileinput" type="file" name="Exercise3photo-arm">
                                                        <input  class="textfiels" type="text" name="Exercise3name-arm" placeholder="Enter Exercise Name">
                                                    </div>
                                                    <div class="empty">
                                                        <div class="Exersiesphoto" id="Exercises4-arm">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-arm-Ex4" placeholder="Enter-Reps-Ex4">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-arm-Ex4" placeholder="Enter Round-Ex4">
                                                        </div>
                                                        <input  class="fileinput" type="file" name="Exercise4photo-arm">
                                                        <input  class="textfiels" type="text" name="Exercise4name-arm" placeholder="Enter Exercise Name">
                                                    </div>
                                                    <div class="empty">
                                                        <div class="Exersiesphoto" id="Exercises5-arm">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-arm-Ex5" placeholder="Enter-Reps-Ex5">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-arm-Ex5" placeholder="Enter Round-Ex5">
                                                        </div>
                                                        <input  class="fileinput" type="file" name="Exercise5photo-arm">
                                                        <input  class="textfiels" type="text"  name="Exercise5name-arm" placeholder="Enter Exercise Name">
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="Send-plan" style="display: inline-block ;color: rgb(255,255,255);font-family: myfont;font-size: 55px;text-align: center;height: 200px">Monday</div>>

                                                    <div class="empty">
                                                        <div class="Exersiesphoto" id="Exercises1-chest">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-chest-Ex1" placeholder="Enter-Reps-Ex1">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-chest-Ex1" placeholder="Enter Round-Ex1">
                                                        </div>
                                                        <input    class="fileinput" type="file" name="Exercise1photo-chest">
                                                        <input  class="textfiels" type="text"  name="Exercise1name-chest" placeholder="Enter Exercise Name">
                                                    </div>
                                                    <div class="empty">
                                                        <div class="Exersiesphoto" id="Exercises2-chest">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-chest-Ex2" placeholder="Enter-Reps-Ex2">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-chest-Ex2" placeholder="Enter Round-Ex2">
                                                        </div>
                                                        <input  class="fileinput" type="file" name="Exercise2photo-chest">
                                                        <input  class="textfiels" type="text" name="Exercise2name-chest" placeholder="Enter Exercise Name">
                                                    </div>
                                                    <div class="empty" >
                                                        <div class="Exersiesphoto" id="Exercises3-chest">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-chest-Ex3" placeholder="Enter-Reps-Ex3">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-chest-Ex3" placeholder="Enter Round-Ex3">
                                                        </div>
                                                        <input  class="fileinput" type="file" name="Exercise3photo-chest">
                                                        <input  class="textfiels" type="text" name="Exercise3name-chest" placeholder="Enter Exercise Name">
                                                    </div>
                                                    <div class="empty">
                                                        <div class="Exersiesphoto" id="Exercises4-chest">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-chest-Ex4" placeholder="Enter-Reps-Ex4">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-chest-Ex4" placeholder="Enter Round-Ex4">
                                                        </div>
                                                        <input  class="fileinput" type="file" name="Exercise4photo-chest">
                                                        <input  class="textfiels" type="text" name="Exercise4name-chest" placeholder="Enter Exercise Name">
                                                    </div>
                                                    <div class="empty">
                                                        <div class="Exersiesphoto" id="Exercises5-chest">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-chest-Ex5" placeholder="Enter-Reps-Ex5">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-chest-Ex5" placeholder="Enter Round-Ex5">
                                                        </div>
                                                        <input  class="fileinput" type="file" name="Exercise5photo-chest">
                                                        <input  class="textfiels" type="text"  name="Exercise5name-chest" placeholder="Enter Exercise Name">
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="Send-plan" style="display: inline-block ;color: rgb(255,255,255);font-family: myfont;font-size: 55px;text-align: center;height: 200px">Tuesday</div>>

                                                    <div class="empty">
                                                        <div class="Exersiesphoto" id="Exercises1-sholder">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-sholder-Ex1" placeholder="Enter-Reps-Ex1">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-sholder-Ex1" placeholder="Enter Round-Ex1">
                                                        </div>
                                                        <input    class="fileinput" type="file" name="Exercise1photo-sholder">
                                                        <input  class="textfiels" type="text"  name="Exercise1name-sholder" placeholder="Enter Exercise Name">
                                                    </div>
                                                    <div class="empty">
                                                        <div class="Exersiesphoto" id="Exercises2-sholder">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-sholder-Ex2" placeholder="Enter-Reps-Ex2">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-sholder-Ex2" placeholder="Enter Round-Ex2">
                                                        </div>
                                                        <input  class="fileinput" type="file" name="Exercise2photo-sholder">
                                                        <input  class="textfiels" type="text" name="Exercise2name-sholder" placeholder="Enter Exercise Name">
                                                    </div>
                                                    <div class="empty" >
                                                        <div class="Exersiesphoto" id="Exercises3-sholder">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-sholder-Ex3" placeholder="Enter-Reps-Ex3">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-sholder-Ex3" placeholder="Enter Round-Ex3">
                                                        </div>
                                                        <input  class="fileinput" type="file" name="Exercise3photo-sholder">
                                                        <input  class="textfiels" type="text" name="Exercise3name-sholder" placeholder="Enter Exercise Name">
                                                    </div>
                                                    <div class="empty">
                                                        <div class="Exersiesphoto" id="Exercises4-sholder">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-sholder-Ex4" placeholder="Enter-Reps-Ex4">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-sholder-Ex4" placeholder="Enter Round-Ex4">
                                                        </div>
                                                        <input  class="fileinput" type="file" name="Exercise4photo-sholder">
                                                        <input  class="textfiels" type="text" name="Exercise4name-sholder" placeholder="Enter Exercise Name">
                                                    </div>
                                                    <div class="empty">
                                                        <div class="Exersiesphoto" id="Exercises5-sholder">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-sholder-Ex5" placeholder="Enter-Reps-Ex5">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-sholder-Ex5" placeholder="Enter Round-Ex5">
                                                        </div>
                                                        <input  class="fileinput" type="file" name="Exercise5photo-sholder">
                                                        <input  class="textfiels" type="text"  name="Exercise5name-sholder" placeholder="Enter Exercise Name">
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="Send-plan" style="display: inline-block ;color: rgb(255,255,255);font-family: myfont;font-size: 55px;text-align: center;height: 200px">Wednesday</div>>

                                                    <div class="empty">
                                                        <div class="Exersiesphoto" id="Exercises1-leg">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-leg-Ex1" placeholder="Enter-Reps-Ex1">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-leg-Ex1" placeholder="Enter Round-Ex1">
                                                        </div>
                                                        <input    class="fileinput" type="file" name="Exercise1photo-leg">
                                                        <input  class="textfiels" type="text"  name="Exercise1name-leg" placeholder="Enter Exercise Name">
                                                    </div>
                                                    <div class="empty">
                                                        <div class="Exersiesphoto" id="Exercises2-leg">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-leg-Ex2" placeholder="Enter-Reps-Ex2">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-leg-Ex2" placeholder="Enter Round-Ex2">
                                                        </div>
                                                        <input  class="fileinput" type="file" name="Exercise2photo-leg">
                                                        <input  class="textfiels" type="text" name="Exercise2name-leg" placeholder="Enter Exercise Name">
                                                    </div>
                                                    <div class="empty" >
                                                        <div class="Exersiesphoto" id="Exercises3-leg">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-leg-Ex3" placeholder="Enter-Reps-Ex3">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-leg-Ex3" placeholder="Enter Round-Ex3">
                                                        </div>
                                                        <input  class="fileinput" type="file" name="Exercise3photo-leg">
                                                        <input  class="textfiels" type="text" name="Exercise3name-leg" placeholder="Enter Exercise Name">
                                                    </div>
                                                    <div class="empty">
                                                        <div class="Exersiesphoto" id="Exercises4-leg">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-leg-Ex4" placeholder="Enter-Reps-Ex4">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-leg-Ex4" placeholder="Enter Round-Ex4">
                                                        </div>
                                                        <input  class="fileinput" type="file" name="Exercise4photo-leg">
                                                        <input  class="textfiels" type="text" name="Exercise4name-leg" placeholder="Enter Exercise Name">
                                                    </div>
                                                    <div class="empty">
                                                        <div class="Exersiesphoto" id="Exercises5-leg">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-leg-Ex5" placeholder="Enter-Reps-Ex5">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-leg-Ex5" placeholder="Enter Round-Ex5">
                                                        </div>
                                                        <input  class="fileinput" type="file" name="Exercise5photo-leg">
                                                        <input  class="textfiels" type="text"  name="Exercise5name-leg" placeholder="Enter Exercise Name">
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="Send-plan" style="display: inline-block ;color: rgb(255,255,255);font-family: myfont;font-size: 55px;text-align: center;height: 200px">Thursday</div>>

                                                    <div class="empty">
                                                        <div class="Exersiesphoto" id="Exercises1-back">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-back-Ex1" placeholder="Enter-Reps-Ex1">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-back-Ex1" placeholder="Enter Round-Ex1">
                                                        </div>
                                                        <input    class="fileinput" type="file" name="Exercise1photo-back">
                                                        <input  class="textfiels" type="text"  name="Exercise1name-back" placeholder="Enter Exercise Name">
                                                    </div>
                                                    <div class="empty">
                                                        <div class="Exersiesphoto" id="Exercises2-back">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-back-Ex2" placeholder="Enter-Reps-Ex2">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-back-Ex2" placeholder="Enter Round-Ex2">
                                                        </div>
                                                        <input  class="fileinput" type="file" name="Exercise2photo-back">
                                                        <input  class="textfiels" type="text" name="Exercise2name-back" placeholder="Enter Exercise Name">
                                                    </div>
                                                    <div class="empty" >
                                                        <div class="Exersiesphoto" id="Exercises3-back">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-back-Ex3" placeholder="Enter-Reps-Ex3">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-back-Ex3" placeholder="Enter Round-Ex3">
                                                        </div>
                                                        <input  class="fileinput" type="file" name="Exercise3photo-back">
                                                        <input  class="textfiels" type="text" name="Exercise3name-back" placeholder="Enter Exercise Name">
                                                    </div>
                                                    <div class="empty">
                                                        <div class="Exersiesphoto" id="Exercises4-back">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-back-Ex4" placeholder="Enter-Reps-Ex4">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-back-Ex4" placeholder="Enter Round-Ex4">
                                                        </div>
                                                        <input  class="fileinput" type="file" name="Exercise4photo-back">
                                                        <input  class="textfiels" type="text" name="Exercise4name-back" placeholder="Enter Exercise Name">
                                                    </div>
                                                    <div class="empty">
                                                        <div class="Exersiesphoto" id="Exercises5-back">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-back-Ex5" placeholder="Enter-Reps-Ex5">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-back-Ex5" placeholder="Enter Round-Ex5">
                                                        </div>
                                                        <input  class="fileinput" type="file" name="Exercise5photo-back">
                                                        <input  class="textfiels" type="text"  name="Exercise5name-back" placeholder="Enter Exercise Name">
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="Send-plan" style="display: inline-block ;color: rgb(255,255,255);font-family: myfont;font-size: 55px;text-align: center;height: 200px">Saturday</div>>

                                                    <div class="empty">
                                                        <div class="Exersiesphoto" id="Exercises1-tummy">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-tummy-Ex1" placeholder="Enter-Reps-Ex1">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-tummy-Ex1" placeholder="Enter Round-Ex1">
                                                        </div>
                                                        <input    class="fileinput" type="file" name="Exercise1photo-tummy">
                                                        <input  class="textfiels" type="text"  name="Exercise1name-tummy" placeholder="Enter Exercise Name">
                                                    </div>
                                                    <div class="empty">
                                                        <div class="Exersiesphoto" id="Exercises2-tummy">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-tummy-Ex2" placeholder="Enter-Reps-Ex2">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-tummy-Ex2" placeholder="Enter Round-Ex2">
                                                        </div>
                                                        <input  class="fileinput" type="file" name="Exercise2photo-tummy">
                                                        <input  class="textfiels" type="text" name="Exercise2name-tummy" placeholder="Enter Exercise Name">
                                                    </div>
                                                    <div class="empty" >
                                                        <div class="Exersiesphoto" id="Exercises3-tummy">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-tummy-Ex3" placeholder="Enter-Reps-Ex3">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-tummy-Ex3" placeholder="Enter Round-Ex3">
                                                        </div>
                                                        <input  class="fileinput" type="file" name="Exercise3photo-tummy">
                                                        <input  class="textfiels" type="text" name="Exercise3name-tummy" placeholder="Enter Exercise Name">
                                                    </div>
                                                    <div class="empty">
                                                        <div class="Exersiesphoto" id="Exercises4-tummy">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-tummy-Ex4" placeholder="Enter-Reps-Ex4">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-tummy-Ex4" placeholder="Enter Round-Ex4">
                                                        </div>
                                                        <input  class="fileinput" type="file" name="Exercise4photo-tummy">
                                                        <input  class="textfiels" type="text" name="Exercise4name-tummy" placeholder="Enter Exercise Name">
                                                    </div>
                                                    <div class="empty">
                                                        <div class="Exersiesphoto" id="Exercises5-tummy">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="reps-tummy-Ex5" placeholder="Enter-Reps-Ex5">
                                                            <input  class="numbersInput" type="number" min="9" max="26" name="Rounds-tummy-Ex5" placeholder="Enter Round-Ex5">
                                                        </div>
                                                        <input  class="fileinput" type="file" name="Exercise5photo-tummy">
                                                        <input  class="textfiels" type="text"  name="Exercise5name-tummy" placeholder="Enter Exercise Name">
                                                    </div>
                                                </div>
                                                <div class="SelectExers ColweekDay-plan-content-info-Label">Choose Exercise's</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- This is the primary slot I have -->
                    <div class="WeekDay" >
                        <div class="ColweekDay-plan">
                            <h4>
                                Monday
                            </h4>
                            <div class="ColweekDay-plan-content">
                                <div class="ColweekDay-plan-content-photoChest">

                                </div>
                                <div class="ColweekDay-plan-content-info">
                                    <div class="ColweekDay-plan-content-info-Label">
                                        Chest Day
                                    </div>
                                    <div class="ColweekDay-plan-content-info-bootstrab">
                                        <button class="custommademajdy" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Add Exercise's</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="WeekDay" >
                        <div class="ColweekDay-plan">
                            <h4>
                                Tuesday
                            </h4>
                            <div class="ColweekDay-plan-content">
                                <div class="ColweekDay-plan-content-photoSholder">

                                </div>
                                <div class="ColweekDay-plan-content-info">
                                    <div class="ColweekDay-plan-content-info-Label">
                                        Sholder Day
                                    </div>
                                    <div class="ColweekDay-plan-content-info-bootstrab">
                                        <button class="custommademajdy" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Add Exercise's</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="WeekDay">
                        <div class="ColweekDay-plan">
                            <h4>
                                Wednesday
                            </h4>
                            <div class="ColweekDay-plan-content">
                                <div class="ColweekDay-plan-content-photoLeg">

                                </div>
                                <div class="ColweekDay-plan-content-info">
                                    <div class="ColweekDay-plan-content-info-Label">
                                        Leg Day
                                    </div>
                                    <div class="ColweekDay-plan-content-info-bootstrab">
                                        <button class="custommademajdy" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Add Exercise's</button>
                                        <div style="background-size: cover;background-position:center;background-image:url('MyCss/imgesStyle/Armday.jpg');width: 100%;height: 700px" class=" offcanvas offcanvas-bottom" tabindex="-1" aria-labelledby="offcanvasBottomLabel">
                                            <div class="offcanvas-header">
                                                <h3 class="titleAddExnav" >Add Exercise's</h3>
                                                <button style="color: white; margin-right: 650px;text-align: left" type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="WeekDay">
                        <div class="ColweekDay-plan">
                            <h4>
                                Thursday
                            </h4>
                            <div class="ColweekDay-plan-content">
                                <div class="ColweekDay-plan-content-photoBack">

                                </div>
                                <div class="ColweekDay-plan-content-info">
                                    <div class="ColweekDay-plan-content-info-Label">
                                        Back Day
                                    </div>
                                    <div class="ColweekDay-plan-content-info-bootstrab">
                                        <button class="custommademajdy" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Add Exercise's</button>
                                        <div style="background-size: cover;background-position:center;background-image:url('MyCss/imgesStyle/Armday.jpg');width: 100%;height: 700px" class=" offcanvas offcanvas-bottom" tabindex="-1" aria-labelledby="offcanvasBottomLabel">
                                            <div class="offcanvas-header">
                                                <h3 class="titleAddExnav" >Add Exercise's</h3>
                                                <button style="color: white; margin-right: 650px;text-align: left" type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="WeekDay">
                        <div class="ColweekDay-plan">
                            <h4>
                                Saturday
                            </h4>
                            <div class="ColweekDay-plan-content">
                                <div class="ColweekDay-plan-content-phototummy">

                                </div>
                                <div class="ColweekDay-plan-content-info">
                                    <div class="ColweekDay-plan-content-info-Label">
                                        Tummy Day
                                    </div>
                                    <div class="ColweekDay-plan-content-info-bootstrab">
                                        <button class="custommademajdy" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Add Exercise's</button>
                                        <div style="background-size: cover;background-position:center;background-image:url('MyCss/imgesStyle/Armday.jpg');width: 100%;height: 700px" class=" offcanvas offcanvas-bottom" tabindex="-1"  aria-labelledby="offcanvasBottomLabel">
                                            <div class="offcanvas-header">
                                                <h3 class="titleAddExnav" id="offcanvasBottomLabel">Add Exercise's</h3>
                                                <button style="color: white; margin-right: 650px;text-align: left" type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="WeekDay">
                        <div class="ColweekDay-plan">
                            <h4>
                                Conform Plan?
                            </h4>
                            <div class="ColweekDay-plan-content">
                                <div class="ColweekDay-plan-content-Ready"></div>
                                <div class="ColweekDay-plan-content-info">
                                    <div style="margin-top: 110px" class="ColweekDay-plan-content-info-Label">
                                        Done Form making plane ? Send it to Client
                                    </div>
                                    <div class="ColweekDay-plan-content-info-bootstrab">
                                        <div style=" width: 100%;height: 700px" class=" offcanvas offcanvas-bottom">
                                            <div class="offcanvas-header">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div id="slot1" class="sloot1">
                <!-- Send Plan-->
                <!-- Generating From Data base according to i thay have a plan or not-->

                <?php
                try{
                    $database = new mysqli('localhost','root','','gymedge');
                    $queryStr = "Select * from member";
                    $result = $database->query($queryStr);
                    foreach ($result as $row){
                        /*
                         Declading the tmp values i need
                          */
                        if($row['have_a_plan'] == 1){
                        $personalphoto ="icons/".$row['personalphoto'];
                        $name = $row['username'];
                        $email = $row['email'];
                        error_reporting(0);


                        echo '
                    
                    <div class="WeekDay">
                    <div class="ColweekDay-plan">
                    <h4>
                        '."Send Plan".'
                    </h4>
                    </div>
                        <div class="ColweekDay-plan-content">
                         <div style=" background-image: url('.$personalphoto.');background-repeat: no-repeat;background-size: contain;border-radius: 100%" id="here-we-will-put-the-personal-photo">
          
                         </div>
                         <div class="ColweekDay-plan-content-info-customer">
                         <!-- Here I will add some personal info about customer-->
                            <div class="ColweekDay-plan-content-info-Label1">
                                '.$email.'
                            </div>
                            <table class="info_about_this_cus">
                             <tr>
                                    <td>Body Type :</td>
                                    <td style="color:rgb(251,91,33);"><!--data here-->'.$row['body_type'].'</td>
                                    <td>Date of Birth :</td>
                                    <td style="color:rgb(251,91,33);"><!--data here-->'.$row['data_birth'].'</td>
                                    </tr>    
                             <tr>
                                    <td>Height :</td>
                                    <td style="color:rgb(251,91,33);">'.$row['height'].'</td>
                                    <td>Weight :</td>
                                    <td style="color:rgb(251,91,33);">'.$row['weight'].'</td>
                                    </tr>    
                             <tr>
                                    <td>Gender :</td>
                                    <td style="color:rgb(251,91,33);">'.$row['gender'].'</td>
                                    <td>Level of fit :</td>
                                    <td style="color:rgb(251,91,33);">'.$row['lvl_fitness'].'</td>
                                    </tr>    
                              <tr>
                                    <td>Futuer Gola :</td>
                                    <td style="color:rgb(251,91,33);">'.$row['future_goal'].'</td>
                                    <td>Futuer Physique :</td>
                                    <td style="color:rgb(251,91,33);">'.$row['future_physique'].'</td>
                                    </tr>               
                            </table>
                            <div class="ColweekDay-plan-content-info-bootstrab-customer">
                            <input name="sendplantouser"  class="custommademajdy" type="submit" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" value='.$name.' aria-controls="offcanvasBottom"></input>
                            </div>
                          </div>
                         </div>        
                   </div>';
                    }
                    }
                }
                catch (Exception $e){
                }
                $database->close();
                ?>
            </div>
        </div>
    </div>
</div>
</form>
</body>
</html>