<?php

namespace Appsco\FilesystemBundle;

use Appsco\FilesystemBundle\DependencyInjection\FilesystemProviderCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class AppscoFilesystemBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container); // TODO: Change the autogenerated stub
        $container->addCompilerPass(new FilesystemProviderCompilerPass());
    }

}
