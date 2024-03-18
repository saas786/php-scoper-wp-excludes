<?php

return \StubsGenerator\Finder::create()
    ->in('source/vendor/event-tickets')
    ->notPath('build')
    ->notPath('common/lang')
    ->notPath('common/node_modules')
    ->notPath('common/vendor')
    ->notPath('lang')
    ->notPath('vendor')
    ->sortByName()
    ;
