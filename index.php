<!DOCTYPE html> 
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bank Account</title>
    </head>
    <body>
        <pre>
        <?php       
            require_once 'BankAccount.php';
            $p1 = new BankAccount();
            $p1->openAccount("Current Account");
            $p1->setAccountNumber(1234);
            $p1->setBelongs("Andre");
            $p1->deposit(150);
            //$p1->withdraw(120);
            //$p2 = new BankAccount();
            print_r($p1);
        ?>
        </pre>
    </body>
</html>