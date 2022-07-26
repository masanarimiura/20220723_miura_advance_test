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
  height: 50px;
  padding: .5em;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.box_con form table tr .check-box {
  width: 10%;
  height: 2em;
}
.box_con form table tr td .example {
  color:grey;
}
.box_con form table tr div {
  display:flex;
  justify-content: space-between;
  width: 100%;
  height: 50px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.box_con form table tr div .postcode-box-input{
  width: 100%;
  height: 50px;
  padding: .5em;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.box_con form table tr .opinion{
  width: 100%;
  height: 10em;
  padding: .5em;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  overflow-wrap: break-word;
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
.notError {
  display:none;
}
.error {
  width : 100%;
  padding: 0;
  display: inline-block;
  font-size: 90%;
  color: red;
  box-sizing: border-box;
}
  </style>
  <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
</head>

<body>
  <div class="box_con">
    <h2>お問い合わせ</h2>
    <form action="/" method="POST" class="h-adr">
      <span class="p-country-name" style="display:none;">Japan</span>
      <table>
        @csrf
        <tr>
          <th>お名前<span >※</span></th>
          <td>
            <input type="text" name="last_name" value="{{ old('last_name') }}" id="last_name">
            <p class="example">例）山田</p>
            <p class="notError" id="last_name_error">※姓を入力してください</p>
          </td>
          <td>
            <input type="text" name="first_name" value="{{ old('first_name') }}" id="first_name">
            <p class="example">例）太郎</p>
            <p class="notError" id="first_name_error">※名を入力してください</p>
          </td>
        </tr>
        <tr>
          <th>性別<span >※</span></th>
          <td colspan="2">
            <input type="radio" name="gender" value="男性" checked class="check-box">男性
            <input type="radio" name="gender" value="女性" class="check-box">女性
          </td>
        </tr>
        <tr>
          <th>メールアドレス<span >※</span></th>
          <td colspan="2">
            <input type="email" name="email" value="{{ old('email') }}" id="email">
            <p class="example">例）test@example.com</p>
            <p class="notError" id="email_error">※メールアドレスを正しく入力してください</p>
          </td>
        </tr>
        <tr>
          <th>郵便番号<span>※</span></th>
          <td colspan="2" class="postcode-box">
            <div>
              <span>〒</span><input type="text" name="postcode" value="{{ old('postcode') }}" class="postcode-box-input p-postal-code" size="8" maxlength="8" id="postcode">
            </div>
            <p class="example">例）123-4567</p>
            <p class="notError" id="postcode_error">※郵便番号を8字以内で正しく入力してください</p>
          </td>
        </tr>
        <tr>
          <th>住所<span >※</span></th>
          <td colspan="2">
            <input type="text" name="address" value="{{ old('address') }}" class="p-region p-locality p-street-address p-extended-address" id="address">
            <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
            <p class="notError" id="address_error">※住所を正しく入力してください</p>
          </td>
        </tr>
        <tr>
          <th>建物名</th>
          <td colspan="2">
            <input type="text" name="building_name" value="{{ old('building_name') }}" id="building_name">
            <p class="example">例)千駄ヶ谷マンション101</p>
            <p class="notError" id="building_name_error">※建物名を正しく入力してください</p>
          </td>
        </tr>
        <tr>
          <th>ご意見<span >※</span></th>
          <td colspan="2">
            <input type="text" name="opinion" value="{{ old('opinion') }}" class="opinion" id="opinion">
            <p class="notError" id="opinion_error">※ご意見を120字以内で入力してください</p>
          </td>
        </tr>
      </table>
      <div class="submit-box">
        <input type="submit" value="確認" class="submit-btn">
      </div>
    </form>
  </div>


<script>
  window.addEventListener('DOMContentLoaded', function(){
    const last_name = document.querySelector("#last_name");
    last_name.addEventListener("input",function(){
      const last_name_error = document.querySelector('#last_name_error');
      if(this.value.length === 0) {
        last_name_error.className = 'error';
      } else if(this.value.length != 0){
        last_name_error.className = 'notError';
      }
      
    });
    const first_name = document.querySelector("#first_name");
    first_name.addEventListener("input",function(){
      const first_name_error = document.querySelector('#first_name_error');
      if(this.value.length === 0) {
        first_name_error.className = 'error';
      } else if(this.value.length != 0){
        first_name_error.className = 'notError';
      }
    });
    const email = document.querySelector("#email");
    email.addEventListener("input",function(){
      const email_error = document.querySelector('#email_error');
      const emailPattern = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]+.[A-Za-z0-9]+$/;
      if(this.value.length === 0) {
        email_error.className = 'error';
      } else if(this.value.length > 0 && this.value.length <= 255 ){
        if(emailPattern.test(this.value)){
          email_error.className = 'notError';
        } else if(emailPattern.test(this.value) == "false"){
          email_error.className = 'error';
        } 
      } else if(this.value.length > 255){
        email_error.className = 'error';
      }
    });
    const postcode = document.querySelector("#postcode");
    postcode.addEventListener("input",function(){
      if(this.value.length == 3) {
        
      } 
    });
    postcode.addEventListener("input",function(){
      const postcode_error = document.querySelector('#postcode_error');
      const postcodePattern1 = /^[0-9０-９]{7}$/;
      const postcodePattern2 = /^[0-9０-９]{3}-[0-9０-９]{4}$/;
      const postcodePattern3 = /^[0-9０-９]{3}−[0-9０-９]{4}$/;
      if(this.value.length <= 6) {
        postcode_error.className = 'error';
      } else if(this.value.length = 7 ){
        if(postcodePattern1.test(this.value)){
          postcode_error.className = 'notError';
        } else if(postcodePattern.test(this.value) == "false"){
          postcode_error.className = 'error';
        }
      } else if(this.value.length = 8 ){
        if(postcodePattern1.test(this.value)){
          postcode_error.className = 'notError';
        } else if(postcodePattern.test(this.value) == "false"){
          postcode_error.className = 'error';
        }
    });
    const address = document.querySelector("#address");
    address.addEventListener("input",function(){
      const address_error = document.querySelector('#address_error');
      if(this.value.length === 0) {
        address_error.className = 'error';
      } else if(this.value.length > 0 && this.value.length <= 255 ){
        address_error.className = 'notError';
      } else if(this.value.length > 255){
        address_error.className = 'error';
      }
    });
    const building_name = document.querySelector("#building_name");
    building_name.addEventListener("input",function(){
      const building_name_error = document.querySelector('#building_name_error');
      if(this.value.length > 0 && this.value.length <= 255 ){
        building_name_error.className = 'notError';
      } else if(this.value.length > 255){
        building_name_error.className = 'error';
      }
    });
    const opinion = document.querySelector("#opinion");
    opinion.addEventListener("input",function(){
      const opinion_error = document.querySelector('#opinion_error');
      if(this.value.length === 0) {
        opinion_error.className = 'error';
      } else if(this.value.length > 0 && this.value.length <= 120 ){
        opinion_error.className = 'notError';
      } else if(this.value.length > 120){
        opinion_error.className = 'error';
      }
    });
  });
</script>
</body>
</html>