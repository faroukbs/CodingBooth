<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUDSsHMx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUDSsHMx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUDSsHMx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUDSsHMx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerUDSsHMx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'UDSsHMx',
    'container.build_id' => '79ce68d4',
    'container.build_time' => 1645666933,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUDSsHMx');
