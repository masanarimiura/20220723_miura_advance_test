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

.box_con {
  max-width: 900px;
  margin: 0  auto;
}
.box_con h2 {
  text-align:center;
  padding: 20px;
  font-size:20px;
  width: 100%;
}
.box_con form {
  width: 100%;
}
.box_con form table {
  width: 100%;
}
.box_con form table tr th {
  width: 30%;
  font-weight: bold;
  text-align: left;
  padding-left: 10px;
}
.box_con form table tr th span {
  color: red;
  margin-left: 5px;
}
.box_con form table tr td {
  padding: 1em .5em;
}
.box_con form table tr input {
  width: 100%;
  height: 3em;
  padding: .5em;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.box_con form table tr .check-box {
  width: 10%;
  height: 2em;
}
.box_con form table tr td span {
  width: 5%;
  height: 3em;
  padding: .5em;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.box_con form table tr .postcode-box-input {
  width: 94%;
  height: 3em;
  padding: .5em;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.box_con h2 {
  text-align:center;
  padding: 20px;
  font-size:20px;
  width: 100%;
}
.submit-box {
  text-align:center;
  padding: 20px;
  font-size:20px;
  width: 100%;
}
.submit-btn{
  border-radius: 6px;
  margin: 32px auto 0;
  padding-top: 20px;
  padding-bottom: 20px;
  width: 280px;
  display: block;
  background: black;
  color: #fff;
  font-weight: bold;
  font-size: 20px;
  border: none;
  cursor: pointer;
}
  </style>
</head>

<body>
<h2 class="ttl">内容確認</h2>
  <form action="/confirm" method="POST">
    <table>
      @csrf
      <tr>
        <th>お名前</th>
        <td>
          <p class="input__content">{{$last_name}}</p>
          <input name="last_name" value="{{$last_name}}" type="hidden">
        </td>
        <td>
          <p class="input__content">{{$first_name}}</p>
          <input name="first_name" value="{{$first_name}}" type="hidden">
        </td>
      </tr>
      <tr>
        <th>性別</th>
        <td>
          <p class="input__content">{{$gender}}</p>
          <input name="gender" value="{{$gender}}" type="hidden">
        </td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td>
          <p class="input__content">{{$email}}</p>
          <input name="email" value="{{$email}}" type="hidden">
        </td>
      </tr>
      <tr>
        <th>郵便番号</th>
        <td>
          <p class="input__content">{{$postcode}}</p>
          <input name="postcode" value="{{$postcode}}" type="hidden">
        </td>
      </tr>
      <tr>
        <th>住所</th>
        <td>
          <p class="input__content">{{$address}}</p>
          <input name="address" value="{{$address}}" type="hidden">
        </td>
      </tr>
      <tr>
        <th>建物名</th>
        <td>
          <p class="input__content">{{$building_name}}</p>
          <input name="building_name" value="{{$building_name}}" type="hidden">
        </td>
      </tr>
      <tr>
        <th>ご意見</th>
        <td>
          <p class="input__content">{{$opinion}}</p>
          <input name="opinion" value="{{$opinion}}" type="hidden">
        </td>
      </tr>
    </table>
    <button type="submit" class="btn">送信</button>
    <button type="submit" formmethod="get">修正する</button>
  </form>
</body>
</html>

<script>

</script>