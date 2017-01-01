<?php

require_once __DIR__ . '/../vendor/autoload.php';

class UserTest extends PHPUnit_Extensions_Database_TestCase {

    protected static $connection;

    public function getConnection() {
        //nowy obiekt tej klasy:
        $conn = new PDO(
                $GLOBALS['DB_DSN'], $GLOBALS['DB_USER'], $GLOBALS['DB_PASSWD']
        );
        // zwraca obiekt z połączeniem testowym.
        return new PHPUnit_Extensions_Database_DB_DefaultDatabaseConnection($conn, $GLOBALS['DB_NAME']);
    }

    // 2)
    public function getDataSet() {
        return $this->createFlatXMLDataSet(__DIR__ . '/../dataset/Users.xml');
    }

    public static function setUpBeforeClass() {
        self::$connection = new mysqli(
                $GLOBALS['DB_HOST'], $GLOBALS['DB_USER'], $GLOBALS['DB_PASSWD'], $GLOBALS['DB_NAME']
        );

        if (self::$connection->connect_error) {
            die(self::$connection->connect_error);
        }
    }

    public static function tearDownAfterClass() {
        self::$connection->close();
        self::$connection = null;
    }

    public function testIfLoginReturnsIdWithCorrectParams() {
        
        $user = new User((string)1);
        $user->setEmail( 'testowy@rmail.com');
        $user->setAddress('testowyadres');
        $user->setSurname('testsurname');
        $user->setName('testname');
        $user->setHashedPassword('$2y$10$gGcjncqnXJKVMkJRRLbEO.j8fA3Q1q2U9hH3oXd6AmhojlJlU4ksm', false);
//        logowanie będzie statyczne
        $this->assertEquals($user, User::login(self::$connection, 'testowy@rmail.com', 'testowy@rmail.com'));
    }

    public function testIfGetUserByEmailReturnCorrectUser() {
        $user = new User(1, 'testowy@rmail.com');
        $user->setHashedPassword('$2y$10$gGcjncqnXJKVMkJRRLbEO.j8fA3Q1q2U9hH3oXd6AmhojlJlU4ksm', false);
        $userFromDB = User::getUserByEmail(self::$connection, 'testowy@rmail.com');
        $this->assertEquals($user, $userFromDB);
    }
    
    public function testIfIsPossibleToLoadUserByEmail() {
        $user = new User((string)1);
        $user->setEmail( 'testowy@rmail.com');
        $user->setAddress('testowyadres');
        $user->setSurname('testsurname');
        $user->setName('testname');
        $user->setHashedPassword('$2y$10$gGcjncqnXJKVMkJRRLbEO.j8fA3Q1q2U9hH3oXd6AmhojlJlU4ksm', false);
        
        $userFromDB = User::loadByEmail(self::$connection, 'testowy@rmail.com');
        $this->assertEquals($user, $userFromDB);
    }
    

}
