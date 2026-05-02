<?php
class MikroTik {
    public function connect($host,$user,$pass){
        return true;
    }

    public function createPPPoE($user,$pass,$profile){
        return "PPPoE Created: $user";
    }

    public function disableUser($user){
        return "Disabled: $user";
    }

    public function enableUser($user){
        return "Enabled: $user";
    }
}
