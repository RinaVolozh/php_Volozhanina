<?php
    require_once 'db.php';
    function editContact($pdo, $sort = 'added', $page = 1) {
        $id = $_GET['id'] ?? null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button']) && $id) {
            $stmt = $pdo->prepare("UPDATE contacts SET surname=?, name=?, lastname=?, gender=?, birth_date=?, phone=?, address=?, email=?, comment=? WHERE id=?");
            $stmt->execute([
                $_POST['surname'], $_POST['name'], $_POST['lastname'], $_POST['gender'],
                $_POST['birth_date'], $_POST['phone'], $_POST['address'], $_POST['email'], $_POST['comment'], $id
            ]);
        }

        $list = $pdo->query("SELECT id, surname, name FROM contacts ORDER BY surname, name")->fetchAll(PDO::FETCH_ASSOC);
        $html = "<div class='div-edit'>";
        foreach ($list as $contact) {
            $class = ($contact['id'] == $id) ? 'currentRow' : '';
            $html .= "<div class='$class'><a href='?page=edit&id={$contact['id']}'>{$contact['surname']} {$contact['name']}</a></div>";
            if (!$id) $id = $contact['id'];
        }
        $html .= "</div>";

        $stmt = $pdo->prepare("SELECT * FROM contacts WHERE id = ?");
        $stmt->execute([$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if (!$row) {
            return $html . "<p>Контакт с ID $id не найден.</p>";
        }
    
        $button = 'Сохранить';
        
        $row = $pdo->query("SELECT * FROM contacts WHERE id = $id")->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            return "<p>Контакт с ID $id не найден.</p>";
        }

        ob_start();
        include 'form.php';
        return $html . ob_get_clean();
    }
?>