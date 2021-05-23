<?php

// Builder Design Pattern


// Product
class SmartPhone
{
    public $cpu;
    public $gpu;
    public $ram;
    public $sensors;
    public $camera;
    public $case;

}

// Concrete Products
class SamsungPhone extends SmartPhone
{
    public function __toString()
    {
        return '<h1>Your Samsung Phone is Ready with the following Specs.</h1>' . '<pre>' .
         var_export($this, true) . '</pre>';
    }
}

class HTCPhone extends SmartPhone
{
    public function __toString()
    {
        return '<h1>Your HTC Phone is Ready with the following Specs.</h1>' . '<pre>' . var_export($this, true) . '</pre>';
    }
}

class ApplePhone extends SmartPhone
{
    public function __toString()
    {
        return '<h1>Your Apple Phone is Ready with the following Specs.</h1>' . '<pre>' . var_export($this, true) . '</pre>';
    }
}

// Builder Interface
interface SmartPhoneBuilder
{
    public function addCPU();
    public function addGPU();
    public function addRAM();
    public function addSensors();
    public function addCamera();
    public function addCase();
    public function getProduct();
}

// Concrete Builders
class SamsungPhoneBuilder implements SmartPhoneBuilder
{

    private $product;
    private $options;

    public function __construct(array $options)
    {
        $this->options = $options;
        $this->product = new SamsungPhone();
    }

    public function addCPU()
    {
        $this->product->cpu = $this->options['cpu'];
    }

    public function addGPU()
    {
        $this->product->gpu = $this->options['gpu'];
    }

    public function addRAM()
    {
        $this->product->ram = $this->options['ram'];
    }

    public function addSensors()
    {
        $this->product->sensors = $this->options['sensors'];
    }

    public function addCamera()
    {
        $this->product->camera = $this->options['camera'];
    }

    public function addCase()
    {
        $this->product->case = $this->options['case'];
    }

    public function getProduct()
    {
        return $this->product;
    }
}

class HTCPhoneBuilder implements SmartPhoneBuilder
{

    private $product;
    private $options;

    public function __construct(array $options)
    {
        $this->options = $options;
        $this->product = new HTCPhone();
    }

    public function addCPU()
    {
        $this->product->cpu = $this->options['cpu'];
    }

    public function addGPU()
    {
        $this->product->gpu = $this->options['gpu'];
    }

    public function addRAM()
    {
        $this->product->ram = $this->options['ram'];
    }

    public function addSensors()
    {
        $this->product->sensors = $this->options['sensors'];
    }

    public function addCamera()
    {
        $this->product->camera = $this->options['camera'];
    }

    public function addCase()
    {
        $this->product->case = $this->options['case'];
    }

    public function getProduct()
    {
        return $this->product;
    }
}

class ApplePhoneBuilder implements SmartPhoneBuilder
{

    private $product;
    private $options;

    public function __construct(array $options)
    {
        $this->options = $options;
        $this->product = new ApplePhone();
    }

    public function addCPU()
    {
        $this->product->cpu = $this->options['cpu'];
    }

    public function addGPU()
    {
        $this->product->gpu = $this->options['gpu'];
    }

    public function addRAM()
    {
        $this->product->ram = $this->options['ram'];
    }

    public function addSensors()
    {
        $this->product->sensors = $this->options['sensors'];
    }

    public function addCamera()
    {
        $this->product->camera = $this->options['camera'];
    }

    public function addCase()
    {
        $this->product->case = $this->options['case'];
    }

    public function getProduct()
    {
        return $this->product;
    }
}

// Director
class SmartPhoneCreator
{
    public function buildPhone(SmartPhoneBuilder $builder)
    {
        $builder->addCPU();
        $builder->addGPU();
        $builder->addRAM();
        $builder->addSensors();
        $builder->addCamera();
        $builder->addCase();

        return $builder->getProduct();
    }
}

$creator = new SmartPhoneCreator();

$samsungBuilder = new SamsungPhoneBuilder([
    'cpu' => 'Snapdragon 820',
    'gpu' => 'Adreno 530',
    'ram' => 4,
    'sensors' => ['UV', 'Barometer', 'Altimeter', 'GPS', 'GLONASS'],
    'camera' => 12,
    'case' => 'Silver Metalic Case'
]);
$appleBuilder = new ApplePhoneBuilder([
    'cpu' => 'A10',
    'gpu' => 'Apple',
    'ram' => 3,
    'sensors' => ['UV', 'Barometer', 'Altimeter', 'GPS', 'GLONASS'],
    'camera' => 12,
    'case' => 'Black Matt Case'
]);
$htcBuilder = new HTCPhoneBuilder([
    'cpu' => 'Snapdragon 810',
    'gpu' => 'Adreno 520',
    'ram' => 4,
    'sensors' => ['UV', 'Barometer', 'Altimeter', 'GPS'],
    'camera' => 8,
    'case' => 'Blue Matt Case'
]);

$note7 = $creator->buildPhone($samsungBuilder);
$iphone7Plus = $creator->buildPhone($appleBuilder);
$htc = $creator->buildPhone($htcBuilder);

echo $note7;
echo $iphone7Plus;
echo $htc;