<?php
    class Core{
        public function run(){
           $url = '/';
           if(isset($_GET['url'])){
            $url .= $_GET['url'];
           }
           $url = $this->checkRouters($url);

           $params = [];
           if(!empty($url) && $url != '/'){
                $url = explode('/', $url);
                array_shift($url);
                $currentController = ucfirst($url[0]).'Controller';
                array_shift($url);

                if(isset($url[0]) && !empty($url[0])){
                    $currentAction = $url[0];
                    array_shift($url);
                }else{
                    $currentAction = 'index';
                }
                if(count($url)> 0){
                    $params = $url;
                }
           }else{
               $currentController = 'HomeController';
               $currentAction = 'index';
            }
            if(!file_exists('controllers/'.$currentController.'.php') || !method_exists($currentController, $currentAction)){
                $currentController = 'NotFoundController';
                $currentAction = 'index';
            }
            $controller = new $currentController();
            call_user_func_array(array($controller, $currentAction),$params);

        }

        private function checkRouters($url){
            global $routes;
            foreach($routes as $pt => $newUrl){
                // Identifica os argumentos e substitui por regex
                $pattern = preg_replace('(\{[a-z0-9]{1,}\})', '([a-z0-9-]{1,})', $pt);
                // Realiza o match da URL
                if(preg_match('#^('.$pattern.')*$#i', $url, $matches) === 1) {
                    array_shift($matches);
                    array_shift($matches);

                    // Pega todos os argumentos para associar
                    $itens = [];
                    if(preg_match_all('(\{[a-z0-9]{1,}\})', $pt, $m)){
                        $itens = preg_replace('(\{|\})', '', $m[0]);
                    }
                    //Realiza a associação
                    $arg = [];
                    foreach($matches as $key => $match){
                        $arg[$itens[$key]] = $match;
                    }

                    // foreach para montar a nova URL
                    foreach($arg as $argKey => $argValue){
                        $newUrl = str_replace(':'.$argKey, $argValue, $newUrl);
                    }
                    $url = $newUrl;
                    break;
                }
            }

            return $url;
        }
    }
?>