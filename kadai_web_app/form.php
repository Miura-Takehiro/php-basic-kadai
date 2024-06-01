<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>課題</title>
</head>

<body>
  <h2>社員情報入力フォーム</h2>
  <form action="confirm.php" method="post">
    <table>
      <tr>
        <td>社員名</td>
        <td>
          <input type="text" name="user_name" value="">
        </td>
      </tr>
      <tr>
        <td>年齢</td>
        <td>
          <input type="int" name="user_age" value="">
        </td>
      </tr>
      <tr>
        <td>所属部署</td>
        <td>
        <select id="department" name="department">
        <option value="開発部" selected>開発部</option>
        <option value="人事部">人事部</option>
        <option value="営業部">営業部</option>
        </td>
      </tr>
      <tr>
    </table>
    <input type="submit" value="送信">
  </form>
</body>

</html>