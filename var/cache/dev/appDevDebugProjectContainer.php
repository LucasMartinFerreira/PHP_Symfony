<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerW5jzz4c\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerW5jzz4c/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerW5jzz4c.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerW5jzz4c\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerW5jzz4c\appDevDebugProjectContainer(array(
    'container.build_hash' => 'W5jzz4c',
    'container.build_id' => 'f3db408e',
    'container.build_time' => 1518857907,
));
