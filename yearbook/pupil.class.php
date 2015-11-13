<?php

class Pupil {
    // Container and pupil data manipulation template
    
    public $firstname;
    public $secondname;
    public $dobstr;
    public $rollnumber;
    public $form;
    public $house;
    
    public function setWithRollNumber($rollnumber) {
        $pupil = DB::queryFirstRow("SELECT * FROM pupils WHERE rollnumber = %i", $rollnumber);
    	$this->firstname = $pupil['firstname'];
        $this->secondname = $pupil['secondname'];
        $this->dobstr = $pupil['dateofbirth'];
        $this->rollnumber = $pupil['rollnumber'];
        $this->form = $pupil['form'];
        $this->house = $pupil['house'];    
    }
    
    public static function getAllPupilNames() {
        $allrecords = DB::query("SELECT * FROM pupils");
        $pupils = array();
        foreach($allrecords as $record) {
            array_push($pupils, ($record['firstname'] . " " . $record['secondname']));
        }
        return $pupils;
    }
    
    public static function getAllPupilRollNumbers() {
        $allrecords = DB::query("SELECT * FROM pupils");
        $pupil_rollnumbers = array();
        foreach($allrecords as $record) {
            array_push($pupil_rollnumbers, ($record['rollnumber']));
        }
        return $pupil_rollnumbers;
    }
    
}