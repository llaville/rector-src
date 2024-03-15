<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Transform\Rector\ArrayDimFetch\ArrayDimFetchToMethodCallRector;
use Rector\Transform\ValueObject\ArrayDimFetchToMethodCall;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig
        ->ruleWithConfiguration(ArrayDimFetchToMethodCallRector::class, [
            new ArrayDimFetchToMethodCall('SomeClass', 'make'),
        ]);
};
