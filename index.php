<?php
  include_once("simple_html_dom.php");
  $html = file_get_html('https://xskt.com.vn/xstt4'); 
  $thanTai = $html->find('.megaresult', 0);

  $html = file_get_html('https://xskt.com.vn/xsdt123');
  $dienToan1 = $html->find('.trunggiai.dtmb td', 1);
  $dienToan2 = $html->find('.trunggiai.dtmb td', 3);
  $dienToan3 = $html->find('.trunggiai.dtmb td', 5);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" type="x-icon"
    href="https://images.vexels.com/media/users/3/252226/isolated/lists/9cea469f142e76226501cc6a1999d898-rainbow-beautiful-flat.png">
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Con trai siêu đẹp zai</title>
</head>

<body>
  <div class="boxed__container">
    <div class="boxed--1">
      <div class="header">
        <div class="header--1">
          <b><u>Quý khách lưu ý:</u></b> Để tránh sai sót đề nghị đối chiếu kỹ
          KQ này với KQ được đăng trên tivi hoặc báo chí trước khi trả thưởng
          cho khách. Cảm ơn Quý khách!
        </div>
        <div class="header--2">
          <div class="dienToan">
            <span class="dienToan__title">Xổ Số Điện Toán: </span>
            <span class="data__dienToan">
              <?php
                                echo "$dienToan1 - $dienToan2 - $dienToan3";
                            ?>
            </span>
          </div>
          <div class="thanTai">
            <span class="thanTai__title">Thần Tài: </span>
            <span class="data__thanTai"><?=$thanTai?></span>
          </div>
        </div>
      </div>

      <div class="body">
        <div class="body--1">
          <div class="dacBiet">
            <span class="dacBiet__title">Đặc Biệt:</span>
            <span id="data__dacBiet" class="data__body--1"></span>
          </div>
        </div>
        <div class="body--2">
          <!-- row1 -->
          <div class="body__item body__name">Giải nhất:</div>
          <div class="body__item data__body--1"></div>
          <div class="body__item"></div>
          <div class="body__item"></div>
          <div class="body__item"></div>
          <div class="body__item"></div>
          <!-- row2 -->
          <div class="body__item body__name">Giải nhì:</div>
          <div class="body__item data__body--1"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--1"></div>
          <div class="body__item"></div>
          <div class="body__item"></div>
          <!-- row3 -->
          <div class="body__item body__name">Giải ba:</div>
          <div class="body__item data__body--1"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--1"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--1"></div>
          <!-- row4 -->
          <div class="body__item"></div>
          <div class="body__item data__body--1"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--1"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--1"></div>
          <!-- row5 -->
          <div class="body__item body__name">Giải tư:</div>
          <div class="body__item data__body--1"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--1"></div>
          <div class="body__item"></div>
          <div class="body__item"></div>
          <!-- row6 -->
          <div class="body__item"></div>
          <div class="body__item data__body--1"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--1"></div>
          <div class="body__item"></div>
          <div class="body__item"></div>
          <!-- row7 -->
          <div class="body__item body__name">Giải năm:</div>
          <div class="body__item data__body--1"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--1"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--1"></div>
          <!-- row8 -->
          <div class="body__item"></div>
          <div class="body__item data__body--1"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--1"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--1"></div>
          <!-- row9 -->
          <div class="body__item body__name">Giải sáu:</div>
          <div class="body__item data__body--1"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--1"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--1"></div>
          <!-- row10 -->
          <div class="body__item body__name">Giải bảy:</div>
          <div class="body__item" style="justify-content: right">
            <span class="data__body--1" style="margin-right: 0"></span>
            <span class="space">-</span>
            <span class="data__body--1" style="margin-left: 10px"></span>
          </div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--1"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--1"></div>
        </div>
      </div>

      <div class="footer">
        <div class="footer--1">
          <table border="1">
            <thead>
              <tr>
                <th class="title__table">Đầu</th>
                <th class="cols__title">0</th>
                <th class="cols__title">1</th>
                <th class="cols__title">2</th>
                <th class="cols__title">3</th>
                <th class="cols__title">4</th>
                <th class="cols__title">5</th>
                <th class="cols__title">6</th>
                <th class="cols__title">7</th>
                <th class="cols__title">8</th>
                <th class="cols__title">9</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="first__cols">Lưu ý so lại cả trên và dưới</th>
                <th class="cols">
                  <ul id="data__0--1"></ul>
                </th>
                <th class="cols">
                  <ul id="data__1--1"></ul>
                </th>
                <th class="cols">
                  <ul id="data__2--1"></ul>
                </th>
                <th class="cols">
                  <ul id="data__3--1"></ul>
                </th>
                <th class="cols">
                  <ul id="data__4--1"></ul>
                </th>
                <th class="cols">
                  <ul id="data__5--1"></ul>
                </th>
                <th class="cols">
                  <ul id="data__6--1"></ul>
                </th>
                <th class="cols">
                  <ul id="data__7--1"></ul>
                </th>
                <th class="cols">
                  <ul id="data__8--1"></ul>
                </th>
                <th class="cols">
                  <ul id="data__9--1"></ul>
                </th>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="footer--2" id="data__footer--1"></div>
      </div>
    </div>
    <div class="boxed--2">
      <div class="header">
        <div class="header--1">
          <b><u>Quý khách lưu ý:</u></b> Để tránh sai sót đề nghị đối chiếu kỹ
          KQ này với KQ được đăng trên tivi hoặc báo chí trước khi trả thưởng
          cho khách. Cảm ơn Quý khách!
        </div>
        <div class="header--2">
          <div class="dienToan">
            <span class="dienToan__title">Xổ Số Điện Toán: </span>
            <span class="data__dienToan">
              <?php
                                echo "$dienToan1 - $dienToan2 - $dienToan3";
                            ?>
            </span>
          </div>
          <div class="thanTai">
            <span class="thanTai__title">Thần Tài: </span>
            <span class="data__thanTai"><?=$thanTai?></span>
          </div>
        </div>
      </div>

      <div class="body">
        <div class="body--1">
          <div class="dacBiet">
            <span class="dacBiet__title">Đặc Biệt:</span>
            <span id="data__dacBiet" class="data__body--2"></span>
          </div>
        </div>
        <div class="body--2">
          <!-- row1 -->
          <div class="body__item body__name">Giải nhất:</div>
          <div class="body__item data__body--2"></div>
          <div class="body__item"></div>
          <div class="body__item"></div>
          <div class="body__item"></div>
          <div class="body__item"></div>
          <!-- row2 -->
          <div class="body__item body__name">Giải nhì:</div>
          <div class="body__item data__body--2"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--2"></div>
          <div class="body__item"></div>
          <div class="body__item"></div>
          <!-- row3 -->
          <div class="body__item body__name">Giải ba:</div>
          <div class="body__item data__body--2"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--2"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--2"></div>
          <!-- row4 -->
          <div class="body__item"></div>
          <div class="body__item data__body--2"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--2"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--2"></div>
          <!-- row5 -->
          <div class="body__item body__name">Giải tư:</div>
          <div class="body__item data__body--2"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--2"></div>
          <div class="body__item"></div>
          <div class="body__item"></div>
          <!-- row6 -->
          <div class="body__item"></div>
          <div class="body__item data__body--2"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--2"></div>
          <div class="body__item"></div>
          <div class="body__item"></div>
          <!-- row7 -->
          <div class="body__item body__name">Giải năm:</div>
          <div class="body__item data__body--2"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--2"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--2"></div>
          <!-- row8 -->
          <div class="body__item"></div>
          <div class="body__item data__body--2"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--2"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--2"></div>
          <!-- row9 -->
          <div class="body__item body__name">Giải sáu:</div>
          <div class="body__item data__body--2"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--2"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--2"></div>
          <!-- row10 -->
          <div class="body__item body__name">Giải bảy:</div>
          <div class="body__item" style="justify-content: right">
            <span class="data__body--2" style="margin-right: 0"></span>
            <span class="space">-</span>
            <span class="data__body--2" style="margin-left: 10px"></span>
          </div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--2"></div>
          <div class="body__item space">-</div>
          <div class="body__item data__body--2"></div>
        </div>
      </div>

      <div class="footer">
        <div class="footer--1">
          <table border="1">
            <thead>
              <tr>
                <th class="title__table">Đầu</th>
                <th class="cols__title">0</th>
                <th class="cols__title">1</th>
                <th class="cols__title">2</th>
                <th class="cols__title">3</th>
                <th class="cols__title">4</th>
                <th class="cols__title">5</th>
                <th class="cols__title">6</th>
                <th class="cols__title">7</th>
                <th class="cols__title">8</th>
                <th class="cols__title">9</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="first__cols">Lưu ý so lại cả trên và dưới</th>
                <th class="cols">
                  <ul id="data__0--2"></ul>
                </th>
                <th class="cols">
                  <ul id="data__1--2"></ul>
                </th>
                <th class="cols">
                  <ul id="data__2--2"></ul>
                </th>
                <th class="cols">
                  <ul id="data__3--2"></ul>
                </th>
                <th class="cols">
                  <ul id="data__4--2"></ul>
                </th>
                <th class="cols">
                  <ul id="data__5--2"></ul>
                </th>
                <th class="cols">
                  <ul id="data__6--2"></ul>
                </th>
                <th class="cols">
                  <ul id="data__7--2"></ul>
                </th>
                <th class="cols">
                  <ul id="data__8--2"></ul>
                </th>
                <th class="cols">
                  <ul id="data__9--2"></ul>
                </th>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="footer--2" id="data__footer--2"></div>
      </div>
    </div>
  </div>
  <div class="custom__boxed--container">
    <div class="custom custom__boxed">
      <form id="form_custom">
        <div class="form__group">
          <div>Điền cột cần sửa:</div>
          <input type="number" class="form__control" id="valueInput"
            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
            maxlength="1" />
          <button class="btn2">OK</button>
        </div>
      </form>
    </div>
  </div>
</body>
<script src="app.js"></script>
<script>
//nút submit không load lại trang
var formElement = document.querySelector("#form_custom");
var valueInput = document.querySelector("input#valueInput");
formElement.addEventListener("submit", function(e) {
  e.preventDefault();
  value = valueInput.value;
  valueInput.value = "";

  //Thêm cột
  let titleCols = document.querySelectorAll("th.cols__title");
  let dataCols = document.querySelectorAll("th.cols");
  let ulTag1 = document.querySelector(`#data__${value}--1`)
  let ulTag2 = document.querySelector(`#data__${value}--2`)

  titleCols[value].setAttribute("colspan", "2");
  titleCols[parseInt(value) + 10].setAttribute("colspan", "2");

  valueOfCol = dataCols[value].querySelectorAll("li");

  arr1 = [];
  arr2 = [];
  counter = 0;
  valueOfCol.forEach(function(item, index) {
    if (counter > 6) {
      arr2.push(item.innerText);
    } else {
      arr1.push(item.innerText);
    }
    counter++;
  })

  ulTag1.classList.add('new1')
  ulTag2.classList.add('new1')
  ulTag1.innerHTML = ""
  ulTag2.innerHTML = ""


  html1 = `<th class="cols">
                <ul class="new2"></ul>
            </th>`;

  html2 = `<th class="cols">
                <ul class="new2"></ul>
            </th>`;

  dataCols[value].insertAdjacentHTML("afterend", html1);
  dataCols[parseInt(value) + 10]
    .insertAdjacentHTML("afterend", html2);

  arr1.forEach(function(item) {
    newCol1 = document.querySelectorAll(".new1")
    newCol1[0].innerHTML += `<li>${item}</li>`;
    newCol1[1].innerHTML += `<li>${item}</li>`;
  });

  arr2.forEach(function(item) {
    newCol2 = document.querySelectorAll(".new2")
    newCol2[0].innerHTML += `<li>${item}</li>`;
    newCol2[1].innerHTML += `<li>${item}</li>`;
  });
});
</script>

</html>