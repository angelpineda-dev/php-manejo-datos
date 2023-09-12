<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase{
    public function test_email(){
        $email = Validate::email('i@email.com');
        $this->assertTrue($email);

        $email = Validate::email('i@@email.com');
        $this->assertFalse($email);
    }

    public function test_url(){
        $url = Validate::url('https://platzi.com');
        $this->assertTrue($url);

        $url = Validate::url('platzi.com');
        $this->assertFalse($url);
    }

    public function test_password(){
        $pass = Validate::password('123456789');
        $this->assertTrue($pass);

        $pass = Validate::password('abcdefghjk');
        $this->assertFalse($pass);
    }
}