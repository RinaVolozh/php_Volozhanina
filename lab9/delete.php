<?php
    require_once 'db.php';
    function deleteContact($pdo, $sort = 'added', $page = 1) {
        $id = $_GET['id'] ?? null;
        $msg = '';
    
        if ($id) {
            $stmt = $pdo->prepare("SELECT surname FROM contacts WHERE id = ?");
            $stmt->execute([$id]);
            $name = $stmt->fetchColumn();
    
            $pdo->prepare("DELETE FROM contacts WHERE id = ?")->execute([$id]);
            $msg = "<div class='success'>Запись с фамилией $name удалена</div>";
        }
    
        $rows = $pdo->query("SELECT id, surname, name FROM contacts ORDER BY surname, name")->fetchAll(PDO::FETCH_ASSOC);
        $html = "<div class='div-edit'>";
        foreach ($rows as $row) {
            $html .= "<div><a href='?page=delete&id={$row['id']}'>{$row['surname']} {$row['name']}</a></div>";
        }
        $html .= "</div>";
    
        return $msg . $html;
    }
?>