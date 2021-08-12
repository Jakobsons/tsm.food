<?php

	class Route
	{

		public function __construct () {


		}

		public function getRoute () {

      //build route
      $error = 'error/notfound.php';

      $route = '';
      $route .= catalog;

          //check if route exists
			   $page = isset($_GET['route']) ? $_GET['route'] : 'account/login';

         //explode route to elements
			      $urls = explode('/',$page);
              //get element count
			         $count = count($urls);

               //check if first element is catalog
          			if(!is_dir(catalog.$urls[0]))
          			{
          				//include catalog.'error/notfound.php';
                  $route .= $error;
                }

                //if route elements more than 2
                if($count > 2)
                {

                  //build route of more than 2 arrays element
                  for($x = 1; $x<$count; $x ++)
                  {

                    if(is_dir($urls[$x]))
                    {
                      $route .= $urls[$x].'/';
                    } else {
                      $route = catalog.$error;
                    }

                  }

                }

			//check last element
			$lastKey = key(array_slice($urls, -1, 1, true));

			if(file_exists($route.'/'.$urls[$lastKey].'.php'))
			{
				//include catalog.$urls[0].'/'.$urls[$lastKey].'.php';
        $route .= $route.'/'.$urls[$lastKey].'.php';
      } else {
			  $route = catalog.$error;
			}

      return $route;

		}



	}
