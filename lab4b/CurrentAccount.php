<?php
include_once 'Account.php';

class CurrentAccount extends Account {
    private $accountNo;
    private $balance;

    public function withdraw() {
        return false;
    }
}
?>
