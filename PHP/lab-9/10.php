<?php

class Counter {
    private static $count = 0;

    public static function increment() {
        self::$count++;
    }

    public static function getCount() {
        return self::$count;
    }
}

// Accessing static methods and properties without creating objects
Counter::increment();
Counter::increment();
Counter::increment();

echo "Count: " . Counter::getCount() . "\n";

?>
