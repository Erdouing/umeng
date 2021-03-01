<?php

/*
 * This file is part of the cheney/umeng.
 *
 * (c) cheney <990806808@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Erdouing\umeng\notification\android;

use Erdouing\umeng\notification\AndroidNotification;

class AndroidBroadcast extends AndroidNotification
{
    public function __construct()
    {
        parent::__construct();
        $this->data['type'] = 'broadcast';
    }
}
