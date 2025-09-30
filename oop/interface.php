<?php
const BR = "<br />";

interface SendInterace {
    public function send(string $message):void;
}

interface SaveInterface {
    public function save():void;
}

class Document implements SendInterace, SaveInterface {
    public function send(string $message):void{
        echo "Se envía la venta: $message". BR;
    }

    public function save():void{
        echo "Se guarda la venta en la nube". BR;
    }
}

class BeerRespository implements SaveInterface {
    public function save():void{
        echo "Se guarda la cerveza en la base de datos". BR;
    }
}

class SaveProcess {
    public function store(SaveInterface $entity):void{
        $entity->save();
    }
}