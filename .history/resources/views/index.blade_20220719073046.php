<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>advance_test</title>
  <style>
    html, body, div, span, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
abbr, address, cite, code,
del, dfn, em, img, ins, kbd, q, samp,
small, strong, sub, sup, var,
b, i,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, figcaption, figure,
footer, header, hgroup, menu, nav, section, summary,
time, mark, audio, video {
    margin:0;
    padding:0;
    border:0;
    outline:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}

body {
    line-height:1;
}

article,aside,details,figcaption,figure,
footer,header,hgroup,menu,nav,section {
    display:block;
}

nav ul {
    list-style:none;
}

blockquote, q {
    quotes:none;
}

blockquote:before, blockquote:after,
q:before, q:after {
    content:'';
    content:none;
}

a {
    margin:0;
    padding:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}

/* change colours to suit your needs */
ins {
    background-color:#ff9;
    color:#000;
    text-decoration:none;
}

/* change colours to suit your needs */
mark {
    background-color:#ff9;
    color:#000;
    font-style:italic;
    font-weight:bold;
}

del {
    text-decoration: line-through;
}

abbr[title], dfn[title] {
    border-bottom:1px dotted;
    cursor:help;
}

table {
    border-collapse:collapse;
    border-spacing:0;
}

/* change border colour to suit your needs */
hr {
    display:block;
    height:1px;
    border:0;  
    border-top:1px solid #cccccc;
    margin:1em 0;
    padding:0;
}

input, select {
    vertical-align:middle;
}
/* ここまでreset.css */
.form {
  text-align: center;
}
.form__box {
  display: block;
  margin: 0 auto;
  width: 80%;
}
.ttl {
  display: inline-block;
  padding: 20px;
  font-size:20px
}
.table__head {
  text-align: left;
  vertical-align: middle;
  padding-left: 20px;
  width: 30%;
}

  </style>
</head>

<body>
  <div class="form">
    <h2 class="ttl">お問い合わせ</h2>
    <form action="/" method="POST" class="form__box">
      <table>
        @csrf
        <tr>
          <th class="table__head">お名前 <span class="required">※</span></th>
          <td>
            <input type="text" name="last_name" value="{{ old('last_name') }}">
            <p class="example">例）山田</p>
          </td>
          <td>
            <input type="text" name="first_name" value="{{ old('first_name') }}">
            <p class="example">例）太郎</p>
          </td>
        </tr>
        <tr>
          <th>性別 <span class="required">※</span></th>
          <td>
            <input type="radio" name="gender" value="男性" checked>男性
            <input type="radio" name="gender" value="女性">女性
          </td>
        </tr>
        <tr>
          <th>メールアドレス <span class="required">※</span></th>
          <td>
            <input type="email" name="email" value="{{ old('email') }}">
            <p class="example">例）test@example.com</p>
          </td>
        </tr>
        <tr>
          <th>郵便番号 <span class="required">※</span></th>
          <td>
            <span>〒</span><input type="text" name="postcode" value="{{ old('postcode') }}">
            <p class="example">例）123-4567</p>
          </td>
        </tr>
        <tr>
          <th>住所 <span class="required">※</span></th>
          <td>
            <input type="text" name="address" value="{{ old('address') }}">
            <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
          </td>
        </tr>
        <tr>
          <th>建物名</th>
          <td>
            <input type="text" name="building_name" value="{{ old('building_name') }}">
            <p class="example">例)千駄ヶ谷マンション101</p>
          </td>
        </tr>
        <tr>
          <th>ご意見 <span class="required">※</span></th>
          <td>
            <input type="text" name="opinion" value="{{ old('opinion') }}">
          </td>
        </tr>
      </table>
      <input type="submit" value="確認" class="btn">
    </form>
  </div>
</body>
</html>

<script>

</script>