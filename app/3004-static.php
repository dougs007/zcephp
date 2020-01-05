
<?php

class Base
{
  public static function whoami()
  {
    echo "Base ";
  }

  public static function whoareyou()
  {
    static::whoami();
  }
}

class A extends Base
{
  public static function whoami()
  {
    echo "A ";
  }

  public static function test()
  {
    Base::whoareyou();
    self::whoareyou();
    parent::whoareyou();
    A::whoareyou();
    static::whoareyou();
  }
}

class B extends A
{
  public static function whoami()
  {
    echo "B ";
  }
}
B::test();

// A. B B B B B
// B. Base A Base A B
// C. Base B B A B -- This is the correct.
// D. Base B A A B
