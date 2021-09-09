let x;
let y;
let r;

//-------------------------
// Проверка перед отправкой
//--------------------------
function checkAndSend(){

  var boolCheck = false;

  y=$('#yValue').val().replace(",", ".");
  if (!isNaN(y) &&  y!=='' && y>-3 && y<5)
  {
    y = parseFloat(y);

    r=$("input[name='R']:checked").val();

    if (!isNaN(r))
    {
      r = parseInt(r); 

      if (isNaN(x))
        showMessageBox("Невыбрано значение X! Попробуйте заново!");
      else boolCheck=true;

    } else showMessageBox("Невыбрано значение R! Попробуйте заново!");
  } else showMessageBox("Неверное значение Y! Попробуйте заново!");

  return boolCheck;
}




//----------------------------
// Вывод значения X
// Присвоение X к x в скрипте
//----------------------------

window.onload = function() {
  function strPad() {
   document.getElementById("outputX").hidden=false;
   $('#outputX').text('Вы выбрали X=' + this.value);
   document.getElementById('someInputId').value = this.value;
 }
 var bt = document.getElementsByClassName("xValue");
 for (var i = 0; i < bt.length; i++) {
  bt[i].onclick = strPad;
}
$('#group input:checkbox').click(function(){
  if ($(this).is(':checked')) {
   $('#group input:checkbox').not(this).prop('checked', false);
 }
});
$("input[type='button']").click(function() {
  x=parseFloat($(this).val());
});
}
function hide() {
  document.getElementById("outputX").hidden=true;
}


//----------------------
// Окно вывода ошибок
//----------------------
function setCenter(){
  let top=$(window).scrollTop();
  let left=(window.innerWidth-$('#MessageBox').width())/2+$(document).scrollLeft();
  $('#MessageBox').css('position','absolute')
  .css({'top':top+'px','left':left+'px'});
}
function showMessageBox(text){

  if($('#MessageBox').length===0){
    addMessageBox();
  }   
  /* позиционируем блок по центру */
  setCenter();
  /* назначаем обработчик для события scroll */
  $(window).bind('scroll',setCenter);
  /* автоматически убираем блок через 1 секунду */
  window.setTimeout(function(){
    $('#MessageBox').fadeOut('slow');
    $(window).unbind('scroll',setCenter);
  },1000);
  $('#MessageBox').text(text).show();

}
function addMessageBox(){
  $('<div></div>')
  /* присваиваем блоку уникальный ID */
  .attr('id','MessageBox')
  /* определяем внешний вид (в рабочем варианте это лучше сделать во внешнем css файле) */
  .css({'border':'1px solid #ccc','padding':'5px 10px','background':'#fff'})
  /* не показываем пока нет надобности */
  .hide()
  /* добавляем на сайт */
  .appendTo('body');
}