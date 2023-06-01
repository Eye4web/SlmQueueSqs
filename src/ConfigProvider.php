<?php

namespace SlmQueueSqs;

class ConfigProvider
{
    public function __invoke(): array
    {
        $module = new Module();
        $config = $module->getConfig();

        return [
            'dependencies' => $config['service_manager'],
            'laminas-cli' => $config['laminas-cli'],
        ];
    }
}
