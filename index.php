<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Partie 2</title>
    </head>
    <body>
        <?= include 'bankAccount.php'; ?>
        <?php $holder = ['John'=>[1250, 2.3], 'Jane'=>[1500,2.3], 'David'=>[12000, 2.3], 'Toto'=>[1000, 2.3], 'Lala'=>[5000, 2.3]];
         
         $account = [];
         
         $i = 0;
         foreach($holder as $name => $value):
            $account[$i] = new BankAccount($name, $value[0], $value[1], 'euros');?>
            <div class="text-center">
                <ul>
                    <li>Titulaire:<b> <?= $account[$i]->holder(); ?></b></li>
                    <li>Solde:<b> <?= $account[$i]->sold().' '.$account[$i]->currency(); ?></b></li>
                    <li>Taux d'intérêt:<b> <?= $account[$i]->interestRate(); ?>%</b></li>
                </ul>
                <hr width="20%" />
            </div>
            <?php
            $i++;
         endforeach;
        ?>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>