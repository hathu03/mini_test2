<?php
include_once "Person.php";

class PersonManager
{
    public $path;
    public $person;

    public function __construct()
    {
        $this->path = "data.json";
        $this->person = $this->load();
    }

    public function saveData($data)
    {
        $dataJson = json_encode($data);
        file_put_contents($this->path, $dataJson);
    }

    public function load()
    {
        $dataJson = file_get_contents($this->path);
        if (!empty($dataJson)) {
            $data = json_decode($dataJson, true);
            return $this->convertToObj($data);
        } else {
            return [];
        }
    }

    public function display()
    {
        return $this->person;
    }

    public function addData($request)
    {
        $persons = $this->load();
        $person = new Person($request['name'], $request['age']);
        array_push($persons, $person);
        $this->saveData($persons);
    }

    function sortUp()
    {
        $persons = $this->load();
        usort($persons, function ($a, $b) {
            return $a->getAge() > $b->getAge();
        });
        $this->saveData($persons);
    }
    function sortDown()
    {
        $persons = $this->load();
        usort($persons, function ($a, $b) {
            return $a->getAge() < $b->getAge();
        });
        $this->saveData($persons);
    }
    function reset() {
        $persons = $this->load();
        usort($persons, function ($a, $b) {
            return $a->getName() > $b->getName();
        });
        $this->saveData($persons);
    }
    function searchName($request)
    {
        $name = $request['name'];
        foreach ($this->person as $person) {
            if ($person->getName() == $name) {
                echo 'Name: ' . $person->getName() . " - " . 'Age: ' . $person->getAge();
                return true;
            }
        }
        echo "Not found Object";
    }
    function convertToObj($arr)
    {
        $persons = [];
        foreach ($arr as $key => $value) {
            $person = new Person($value['name'], $value['age']);
            array_push($persons, $person);
        }
        return $persons;
    }
}