//ここに追加したいJavaScript、jQueryを記入してください。
//このJavaScriptファイルは、親テーマのJavaScriptファイルのあとに呼び出されます。
//JavaScriptやjQueryで親テーマのjavascript.jsに加えて関数を記入したい時に使用します。

const scroll_to_top = document.querySelector('#scroll-to-top');

scroll_to_top.addEventListener('click', () => {
  window.scroll({top:0,behavior: 'smooth'});
});

