<?php
    
    header("Content-Type: application/json");

    function outputJson() {
        $sma = new stdClass();
        $sma->name = "SMAN 1 Bengkulu Selatan";
        $sma->year_in = 2011;
        $sma->year_out = 2014;
        $sma->major = "IPA";

        $univ = new stdClass();
        $univ->name = "Universitas Islam Indonesia";
        $univ->year_in = 2014;
        $univ->year_out = 2019;
        $univ->major = "Teknik Informatika";

        $skill1 = new stdClass();
        $skill1->name = "HTML";
        $skill1->level = "advanced";

        $skill2 = new stdClass();
        $skill2->name = "CSS";
        $skill2->level = "advanced";

        $input = new stdClass();
        $input->name = "Oddy Septian Eka Putra";
        $input->age = 23;
        $input->address = "Jalan Kaliurang KM. 13,5";
        $input->hobbies = ["futsal", "badminton", "ngoding"];
        $input->is_married = false;
        $input->list_school = [$sma, $univ];
        $input->list_skill = [$skill1, $skill2];
        $input->interest_in_coding = true;

        $myJson = json_encode($input);
        echo $myJson;
        
    }

    outputJson();

?>