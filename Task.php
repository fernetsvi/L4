<?php
    // Конкатенація
    $a = "You're ";
    $b = "welcome!\n";
    $a = $a.$b;
    echo $a;

    // Хеш-масиви
    $types = array("Dog"=>"Shepherd", "Wood"=>"Pine", "Carbon"=>"Graphite");
    foreach($types as $key => $value) {
        echo "Key: " . $key . ", Value: " . $value . "\n\n";
}

    // Explode
    $i1 = "first,second";
    var_dump( explode( ',', $input1 ) );

    // Implode
    $a1 = array("x","y","z");
    echo "a1 is: '".implode("','",$a1)."\n";

    // Розіменування
    $a = "digit";
    $$a = "number";
    // тогда,
    echo $$a."\n\n";

    // Порівняння
    var_dump(1 == TRUE);   // TRUE
    var_dump(0 == FALSE);  // TRUE 
    var_dump(-2 < TRUE);   // TRUE
    var_dump(-30 > FALSE); //  FALSE
    var_dump(1 <= FALSE);  //  FALSE

    // Приведення типів
    $number = 200;           
    $abc = "$number";        
    $d = (string) $number;

    if ($d === $abc) {
        echo "TRUE\n\n";
}


    // ООП

class Person
{
    protected $name;
    protected $age;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    private function privateMethod()
    {
        return "{$this->name} is {$this->age} years old.";
    }

    protected function protectedMethod()
    {
        return "{$this->name} is {$this->age} years old.";
    }
}

class Worker extends Person
{
    private $post;
    private $minWage;

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getPost()
    {
        return $this->post;
    }

    public function setPost($post)
    {
        $this->post = $post;
    }

    public function getMinWage()
    {
        return $this->minWage;
    }

    public function setMinWage($minWage)
    {
        $this->minWage = $minWage;
    }

    public function nameAndAge()
    {
        return $this->protectedMethod();
    }
}

$worker = new Worker();

$worker->setName('Nick');
$worker->setAge(48);
$worker->setPost('CEO');
$worker->setMinWage(200);

echo $worker->getName(); // Nick
echo $worker->getAge(); // 48
echo $worker->getPost(); // CEO
echo $worker->getminWage(); // 200
echo $worker->nameAndAge(); // Nick is 48 years old.


    // Singleton

class Singleton
{

    private static $instances = [];

    protected function __construct() { }


    protected function __clone() { }


    public function __wakeup() { }


    public static function getInstance(): Singleton
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }
}


function someFunc()
{
    $s1 = Singleton::getInstance();
    $s2 = Singleton::getInstance();
    if ($s1 === $s2) {
        echo "Yes.";
    } else {
        echo "No.";
    }
}

someFunc();
?>