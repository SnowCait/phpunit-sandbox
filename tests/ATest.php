<?php
use PHPUnit\Framework\TestCase;

class ATest extends TestCase
{
    public function test1()
    {
        sleep(5);
        $pdo = new PDO('mysql:host=localhost;dbname=mysql', 'root', 'root');
        $statement = $pdo->query('SELECT VERSION()');
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        var_dump($row);
        $this->assertTrue(true);
    }
}
