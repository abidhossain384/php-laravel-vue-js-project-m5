<?php

class UserSaver {
    public $username;
    public $email;
    public $file;

    public function __construct($username, $email) {
        $this->username = $username;
        $this->email = $email;
        $this->file = $file = 'users.txt';
    }

    public function save() {
        try {
            $handle = fopen($this->file, 'a');

            if (!$handle) {
                throw new Exception("Error: File not accessible");
            }

            $line = $this->username . " - " . $this->email;
            fwrite($handle, $line);

            fclose($handle);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

$user2 = new UserSaver("sara", "sara@example.com");
$user2->save();