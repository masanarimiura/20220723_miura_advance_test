<body>
<h2>ｎ</h2>
<form action="/" method="POST">
    <table>
      @csrf
      <tr>
        <th>お名前</th>
        <td>
          <input type="text" name="last-name">
          <p class="example">例）山田</p>
        </td>
        <td>
          <input type="text" name="first-name">
          <p class="example">例）太郎</p>
        </td>
      </tr>
      <tr>
        <th>性別</th>
        <td>
          <input type="radio" name="gender" value="男性" checked>男性
          <input type="radio" name="gender" value="女性">女性
        </td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td>
          <input type="email" name="email">
          <p class="example">例）test@example.com</p>
        </td>
      </tr>
      <tr>
        <th>郵便番号</th>
        <td>
          <input type="text" name="postcode">
          <p class="example">例）123-4567</p>
        </td>
      </tr>
      <tr>
        <th>住所</th>
        <td>
          <input type="text" name="address">
          <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
        </td>
      </tr>
      <tr>
        <th>建物名</th>
        <td>
          <input type="text" name="building_name">
          <p class="example">例)千駄ヶ谷マンション101</p>
        </td>
      </tr>
      <tr>
        <th>ご意見</th>
        <td>
          <textarea type="text" name="address"></textarea>
        </td>
      </tr>
    </table>
    <input type="submit" value="確認">
  </form>
</body>