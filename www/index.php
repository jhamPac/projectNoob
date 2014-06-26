<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Home Page</title>
    
    <!-- favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
    <!-- CSS -->
    <link href="/public/css/chief.css" rel="stylesheet" type="text/css">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  
    <body>
    
        <div class="container clearfix">
            <div class="row homePage">
                <div class="panel panel-default">
                    
                    <div class="panel-heading">
                    
                        <div class="fly-in">
                            <h1>How to Level Up</h1>
                            <h3>A guide for Level 1 and +</h3>
                        </div>
                        
                        <?php require( __DIR__ . '/public/includes/nav_button.php' ); ?>
                        
                    </div>
                    
                    <div class="panel-body">
                    
                        <div class="col-xs-12 zero">
                            
                            <span>April 9 2014</span>
                            <h3>jQuery/javascript</h3>
                            <a class="disappear" href="page2.php" target="_self">Next Page</a>
                            <p class="hidden" style="margin-top:10px;">Neutra sartorial messenger bag twee, occupy blog Brooklyn selvage retro gluten-free irony readymade food truck put a bird on it. Pickled four loko yr photo booth, meh brunch trust fund PBR keytar fashion axe Marfa authentic keffiyeh vinyl. Locavore typewriter Truffaut, Brooklyn craft beer flexitarian gentrify 3 wolf moon cred. VHS messenger bag Wes Anderson +1, bespoke cornhole tousled master cleanse direct trade squid readymade. Gastropub pug whatever, farm-to-table Austin shabby chic yr mlkshk banjo locavore. Twee umami art party, ethnic hella bicycle rights forage fixie 8-bit pickled. Jean shorts put a bird on it plaid polaroid, photo booth lomo Carles quinoa cred skateboard leggings.</p>
                            
                        </div>
                        
                        <div class="col-xs-12 one">
                        
                            <span>April 10 2014</span>
                            <h3>jQuery/javascritpt</h3>
                            <pre>This helps with understanding javascript, canvas, html, css/sass. Really good <a href='http://sixrevisions.com/html/bouncing-a-ball-around-with-html5-and-javascript/' target='_blank'>tutorial</a></pre>
                            <canvas id="bouncXing" width="500" height="500"></canvas>
                            
                        </div>
                        
                        <div class="col-xs-12 two">
                            
                            <span>April 12 2014</span>
                            <h3>PHP Level 1</h3>
                            <p>This really helps with understanding php:<br> <a href='http://stackoverflow.com/questions/3738572/how-to-include-file-from-another-directory' target='_blank'>$_SEVER[ 'DOCUMENT_ROOT' ]</a></p>
                            <?php require($_SERVER['DOCUMENT_ROOT'] . '/public/files/link.php'); ?> 
                            <?php 
                                
                                $_HOEBAG = "Used require to place this click me"; //created my own superglobal
                                echo "$_HOEBAG";
                                echo "<br>";
                                $where = $_SERVER['DOCUMENT_ROOT']; //save document root from /sites/mcook.dev/www. Save it in a variable 
                                $test = "/sites/mcook.dev/www";
                                echo $test;
                                echo "<br>";
                                if ( $where == $test ) { //test whether another variable matches with our document root variable if so do something
                                    echo "Early bird gets the worm!!";
                                }
                                echo "<br>";
                                echo $_SERVER['SERVER_PORT'];
                                 
                            ?>
                                                         
                        </div>
                        
                        <div class="col-xs-12 three">
                            
                            <span>April 12 2014</span>
                            <h3>PHP Level 2</h3>
                            <p><strong><a href='http://stackoverflow.com/questions/1724511/how-to-check-where-apache-is-looking-for-a-php-ini-file' target='_blank'>phpinfo();</a></strong>&nbsp;is really helpful<br>
                                date_default_timezone_set('UTC');<br>
                                $date = new DateTime();<br>
                                $timestamp = $date->format('m/d/Y H:i:s');<br>
                                echo $timestamp<br>
                               <pre> This grabs the current time and then displays it. Now I have to figure out how to keep it there permanently because every time I refresh it runs the get date function again grabbing the current date. I want the date of the first time the function was ran and not the date of the refresh.</pre> 
                            
                            
                        </div>
                        
                        <div class="col-xs-12 four">
                            
                            <span>April 12 2014</span>
                            <h3>PHP Level 3</h3>
                            <?php 
                                $salaries["Bob"] = 2000;
                                $salaries["Jake"] = 800;
                                $salaries["Paul"] = 700;
                                $salaries["Matt"] = 1000;
                                $salaries["Cindy"] = 10000;
                                
                                function say() {
                                    echo "This is a function that says something <br>";
                                }
                                
                                function greeting( $name ) {
                                    echo "Hello $name, how are you?<br>";
                                }

                                function calculate( $x, $y ) {
                                    $sum = $x + $y;
                                    return $sum;
                                }
                                
                                say();
                                greeting( "Jynx The Dog" );
                                $answer = calculate( 10, 5 );
                                echo "$answer<br>";
                                var_dump($salaries);
                            ?>
                            <pre>Creating Functions and Arrays, and using var_dump(); on an array.</pre>
                            
                        </div>
                        
                        <div class="col-xs-12 five">
                            
                            <span>April 13 2014</span>
                            <h3>PHP OOP</h3>
                            <?php require($_SERVER['DOCUMENT_ROOT'] . '/public/files/class_person.php');
                            $user1 = new person("Buzz", 6);
                            $employ1 = new employee( "BoyMan", 5 );
                            echo $user1->get_name();
                            echo "<br>";
                            echo $employ1->get_name() . " " . $employ1->get_height();
                            $employ1->set_height( 3 );
                            echo "<br>";
                            echo $employ1->get_height();
                            echo "<br>";
                            ?>
                            <p>Above are the results of these commands along with the class. Also I used <a href="http://formatmysourcecode.blogspot.com/" target="_blank">Format My Source Code </a>for the blocks of code. This tut about PHP <a href="http://www.killerphp.com/tutorials/object-oriented-php/" target="_blank">OPP </a>is what I used to learn with.</p>
                            <pre style="font-family: Andale Mono, Lucida Console, Monaco, fixed, monospace; color: #000000; background-color: #eee;font-size: 12px;border: 1px dashed #999999;line-height: 14px;padding: 5px; overflow: auto; width: 100%"><code>&lt;?php require($_SERVER['DOCUMENT_ROOT'] . '/public/files/class_lib.php');
                            
                                    $user1 = new person(&quot;Buzz&quot;, 6);
                                    $employ1 = new employee( &quot;BoyMan&quot;, 5 );
                                    echo $user1-&gt;get_name();
                                    echo &quot;&lt;br&gt;&quot;;
                                    echo $employ1-&gt;get_name() . &quot; &quot; . $employ1-&gt;get_height();
                                    $employ1-&gt;set_height( 3 );
                                    echo &quot;&lt;br&gt;&quot;;
                                    echo $employ1-&gt;get_height();
                                    echo &quot;&lt;br&gt;&quot;;
                                    
                                    ?&gt;
                                </code></pre>
                            <pre style="font-family: Andale Mono, Lucida Console, Monaco, fixed, monospace; color: #000000; background-color: #eee;font-size: 12px;border: 1px dashed #999999;line-height: 14px;padding: 5px; overflow: auto; width: 100%"><code>class person {
    
                                    public $name;
                                    public $height;
                                    protected $social_insurance;
                                    private $pinn_number;
                                    
                                        function __construct( $the_name = &quot;&quot;, $ht = &quot;&quot; ) {
                                            $this-&gt;name = $the_name;
                                            $this-&gt;height = $ht;
                                        }
                                        
                                        protected function set_name() {
                                            return $this-&gt;name;
                                        }
                                        
                                        function get_name() {
                                            return $this-&gt;name;
                                        }
                                        
                                        function set_height( $x ) { //parent set_height addition
                                            $this-&gt;height += $x;
                                        }
                                        
                                        function get_height() {
                                            return $this-&gt;height;
                                        }
                                        
                                       private function get_pinn_number() {
                                            return $this-&gt;pinn_number;
                                        }
                                    
                                }
                                
                                class employee extends person {
                                    
                                    function __contruct( $employee_name = &quot;&quot;, $htf = &quot;&quot; ) {
                                        $this-&gt;set_name( $employee_name );
                                        $this-&gt;height = $htf;
                                    }
                                    
                                    function set_height( $y ) {
                                    
                                        if ( $y &lt;= 5 ) {
                                        $this-&gt;height *= $y; //use different set_height depending on argument integer
                                        } else {
                                            person::set_height( $y );
                                        }
                                    }
                                    
                                }
                                </code></pre>
                                
                        </div>
                        
                        <div class="col-xs-12">
                            
                            <span>June 26 2014</span>
                            <h3>Exception Test</h3>
                            <?php 
                                
                              function adder($x, $y = 5) {
                                  
                                  if( $x < 0 ) {
                                      throw new Exception('No negative numbers allowed');
                                  }
                                  
                                  else {
                                      return $x + $y;
                                  }
                              }
                              
                              try {
                                  $sum = adder(-5);
                                  echo $sum;
                              }
                              
                              catch( Exception $e ) {
                                  echo $e->getMessage();
                                  echo $e->getTraceAsString();
                              }
                              
                              //or you can do it like this
                              
                              $new_sum = adder(-10);
                              echo $new_sum;
                                
                            ?>
                        </div>
                        
                    </div> <!-- panel body end -->
                    
                    <div class="panel-footer">
                        
                    </div>
                    
                </div>
            </div>
        </div>

    
<!-- Scripts -->
<script src="/public/js/jQuery.js" type="text/javascript"></script> 
<script src="/public/js/min/central-ck.js" type="text/javascript"></script> 
<!-- order matters -->

    </body>
</html>