<?php

namespace models;
use core\models\Main;
class Articles extends Main{
    public function get_all(){
	return array(
	    array(
		title=>'title1',
		text=>'ndsv hv uhv ub bu vbub ',
		date=> time()		
	    ),
	    array(
		title=>'title2',
		text=>'ndsv  кмк  укмикbu vbub ',
		date=> time()		
	    ),
	    array(
		title=>'title3',
		text=>'ndsv hv uhvвмцуп укм vbub ',
		date=> time()		
	    )
	    
	);
    }
}
