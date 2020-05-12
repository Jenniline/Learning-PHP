<?php

const PI = 3.14;
define ("EARTH_IS_FLAT", false);

define ("APP_ENV", "dev");
const MAX_SESSION_TIME = 60*60;
//now using what is above to write new constants 
define("EARTH_IS_ROUND",!EARTH_IS_FLAT);
define("MORE_UNKN0WN",UNKNOWN);
//const does not work with a function call
const APP_FUTURE_LANGUAGES = [-1 => "es"] + APP_LANGUAGES; 
define("APP_BETTER_FUTURE_LANGUAGES");
//define is a runtime expression while constant is a compile time one


/*Class Constants */
//constants can be defined inside classes using a constant keyword

class Foo {
    const BAR_TYPE = "bar";
    //reference from inside the class
    public function myMethod(){
        return self::BAR_TYPE;
    }
}
//reference from outside the class
echo Foo::BAR_TYPE;

   
//checking if constant is defined we use the define function

define("GOOD",false);
if(defined("GOOD")) {
    print "GOOD is defined";

    if(GOOD){
        print "GOOD is true";
    }
    if(!defined("AWESOME")) {
        define ("AWESOME",true);    
    }

}





?>