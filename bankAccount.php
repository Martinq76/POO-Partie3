<?php
class BankAccount {
    private $_holder;
    private $_sold;
    private $_interestRate;
    private $_currency;

    public function credit($amount) {
        $this->_sold += $amount;
    }

    public function debit($amount) {
        $this->_sold -= $amount;
    }

    public function holder() {
        return $this->_holder;
    }

    public function sold() {
        return $this->_sold;
    }

    public function interestRate() {
        return $this->_interestRate;
    }

    public function currency() {
        return $this->_currency;
    }

    public function setHolder() {
        $this->_holder = 'Martin';
    }

    public function setSold() {
        $this->_sold = 500;
    }

    public function setInterestRate() {
        $this->_interestRate = 1.8;
    }

    public function setCurrency() {
        $this->_currency = '€';
    }

    public function __construct($newHolder, $newSold, $newInterestRate, $newCurrency) {
        $this->_holder = $newHolder;
        $this->_sold = $newSold;
        $this->_interestRate = $newInterestRate;
        $this->_currency = $newCurrency;
    }
}
?>