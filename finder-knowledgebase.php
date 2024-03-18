<?php

return \StubsGenerator\Finder::create()
    ->in('source/vendor/knowledgebase')
    ->notPath('vendor')
    ->sortByName()
    ;
