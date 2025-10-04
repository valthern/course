<?php
const BR = "<br />";

trait EmailSenderTrait
{
    public function sendEmail(): void
    {
        echo "Enviando email con un trait" . BR;
    }
}

trait DBTrait {
    public function save() {
        echo "Guardando en la base de datos". BR;
    }
}

trait LogTrait {
    private function log(string $message, string $fileName): void {
        if (!file_exists($fileName)) {
            file_put_contents($fileName, "");
        }

        $current = file_get_contents($fileName);
        $current .= date("Y-m-d H:i:s")." - ".$message."\n";
        file_put_contents($fileName, $current);
    }
}

class Invoice {
    use EmailSenderTrait, DBTrait, LogTrait;

    public function create() {
        $crear_factura = "Se creó la factura";
        echo $crear_factura . BR;
        $this->log($crear_factura, "log.txt");
    }
}

$invoice = new Invoice();
$invoice->sendEmail();
$invoice->save();
$invoice->create();