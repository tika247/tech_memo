## responsive Toggle function

``` js

  class Toggle {
    /**
     * @param {HTMLElement} root
     * @param {number} i
     * @param {object} [options]
     */
    constructor(root, i, options = {}) {
      const defaultOptions = {
        btnClass: 'fn-products-toggle__btn',
        contentClass: 'fn-products-toggle__content',
        altClass: 'fn-products-toggle__alt',
        idPrefix: 'toggle-',
        addRole: false,
        spOnly: false,
      };

      this._o = Object.assign(defaultOptions, options);

      this._root = root;
      this._id = `${this._o.idPrefix}${i + 1}`;
      this._btn = this._root.querySelector(`.${this._o.btnClass}`);
      this._content = this._root.querySelector(`.${this._o.contentClass}`);
      this._alt = this._root.querySelector(`.${this._o.altClass}`);
      this._openClass = 'is-open';
      this._altText = {
        open: options.altOpen || '開く',
        close: options.altClose || '閉じる',
      };
      this._contentHeight = this._content.clientHeight;
      this._open = false;

      this._binded = {
        'toggle': null,
        'keydown': null
      }
    }
    /**
     * 初期化
     * @returns {void}
     */
    async init() {
      this.switching();

      // sp時のみの場合
      if (this._o.spOnly) {
        if (!(win.innerWidth <= _mq)) {
          return;
        }
      }

      await this.setup();
      this.addEvent();
    }
    /**
     * 設定
     * @returns {void}
     */
    setup() {
      this._content.id = this._id;
      this._btn.setAttribute('aria-controls', this._id);
      this._btn.setAttribute('aria-expanded', String(this._open));

      // bindしたeventを格納しておく
      this._binded.toggle = this.toggle.bind(this);
      this._binded.keydown = this.addKeyDownEvent.bind(this);

      // ボタン以外要素の場合
      if (this._o.addRole) {
        this._btn.setAttribute('role', 'button');
        this._btn.setAttribute('tabindex', '0');
      }
    }
    /**
     * イベント追加
     * @returns {void}
     */
    addEvent() {
      this._btn.addEventListener('click', this._binded.toggle);

      // ボタン以外要素の場合
      if (this._o.addRole) {
        this._btn.addEventListener('keydown', this._binded.keydown);
      }
    }
    /**
     * keydown時の処理
     * @returns {void}
     */
    addKeyDownEvent(e) {
        if (e.key === ' ' || e.key === 'Enter' || e.key === 'Spacebar') {
          e.preventDefault();
          this.toggle();
        }
    }
    /**
     * トグルの挙動制御
     * @returns {void}
     */
    toggle() {
      if (this._alt) {
        this._alt.textContent = this._open
          ? this._altText.open
          : this._altText.close;
      }
      this._open = !this._open;
      this._btn.setAttribute('aria-expanded', String(this._open));

      // 開閉のアニメーション
      (this._content.style.transition =
        'height .5s cubic-bezier( 0.645, 0.045, 0.355, 1.000 )'),
        'auto' === this._content.style.height &&
        (this._content.style.height = this._content.scrollHeight + 'px'),
        setTimeout(() => {
          if (this._content.style.height) {
            this._content.style.height = null;
          } else {
            this._content.style.height = this._content.scrollHeight + 'px';
          }
        }, 10),
        this._content.addEventListener('transitionend', (e) => {
          this._root.classList.contains('is-open') &&
            (this._content.style.height = 'auto');
        });

      this._root.classList.toggle(this._openClass);
    }
    /**
     * 再生成
     * @returns {void}
     */
    async regenerate() {
      await this.setup();
      this.addEvent();
    }
    /**
     * setup()の処理を初期化
     * @returns {void}
     */
    destroySetup() {
      this._content.id = null;
      this._btn.removeAttribute('aria-controls');
      this._btn.removeAttribute('aria-expanded');

      // bindしたeventを格納しておく
      this._binded.toggle = null;
      this._binded.keydown = null;

      // ボタン以外要素の場合
      if (this._o.addRole) {
        this._btn.removeAttribute('role');
        this._btn.removeAttribute('tabindex');
      }
    }
    /**
     * addEvent初期化
     * @returns {void}
     */
    destroyAddEvent() {
      this._btn.removeEventListener('click', this._binded.toggle);

      // ボタン以外要素の場合
      if (this._o.addRole) {
        this._btn.removeEventListener('keydown', this._binded.keydown);
      }
    }
    /**
     * destroy
     * @returns {void}
     */
    async destroy() {
      await this.destroyAddEvent();
      this.destroySetup();
    }
    /**
     * メディアクエリー横断時
     * @returns {void}
     */
    switching() {
      const mediaQueryList = win.matchMedia(`(max-width: ${_mq}px)`);

      const listener = () => {
        if (mediaQueryList.matches) {
          this.regenerate();
        } else if (!mediaQueryList.matches) {
          this.destroy();
      }
      }

      mediaQueryList.addEventListener("change", listener);
    }
  }
```