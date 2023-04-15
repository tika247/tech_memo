# matchMedia

``` js

((win, doc) => {
    const MQ = win.matchMedia('(max-width: 768px)');

    class Klass {
        init() {
            if (MQ.matches) {
                this.createSomething();
            }
            this.onMatch();
        }
        /**
         * @description 生成
         */
        createSomething() {
            // 生成
        }
        /**
         * @description 機能の切り替え
         */
        switching() {
            if (MQ.matches) {
                this.recreate();
            } else if (!MQ.matches) {
                this.destroy();
            }
        }
        /**
         * @description 再生成
         */
        recreate() {
            this.createSomething();
        }

        /**
         * @description 要素削除
         */
        destroy() {
            this.destroySomething();
        }

        /**
         * @description 要素削除
         */
        destroySomething() {
            // 削除
        }

        /**
         * @description メディアクエリの監視
         */
        onMatch() {
            MQ.addListener(() => {
                this.switching();
            });
        }
    }
})(window, document);

```