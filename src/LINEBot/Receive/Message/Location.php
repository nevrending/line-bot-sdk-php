<?php
/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */
namespace LINE\LINEBot\Receive\Message;

use LINE\LINEBot\Receive\Message;

class Location
{
    use Message;

    /** @var array */
    private $config;
    /** @var array */
    private $result;
    /** @var array */
    private $location;

    public function __construct(array $config, array $result)
    {
        $this->config = $config;
        $this->result = $result;
        $this->location = $result['content']['location'];
    }

    public function getResult()
    {
        return $this->result;
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function isLocation()
    {
        return true;
    }

    public function getText()
    {
        return $this->location['title']; // `$this->location['text'] }` is always null
    }

    public function getTitle()
    {
        return $this->location['title'];
    }

    public function getAddress()
    {
        return $this->location['address'];
    }

    public function getLatitude()
    {
        return $this->location['latitude'];
    }

    public function getLongitude()
    {
        return $this->location['longitude'];
    }
}
