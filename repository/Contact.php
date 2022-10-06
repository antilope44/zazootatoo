
<?php


class Contact {
    private PDO $_connexion;

    public function __construct() {
    $this->_connexion = DataBase::getConnexion();
    }

public function contactMessage() {
$query = $this->_connexion->prepare("
    INSERT INTO Users(id, Firstname, Lastname, Email, message)
    VALUES (UUID(), :Firstname, :Lastname, :Email, :message)
");

$query->bindValue(':Firstname', $_POST['formFirstname']);
$query->bindValue(':Lastname', $_POST['formLastname']);
$query->bindValue(':Email', $_POST['formEmail']);
$query->bindValue(':message', $_POST['formMessage']);

$query =$this->_connexion->prepare("SELECT * FROM Users");
$query->execute();
}

public function pushMessage() {
$users = [];
while($row = $this->_query->fetch(\PDO::FETCH_ASSOC)) {
    array_push($users, $row);
}
}
}    
?>
