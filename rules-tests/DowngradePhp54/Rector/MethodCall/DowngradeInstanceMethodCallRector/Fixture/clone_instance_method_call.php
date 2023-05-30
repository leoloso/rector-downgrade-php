<?php

namespace Rector\Tests\DowngradePhp54\Rector\MethodCall\DowngradeInstanceMethodCallRector\Fixture;
final class SomeClass
{
    public function getName()
    {
        return 'foo';
    }

    public function run()
    {
        return (clone $this)->getName();
    }
}

?>
