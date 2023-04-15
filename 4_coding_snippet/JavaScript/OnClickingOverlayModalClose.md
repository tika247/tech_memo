## OnClickingOverlayModalClose

```js

this._root.addEventListener('click', (e) => {
    this.closeByBackDropClick(e);
});

```

* this._root = dialog element


``` js

closeByBackDropClick(e) {
  const rect = e.currentTarget.getBoundingClientRect();
  const isInDialog=(rect.top <= e.clientY && e.clientY <= rect.top + rect.height
    && rect.left <= e.clientX && e.clientX <= rect.left + rect.width);
    if (!isInDialog) {
      e.currentTarget.close();
    }
    _BODY.style.overflow = 'visible';
}

```