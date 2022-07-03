<?php
    class BankAccount {
        public $accountNumber;
        protected $type;
        private $belongs;
        private $balance;
        private $status;
        
        public function openAccount($ty){
            $this->setType($ty);
            $this->setStatus(true);
            if ($ty == "Saver Account"){
                $this->setBalance(150);
            } elseif ($ty == "Current Account"){
                $this->setBalance(50);
            }
        }
        public function closeAccount(){
            if ($this->getBalance() > 0){
                echo "<p>Bank Account with positive balance, you need to withdraw your money before close your account.</p>";
            } elseif ($this->getBalance() < 0){
                echo "<p>Overdraft bank account, to avoid any futher interest please deposit some cash.</p>";
            } else{
                $this->setStatus(false);
            }
        }
        public function deposit($value){
            if ($this->getStatus()){
                $this->setBalance($this->getBalance() + $value);
                echo "One deposit of £".number_format($value, 2, '.') . " was completed on " . $this->getBelongs(). "'s account.";
                echo "<br>";
            } else {
                echo "<p>Bank Account closed, you cannot deposit any cash.</p>";
            }
        }
        public function withdraw($value){
            if ($this->getStatus()){
                if ($this->getBalance() >= $value){
                    $this->setBalance($this->getBalance() - $value);
                } else {
                    echo "<p>Insufficient balance.</p>";
                }
            }else{
                echo "<p>You cannot withdraw because this account is closed.</p>";
            }
        }
        public function monthlyPay(){
            if ($this->getType() == "Current Account"){
                $value = 12;
            }elseif ($this->getType() == "Saver Account"){
                $value = 20;
            }
            if ($this->getStatus()){
                $this->setBalance($this->getBalance() - $value);
            } else {
                echo "<p>Seek for assistance.</p>";
            }
        }

        public function __construct(){
            $this->setBalance(0);
            $this->setStatus(false);
            echo "<p>Successful Account created.</p>";
        }
        public function getAccountNumber(){
                return $this->accountNumber;
        } 
        public function setAccountNumber($accountNum){
                $this->accountNumber = $accountNum;
        }
        public function getType(){
                return $this->type;
        }
        public function setType($ty){
            $this->type = $ty;
        }
        public function getBelongs(){
                return $this->belongs;
        }
        public function setBelongs($bel){
                $this->belongs = $bel;
        }
        public function getBalance(){
                return $this->balance;
        }
        public function setBalance($bal){
                $this->balance = $bal;
        }
        public function getStatus(){
                return $this->status;
        }
        public function setStatus($sta){
                $this->status = $sta;
        }
    }