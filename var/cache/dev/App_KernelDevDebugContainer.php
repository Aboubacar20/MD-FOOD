<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGbNntZZ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGbNntZZ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGbNntZZ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGbNntZZ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGbNntZZ\App_KernelDevDebugContainer([
    'container.build_hash' => 'GbNntZZ',
    'container.build_id' => '8f816a56',
    'container.build_time' => 1666917870,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGbNntZZ');
