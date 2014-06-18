<?php require_once( __DIR__ . '/public/includes/header.php');?>
    
    <div class="container clearfix">
        <div class="row">
            <div class="col-xs-12 oop">                
                <div class="panel panel-default">
                    
                    <div class="panel-heading">
                        <h1>OOP with JS and Php</h1>
                        <?php require_once( __DIR__ . '/public/includes/nav_button.php'); ?>
                    </div>
                    
                    <div class="panel-body">
                    
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            
<pre style="font-family: Andale Mono, Lucida Console, Monaco, fixed, monospace; color: #000000; background-color: #eee;font-size: 12px;border: 1px dashed #999999;line-height: 14px;padding: 5px; overflow: auto; width: 100%"><code>class Car {
    
    public $make;
    public $model;
    
    function __construct( $make = '', $model = '') {
        $this-&gt;make  = $make;
        $this-&gt;model = $model;
    }
    
    public function start() {
        echo &quot;Car has started&quot;;
    }
    
    public function drive() {
        echo &quot;I am driving&quot;;
    }
    
    public function stop() {
        echo &quot;STOPPED&quot;;
    }
    
    public function __toString() {
        return $this-&gt;make . &quot; &quot; . $this-&gt;model;
    }
}

$honda = new Car('honda', 'S2000');
echo $honda;
echo &quot;&lt;br&gt;&quot;;
$honda-&gt;start();
echo &quot;&lt;br&gt;&quot;;
$honda-&gt;drive();
echo &quot;&lt;br&gt;&quot;;
$honda-&gt;stop();
echo &quot;&lt;br&gt;&quot;;

</code></pre>                            
            
                        </div>
                     
                         <div class="col-md-6 col-sm-6 col-xs-12">
                            
                            <p>The following is an attempt to do the same thing with javascript</p>
<pre style="font-family: Andale Mono, Lucida Console, Monaco, fixed, monospace; color: #000000; background-color: #eee;font-size: 12px;border: 1px dashed #999999;line-height: 14px;padding: 5px; overflow: auto; width: 100%"><code>
var car_blue_print = {
    make  : 'make',
    start : function() {
        document.write('Car has started');
    },
    drive : function() {
        document.write('I am driving');
    },
    stop  : function() {
        document.write('STOPPED');
    }
}

//constructor method for Car

function Car( make, model ) {
this.make  = make;
this.model = model;
};

//this is where it is really different from php, you have to give it a prototype

Car.prototype = car_blue_print;

//remember to use a string with the constructor

var toyota = new Car('toyota', 'supra');

document.write( toyota.make + &quot; &quot; + toyota.model );
document.write('&lt;br&gt;');
toyota.start();
document.write('&lt;br&gt;');
toyota.drive();
document.write('&lt;br&gt;');
toyota.stop();
</code></pre>
                            
                        </div>
                        
                    </div>
                    
                    <div class="panel-footer">
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

<?php require_once( __DIR__ . '/public/includes/footer.php' );?>
