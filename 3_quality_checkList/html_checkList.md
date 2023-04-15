# 設計・検品時の確認事項

## セマンティック

- h1、h2、h3、h4。正しい見出しレベルであるか

- `__dummy__` や `ダミーテキスト` が残っていないか

- 装飾用の疑似要素の前に、説明分をspan要素で設置してスクリーンリーダー対策

- transitionある表示・表示エリアは `transition: opacity .3s ease-in-out, visibility .3s ease-in-out;` で `visibility` と `opacity` の2つのプロパティによって制御

- モーダルは `dialog` 要素を使う → tabIndexやWAI-ARIAで制御していた部分をブラウザで行ってくれるので、JSで制御する必要がなくなる

## アクセシビリティ

### WAI-ARIA

- aria-controls, id, aria-controls, aria-hiddenを正しく使う
https://developer.mozilla.org/ja/docs/Web/Accessibility/ARIA/Roles/Tab_Role

- `<noscript>` 要素にjs機能OFF時のcssを読み込む

### タブキーによるfocus移動

- Tabキー操作正しくできるか（モーダル、トグル開閉を考慮しているか）

- `HTMLElement.focus()` を正しく使用

### キー操作

- モーダル：「Escape」キーで閉じられる

### aria-currentの使い分け

- パンくずの現在位置
    - aria-current="location"
- グロナビ
    - aria-current="page" 

https://developer.mozilla.org/en-US/docs/Web/API/Element/ariaCurrent

## label要素とselect要素の関連付け

https://accessible-usable.net/2013/04/entry_130407.html