<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLdpehxb\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLdpehxb/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerLdpehxb.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerLdpehxb\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerLdpehxb\appProdProjectContainer([
    'container.build_hash' => 'Ldpehxb',
    'container.build_id' => 'b39f0962',
    'container.build_time' => 1602557932,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLdpehxb');
