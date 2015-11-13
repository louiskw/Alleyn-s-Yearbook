<?php

class Author {
    
    public $pupil_rollnumber;
    public $author_rollnumber;
    
    public function __construct($pupil, $author) {
        
        $this->pupil_rollnumber = $pupil;
        $this->author_rollnumber = $author;
        
    }
 
    public function check() {
        
        // Check if a pupil exists as an author for a defined pupil
        
        $query_test = DB::queryFirstRow("SELECT * FROM author_choices WHERE pupil_rollnumber=%i AND author_rollnumber=%i", $this->pupil_rollnumber, $this->author_rollnumber);
        
        if($query_test['author_rollnumber'] == $this->author_rollnumber) {
            
            return true;
            
        }else {
            
            return false;
        
        }
        
    }
    
    public function add() {
        
        // Add a pupil as an author
        
        $pupil = $this->pupil_rollnumber;
        $author = $this->pupil_rollnumber;
        
        // Validation Checks
        
        if($pupil == $author) {
            
            // Pupil cannot select self as author
            
        }else if(!in_array($author, Pupil::getAllPupilRollNumbers())) {
            
            // Author must be pupil in database
            
        }else if(in_array($author, self::getCurrentAuthors($pupil))) {
            
            // Pupil cannot already be an author
            
        }else if(count(self::getCUrrentAuthors($pupil)) >= 5) {
            
            // Pupil cannot have more than 5 authors
            
        }
        
        // DB insert
        
        
        
    }
    
    public function remove() {

        // Remove a pupil as an author
        
    }
    
    public function identify() {
        
        // Returns a Pupil() class of the author
        
        
        
    }
    
    public static function getCurrentAuthors($pupil) {
        
        $authors_query = DB::query("SELECT * FROM author_choices WHERE pupil_rollnumber=%i", $pupil);
        $authors = array();
        
        foreach($authors_query as $author) {
            array_push($authors, $author['author_rollnumber']);
        }
        
        return $authors;
        
    }
    
}