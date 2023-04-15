## menu Tab controll

``` js
/**
 * @description アクセシビリティ対応
 */
addA11y() {
    const event = new Event('tabControll');
    this._root.addEventListener('tabControll', this.tabControll.bind(this));
    this._root.dispatchEvent(event);
}

 /**
 * @description フォーカス移動
 * @description メニュー外の要素にフォーカス移動しようとした際に、最初→最後、最後→最初に移動させる
 */
tabControll(event) {
    // カスタムイベントのみで使用する想定
    if(event.isTrusted) return;

     const focusable = 'a[href], area[href], input, select, extarea, button, output, video, audio, object, embed, iframe, [tabindex], [onclick]';

     const focusableEl = this._root.querySelectorAll(focusable);
    const focusableElLength = focusableEl.length - 1;
    const firstEl = focusableEl.item(0);
    const lastEl = focusableEl.item(focusableElLength);

     firstEl.addEventListener('keydown', (keydownEvent) => {
        if(!this._open) return;
        if (keydownEvent.keyCode === 9 && keydownEvent.shiftKey) {
            keydownEvent.preventDefault();
            lastEl.focus();
        }
    });

     lastEl.addEventListener('keydown', (keydownEvent) => {
        if(!this._open) return;
        if (keydownEvent.keyCode === 9 && !keydownEvent.shiftKey) {
            keydownEvent.preventDefault();
            firstEl.focus();
        }
    });
}

```