<?php

namespace UAParser\Result;

/**
 * @author Benjamin Laugueux <benjamin@yzalis.com>
 */
interface ResultInterface
{
    /**
     * @return BrowserResultInterface
     */
    public function getBrowser();

    /**
     * @return OperatingSystemResultInterface
     */
    public function getOperatingSystem();

    /**
     * @return DeviceResultInterface
     */
    public function getDevice();

    /**
     * @return EmailClientResultInterface
     */
    public function getEmailClient();

    /**
     * @return RenderingEngineResultInterface
     */
    public function getRenderingEngine();

    /**
     * Extracts data from an array.
     *
     * @param array $data An array.
     */
    public function fromArray($data);
}
