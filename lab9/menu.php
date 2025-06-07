<?php
    function getMenu($active, $sort = 'added') {
        $menu = [
            'view' => 'Просмотр',
            'add' => 'Добавление записи',
            'edit' => 'Редактирование записи',
            'delete' => 'Удаление записи'
        ];

        $html = '';
        foreach ($menu as $key => $value) {
            $class = ($key === $active) ? 'select' : '';
            $html .= "<a class='$class' href='?page=$key'>$value</a>";
        }

        if ($active === 'view') {
            $sorts = ['added' => 'По добавлению', 'surname' => 'По фамилии', 'birth' => 'По дате рождения'];
            $html .= '<div class="submenu">';
            foreach ($sorts as $key => $label) {
                $class = ($key === $sort) ? 'select' : '';
                $html .= "<a class='$class' href='?page=view&sort=$key'>$label</a>";
            }
            $html .= '</div>';
        }

        return $html;
    }
?>