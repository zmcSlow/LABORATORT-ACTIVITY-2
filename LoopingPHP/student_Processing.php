<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Student Processing</title>
  </head>
  <body>
      <div class="bg-gradient">
      <div class="container glass">
      <div class="header">
       <h1>Laboratory Activity Problem: Using Loops in PHP</h1>
    </div>
    <?php
    //Task 2:PHP Script

    include 'dataPreparation.php'; //Inlcuded the php file with declared variables.
    
    //A multidimensional array that stores data of students.
    $studentsInfos = [

      [
      "First Name" => $student1_firstName,
      "Last Name"=> $student1_lastName,
      "Age" => $student1_age,
      "Major" => $student1_major
      ],

      [
      "First Name" => $student2_firstName,
      "Last Name" => $student2_lastName,
      "Age" => $student2_age,
      "Major" => $student2_major
      ],

      [
      "First Name" => $student3_firstName,
      "Last Name" => $student3_lastName,
      "Age" => $student3_age,
      "Major" => $student3_major
      ],

      [
      "First Name" => $student4_firstName,
      "Last Name" => $student4_lastName,
      "Age" => $student4_age,
      "Major" => $student4_major
      ],

      [
      "First Name" => $student5_firstName,
      "Last Name" => $student5_lastName,
      "Age" => $student5_age,
      "Major" => $student5_major
      ]

    ];

    //a. Displays the list of students.
    echo "<h1>List of Students</h1>";
    echo "<div class=container_student>";
    foreach ($studentsInfos as $s_Info){
      echo "<div class= student>";
      echo "<p>First Name: {$s_Info['First Name']} <br>Last Name: {$s_Info['Last Name']} <br>Age: {$s_Info['Age']} <br>Major : {$s_Info['Major']}</p>";
      echo "</div>";
    }
    echo "</div>";
    //b. Calculate and display the total number of students.
    $total_students = count($studentsInfos);
    echo "<h1>Total Number of Students:</h1> $total_students <br>";
    //c. Calculate and displays the average age of students.
    $totalAge = 0;
    foreach ($studentsInfos as $s_Info) {
      $totalAge += $s_Info['Age'];
    }
  
    $aveAge = $totalAge / $total_students;
    echo "<h1>Average Age of Students:</h1> $aveAge";

    //d. Creation and Intialization of Variables for CS Students.
    $cs_student1_firstName="Edizen";
    $cs_student1_lastName="Buguina";
    $cs_student1_age="19";
    $cs_student1_major="Computer Science";

    $cs_student2_firstName="Mark Angelo";
    $cs_student2_lastName="Cornejo";
    $cs_student2_age="19";
    $cs_student2_major="Computer Science";

    $cs_student3_firstName="Abigaile Cyrene";
    $cs_student3_lastName="Ramos";
    $cs_student3_age="20";
    $cs_student3_major="Computer Science";

    //A multidimensional array that store the data of CS Students.
    $cs_student_Info = [

      [
      "First Name" => $student1_firstName,
      "Last Name"=> $student1_lastName,
      "Age" => $student1_age,
      "Major" => $student1_major
      ],

      [
      "First Name" => $student2_firstName,
      "Last Name" => $student2_lastName,
      "Age" => $student2_age,
      "Major" => $student2_major
      ],

      [
      "First Name" => $student3_firstName,
      "Last Name" => $student3_lastName,
      "Age" => $student3_age,
      "Major" => $student3_major
      ]
    ];
    //e. Displays the list of CS Students.
    echo "<h1>List of Students Majoring in Computer Science</h1>";
    echo "<div class=contain_student>";
    foreach ($cs_student_Info as $cs_Info){
      echo "<div class= cs_students>";
      echo "<p>First Name: {$cs_Info['First Name']} <br>Last Name: {$cs_Info['Last Name']} <br>Age: {$cs_Info['Age']} <br>Major: {$cs_Info['Major']}</p>";
      echo "</div>";
    }
    echo "</div>";
     ?>
  </body>
</html>