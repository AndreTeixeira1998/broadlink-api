<?php

namespace BroadlinkApi\Device;

interface IdentifiedDeviceInterface extends NetDeviceInterface
{
    public function getId(): int;

    public function getSessionId(): int;
}