  
  <?php
  
  class Careem_Internship_ReemaM 
  {

    public function firstNonRepeatingLetter($input){
  
      $lowerCaseInput=strtolower($input);
      //traverse to all letters to find the first unrepeated letter
      for($i=0; $i<strlen($lowerCaseInput) ; $i++){
        //get the letter and compare it to all string letter
        $target_letter= $lowerCaseInput[$i];
        for($x=0; $x<strlen($lowerCaseInput); $x++){
        //dont compare the letter with itselft
                if($x!=$i) {                                  
                    if($target_letter==$lowerCaseInput[$x]){
                        break;
                    }
                    //if compared string is finish then return the result that mean no such letter in string
                    if($x == (strlen($lowerCaseInput)-1)){   
                                return $input[$i];
                        }
                    }
            }
        }
      // return "" after all letters are tested
        return "";
    }
}

?>