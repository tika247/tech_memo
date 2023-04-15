# Slide Toggle with Vanilla JS

`this._content` will Slide Toggle

``` JS

// 開閉のアニメーション
(this._content.style.transition =
  "height .5s cubic-bezier( 0.645, 0.045, 0.355, 1.000 )"),
  "auto" === this._content.style.height &&
    (this._content.style.height = this._content.scrollHeight + "px"),
  setTimeout(() => {
    if (this._content.style.height) {
      this._content.style.height = null;
    } else {
      this._content.style.height = this._content.scrollHeight + "px";
    }
  }, 10),
  this._content.addEventListener("transitionend", (e) => {
    if (this._btn[index].classList.contains(this._openClass)) {
      this._content.style.height = "auto";
    } else {
      this._item[index].classList.remove(this._openClass);
    }
  });


```