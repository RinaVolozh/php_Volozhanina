<h3>Задание 3</h3><br>
<form method="POST">
  <input type="text" name="user_input">
  <button type="submit">Отправить</button>
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['user_input'];
        if ($input != null) {
            function isHttpDomain($url) {
                $examp = '/^http:\/\/[a-z0-9\-]+\.(ru|com)$/i';
                if (preg_match($examp, $url)) {
                    return true;
                } else {
                    return false;
                }
            }
            if (isHttpDomain($input)) {
                echo "$input — правильный домен с http";
            } else {
                echo "$input — неправильный домен";
            }
        } 
    }
?>
<h3>Задание 15</h3><br>
<?php
    $sim = 'a\a abc';
    $result = preg_replace('/a\\\\a/', '!', $sim);
    echo $result;
?>
<h3>Задание 17</h3><br>
<?php
    $simv = 'aeeea aeea aea axa axxa axxxa';
    preg_match_all('/a(ee|x+)a/', $simv, $matches);
    echo implode(', ', $matches[0]);
?>
<h3>Задание 25</h3><br>
<?php
    $simvl = 'aaa * bbb ** eee * **';
    $result = preg_replace('/(?<!\*)\*(?!\*)/', '!', $simvl);
    echo $result;
?>
<h3>Задание 41</h3><br>
<?php
    $simvol = 'aba accca azzza wwwwa';
    $result = preg_replace('/a[^a]+a/', '!', $simvol);
    echo $result;
?>