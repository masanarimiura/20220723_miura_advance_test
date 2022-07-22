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
  display: block;
  margin: 0 auto;
  width: 100vh;
  text-align: center;
}
.form__box {
  display: inline-block;
  margin: 0 auto;
  width: 100%;
}
.ttl {
  display: inline-block;
  margin: 0 auto;
  width: 80%;
  padding: 20px;
  font-size:20px
}


table, td, th {
border: 2px #ff0000 solid;
}













.box_con {
  max-width: 900px;
  margin: 0  auto;
}
@media only screen and (max-width: 768px) {
  .box_con {
    width: 95%;
  }
}
.box_con form {
  width: 100%;
}
.box_con form table {
  width: 100%;
}
.box_con form table tr {
  position: relative;
}
.box_con form table tr:after {
  content: "";
  position: absolute;
  width: 100%;
  left: 0;
  bottom: 0;
  height: 1px;
  border-bottom: dotted #cdcdcd 1px;
}
.box_con form table tr th {
  width: 30%;
  font-weight: normal;
  padding: 1em .5em;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
@media only screen and (max-width: 768px) {
  .box_con form table tr th {
    text-align: center;
    width: 100%;
    display: block;
    background: #97ae88;
    padding: .8em .2em;
    color: #fff;
  }
}
.box_con form table tr th span {
  background: #cd6f55;
  padding: 0 .3em;
  color: #fff;
  margin-left: .5em;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.box_con form table tr td {
  padding: 1em .5em;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
@media only screen and (max-width: 768px) {
  .box_con form table tr td {
    padding: 1.5em .5em;
    display: block;
    width: 100%;
  }
}
.box_con form table tr .box_br {
  display: block;
}
.box_con form table tr select {
  border: 1px solid #97ae88;
}
.box_con form table tr label input {
  cursor: pointer;
  display: none;
  vertical-align: middle;
}
.box_con form table tr .radio02-input + label {
  padding-left: 23px;
  margin-right: 20px;
  position: relative;
}
.box_con form table tr .radio02-input + label:before {
  content: "";
  display: block;
  position: absolute;
  top: 50%;
  left: 0;
  width: 16px;
  height: 16px;
  border: 1px solid #999;
  border-radius: 50%;
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
}
.box_con form table tr .radio02-input:checked + label:after {
  content: "";
  display: block;
  position: absolute;
  top: 50%;
  left: 3px;
  width: 12px;
  height: 12px;
  background: #97ae88;
  border-radius: 50%;
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
}
.box_con form table tr select, .box_con form table tr input, .box_con form table tr textarea {
  width: 100%;
  height: 3em;
  padding: .5em;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.box_con form table tr textarea {
  height: 10em;
}



.btn {
  text-align: center;
}
.btn input {
  display: inline-block;
  background: #eee;
  padding: .5em 4em;
  color: #000;
  text-decoration: none;
  cursor: pointer;
  border: none;
  -moz-transition: all 0.4s;
  -o-transition: all 0.4s;
  -webkit-transition: all 0.4s;
  transition: all 0.4s;
}
.btn input:hover {
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=70);
  opacity: 0.7;
}

  </style>
</head>

<body>
  <div class="form">
    <h2 class="ttl">お問い合わせ</h2>
    <form action="/" method="POST" >
      <table class="form__box">
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
          <td colspan="2">
            <input type="radio" name="gender" value="男性" checked>男性
            <input type="radio" name="gender" value="女性">女性
          </td>
        </tr>
        <tr>
          <th>メールアドレス <span class="required">※</span></th>
          <td colspan="2">
            <input type="email" name="email" value="{{ old('email') }}">
            <p class="example">例）test@example.com</p>
          </td>
        </tr>
        <tr>
          <th>郵便番号 <span class="required">※</span></th>
          <td colspan="2">
            <span>〒</span><input type="text" name="postcode" value="{{ old('postcode') }}">
            <p class="example">例）123-4567</p>
          </td>
        </tr>
        <tr>
          <th>住所 <span class="required">※</span></th>
          <td colspan="2">
            <input type="text" name="address" value="{{ old('address') }}">
            <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
          </td>
        </tr>
        <tr>
          <th>建物名</th>
          <td colspan="2">
            <input type="text" name="building_name" value="{{ old('building_name') }}">
            <p class="example">例)千駄ヶ谷マンション101</p>
          </td>
        </tr>
        <tr>
          <th>ご意見 <span class="required">※</span></th>
          <td colspan="2">
            <input type="text" name="opinion" value="{{ old('opinion') }}">
          </td>
        </tr>
      </table>
      <input type="submit" value="確認" class="btn">
    </form>
  </div>









<div class="box_con">
  <form method="post" action="mail.php">
  <table class="formTable">
  <tr>
      <th>確認</th>
      <td>
          <div class="box_br">
              <label>
                  <input name="contact_type" type="radio" value="1" class="radio02-input in_top" id="radio02-01">
                  <label for="radio02-01">テキスト1</label>
              </label>
          </div>
          <div class="box_br">
              <label>
                  <input name="contact_type" type="radio" value="1" class="radio02-input in_top" id="radio02-02">
                  <label for="radio02-02">テキスト2</label>
              </label>
          </div>
      </td>
    </tr>
    <tr>
      <th>ご用件</th>
      <td><select name="ご用件">
          <option value="">選択してください</option>
          <option value="ご質問・お問い合わせ">ご質問・お問い合わせ</option>
          <option value="リンクについて">リンクについて</option>
        </select></td>
    </tr>
    <tr>
      <th>お名前<span>必須</span></th>
      <td><input size="20" type="text" name="お名前" /></td>
    </tr>
    <tr>
      <th>電話番号（半角）<span>必須</span></th>
      <td><input size="30" type="text" name="電話番号" /></td>
    </tr>
    <tr>
      <th>Mail（半角）</th>
      <td><input size="30" type="text" name="Email" /></td>
    </tr>
    <tr>
      <th>お問い合わせ内容<br /></th>
      <td><textarea name="お問い合わせ内容" cols="50" rows="5"></textarea></td>
    </tr>
  </table>
  <div class="con_pri">
      <div class="box_pri">
          <div class="box_tori">
              <h4>プライバシー</h4>
              <p class="txt">プライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシー</p>
          </div>
          <div class="box_num">
              <h4>プライバシー</h4>
              <p class="txt">プライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシー</p>
          </div>
          <div class="box_num">
              <h4>プライバシー</h4>
              <p class="txt">プライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシー</p>
          </div>
          <div class="box_num">
              <h4>プライバシー</h4>
              <p class="txt">プライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシー</p>
          </div>
      </div>
  </div>
  <div class="box_check">
      <label>
          <input type="checkbox" name="acceptance-714" value="1" aria-invalid="false" class="agree"><span class="check">プライバシーポリシーに同意する</span>
      </label>
  </div>
  <p class="btn">
      <span><input type="submit" value="　 確認 　" /></span>
  </p>
  </form>
  </div>













</body>
</html>

<script>

</script>