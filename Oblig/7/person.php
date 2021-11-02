<?php
    class Base {
        public function __call($_name, $_arguments){
            $action  = substr($_name, 0, 4);
            $varName = substr($_name, 4);
        
            if(isset($this->{$varName})) {
                if ($action === "get_") return $this->{$varName};
                if ($action === "set_") $this->{$varName} = $_arguments[0];
            }
        }
    }

    class Person extends Base {
        public $name;
        protected $age;
        protected $mobile;
        protected $email;

        function __construct($name, $age, $mobile, $email) {
            $this->name = $name;
            $this->age = $age;
            $this->mobile = $mobile;
            $this->email = $email;
        }
    }

    class Elev extends Person {
        private $number;
        private $group;
        private $teacher;

        function __construct($name, $age, $mobile, $email, $number, $group, $teacher) {
            $this->name = $name;
            $this->age = $age;
            $this->mobile = $mobile;
            $this->email = $email;
            $this->number = $number;
            $this->group = $group;
            $this->teacher = $teacher;
        }
    }
?>