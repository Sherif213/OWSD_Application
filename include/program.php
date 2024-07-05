<?php
        // Example of programs array with subcategories
        $programs = [
            "Thesis Programs" => ["Computer Engineering (in English)", "Artificial Intelligence And Data Science (in English)", "Electrical And Electronic Engineering (in English)","Energy Technologies (in English)","Mechanical Engineering (in English)","Industrial Engineering (in English)","Aerospace Engineering (in English)","Civil Engineering","Earthquake And Structural Engineering","Food Safety","Food Engineering","Occupational Health And Safety","Mechatronics Engineering","Mouth, Teeth And Jaw Surgery","Orthodontics","Periodontology","Protective Tooth Treatment","Molecular Medicine","Audiology","Medical Microbiology","Physical Education And Sports","Physiotherapy And Rehabilitation","Health Physics","Medical Pharmacology"],
            "Non-Thesis Programs" => ["Computer Engineering (in English)","Electrical And Electronic Engineering (in English)","Energy Technologies (in English)","Industrial Engineering (in English)","Cyber Security (in English)","Information Technology","IT Based Teaching Technologies","Civil Engineering Construction And Project Management","Earthquake And Structural Engineering","Occupational Health And Safety","Orthodontics","Protective Tooth Treatment","Medical Microbiology","Physiotherapy And Rehabilitation","Medical Pharmacology"],
        ];

        // Loop through categories and programs
        foreach ($programs as $category => $courses) {
            echo '<optgroup label="' . $category . '">';
            foreach ($courses as $course) {
                echo '<option value="' . strtolower(str_replace(' ', '_', $course)) . '">' . $course . '</option>';
            }
            echo '</optgroup>';
        }
        ?>