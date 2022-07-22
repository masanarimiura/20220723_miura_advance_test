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


  </style>
</head>

<body>
<h2>お問い合わせ</h2>
<form action="/" method="POST">
    <table>
      @csrf
      <tr>
        <th>お名前</th>
        <td>
          <table>
              <td>
                <input type="text" name="last-name">
                <input type="text" name="first-name">
              </td>
              <td>
            <p class="example">例）山田</p>
            <p class="example">例）太郎</p>
          </table></td>
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
        </td>
      </tr>
      <tr>
        <th>郵便番号</th>
        <td>
          <input type="text" name="age">
        </td>
      </tr>
      <tr>
        <th>登録日</th>
        <td>
          <input type="text" name="registered_at">
        </td>
      </tr>
    </table>
    <input type="submit" value="送信">
  </form>




</body>
</html>

<script>

</script>